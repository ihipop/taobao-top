<?php

namespace ihipop\TaobaoTop\cache;

use Psr\SimpleCache\CacheInterface;

class NullCacheClient implements CacheInterface
{

    protected $defaultBool = false;

    public function __construct(bool $defaultBool = false)
    {
        $this->defaultBool = $defaultBool;
    }

    /** @inheritdoc */
    public function get($key, $default = null)
    {
        return $default;
    }

    /** @inheritdoc */
    public function set($key, $value, $ttl = null)
    {
        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function delete($key)
    {
        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function clear()
    {
        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function getMultiple($keys, $default = null)
    {
        foreach ($keys as $key) {
            yield $key => $default;
        }
    }

    /** @inheritdoc */
    public function setMultiple($values, $ttl = null)
    {
        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function deleteMultiple($keys)
    {
        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function has($key)
    {
        return $this->defaultBool;
    }
}