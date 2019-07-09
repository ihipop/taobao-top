<?php
//
//namespace ihipop\TaobaoTop\client;
//
//use ihipop\TaobaoTop\Application;
//use ihipop\TaobaoTop\utility\Str;
//
///**
// * Class Factory.
// *
// * @method static \ihipop\TaobaoTop\Application guzzle(array $config)
// * @method static \ihipop\TaobaoTop\Application saber(array $config)
// */
//class Factory
//{
//
//    public static function make($name, array $config = []): \ihipop\TaobaoTop\Application
//    {
//        $topClientProvider                = '\ihipop\TaobaoTop\providers\\' . Str::studly($name) . 'TopClientServiceProvider';
//        $config['providers']['topClient'] = $topClientProvider;
//
//        return (new Application($config));
//    }
//
//    /**
//     * Dynamically pass methods to the application.
//     *
//     * @param string $name
//     * @param array  $arguments
//     *
//     * @return mixed
//     */
//    public static function __callStatic($name, $arguments)
//    {
//        return self::make($name, ...$arguments);
//    }
//}
