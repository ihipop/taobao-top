<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetTradesSold
 *
 * @method $this setBuyerNick($value)
 * @method getBuyerNick()
 * @method $this setEndModified($value)
 * @method getEndModified()
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
 * @method $this setStartModified($value)
 * @method getStartModified()
 * @method $this setStatus($value)
 * @method getStatus()
 * @method $this setTag($value)
 * @method getTag()
 * @method $this setType($value)
 * @method getType()
 * @method $this setUseHasNext($value)
 * @method getUseHasNext()
 */
class GetTradesSoldIncrement extends TopRequest
{

    protected $apiName;
    protected $paramKeys            = [
        "buyerNick",
        "endModified",
        "extType",
        "fields",
        "pageNo",
        "pageSize",
        "startModified",
        "status",
        "tag",
        "type",
        "useHasNext",
    ];
    protected $defaultParamValues   = [
        'pageNo' => 1,
    ];
    protected $commaSeparatedParams = ['fields', 'type'];
    public    $encryptedFields      = [
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
