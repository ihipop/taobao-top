<?php
/**
 * @author ihipop@gmail.com @ 19-4-25 上午9:55 For taobao-top.
 */

namespace ihipop\TaobaoTop\client\Adapter;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

class GuzzleAdapter extends AbstractAdapter
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
    public function send($requests, $timeout = null)
    {
        $requests = (array)$requests;
        $config   = [];
        if ($this->streamHandler && (\Swoole\Coroutine::getuid() > 1)) {
            $config['handler'] = $this->streamHandler;
        }
        if (null !== $timeout) {
            $config['timeout'] = $timeout;
        }
        //这里将来改用连接池实现
        foreach ((array)$requests as $key => $request) {
            $requests[$key] = $this->httpClient->sendAsync($request, $config);
        }

        return \GuzzleHttp\Promise\unwrap($requests);
    }
}