<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetTradesSold
 *
 * @method $this setBuyerNick($name)
 * @method getBuyerNick()
 * @method $this setEndCreated($name)
 * @method getEndCreated()
 * @method $this setExtType($name)
 * @method getExtType()
 * @method $this setFields($name)
 * @method getFields()
 * @method $this setPageNo($name)
 * @method getPageNo()
 * @method $this setPageSize($name)
 * @method getPageSize()
 * @method $this setRateStatus($name)
 * @method getRateStatus()
 * @method $this setStartCreated($name)
 * @method getStartCreated()
 * @method $this setStatus($name)
 * @method getStatus()
 * @method $this setTag($name)
 * @method getTag()
 * @method $this setType($name)
 * @method getType()
 * @method $this setUseHasNext($name)
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
        'trades.trade' => [
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
