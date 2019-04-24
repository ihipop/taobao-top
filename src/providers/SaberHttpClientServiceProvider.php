<?php

namespace ihipop\TaobaoTop\providers;

use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\client\SaberTopClient;
use ihipop\TaobaoTop\client\TopClient;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Swlib\Http\Uri;
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
        $pimple->offsetSet('httpClient', function (Application $app) {
            return Saber::create($app->getConfig('http.saber_config'));
        });
        $pimple->offsetSet('topClient', function (Application $app) {
            return $client = new TopClient($app);
        });
        $pimple->offsetGet('httpClient');
        $pimple->offsetGet('topClient');
    }

    public static function handle(Saber $client, $requests)
    {
        $result = [];
        $total  = count($requests);
        $chan   = new \Swoole\Coroutine\Channel($total);
        foreach ($requests as $key => $request) {
            /** @var  $request \Psr\Http\Message\RequestInterface */
            $psr = $client->psr(['use_pool' => true]);
            $psr = $psr->withMethod($request->getMethod());
            $psr = $psr->withUri(new Uri((string)$request->getUri()));
            $psr = $psr->withHeaders($request->getHeaders());
            $psr = $psr->withBody($request->getBody());
            \Swoole\Coroutine::create(function () use ($chan, $key, $psr) {
                $chan->push([$key => $psr->exec()->recv()]);
            });
        }

        for ($i = 1; $i <= $total; $i++) {
            $result += $chan->pop();
        }

        return $result;
    }
}