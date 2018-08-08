<?php

namespace ihipop\taobaoTop;

use ihipop\taobaoTop\utility\Str;

class TopClient
{

    public    $appKey;
    public    $appSecret;
    protected $httpGatewayUri        = "http://gw.api.taobao.com/router/rest";
    protected $httpsGatewayUri       = "https://eco.taobao.com/router/rest";
    protected $httpHostnameOverride  = false;
    protected $httpsHostnameOverride = false;
    public    $forceHttps            = false;
    public    $format                = "json";
    public    $connectTimeout;
    public    $readTimeout;
    /** 是否打开入参check**/
    public    $checkRequest = true;
    protected $signMethod   = "md5";
    protected $apiVersion   = "2.0";
    protected $sdkVersion   = "top-sdk-php-20151012";
    public    $userAgent    = 'top-sdk-php';
    //PSR7 兼容的 HTTP client
    /** @var $httpClient \GuzzleHttp\Client */
    public $httpClient;

    public function __construct($httpClient)
    {
        $this->httpClient = $httpClient;
        // 执行初始化事件
        $this->onInitialize();
    }

    public function onInitialize()
    {

    }

    /**
     * 支持使用本地映射的时候 使用 如下代码自定义网关API/HOST头 目前不设置host没影响 但是不代表以后没影响
     * $client->setGatewayUri('http://127.0.0.1:8899/router/rest#gw.api.taobao.com');
     * $client->setGatewayUri('https://127.0.0.1:7788/router/rest#eco.taobao.com');
     *
     * @param      $uri
     * @param null $secure
     *
     * @return $this
     */
    public function setGatewayUri($uri, $secure = null)
    {
        if ($secure === null) {
            $uri    = strtolower($uri);
            $secure = Str::startsWith($uri, 'https') ?: false;
        }
        if ($secure == false) {
            $gateWay = 'http';
        } elseif ($secure == true) {
            $gateWay = 'https';
        }
        $hashTag = strstr($uri, '#');
        if ($hashTag !== false) {
            $this->{$gateWay . 'HostnameOverride'} = str_replace('#', '', $hashTag);
            $uri                                   = str_replace($hashTag, '', $uri);
        }
        $this->{$gateWay . 'GatewayUri'} = $uri;

        return $this;
    }

    public function getAppKey()
    {

        return $this->appKey;
    }

    protected function signPara($params)
    {
        ksort($params);

        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if (is_string($v) && "@" != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;

        return strtoupper(md5($stringToBeSigned));
    }

    /**
     * @param array $requests
     *
     * @return array
     */
    protected function performRequests(array $requests = [])
    {
        $publicParas                = [];
        $publicParas["app_key"]     = $this->appKey;
        $publicParas["v"]           = $this->apiVersion;
        $publicParas["format"]      = $this->format;
        $publicParas["sign_method"] = $this->signMethod;
        $publicParas["partner_id"]  = $this->sdkVersion;

        foreach ($requests as $key => $request) {
            /** @var $request  \ihipop\taobaoTop\requests\TopRequest */
            $publicParas["method"]    = $request->getApiName();
            $publicParas["timestamp"] = date("Y-m-d H:i:s");

            $request->extraParas = array_merge((array)$request->extraParas, $publicParas);
            //签名
            $request->setSign($this->signPara($request->getRequestParas()));

            $gwUrl            = $this->httpGatewayUri;
            $hostNameOverRide = $this->httpHostnameOverride;
            if ($request->requireHttps || $this->forceHttps) {
                $gwUrl            = $this->httpsGatewayUri;
                $hostNameOverRide = $this->httpsHostnameOverride;
            }
            $psr7Request = (new \GuzzleHttp\Psr7\Request($request->requestMethod, $gwUrl))
                //->withMethod($request->requestMethod)
                //->withUri((new Uri($this->gatewayUrl)))
                ->withHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8')
                ->withHeader('user-agent', $this->userAgent)
                ->withBody(\GuzzleHttp\Psr7\stream_for(http_build_query($request->getRequestParas())));

            if ($hostNameOverRide) {
                $psr7Request = $psr7Request->withHeader('host', $hostNameOverRide);
            }
            $requests[$key] = $psr7Request;
        }

        return $this->sendRequests($requests);
    }

    /**
     * 请求方法为PSR7兼容的http客户端设计 ，如果客户端本身是PSR7兼容的,且有send($psr7Request)方法，无需覆盖此方法，
     * 直接改变 $this->httpClient 指向即可,抛出异常的类型，可能随着实际指向的http客户端的实现而变化
     * //     *
     * //     *
     * //     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \GuzzleHttp\Exception\GuzzleException |\RuntimeException |\Exception
     */
    protected function sendRequests($requests)
    {
        $responses = [];
        foreach ($requests as $key => $psr7Request) {
            $responses[$key] = $this->httpClient->send($psr7Request);
        }

        return $responses;
    }

    public function execute($requests, $session = null)
    {
        $returnFirst = false;
        if (!is_array($requests)) {
            $returnFirst = true;
            $requests    = [$requests];
        }
        if (null != $session) {
            foreach ($requests as $k => $req) {
                /** @var $req \ihipop\taobaoTop\requests\TopRequest */
                $req->setSession($session);
                $requests[$k] = $req;
            }
        }

        $responses = $this->performRequests($requests);

        //        return var_dump((string)$responses[0]->getBody());
        $result = [];
        libxml_disable_entity_loader(true);
        foreach ($responses as $key => $response) {
            /** @var  $response \GuzzleHttp\Psr7\Response */
            if ("json" === $this->format) {
                $decodedResponse = json_decode((string)$response->getBody(), true);
                if (null !== $decodedResponse) {
                    $result[$key] = current($decodedResponse);
                } else {
                    throw new \Exception('Invalid Json Response');
                }
            } elseif ("xml" === $this->format) {
                $decodedResponse = @simplexml_load_string((string)$response->getBody());
                if (false !== $decodedResponse) {
                    $result[$key] = json_decode(json_encode($decodedResponse), true);//把里面的Object对象转乘数组
                } else {
                    throw new \Exception('Invalid XML Response');
                }
            }
        }

        if ($returnFirst) {
            return current($result);
        }

        return $result;
    }
}
