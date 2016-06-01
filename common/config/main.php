<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		 'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                /**
                 * 错误级别日志：当某些需要立马解决的致命问题发生的时候，调用此方法记录相关信息。
                 * 使用方法：Yii::error()
                 */
                [
                    'class' => 'yii\log\FileTarget',
                    // 日志等级
                    'levels' => ['error'],
                    // 被收集记录的额外数据
                    'logVars' => ['_GET', '_POST', '_FILES', '_COOKIE', '_SESSION', '_SERVER'],
                    // 指定日志保存的文件名
                    'logFile' => '@app/runtime/logs/error/app.log',
                ],
                /**
                 * 警告级别日志：当某些期望之外的事情发生的时候，使用该方法。
                 * 使用方法：Yii::warning()
                 */
                [
                    'class' => 'yii\log\FileTarget',
                    // 日志等级
                    'levels' => ['warning'],
                    // 被收集记录的额外数据
                    'logVars' => ['_GET', '_POST', '_FILES', '_COOKIE', '_SESSION', '_SERVER'],
                    // 指定日志保存的文件名
                    'logFile' => '@app/runtime/logs/warning/app.log',
                ],
                /**
                 * info 级别日志：在某些位置记录一些比较有用的信息的时候使用。
                 * 使用方法：Yii::info()
                 */
                [
                    'class' => 'yii\log\FileTarget',
                    // 日志等级
                    'levels' => ['info'],
                    // 被收集记录的额外数据
                    'logVars' => ['_GET', '_POST', '_FILES', '_COOKIE', '_SESSION', '_SERVER'],
                    // 指定日志保存的文件名
                    'logFile' => '@app/runtime/logs/info/app.log',
                ],
                /**
                 * trace 级别日志：记录关于某段代码运行的相关消息。主要是用于开发环境。
                 * 使用方法：Yii::trace()
                 */
                [
                    'class' => 'yii\log\FileTarget',
                    // 日志等级
                    'levels' => ['trace'],
                    // 被收集记录的额外数据
                    'logVars' => ['_GET', '_POST', '_FILES', '_COOKIE', '_SESSION', '_SERVER'],
                    // 指定日志保存的文件名
                    'logFile' => '@app/runtime/logs/trace/app.log',
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info'],
                    'logVars' => [], //除了except对应的分类之外，其他的都写入到
                    'categories' => ['curl'],
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['info'],
                    'categories' => ['request'],
                    'logVars' => [], //除了except对应的分类之外，其他的都写入到
                ],
            ],
        ],
    ],
];
