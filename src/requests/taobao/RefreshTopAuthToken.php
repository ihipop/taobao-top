<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setRefreshToken($value)
 * @method getRefreshToken()
 */
class RefreshTopAuthToken extends TopRequest
{

    public $requireHttps = true;
    protected $apiName;
    protected $paramKeys    = [
        'refreshToken'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
