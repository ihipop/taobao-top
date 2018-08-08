<?php

namespace ihipop\taobaoTop;

class GuzzleTopClient extends TopClient
{

    public function __construct()
    {
        $httpClient = new \GuzzleHttp\Client(
            [
                'verify'  => false,
                'timeout' => 30,
            ]
        );
        parent::__construct($httpClient);
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

        $results = \GuzzleHttp\Promise\unwrap($requests);

        return array_map(function ($array) {
            return $array['value'];
        }, $results);
    }
}
