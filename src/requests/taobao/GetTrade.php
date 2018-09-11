<?php

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

/**
 * Class GetTradesSold
 *
 * @method $this setFields($value)
 * @method getFields()
 * @method $this setTid($value)
 * @method getTid()
 */
class GetTrade extends TopRequest
{

    protected $apiName;
    protected $paramKeys            = [
        "fields",
        "tid",
    ];
    protected $defaultParamValues   = [
        'pageNo' => 1,
    ];
    protected $commaSeparatedParams = [
        'fields',
    ];
    //    public    $encryptedFields      = [
    //        'name'    => 'trades.trade@receiver_name',
    //        'nick'    => ['trades.trade@buyer_nick', 'trades.trade@service_orders.service_order@buyer_nick'],
    //        'mobile'  => 'trades.trade@receiver_mobile',
    //        'phone'   => 'trades.trade@receiver_phone',
    //        'address' => 'trades.trade@receiver_address',
    //        'pay_id'  => 'trades.trade@alipay_id',
    //    ];
    public $encryptedFields = [
        'trade' => [
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
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
