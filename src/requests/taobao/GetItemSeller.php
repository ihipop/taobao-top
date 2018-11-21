<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setNumIid($value)
 * @method getNumIid()
 */
class GetItemSeller extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'fields',
        'numIid'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
