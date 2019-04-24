<?php
require __DIR__ . '/../vendor/autoload.php';
\Swoole\Runtime::enableCoroutine();
go(function () {
    $application = \ihipop\TaobaoTop\client\Factory::saberTopClient([
        'topClient' => [
            'apiKey'          => '1234567',
            'apiSecret'       => 'qwerty.',
            'secureRandomNum' => 'qawsed',
        ],
    ]);
    $topClient   = $application->topClient;
    var_export($topClient->execute(new \ihipop\TaobaoTop\requests\RawTopRequest('taobao.tmc.user.get'), 'token'));
});