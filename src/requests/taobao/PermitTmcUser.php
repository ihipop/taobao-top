<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setTopics($value)
 * @method getTopics()
 */
class PermitTmcUser extends TopRequest
{
    
    protected $apiName;
    protected $commaSeparatedParams = [
        'topics',
    ];
    protected $paramKeys    = [
        'topics'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
