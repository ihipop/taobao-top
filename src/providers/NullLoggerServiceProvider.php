<?php
/**
 * @author ihipop@gmail.com @ 19-4-24 上午10:10 For taobao-top.
 */

namespace ihipop\TaobaoTop\providers;

use ihipop\TaobaoTop\Application;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class NullLoggerServiceProvider implements ServiceProviderInterface
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
        $pimple->offsetSet('logger', function (Application $app) {
            return new \Psr\Log\NullLogger();
        });
    }
}