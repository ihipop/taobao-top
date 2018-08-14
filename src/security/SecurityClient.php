<?php

namespace ihipop\TaobaoTop\security;

use Exception;
use ihipop\TaobaoTop\client\TopClient;
use ihipop\TaobaoTop\requests\taobao\GetTopSecret;

class SecurityClient
{

    /**
     * @var  $topClient \ihipop\TaobaoTop\client\TopClient
     */
    private $topClient;
    private $secureRandomNum;
    // randomNumber 为安全码，不是随机数，需要在数据加密菜单，店铺加密模块中 点击生成。已经生成的应用可以在流量证书上方查看到。
    // 见 http://bigdata.taobao.com/doc.htm?docId=106214&docType=1
    private $securityUtil;
    /**
     * @var $cacheClient \Psr\Cache\CacheItemPoolInterface
     */
    private $cacheClient;

    function __construct(TopClient $client, $secureRandomNum)
    {

        $this->topClient       = $client;
        $this->secureRandomNum = $secureRandomNum;

        $this->securityUtil = new SecurityUtil();
    }

    /**
     * 设置缓存处理器
     */
    function setCacheClient(\Psr\Cache\CacheItemPoolInterface $cache)
    {
        $this->cacheClient = $cache;

        return $this;
    }

    /**
     * 密文检索,在秘钥升级场景下兼容查询
     *
     * @see    #search(String, String, String, Long)
     * @return
     */
    function searchPrevious($data, $type, $session = null)
    {
        return $this->searchInner($data, $type, $session, -1);
    }

    /**
     * 密文检索（每个用户单独分配秘钥）
     *
     * @see    #search(String, String, String, Long)
     * @return
     */
    function search($data, $type, $session = null)
    {
        return $this->searchInner($data, $type, $session, null);
    }

    /**
     * 密文检索。 手机号码格式：$base64(H-MAC(phone后4位))$ simple格式：base64(H-MAC(滑窗))
     *
     * @param data
     *            明文数据
     * @param type
     *            加密字段类型(例如：simple\phone)
     * @param session
     *            用户身份,用户级加密必填
     * @param version
     *            秘钥历史版本
     *
     * @return
     */
    function searchInner($data, $type, $session, $version)
    {
        if (empty($data) || empty($type)) {
            return $data;
        }

        $secretContext = $this->getTopSecretWithCache($session, $version);

        if (empty($secretContext) || empty($secretContext->secret)) {
            return $data;
        }

        return $this->securityUtil->search($data, $type, $secretContext);
    }

    /**
     * 单条数据解密,使用appkey级别公钥
     * 非加密数据直接返回原文
     */
    function decryptPublic($data, $type)
    {
        return $this->decrypt($data, $type, null);
    }

    /**
     * 单条数据解密
     * 非加密数据直接返回原文
     */
    function decrypt($data, $type, $session)
    {
        if (empty($data) || empty($type)) {
            return $data;
        }
        $secretData = $this->securityUtil->getSecretDataByType($data, $type);
        if (empty($secretData)) {
            return $data;
        }

        if ($this->securityUtil->isPublicData($data, $type)) {
            $secretContext = $this->getTopSecretWithCache(null, $secretData->secretVersion);
        } else {
            $secretContext = $this->getTopSecretWithCache($session, $secretData->secretVersion);
        }

        return $this->securityUtil->decrypt($data, $type, $secretContext);
    }

    /**
     * 多条数据解密，使用appkey级别公钥
     * 非加密数据直接返回原文
     */
    function decryptBatchPublic($array, $type)
    {
        if (empty($array) || empty($type)) {
            return null;
        }

        $result = [];
        foreach ($array as $value) {
            $secretData    = $this->securityUtil->getSecretDataByType($value, $type);
            $secretContext = $this->getTopSecretWithCache(null, $secretData->secretVersion);

            if (empty($secretData)) {
                $result[$value] = $value;
            } else {
                $result[$value] = $this->securityUtil->decrypt($value, $type, $secretContext);
                $this->incrCounter(2, $type, $secretContext, true);
            }

            $this->flushCounter($secretContext);
        }

        return $result;
    }

    /**
     * 多条数据解密，必须是同一个type和用户,返回结果是 KV结果
     * 非加密数据直接返回原文
     */
    function decryptBatch($array, $type, $session)
    {
        if (empty($array) || empty($type)) {
            return null;
        }

        $result = [];
        foreach ($array as $value) {
            $secretData = $this->securityUtil->getSecretDataByType($value, $type);
            if (empty($secretData)) {
                $result[$value] = $value;
            } elseif ($this->securityUtil->isPublicData($value, $type)) {
                $appContext     = $this->getTopSecretWithCache(null, $secretData->secretVersion);
                $result[$value] = $this->securityUtil->decrypt($value, $type, $appContext);
                $this->incrCounter(2, $type, $appContext, false);
                $this->flushCounter($appContext);
            } else {
                $secretContext  = $this->getTopSecretWithCache($session, $secretData->secretVersion);
                $result[$value] = $this->securityUtil->decrypt($value, $type, $secretContext);
                $this->incrCounter(2, $type, $secretContext, false);
                $this->flushCounter($secretContext);
            }
        }

        return $result;
    }

