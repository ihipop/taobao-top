<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setCustomerUserId($value)
 * @method getCustomerUserId()
 * @method $this setRandomNum($value)
 * @method getRandomNum()
 * @method $this setSecretVersion($value)
 * @method getSecretVersion()
 */
class GetTopSecret extends TopRequest
{

    public    $requireHttps = true;
    protected $apiName;
    protected $paramKeys    = [
        'customerUserId',
        'randomNum',
        'secretVersion',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
