<?php

namespace ihipop\TaobaoTop\requests;

use ihipop\TaobaoTop\utility\Str;

abstract class TopRequest
{

    public $requireHttps         = false;//是否必须使用https借口
    protected $paramKeys            = [];
    protected $commaSeparatedParams = [];
    protected $apiParas             = [];
    protected $apiName;
    public $requestMethod        = 'POST';
    public $extraParas           = [];

    public function __construct()
    {
        if (!$this->apiName) {
            //如果没有定义 $this->apiName 那么把 \xxx\yyy\zzz\taobao\GetTradesSold
            //处理为 taobao.trades.sold.get
            $class          = get_called_class();
            $namespaceArray = explode('\\', $class);
            $class          = end($namespaceArray);
            $lastNamespace  = prev($namespaceArray);
            $class          = explode('_', Str::snake($class, '_'));
            $class[]        = array_shift($class);//把动作名词放尾部
            $this->apiName  = ($lastNamespace ? $lastNamespace . '.' : '') . implode('.', $class);
        }
    }

    public function __call($name, $arguments)
    {
        if (Str::startsWith($name, 'set') || Str::startsWith($name, 'get')) {
            $clearName    = Str::camel(substr($name, 3));
            $actionPrefix = substr($name, 0, 3);
            //            var_dump($this->paramKeys);
            if (in_array($clearName, $this->paramKeys)) {
                return call_user_func_array([$this, '__' . $actionPrefix], array_merge([$clearName], $arguments));
            }
        }

        throw new \BadMethodCallException('不存在的方法调用: ' . $name);
    }

    public function __set($name, $value)
    {

        if (in_array($name, $this->commaSeparatedParams)) {
            return $this->setCommaSeparatedParam($name, $value);
        } elseif (in_array($name, $this->paramKeys)) {
            $this->apiParas[Str::snake($name)] = $value;

            return $this;
        }
        throw new \Exception('指定的属性不可设置: ' . $name);
    }

    public function __get($name)
    {
        if (in_array($name, $this->commaSeparatedParams)) {
            return $this->getCommaSeparatedParam($name);
        } elseif (in_array($name, $this->paramKeys)) {
            return $this->$name;
        }
        throw new \Exception('指定属性不存在: ' . $name);
    }

    public function setCommaSeparatedParam($name, $value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        $this->apiParas[$name] = $value;

        return $this;
    }

    public function getCommaSeparatedParam($name)
    {
        $values = $this->apiParas[$name] ?? '';

        return array_filter(explode(',', $values));
    }

    public function addCommaSeparatedParamsField($name, $value)
    {
        if (is_string($value)) {
            $value = array_filter(explode(',', $value));
        }
        $originalFields = $this->getCommaSeparatedParam($name);

        return $this->setCommaSeparatedParam($name, array_merge((array)$originalFields, $value));
    }

    public function setSession($session)
    {
        if (!is_string($session)) {
            unset($this->extraParas['session']);
        } else {
            $this->extraParas['session'] = $session;
        }

        return $this;
    }

    public function getSession()
    {
        return $this->extraParas['session'] ?? null;
    }

    public function getApiName()
    {
        return $this->apiName;
    }

    public function setApiName($name)
    {
        $this->apiName = $name;

        return $this;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function setSign($sign)
    {
        $this->extraParas["sign"] = $sign;

        return $this;
    }

    public function getRequestParas()
    {
        return array_merge((array)$this->extraParas, (array)$this->apiParas);
    }

    public function checkPayload()
    {
        if (!($this->extraParas["sign"] ?? true)) {
            throw new \Exception('Sign is not set');
        }

        return true;
    }
}
