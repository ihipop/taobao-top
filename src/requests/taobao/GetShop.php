<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setNick($value)
 * @method getNick()
 */
class GetShop extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'fields',
        'nick'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
