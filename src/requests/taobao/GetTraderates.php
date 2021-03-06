<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetSoldTrades
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setRateType($value)
 * @method getRateType()
 * @method $this setRole($value)
 * @method getRole()
 * @method $this setResult($value)
 * @method getResult()
 * @method $this setPageNo($value)
 * @method getPageNo()
 * @method $this setPageSize($value)
 * @method getPageSize()
 * @method $this setStartDate($value)
 * @method getStartDate()
 * @method $this setEndDate($value)
 * @method getEndDate()
 * @method $this setTid($value)
 * @method getTid()
 * @method $this setUseHasNext($value)
 * @method getUseHasNext()
 * @method $this setNumIid($value)
 * @method getNumIid()
 *
 */
class GetTraderates extends TopRequest
{

    protected $commaSeparatedParams = ['fields'];
    protected $apiName;
    protected $paramKeys            = [
        'fields',
        'rateType',
        'role',
        'result',
        'pageNo',
        'pageSize',
        'startDate',
        'endDate',
        'tid',
        'useHasNext',
        'numIid',
    ];
    public $encryptedFields      = [
        'trade_rates' => [
            '@' => [//订单1
                'nick' => 'nick',
            ],
        ],
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
