<?php

namespace ihipop\TaobaoTop\providers;

use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\client\Adapter\SaberAdapter;
use ihipop\TaobaoTop\client\SaberTopClient;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Swlib\Saber;

class SaberHttpClientServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        if (\Swoole\Coroutine::getuid() < 0) {
            throw new \RuntimeException('Saber Must run under Coroutine');
        }
        $pimple->offsetSet('httpClientFactory', $pimple->factory(function (Application $app) {
            return Saber::create($app->getConfig('http.saber_config'));
        }));

        $pimple->offsetSet('httpClient', function (Application $app) {
            return $app->offsetGet('httpClientFactory');
        });
        $pimple->offsetSet('httpClientAdapter', function (Application $app) {
            return new SaberAdapter($app->offsetGet('httpClient'));
        });

        $pimple->offsetGet('httpClient');
        $pimple->offsetGet('httpClientAdapter');
    }
}