<?php

namespace ihipop\TaobaoTop\cache;

trait CacheInterfaceProxy
{

    /** @var \Psr\SimpleCache\CacheInterface */
    protected $realCacheClient;

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->realCacheClient, $name], $arguments);
    }

    /** @inheritdoc */
    public function set($key, $value, $ttl = null)
    {

        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */
    public function get($key, $default = null)
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */
    public function getMultiple($keys, $default = null)
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */
    public function setMultiple($values, $ttl = null)
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */
    public function delete($key)
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */
    public function clear()
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */

    public function deleteMultiple($keys)
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }

    /** @inheritdoc */
    public function has($key)
    {
        return call_user_func_array([$this->realCacheClient, __FUNCTION__], func_get_args());
    }
}