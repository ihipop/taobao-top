<?php
/**
 * @author ihipop@gmail.com @ 19-4-24 上午11:49 For taobao-top.
 */

namespace ihipop\TaobaoTop\requests;

class RawTopRequest extends TopRequest
{

    public function __construct(string $apiName)
    {
        if (!$apiName) {
            throw new \RuntimeException('RAW Request 必须指定合法API名称');
        }
        $this->apiName = $apiName;
        parent::__construct();
    }

    public static function maybeApiRequestDsn(string $string): bool
    {
        return strpos($string, '.') > 0;
    }
}
