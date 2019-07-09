<?php
/**
 * @author ihipop@gmail.com @ 19-4-25 上午10:07 For taobao-top.
 */

namespace ihipop\TaobaoTop\providers;

use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\client\TopClient;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class TopClientServiceProvider implements ServiceProviderInterface
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
        $pimple->offsetSet('topClient', function (Application $app) {
            return new TopClient($app);
        });
    }
}
