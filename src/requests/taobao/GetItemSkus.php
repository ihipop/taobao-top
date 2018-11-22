<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setNumIids($value)
 * @method getNumIids()
 */
class GetItemSkus extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'fields',
        'numIids'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
