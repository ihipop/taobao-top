<?php
/**
 * @author ihipop@gmail.com @ 19-4-24 上午11:46 For taobao-top.
 */

namespace ihipop\TaobaoTop\client;

use ihipop\TaobaoTop\Application;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractHttpApiClient
{

    protected $httpClient;
    protected $app;

    public function __construct(Application $app)
    {
        $this->httpClient = $app->get('httpClient');
        $this->app        = $app;
    }

    /**
     * @param \GuzzleHttp\Psr7\Request ||  \GuzzleHttp\Psr7\Request[]  $request
     *
     * @return mixed
     */
    abstract public function send($request);

    abstract public function parseResponse(ResponseInterface $response);
}