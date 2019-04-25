<?php
/**
 * @author ihipop@gmail.com @ 19-4-25 上午9:55 For taobao-top.
 */

namespace ihipop\TaobaoTop\client\Adapter;

use Swlib\Http\Uri;
use Swlib\Saber;

class SaberAdapter
{

    protected $httpClient;

    public function __construct(Saber $client)
    {
        $this->httpClient = $client;
    }

    /**
     * @param $requests \Psr\Http\Message\RequestInterface[]
     *
     * @return array|mixed
     */
    public function send(array $requests)
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

        while (!($chan->isEmpty() && $result)) {
            $result += $chan->pop();
        }

        return $result;
    }

    //    public function sendExample2($requests)
    //    {
    //        $batch = [];
    //        foreach ($requests as $key => $request) {
    //            /** @var  $request \Psr\Http\Message\RequestInterface */
    //            $psr         = $this->httpClient->psr(['use_pool' => true]);
    //            $psr         = $psr->withMethod($request->getMethod());
    //            $psr         = $psr->withUri(new Uri((string)$request->getUri()));
    //            $psr         = $psr->withHeaders($request->getHeaders());
    //            $psr         = $psr->withBody($request->getBody());
    //            $batch[$key] = [
    //                'uri'     => (string)$psr->getUri(),
    //                'method'  => $psr->getMethod(),
    //                'headers' => $psr->getHeaders(),
    //                'data'    => $psr->getBody(),
    //            ];
    //        }
    //
    //        return $this->httpClient->requests($batch);
    //    }
}