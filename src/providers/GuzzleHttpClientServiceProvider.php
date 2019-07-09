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
        $pimple->offsetSet('httpClientFactory', $pimple->factory(function (Application $app) {
            $config = $app->getConfig('http.guzzle_config');
            if (empty($config['handler'])) {
                if (!empty($config['getHandler']) && is_callable($config['getHandler'])) {
                    $config['handler'] = $config['getHandler']();
                    if (!(($config['handler']) instanceof HandlerStack)) {
                        throw new \Exception('$config[\'getHandler\'] must have to Return ' . HandlerStack::class);
                    }
                } else {
                    $config['force_handler_over_ride'] = true;
                }
            }

            return new Client($config);
        }));
        $pimple->offsetSet('httpClient', function (Application $app) {
            return $app->offsetGet('httpClientFactory');
        });
        $pimple->offsetSet('httpClientAdapter', function (Application $app) {
            return new GuzzleAdapter($app->offsetGet('httpClient'));
        });

        $pimple->offsetGet('httpClient');
        $pimple->offsetGet('httpClientAdapter');
    }
}
