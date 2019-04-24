<?php
require __DIR__ . '/../vendor/autoload.php';
\Swoole\Runtime::enableCoroutine();
go(function () {
    $application = new \ihipop\TaobaoTop\Application([
        'topClient' => [
            'apiKey'          => '1234567',
            'apiSecret'       => 'qwerty.',
            'secureRandomNum' => 'qawsed',
        ],
        'providers' => [
            'topClient' => \ihipop\TaobaoTop\providers\SaberTopClientServiceProvider::class,
        ],
    ]);
    $topClient   = $application->topClient;
    var_export($topClient->execute(new \ihipop\TaobaoTop\requests\RawTopRequest('taobao.tmc.user.get'), 'token'));
});