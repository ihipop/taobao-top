<?php

namespace ihipop\taobaoTop\requests\taobao;

use ihipop\taobaoTop\requests\topRequest;

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
 *
 */
class GetTradesSold extends topRequest
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

    public function check()
    {
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
