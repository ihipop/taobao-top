<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setPageNo($value)
 * @method getPageNo()
 * @method $this setPageSize($value)
 * @method getPageSize()
 *
 */
class GetItemsOnsale extends TopRequest
{
    
    protected $apiName;
    protected $commaSeparatedParams = [
        'fields',
    ];
    protected $paramKeys    = [
        'fields',
        'pageNo',
        'pageSize'
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