    /**
     * 使用上一版本秘钥解密，app级别公钥
     */
    function decryptPreviousPublic($data, $type)
    {
        $secretContext = $this->getTopSecretWithCache(null, -1);

        return $this->securityUtil->decrypt($data, $type, $secretContext);
    }

    /**
     * 使用上一版本秘钥解密，一般只用于更新秘钥
     */
    function decryptPrevious($data, $type, $session)
    {
        if ($this->securityUtil->isPublicData($data, $type)) {
            $secretContext = $this->getTopSecretWithCache(null, -1);
        } else {
            $secretContext = $this->getTopSecretWithCache($session, -1);
        }

        return $this->securityUtil->decrypt($data, $type, $secretContext);
    }

    /**
     * 加密单条数据,使用app级别公钥
     */
    function encryptPublic($data, $type, $version = null)
    {
        return $this->encrypt($data, $type, null, $version);
    }

    /**
     * 加密单条数据
     */
    function encrypt($data, $type, $session = null, $version = null)
    {
        if (empty($data) || empty($type)) {
            return null;
        }
        $secretContext = $this->getTopSecretWithCache($session, null);
        $this->incrCounter(1, $type, $secretContext, true);

        return $this->securityUtil->encrypt($data, $type, $version, $secretContext);
    }

    /**
     * 加密多条数据，使用app级别公钥
     */
    function encryptBatchPublic($array, $type, $version = null)
    {
        if (empty($array) || empty($type)) {
            return null;
        }
        $secretContext = $this->getTopSecretWithCache(null, null);
        $result        = [];
        foreach ($array as $value) {
            $result[$value] = $this->securityUtil->encrypt($value, $type, $version, $secretContext);
            $this->incrCounter(1, $type, $secretContext, false);
        }
        $this->flushCounter($secretContext);

        return $result;
    }

    /**
     * 加密多条数据，必须是同一个type和用户,返回结果是 KV结果
     */
    function encryptBatch($array, $type, $session, $version = null)
    {
        if (empty($array) || empty($type)) {
            return null;
        }
        $secretContext = $this->getTopSecretWithCache($session, null);
        $result        = [];
        foreach ($array as $value) {
            $result[$value] = $this->securityUtil->encrypt($value, $type, $version, $secretContext);
            $this->incrCounter(1, $type, $secretContext, false);
        }
        $this->flushCounter($secretContext);

        return $result;
    }

    public function flushCounter($x)
    {
        return false;
    }

    /**
     * 使用上一版本秘钥加密，使用app级别公钥
     */
    function encryptPreviousPublic($data, $type)
    {
        $secretContext = $this->getTopSecretWithCache(null, -1);
        $this->incrCounter(1, $type, $secretContext, true);

        return $this->securityUtil->encrypt($data, $type, $secretContext->version, $secretContext);
    }

    /**
     * 使用上一版本秘钥加密，一般只用于更新秘钥
     */
    function encryptPrevious($data, $type, $session)
    {
        $secretContext = $this->getTopSecretWithCache($session, -1);
        $this->incrCounter(1, $type, $secretContext, true);

        return $this->securityUtil->encrypt($data, $type, -1, $secretContext);
    }

    /**
     * 根据session生成秘钥
     */
    function initSecret($session)
    {
        return $this->getTopSecretWithCache($session, null);
    }

    function buildCacheKey($session, $secretVersion)
    {
        if (empty($session)) {
            return $this->topClient->getAppKey();
        }
        if (empty($secretVersion)) {
            return $session;
        }

        return 'top.cache.security.' . $session . '_' . $secretVersion . '_' . md5(SecretContext::class);
    }

    function generateCustomerSession($userId)
    {
        return '_' . $userId;
    }

    /**
     * 判断是否是已加密的数据
     */
    function isEncryptData($data, $type)
    {
        if (empty($data) || empty($type)) {
            return false;
        }

        return $this->securityUtil->isEncryptData($data, $type);
    }

    /**
     * 判断是否是已加密的数据，数据必须是同一个类型
     */
    function isEncryptDataArray($array, $type)
    {
        if (empty($array) || empty($type)) {
            return false;
        }

        return $this->securityUtil->isEncryptDataArray($array, $type);
    }

    /**
     * 判断数组中的数据是否存在密文，存在任何一个返回true,否则false
     */
    function isPartEncryptData($array, $type)
    {
        if (empty($array) || empty($type)) {
            return false;
        }

        return $this->securityUtil->isPartEncryptData($array, $type);
    }

