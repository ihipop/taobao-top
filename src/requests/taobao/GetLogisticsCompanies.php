<?php
/**
 * @author ihipop@gmail.com @ 18-8-16 下午4:11 For taobao-top.
 */

namespace ihipop\TaobaoTop\requests\taobao;

use ihipop\TaobaoTop\requests\TopRequest;

class GetLogisticsCompanies extends TopRequest
{

    /**
     * Class GetLogisticsCompanies
     *
     * @method $this setFields($value)
     * @method getFields()
     * @method $this setIsRecommended($value)
     * @method getIsRecommended()
     * @method $this setOrderMode($value)
     * @method getOrderMode()
     */
    protected $apiName;
    protected $paramKeys = [
        'fields',
        'isRecommended',
        'orderMode',
    ];
}