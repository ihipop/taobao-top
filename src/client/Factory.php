<?php

namespace ihipop\TaobaoTop\client;

use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\utility\Str;

/**
 * Class Factory.
 *
 * @method static \ihipop\TaobaoTop\Application guzzleTopClient(array $config)
 * @method static \ihipop\TaobaoTop\Application saberTopClient(array $config)
 */
class Factory
{

    public static function make($name, array $config = []): \ihipop\TaobaoTop\Application
    {
        $provider                      = '\ihipop\TaobaoTop\providers\\' . Str::studly($name) . 'ServiceProvider';
        $config['providers']['client'] = $provider;

        return (new Application($config));
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