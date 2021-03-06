<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setStatus($value)
 * @method getStatus()
 * @method $this setSellerNick($value)
 * @method getSellerNick()
 * @method $this setType($value)
 * @method getType()
 * @method $this setPageNo($value)
 * @method getPageNo()
 * @method $this setPageSize($value)
 * @method getPageSize()
 */
class GetRefundsApply extends TopRequest
{

    protected $apiName;
    protected $commaSeparatedParams = [
        'fields',
        'type',
    ];
    protected $paramKeys            = [
        'fields',
        'status',
        'sellerNick',
        'type',
        'pageNo',
        'pageSize',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
