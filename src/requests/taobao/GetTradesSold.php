<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetTradesSold
 *
 * @method $this setBuyerNick($value)
 * @method getBuyerNick()
 * @method $this setEndCreated($value)
 * @method getEndCreated()
 * @method $this setExtType($value)
 * @method getExtType()
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setPageNo($value)
 * @method getPageNo()
 * @method $this setPageSize($value)
 * @method getPageSize()
 * @method $this setRateStatus($value)
 * @method getRateStatus()
 * @method $this setStartCreated($value)
 * @method getStartCreated()
 * @method $this setStatus($value)
 * @method getStatus()
 * @method $this setTag($value)
 * @method getTag()
 * @method $this setType($value)
 * @method getType()
 * @method $this setUseHasNext($value)
 * @method getUseHasNext()
 */
class GetTradesSold extends TopRequest
{

    protected $apiName;
    protected $paramKeys            = [
        "buyerNick",
        "endCreated",
        "extType",
        "fields",
        "pageNo",
        "pageSize",
        "rateStatus",
        "startCreated",
        "status",
        "tag",
        "type",
        "useHasNext",
    ];
    protected $defaultParamValues   = [
        'pageNo' => 1,
    ];
    protected $commaSeparatedParams = ['fields', 'type'];
    //    public    $encryptedFields      = [
    //        'name'    => 'trades.trade@receiver_name',
    //        'nick'    => ['trades.trade@buyer_nick', 'trades.trade@service_orders.service_order@buyer_nick'],
    //        'mobile'  => 'trades.trade@receiver_mobile',
    //        'phone'   => 'trades.trade@receiver_phone',
    //        'address' => 'trades.trade@receiver_address',
    //        'pay_id'  => 'trades.trade@alipay_id',
    //    ];
    public $encryptedFields = [
        'trades' => [
            '@' => [//订单1
                'receiver_name'                => 'name',
                'buyer_nick'                   => 'nick',
                'receiver_mobile'              => 'mobile',
                'receiver_phone'               => 'phone',
                //'receiver_address'             => 'address',
                //'alipay_id'                    => 'pay_id',
                //orders.order=>['@'=>[...]]
                'service_orders.service_order' => [
                    '@' => [//服务订单1
                        'buyer_nick' => 'nick',
                    ],
                ],
            ],
        ],
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
