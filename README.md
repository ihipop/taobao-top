# 淘宝开放平台（TOP） SDK for PHP7 

淘宝开放平台 = Taobao Open Platform = T.O.P = TOP

状态：`开发中`

# 官方SDK存在的问题

- 没有 `namespace` 到处乱 `include`
- 代码脏乱 没有规范，存在大量PHP4时代的遗留代码
- `Request` 类全部复制粘贴，乃不知有继承？
- 加密解密类库依赖php7.1+已经Deprecated的`Mcrypt`模块，PHP7.1+基不能正常使用
- 在执行同步逻辑的模型内通过HTTP接口上传大量统计数据

# 计划实现的功能（Feature）

- [x] 完全的 `namespace`实现 + `PSR4` Autoloader
- [x] 重构设计的 `Request` 类 
- [x] 重构过的 `TopClient` 
- [x] `TopClient`  配合重构过的 `Request` 类支持自动解密加密字段
- [x] HTTP客户端可使用任何兼容`PSR7`的客户端实现 如： [guzzlehttp/guzzle](https://github.com/guzzle/guzzle) [swlib/saber](https://github.com/swlib/saber)
- [x] CACHE客户端可使用任何兼容`PSR6`的客户端实现 如：[symfony/cache](https://github.com/symfony/cache)
- [x] 移除`Mcrypt`依赖 ,改用`openssl`实现
- [x] 接口名称[自动映射](#默认命名规则)
- [ ] 官方SDK `Request` 的转换工具 ，转换官方 `SDK` 到重构过的 `Request` 类 
- [ ] 移除加密解密模块`SecurityClient`以及`TopClient`内遗留的无用方法和PHP4遗留 (10%)

# 空闲时候可能会做的功能

- [ ] 在提供异步情景模型的情况下恢复官方SDK的统计功能，并设置可选开关 

# 安装

本项目正在开发中，你可能需要执行`一次`如下的composer设置才能正常安装开发版

```bash
composer config prefer-stable true
composer config minimum-stability dev
composer config prefer-dist true 
```

然后

```bash
composer require ihipop/taobao-top
```

# 快速开始

## 快速初始化客户端
除了手动new客户端，我封装了一个简易工厂类
```php
$topClient = Factory::guzzleTopClient([
            'type'         => $tokenType,
            'logger'       => $logger,//符合PSR日志标准的客户端
            'cache_client' => $this->cacheClient,//符合PSR标准的缓存客户端（尚且有BUG）
        ]);
```

## 初始化请求类

以获取订单为例
```php
$request = new GetTradesSold();

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
])->setUseHasNext('true')->setPageSize($perPage);
$request->setStartCreated(date('Y-m-d H:i:s', $startAt))->setEndCreated(date('Y-m-d H:i:s', $endAt));
```

## 发送请求

```php
$response = $topClient->execute($request, $accessToken)
```

## 自动解密

`GetTradesSold` 类已经封装自动解密方法 ，所以上面的Request类出来就是明文字段 

下面对自动解密的配置做出摘要说明

```php
public $encryptedFields = [
        'trades.trade' => [
            '@' => [//订单1
                'receiver_name'                => 'name',
                'buyer_nick'                   => 'nick',
                'receiver_mobile'              => 'mobile',
                'receiver_phone'               => 'phone',
                'service_orders.service_order' => [
                    '@' => [//服务订单1
                        'buyer_nick' => 'nick',
                    ],
                ],
            ],
        ],
    ];
```

`@`表示这是一组同样结构的数组

所以 上面的配置表示:
对响应内容内的 `$response['trades']['trade']` 这个数组的 `receiver_name` 等字段做解密，
其中`receiver_name`的加密类型是`name`。其他加密类型自己看淘宝文档。

## 撰写自己的`$request`

### 默认命名规则

默认的，只要按照约定撰写类名称，会自动映射成接口名称，比如：

接口名称： _taobao_.`trades`.`sold`.**get**

最后一个动词（本例是**get**）提前，放到 _taobao_ 的namespace下,中间部分改成大驼峰

也就是 \\ihipop\\TaobaoTop\\requests\\_taobao_\\**Get**`TradesSold`

本例中，_taobao_ 换成 _alibaba_ 同理，比如 _alibaba_.`orp`.**recommend** ，按照规则应该写成

 \\ihipop\\TaobaoTop\\requests\\_alibaba_\\**Recommend**`Orp`

### 任性的写名称

你可以任性的写起名，只要在类里面设置好 ``$apiName`` 属性，则请求的时候优先读取这个名称

### 别忘记自动解密配置

见 [自动解密](#自动解密)

# 私有托管

假设你托管的私有仓库url是 `https://example.com/composer/taobao-top.git`

```bash
composer config repositories.taobao-top vcs https://example.com/composer/taobao-top.git
```

其他照旧
