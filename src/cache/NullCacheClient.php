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

    public static function validateKey($key)
    {
        if (!\is_string($key)) {
            throw new InvalidArgumentException(sprintf('Cache key must be string, "%s" given', \is_object($key) ? \get_class($key) : \gettype($key)));
        }
        if ('' === $key) {
            throw new InvalidArgumentException('Cache key length must be greater than zero');
        }
        if (false !== strpbrk($key, '{}()/\@:')) {
            throw new InvalidArgumentException(sprintf('Cache key "%s" contains reserved characters {}()/\@:', $key));
        }

        return $key;
    }

    public static function traversToArray($travers)
    {
        if ($travers instanceof \Traversable) {
            $travers = iterator_to_array($travers, false);
        }
        if (!\is_array($travers)) {
            throw new InvalidArgumentException(sprintf('Cache keys must be array or Traversable, "%s" given',
                \is_object($travers) ? \get_class($travers) : \gettype($travers)));
        }

        return $travers;
    }

    /** @inheritdoc */
    public function get($key, $default = null)
    {

        self::validateKey($key);

        return $default;
    }

    /** @inheritdoc */
    public function set($key, $value, $ttl = null)
    {
        self::validateKey($key);

        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function delete($key)
    {
        self::validateKey($key);

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
        $keys = self::traversToArray($keys);
        foreach ($keys as $value) {
            self::validateKey($value);
        }
        foreach ($keys as $key) {
            yield $key => $default;
        }
    }

    /** @inheritdoc */
    public function setMultiple($values, $ttl = null)
    {
        $values = self::traversToArray($values);

        //        self::validateKey($values);

        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function deleteMultiple($keys)
    {
        $keys = self::traversToArray($keys);
        foreach ($keys as $value) {
            self::validateKey($value);
        }

        return $this->defaultBool;
    }

    /** @inheritdoc */
    public function has($key)
    {
        self::validateKey($key);

        return $this->defaultBool;
    }
}