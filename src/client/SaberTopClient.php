<?php

namespace ihipop\TaobaoTop\client;

use Swlib\Http\Uri;

class SaberTopClient extends TopClient
{

    /** @var $httpClient \Swlib\Saber */
    protected $httpClient;

    public function send($requests)
    {
        $result = [];
        $total  = count($requests);
        $chan   = new \Swoole\Coroutine\Channel($total);
        foreach ($requests as $key => $request) {
            /** @var  $request \Psr\Http\Message\RequestInterface */
            $psr = $this->httpClient->psr(['use_pool' => true]);
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

    public function sendExample($requests)
    {
        $batch = [];
        foreach ($requests as $key => $request) {
            /** @var  $request \Psr\Http\Message\RequestInterface */
            $psr         = $this->httpClient->psr(['use_pool' => true]);
            $psr         = $psr->withMethod($request->getMethod());
            $psr         = $psr->withUri(new Uri((string)$request->getUri()));
            $psr         = $psr->withHeaders($request->getHeaders());
            $psr         = $psr->withBody($request->getBody());
            $batch[$key] = [
                'uri'     => (string)$psr->getUri(),
                'method'  => $psr->getMethod(),
                'headers' => $psr->getHeaders(),
                'data'    => $psr->getBody(),
            ];
        }

        return $this->httpClient->requests($batch);
    }
}