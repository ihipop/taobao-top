<?php
/**
 * @author ihipop@gmail.com @ 19-4-25 上午9:55 For taobao-top.
 */

namespace ihipop\TaobaoTop\client\Adapter;

use GuzzleHttp\Client;

class GuzzleAdapter
{

    protected $httpClient;

    public function __construct(Client $client)
    {
        $this->httpClient = $client;
    }

    public function send($requests)
    {
        //这里将来改用连接池实现
        foreach ((array)$requests as $key => $request) {
            $requests[$key] = $this->httpClient->sendAsync($request);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}