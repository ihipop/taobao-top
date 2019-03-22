<?php

namespace ihipop\TaobaoTop\cache;

use Psr\SimpleCache\CacheInterface;

class CacheClient implements CacheInterface
{

    use CacheSerializeTrait;

    public function __construct(CacheInterface $cacheClient)
    {
        $this->realCacheClient = $cacheClient;
    }
}