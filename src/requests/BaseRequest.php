<?php

namespace ihipop\TaobaoTop\requests;

use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use function GuzzleHttp\Psr7\stream_for;

abstract class BaseRequest
{

    public    $method         = 'POST';
    public    $apiBase        = '';
    protected $data;
    protected $query          = [];
    public    $userAgent      = 'top-sdk-php';
    protected $uriPlaceHolder = [];
    public    $apiPath        = '{Uri}';
    protected $contentType    = 'form';
    protected $apiName;
    protected $apiVersion     = "2.0";

    public function __toString()
    {
        return json_encode([
            'request_data' => $this->data,
            'self'         => $this,
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    public function setApiVersion(string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    public function getApiName()
    {
        return $this->apiName;
    }

    public function setApiName($name)
    {
        $this->apiName = $name;

        return $this;
    }

    public function getData()
    {
        //merge me with api/version or name if needed
        return $this->data;
    }

    public function setData($value, $merge = false)
    {
        if (!$this->contentType) {
            throw  new  \Exception('未指定请求类型');
        }

        if (is_array($value) && $merge) {
            $this->data = array_merge((array)$this->data, $value);
        } else {
            $this->data = $value;
        }

        return $this;
    }

    public function addDataArray(array $value)
    {
        return $this->setData($value, true);
    }

    public function setQuery(array $value, $merge = false)
    {

        $this->query = $merge ? array_merge($this->query, $value) : $value;

        return $this;
    }

    public function getQuery()
    {
        //merge me with api/version or name if needed
        return $this->query;
    }

    /**
     * @return \Psr\Http\Message\RequestInterface
     */
    public function getRequest()
    {
        $uri = $this->apiBase . $this->getApiPath();
        //        var_export($uri);
        $uri   = new Uri($uri);
        $data  = $this->getData();
        $query = $this->getQuery();

        if ($query) {
            $uri = $uri->withQuery(http_build_query($query));
        }

        $request = (new Request($this->method, $uri))
            ->withHeader('user-agent', $this->userAgent);

        $contentType = $this->contentType;
        if ($data && $contentType) {
            if ($contentType === 'form') {
                $request = $request->withHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8')
                    ->withBody(stream_for(is_array($data) ? http_build_query($data) : $data));
            } elseif ($contentType === 'multipart') {
                $stream  = new MultipartStream($data);
                $request = $request->withHeader('Content-Type', 'multipart/form-data; boundary=' . $stream->getBoundary())
                    ->withBody($stream);
            } elseif ($contentType === 'json') {
                $request = $request->withHeader('Content-Type', 'application/json')
                    ->withBody(is_string($data) ?: stream_for(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)));
            }
        }

        return $request;
    }

    public function getApiPath()
    {
        if ($this->uriPlaceHolder && strpos($this->apiPath, '{') !== false) {
            return str_replace(array_keys($this->uriPlaceHolder), array_values($this->uriPlaceHolder), $this->apiPath);
        }

        return $this->apiPath;
    }
}
