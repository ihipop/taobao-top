<?php
/**
 * @author ihipop@gmail.com @ 19-2-27 下午6:16 For youzan-sdk.
 */

namespace ihipop\TaobaoTop;

use ihipop\TaobaoTop\providers\GuzzleApiClientServiceProvider;
use ihipop\TaobaoTop\providers\NullCacheServiceProvider;
use ihipop\TaobaoTop\providers\NullLoggerServiceProvider;
use ihipop\TaobaoTop\providers\SecurityServiceProvider;
use ihipop\TaobaoTop\utility\Arr;
use Pimple\Container;

/**
 * Class Application
 *
 * @package ihipop\TaobaoTop
 *
 * @property  \ihipop\TaobaoTop\client\TopClient topClient
 */
class Application extends Container implements \Psr\Container\ContainerInterface
{

    protected $defaultConfig = [];
    /**
     * @var array
     */
    protected $userConfig = [];
    protected $providers  = [
        NullCacheServiceProvider::class,
        NullLoggerServiceProvider::class,
        SecurityServiceProvider::class,
    ];

    /**
     * Constructor.
     *
     * @param array       $config
     * @param array       $prepends
     * @param string|null $id
     */
    public function __construct(array $config = [], array $prepends = [])
    {
        $this->userConfig = $config;
        $this->registerProviders($this->getProviders());
        parent::__construct($prepends);
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }

    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge($this->providers, [
            $this->getConfig('providers'),
        ]);
    }

    protected $_config;

    /**
     * @return array
     */
    public function getConfig(string $key = null)
    {
        $config =& $this->_config;
        if (!$config) {
            $base = [
                // http://docs.guzzlephp.org/en/stable/request-options.html
                'http'      => [
                    'guzzle_config' => [
                        'verify'          => false,
                        'timeout'         => 30,
                        'connect_timeout' => 30,
                    ],
                    'saber_config'  => [
                        'use_pool' => true,
                    ],
                ],
                'request'   => [
                    'prop' => [
                        'httpGatewayUri'  => "http://gw.api.taobao.com/router/rest",
                        'httpsGatewayUri' => "https://eco.taobao.com/router/rest",
                    ],
                ],
                'topClient' => [
                    'apiKey'          => '123456',
                    'apiSecret'       => 'qwerty.',
                    'secureRandomNum' => 'qawsed',
                ],
                'providers' => [
                    GuzzleApiClientServiceProvider::class,
                ],
            ];

            $config = array_replace_recursive($base, $this->defaultConfig, $this->userConfig);
        }
        if ($key) {
            return Arr::get($config, $key, []);
        }

        return $config;
    }

    public function get($id)
    {
        return $this[$id];
    }

    public function has($id)
    {
        return isset($this[$id]);
    }

    /**
     * Magic get access.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * Magic set access.
     *
     * @param string $id
     * @param mixed  $value
     */
    public function __set($id, $value)
    {
        return $this->offsetSet($id, $value);
    }

    public function __isset($name)
    {
        return $this->offsetExists($name);
    }
}