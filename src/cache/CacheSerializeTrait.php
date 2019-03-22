<?php

namespace ihipop\TaobaoTop\cache;

trait CacheSerializeTrait
{

    /** @var \Psr\SimpleCache\CacheInterface */
    protected $realCacheClient;

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->realCacheClient, $name], $arguments);
    }

    public static function isAutoSerialize()
    {
        return true;

        return defined('self::AUTO_SERIALIZE') ? constant('self::AUTO_SERIALIZE') : true;
    }

    protected function serializeValues($value)
    {
        if (self::isAutoSerialize()) {
            if (!is_scalar($value)) {
                $value = serialize($value);
            }
        }

        return $value;
    }

    protected function unSerializeValues($value, $unSerializeOptions = null)
    {
        if (self::isAutoSerialize()) {
            if ($value && is_string($value)) {
                try {
                    $__ = @unserialize($value, $unSerializeOptions);
                    if ($__) {
                        return $__;
                    }
                } catch (\Throwable $e) {

                }
            }
        }

        return $value;
    }

    /** @inheritdoc */
    public function set($key, $value, $ttl = null)
    {
        $value = $this->serializeValues($value);

        return $this->realCacheClient->set($key, $value, $ttl);
    }

    /** @inheritdoc */
    public function get($key, $default = null, $unSerializeOptions = null)
    {
        $value = $this->realCacheClient->get($key, $default);

        return $this->unSerializeValues($value, $unSerializeOptions);
    }

    /** @inheritdoc */
    public function getMultiple($keys, $default = null, $unSerializeOptions = null)
    {
        $generate = $this->realCacheClient->getMultiple($keys, $default);
        foreach ($generate as $key => $value) {
            yield $key => $this->unSerializeValues($value, $unSerializeOptions);
        }
    }

    /** @inheritdoc */
    public function setMultiple($values, $ttl = null)
    {
        foreach ($values as $key => $value) {
            $values[$key] = $this->serializeValues($value);
        }

        return $this->realCacheClient->setMultiple($values, $ttl);
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