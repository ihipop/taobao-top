<?php
/**
 * @author ihipop@gmail.com @ 19-4-24 下午4:45 For taobao-top.
 */

require __DIR__ . '/../vendor/autoload.php';
$application = new \ihipop\TaobaoTop\Application([
    'topClient' => [
        'apiKey'          => '1234567',
        'apiSecret'       => 'qwerty.',
        'secureRandomNum' => 'qawsed',
    ],
    'providers' => [
        'topClient' => \ihipop\TaobaoTop\providers\GuzzleTopClientServiceProvider::class,
    ],
]);
$topClient   = $application->topClient;

$request = new \ihipop\TaobaoTop\requests\taobao\GetTradesSold();
$request->setFields([
    'post_fee',
    'receiver_name',
    'receiver_state',
    'receiver_address',
    'receiver_zip',
    'receiver_mobile',
    'receiver_phone',
    'consign_time',
    'received_payment',
    'receiver_country',
    'receiver_town',
    'tid',
    'num',
    'status',
    'title',
    'type',
    'price',//其他字段略
])->setType([
    'guarantee_trade',
    'auto_delivery',
    'ec',
    'cod',
    'step',
    'tmall_i18n',
    'nopaid',
])->setUseHasNext('true')->setPageSize(20);
$request->setStartCreated(date('Y-m-d H:i:s', time() - 5 * 60))->setEndCreated(date('Y-m-d H:i:s'));

var_export($topClient->execute($request, 'token'));