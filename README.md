<h1 align="center">Laravel Api Response</h1>

<p align="center">Laravel API 响应封装</p>

[![Build Status](https://travis-ci.org/gzoran/laravel-api-response.svg?branch=master)](https://travis-ci.org/gzoran/laravel-api-response)
![StyleCI build status](https://github.styleci.io/repos/160281187/shield) 

## 框架要求

Laravel >= 5.5

## 安装

```shell
composer require "gzoran/laravel-api-response:~2.0"
```

## 使用

在你的控制器上使用 ApiResponseTrait，即可在控制器使用封装的响应方法。

```php
class ApiController extends Controller
{
    use ApiResponseTrait;
    
    public function foo()
    {
        return $this->ok();
    }
    
    ···
}
```

## 响应方法

> 当 data 参数为空时，默认返回以 message 为键，方法名为内容的 json 响应。如果你想自定义键名，请重载 protected static $message 静态属性。

```php

// 基本响应
response($data = null, int $status = 200, array $headers = [])

// 成功响应 状态码 200
ok($data = [], array $headers = [])

// 已创建响应 状态码 201
created($data = [], array $headers = [])

// 请求已接受响应 状态码 202
accepted(array $headers = [])

// 无内容响应 状态码 204
notContent(array $headers = [])

// 错误请求响应 状态码 400
badRequest($data = [], array $headers = [])

// 请求未认证响应 状态码 401
unauthorized($data = [], array $headers = [])

// 请求被禁止响应 状态码 403
forbidden($data = [], array $headers = [])

// 资源未找到响应 状态码 404
notFound($data = [], array $headers = [])

// 方法不允许响应 状态码 405
methodNotAllowed($data = [], array $headers = [])

// 无法接受请求响应 状态码 406
notAcceptable($data = [], array $headers = [])

// 请求超时响应 状态码 408
requestTimeout($data = [], array $headers = [])

// 冲突响应 状态码 409
gonfilct($data = [], array $headers = [])

// 资源已不存在响应 状态码 410
gone($data = [], array $headers = [])

// 请求体过大响应 状态码 413
payloadTooLarge($data = [], array $headers = [])

// 请求 URI 过长响应 状态码 414
requestURITooLong($data = [], array $headers = [])

// 媒体类型不被支持响应 状态码 415
unsupportedMediaType($data = [], array $headers = [])

// 语义错误响应 状态码 422
unprocessableEntity($data = [], array $headers = [])

// 请求次数过多响应 状态码 429
tooManyRequest($data = [], array $headers = [])

// 服务器错误响应 状态码 500
internalServerError($data = [], array $headers = [])

// 服务不可用响应 状态码 503
serviceUnavailable($data = [], array $headers = [])

```

## License

MIT