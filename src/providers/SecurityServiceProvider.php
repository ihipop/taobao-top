<?php

namespace ihipop\TaobaoTop\providers;

use ihipop\TaobaoTop\Application;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class SecurityServiceProvider implements ServiceProviderInterface
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
        $pimple->offsetSet('security', function (Application $app) {
            return new \ihipop\TaobaoTop\security\SecurityClient($app);
        });
    }
}
