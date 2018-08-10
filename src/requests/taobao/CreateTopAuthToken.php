<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setCode($value)
 * @method getCode()
 */
class CreateTopAuthToken extends TopRequest
{

    public $requireHttps = true;
    protected $apiName;
    protected $paramKeys    = [
        'code'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
