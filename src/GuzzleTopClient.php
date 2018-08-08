<?php

namespace ihipop\taobaoTop;

class GuzzleTopClient extends TopClient
{

    public function __construct($appKey, $appSecret)
    {
        $httpClient = new \GuzzleHttp\Client(
            [
                'verify'  => false,
                'timeout' => 30,
            ]
        );
        parent::__construct($appKey, $appSecret, $httpClient);
    }

    /**
     * @param $requests
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Throwable
     */
    public function sendRequests($requests)
    {
        foreach ($requests as $key => $request) {
            $requests[$key] = $this->httpClient->sendAsync($request);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}
