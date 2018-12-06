<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 */
class GetShopcatsList extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'fields',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
