<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setGroupName($value)
 * @method getGroupName()
 * @method $this setNicks($value)
 * @method getNicks()
 */
class AddTmcGroup extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'groupName',
        'nicks'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