    /**
     * 获取秘钥，使用缓存
     */
    function getTopSecretWithCache($session, $secretVersion)
    {
        if ($this->cacheClient) {
            $time      = time();
            $cacheKey  = $this->buildCacheKey($session, $secretVersion);
            $cacheItem = $this->cacheClient->getItem($cacheKey);
            /**
             * @var  $secretContext \ihipop\TaobaoTop\security\SecretContext
             */
            $secretContext = $cacheItem->get();

            if ($secretContext && $secretContext->invalidTime > $time) {
                return $secretContext;
            }
        }

        $secretContext = $this->getTopSecret($session, $secretVersion);

        if ($this->cacheClient) {
            $secretContext->cacheKey = $cacheKey;
            $cacheItem->set($secretContext)->expiresAfter($secretContext->invalidTime - time());
            $this->cacheClient->save($cacheItem);
        }

        return $secretContext;
    }

    function incrCounter($op, $type, $secretContext, $flush)
    {
        return;
        if ($op == 1) {//加密
            switch ($type) {
                case 'nick':
                    $secretContext->encryptNickNum++;
                    break;
                case 'simple':
                    $secretContext->encryptSimpleNum++;
                    break;
                case 'receiver_name':
                    $secretContext->encryptReceiverNameNum++;
                    break;
                case 'phone':
                    $secretContext->encryptPhoneNum++;
                    break;
                default:
                    break;
            }
        } elseif ($op == 2) {//解密
            switch ($type) {
                case 'nick':
                    $secretContext->decryptNickNum++;
                    break;
                case 'simple':
                    $secretContext->decryptSimpleNum++;
                    break;
                case 'receiver_name':
                    $secretContext->decryptReceiverNameNum++;
                    break;
                case 'phone':
                    $secretContext->decryptPhoneNum++;
                    break;
                default:
                    break;
            }
        } else {
            switch ($type) {//搜索
                case 'nick':
                    $secretContext->searchNickNum++;
                    break;
                case 'simple':
                    $secretContext->searchSimpleNum++;
                    break;
                case 'receiver_name':
                    $secretContext->searchReceiverNameNum++;
                    break;
                case 'phone':
                    $secretContext->searchPhoneNum++;
                    break;
                default:
                    break;
            }
        }
    }

    function clearReport($secretContext)
    {
        $secretContext->encryptPhoneNum        = 0;
        $secretContext->encryptNickNum         = 0;
        $secretContext->encryptReceiverNameNum = 0;
        $secretContext->encryptSimpleNum       = 0;
        $secretContext->encryptSearchNum       = 0;
        $secretContext->decryptPhoneNum        = 0;
        $secretContext->decryptNickNum         = 0;
        $secretContext->decryptReceiverNameNum = 0;
        $secretContext->decryptSimpleNum       = 0;
        $secretContext->decryptSearchNum       = 0;
        $secretContext->searchPhoneNum         = 0;
        $secretContext->searchNickNum          = 0;
        $secretContext->searchReceiverNameNum  = 0;
        $secretContext->searchSimpleNum        = 0;
        $secretContext->searchSearchNum        = 0;
        $secretContext->lastUploadTime         = time();
    }

    function getTopSecret($session, $secretVersion)
    {
        $request = new GetTopSecret();
        $request->setRandomNum($this->secureRandomNum);

        if ($secretVersion) {//原SDK自带的逻辑 不知道干嘛的
            if (intval($secretVersion) < 0 || $session == null) {
                $session       = null;
                $secretVersion = -1 * intval($secretVersion < 0);
            }
            $request->setSecretVersion($secretVersion);
        }

        if ($session != null && $session[0] == '_') {  //有用户id的情况下，使用用户id，否则使用用户的授权码
            $request->setCustomerUserId(substr($session, 1));
        } else {
            $request->setSession($session);
        }

        $now      = time();
        $response = $this->topClient->execute($request);
        if ((string)($response['code'] ?? 0) != (string)0) {
            throw new Exception($response['msg']);
        }

        $secretContext                 = new SecretContext();
        $secretContext->maxInvalidTime = $now + (int)($response['max_interval']);//容灾用 可能是到达 interval 时间后还能使用的时间
        $secretContext->invalidTime    = $now + (int)($response['interval']);
        $secretContext->secret         = (string)($response['secret']);
        $secretContext->session        = $session;
        if (!empty($response['app_config'])) {
            $appConfig = json_decode($response['app_config'], true);
            if ($appConfig) {
                $secretContext->appConfig = $appConfig;
            }
        }

        if (empty($session)) {//使用$session获取的密钥 版本号应该是负数？
            $secretContext->secretVersion = -1 * (int)($response['secret_version']);
        } else {
            $secretContext->secretVersion = (int)($response['secret_version']);
        }

        return $secretContext;
    }
}
