<?php
/**
 * @author ihipop@gmail.com @ 19-4-24 上午11:46 For taobao-top.
 */

namespace ihipop\TaobaoTop\client;

use ihipop\TaobaoTop\Application;
use ihipop\TaobaoTop\exceptions\TaobaoServerSideException;
use ihipop\TaobaoTop\exceptions\TokenInvalidException;
use ihipop\TaobaoTop\requests\BaseRequest;
use ihipop\TaobaoTop\requests\RawTopRequest;
use ihipop\TaobaoTop\requests\TopRequest;
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

    public function createRequest(string $requestClass = RawTopRequest::class, array $args = []): TopRequest
    {
        if (class_exists($requestClass)) {
            $requestClass = new \ReflectionClass($requestClass);
            if ($requestClass->isSubclassOf(BaseRequest::class)) {
                /**
                 * @var $request BaseRequest
                 */
                $request = $requestClass->newInstanceArgs($args);
            } else {
                throw  new \InvalidArgumentException('$requestClass Must instance of ' . BaseRequest::class);
            }
        } elseif (RawTopRequest::maybeApiRequestDsn($requestClass)) {
            $request = new RawTopRequest($requestClass);
        } else {
            throw  new \InvalidArgumentException('不可揣测的 $requestClass 类型');
        }

        foreach ($this->app->getConfig('request')['prop'] ?? [] as $prop => $value) {
            $request->$prop = $value;
        }

        return $request;
    }

    /**
     * @param \GuzzleHttp\Psr7\Request ||  \GuzzleHttp\Psr7\Request[]  $request
     *
     * @return mixed
     */
    abstract public function send($request);

    abstract public function parseResponse(ResponseInterface $response);
}