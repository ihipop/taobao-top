<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setNick($value)
 * @method getNick()
 */
class CancelTmcUser extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'nick'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
