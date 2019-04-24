<?php

namespace ihipop\TaobaoTop\client;

use Swlib\Http\Uri;
use Swoole\Coroutine\Channel;

class SaberTopClient extends TopClient
{

    /** @var $httpClient \Swlib\Saber */
    protected $httpClient;

    public function send($requests)
    {
        $total = count($requests);
        $chan  = new Channel($total);
        foreach ($requests as $key => $request) {
            /** @var  $psr \Swlib\Saber\Request */
            /** @var  $request \Psr\Http\Message\RequestInterface */
            \Swoole\Coroutine::create(function () use ($chan, $key, $request) {
                $psr = $this->httpClient->psr(['use_pool' => true]);
                $psr = $psr->withMethod($request->getMethod());
                $psr = $psr->withUri(new Uri((string)$request->getUri()));
                $psr = $psr->withHeaders($request->getHeaders());
                $psr = $psr->withBody($request->getBody());
                $chan->push([$key => $psr->exec()->recv()]);
            });
        }
        $result = [];
        for ($i = 1; $i <= $total; $i++) {
            $result[] = $chan->pop();
        }

        return $result;
    }
}