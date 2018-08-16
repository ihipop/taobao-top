<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setTid($value)
 * @method getTid()
 */
class GetTradeFullinfo extends TopRequest
{

    protected $apiName;
    protected $paramKeys = [
        'fields',
        'tid',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
