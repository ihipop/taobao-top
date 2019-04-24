<?php

namespace ihipop\TaobaoTop\providers;

use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\client\SaberTopClient;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Swlib\Saber;

class SaberApiClientServiceProvider implements ServiceProviderInterface
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
        $pimple->offsetSet('httpClient', function (Application $app) {
            return Saber::create($app->getConfig('http.saber_config'));
        });
        $pimple->offsetSet('topClient', function (Application $app) {
            return $client = new SaberTopClient($app);
        });
    }
}