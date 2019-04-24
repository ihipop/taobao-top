<?php

namespace ihipop\TaobaoTop\client;

class GuzzleTopClient extends TopClient
{

    /** @var $httpClient \GuzzleHttp\Client */
    protected $httpClient;

    /**
     * @param $requests
     *
     * @return \Psr\Http\Message\ResponseInterface[]
     * @throws \Throwable
     */
    public function send($requests)
    {
        //这里将来改用连接池实现
        foreach ((array)$requests as $key => $request) {
            $requests[$key] = $this->httpClient->sendAsync($request);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}
