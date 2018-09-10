<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setCids($value)
 * @method getCids()
 * @method $this setParentCid($value)
 * @method getParentCid()
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
        'PageNo',
        'pageSize',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
