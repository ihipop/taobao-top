<?php
/**
 * @author ihipop@gmail.com @ 19-2-28 下午2:26 For youzan-sdk.
 */

namespace ihipop\TaobaoTop\providers;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\client\GuzzleTopClient;
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
        $pimple->offsetSet('topClient', function (Application $app) {
            return $client = new \ihipop\TaobaoTop\client\TopClient($app);
        });
        $pimple->offsetGet('httpClient');
        $pimple->offsetGet('topClient');
    }

    public static function handle(\GuzzleHttp\Client $client, $requests)
    {
        //这里将来改用连接池实现
        foreach ((array)$requests as $key => $request) {
            $requests[$key] = $client->sendAsync($request);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}