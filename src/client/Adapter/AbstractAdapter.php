<?php
/**
 * @author ihipop@gmail.com @ 19-5-14 上午11:19 For taobao-top.
 */

namespace ihipop\TaobaoTop\client\Adapter;

abstract class AbstractAdapter
{

    protected $httpClient;

    abstract public function send($requests, $timeout = null);
}
