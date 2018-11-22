<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setCid($value)
 * @method getCid()
 * @method $this setPvs($value)
 * @method getPvs()
 * @method $this setType($value)
 * @method getType()
 */
class GetItempropvalues extends TopRequest
{
    
    protected $apiName;
    protected $paramKeys    = [
        'fields',
        'cid',
        'pvs',
        'type'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
