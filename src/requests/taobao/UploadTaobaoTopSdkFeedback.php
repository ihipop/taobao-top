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
class UploadTaobaoTopSdkFeedback extends TopRequest
{

    protected $apiName;
    protected $paramKeys = [
        'type',
        'content',
    ];

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
