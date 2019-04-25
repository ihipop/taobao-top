<?php
/**
 * @author ihipop@gmail.com @ 19-4-25 上午9:55 For taobao-top.
 */

namespace ihipop\TaobaoTop\client\Adapter;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

class GuzzleAdapter
{

    protected $httpClient;
    protected $streamHandler;

    public function __construct(Client $client)
    {
        $this->httpClient = $client;;
        if (class_exists('\Swoole\Coroutine') && $client->getConfig('force_handler_over_ride')) {
            $this->streamHandler = HandlerStack::create(new \GuzzleHttp\Handler\StreamHandler());
        }
    }

    /**
     * @param $requests \Psr\Http\Message\RequestInterface[]
     *
     * @return array|mixed
     */
    public function send(array $requests)
    {
        $config = [];
        if ($this->streamHandler && (\Co::getuid() > 1)) {
            $config['handler'] = $this->streamHandler;
        }
        //这里将来改用连接池实现
        foreach ((array)$requests as $key => $request) {
            $requests[$key] = $this->httpClient->sendAsync($request, $config);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}