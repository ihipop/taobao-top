<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setRefundId($value)
 * @method getRefundId()
 */
class GetRefund extends TopRequest
{

    protected $apiName;
    protected $commaSeparatedParams = [
        'fields',
    ];
    protected $paramKeys            = [
        'fields',
        'refundId',

    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
