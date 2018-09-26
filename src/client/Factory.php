<?php

namespace ihipop\TaobaoTop\client;

use ihipop\TaobaoTop\utility\Str;

/**
 * Class Factory.
 *
 * @method static \ihipop\TaobaoTop\client\TopClient topClient(array $config)
 * @method static \ihipop\TaobaoTop\client\GuzzleTopClient guzzleTopClient(array $config)
 */
class Factory
{

    public static function make($name, array $config = []): TopClient
    {
        $namespace = '\\ihipop\\TaobaoTop\\client\\' . Str::studly($name);

        $clientId     = $config['client_id'] ?? null;
        $clientSecret = $config['client_secret'] ?? null;
        $secureNumber = $config['secure_number'] ?? null;
        $cacheClient  = $config['cache_client'] ?? null;
        $logger       = $config['logger'] ?? null;
        if (!($clientSecret && $clientId) && function_exists('env')) {
            if ('month' === $config['type']) {
                $clientId     = env('TAOBAO_TOP_MONTH_CLIENT_ID');
                $clientSecret = env('TAOBAO_TOP_MONTH_CLIENT_SECRET');
                $secureNumber = $secureNumber ?: env('TAOBAO_TOP_MONTH_RANDOM_SECURE_NUMBER');
            } else {
                $clientId     = env('TAOBAO_TOP_YEAR_CLIENT_ID');
                $clientSecret = env('TAOBAO_TOP_YEAR_CLIENT_SECRET');
                $secureNumber = $secureNumber ?: env('TAOBAO_TOP_YEAR_RANDOM_SECURE_NUMBER');
            }
        }
        /** @var  $instance  \ihipop\TaobaoTop\client\TopClient */

        $instance = new $namespace($clientId, $clientSecret);
        if ($secureNumber) {
            $instance->initSecurityClient($secureNumber, $cacheClient);
        }
        if ($logger) {
            $instance->setLogger($logger);
        }

        return $instance;
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}