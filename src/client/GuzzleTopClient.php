<?php

namespace ihipop\TaobaoTop\client;

class GuzzleTopClient extends TopClient
{

    public function __construct($appKey, $appSecret, \GuzzleHttp\Client $httpClient = null, \Psr\Log\LoggerInterface $logger = null)
    {
        if (!$httpClient) {
            $httpClient = new \GuzzleHttp\Client(
                [
                    'verify'          => false,
                    'timeout'         => 30,
                    'connect_timeout' => 30,
                ]
            );
        }
        parent::__construct($appKey, $appSecret, $httpClient, $logger);
    }

    /**
     * @param $requests
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Throwable
     */
    public function sendRequests($requests)
    {
        //这里将来改用连接池实现
        foreach ($requests as $key => $request) {
            $requests[$key] = $this->httpClient->sendAsync($request);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}
