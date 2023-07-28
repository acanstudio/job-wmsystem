<?php
return [
    'isTest' => env('EASYSMS_TEST', false),
    'timeout' => 5.0, // HTTP 请求的超时时间（秒）

    'default' => [ // 默认发送配置
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class, // 网关调用策略，默认：顺序调用
        'gateways' => [ // 默认可用的发送网关
            'luosimao',
        ],
    ],
    'gateways' => [ // 可用的网关配置
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'luosimao' => [
            'api_key' => env('EASYSMS_LUOSIMAO_KEY', 'test'),
        ],
        'yunpian' => [
            'api_key' => '824f0ff2f71cab52936axxxxxxxxxx',
        ],
        'aliyun' => [
            'access_key_id' => '',
            'access_key_secret' => '',
            'sign_name' => '',
        ],
    ],
    'verifyCode' => [
        'signup' => [
            'length' => 4, // 验证码长度，可以设置动态长度，如 [4,8]
            'sleep' => 60, // 两次发送时间间隔
            'sendTimes' => 5, // 同一个手机号每天发送频率
            'expire' => 300, // 验证码有效时间
        ],
        'signin' => [
            'length' => 5,
            'sleep' => 5,
            'sendTimes' => 40,
            'expire' => 60 * 5 * 6,
        ],
        'signupin' => [
            'length' => 4,
            'sleep' => 5,
            'sendTimes' => 40,
            'expire' => 60 * 5,
        ],
        'bind' => [
            'length' => 4,
            'sleep' => 6,
            'sendTimes' => 100,
            'expire' => 10000,
        ],
    ],
];
