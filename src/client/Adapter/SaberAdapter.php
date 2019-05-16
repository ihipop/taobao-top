<?php
/**
 * @author ihipop@gmail.com @ 19-4-25 上午9:55 For taobao-top.
 */

namespace ihipop\TaobaoTop\client\Adapter;

use Swlib\Http\Uri;
use Swlib\Saber;

class SaberAdapter extends AbstractAdapter
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
    public function send($requests, $timeout = null)
    {
        $requests = (array)$requests;
        $result   = [];
        $total    = count($requests);
        $chan     = new \Swoole\Coroutine\Channel($total);
        foreach ($requests as $key => $request) {
            /** @var  $request \Psr\Http\Message\RequestInterface */
            /** @var  $psr \Swlib\Saber\Request */
            $psr = $this->httpClient->psr(['use_pool' => true]);
            $psr = $psr->withMethod($request->getMethod());
            $psr = $psr->withUri(new Uri((string)$request->getUri()));
            $psr = $psr->withHeaders($request->getHeaders());
            $psr = $psr->withBody($request->getBody());
            if (null !== $timeout) {
                $psr = $psr->withTimeout($timeout);
            }
            \Swoole\Coroutine::create(function () use ($chan, $key, $psr) {
                try {
                    $chan->push([$key => $psr->exec()->recv()]);
                } catch (\Swlib\Http\Exception\ConnectException $e) {
                    if ($e->getCode() === -3) {//Connection is forcibly cut off by the remote server https://github.com/swlib/saber/issues/40
                        $chan->push([$key => $psr->exec()->recv()]);
                    } else {
                        $chan->push($e);
                    }
                }
            });
        }

        while (!($chan->isEmpty() && $result)) {
            $ret = $chan->pop();
            if ($ret instanceof \Throwable) {
                throw $ret;
            }
            $result += $ret;
        }

        return $result;
    }

    public function sendExample2($requests, $timeout = null)
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
            if (null !== $timeout) {
                $batch[$key]['timeout'] = $timeout;
            }
        }

        return $this->httpClient->requests($batch);
    }
}
