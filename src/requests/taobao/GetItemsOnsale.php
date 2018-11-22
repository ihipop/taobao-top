<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 */
class GetItemsOnsale extends TopRequest
{
    
    protected $apiName;
    protected $commaSeparatedParams = [
        'fields',
    ];
    protected $paramKeys    = [
        'fields',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
