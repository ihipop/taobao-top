# 淘宝开放平台（TOP） SDK for PHP7 

淘宝开放平台 = Taobao Open Platform = T.O.P = TOP

# 官方SDK存在的问题

- 没有 `namespace` 到处乱 `include`
- 代码脏乱 没有规范，存在大量PHP 4时代的遗留代码
- `Request` 类全部复制粘贴，乃不知有继承？
- 加密解密类库依赖php7.1+已经Deprecated的`Mcrypt`模块，PHP7.1+基不能正常使用
- 在执行同步逻辑的模型内通过HTTP接口上传大量统计数据

# 计划实现的功能

- [x] 完全的 `namespace`实现 + `PSR4` Autoloader
- [x] 重构设计的 `Request` 类 
- [x] 重构过的 `TopClient` 
- [ ] `TopClient`  配合重构过的 `Request` 类支持自动解密加密字段
- [x] HTTP客户端可使用任何兼容PSR7的客户端实现 如： [guzzlehttp/guzzle](https://github.com/guzzle/guzzle) [swlib/saber](https://github.com/swlib/saber)
- [x] CACHE客户端可使用任何支持PSR6的客户端实现 如：[symfony/cache](https://github.com/symfony/cache)
- [x] 移除`Mcrypt`依赖 ,改用`openssl`实现
- [ ] 官方SDK `Request` 的转换工具 ，转换官方 `SDK` 到重构过的 `Request` 类 
- [ ] 移除加密解密模块内遗留的无用方法和PHP4遗留 (10%)

# 空闲时候可能会做的功能

- [ ] 在提供异步情景模型的情况下恢复官方SDK的统计功能，并设置可选开关 
