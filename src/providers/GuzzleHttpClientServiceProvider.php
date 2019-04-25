<?php
/**
 * @author ihipop@gmail.com @ 19-2-28 下午2:26 For youzan-sdk.
 */

namespace ihipop\TaobaoTop\providers;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\client\Adapter\GuzzleAdapter;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class GuzzleHttpClientServiceProvider implements ServiceProviderInterface
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
            $config = $app->getConfig('http.guzzle_config');
            if (class_exists('\Swoole\Coroutine') && (\Co::getuid() > 1) && empty($config['handler'])) {
                $config['handler'] = HandlerStack::create(new \GuzzleHttp\Handler\StreamHandler());
            }

            return new Client($config);
        });
        $pimple->offsetSet('httpClientAdapter', function (Application $app) {
            return new GuzzleAdapter($app->offsetGet('httpClient'));
        });

        $pimple->offsetGet('httpClient');
        $pimple->offsetGet('httpClientAdapter');
    }
}