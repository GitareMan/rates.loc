<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'cookieValidationKey' => '4eH2LRz3aZb4YUxAnhzZy7zM6hsW1LRw',
        ],
        'user' => [
            'identityClass' => 'app\models\User', 
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',            
                
            ],
        ],
        'CbRF' => [
            'class' => 'microinginer\CbRFRates\CBRF',
            'defaultCurrency' => "EUR"
        ],

    ],
    'params' => $params,
    
    'modules' => [
        'rates' => [
            'class' => 'app\modules\rates\Rates',
        ],
    ],
    
];



if (YII_ENV_DEV) {
    // конфигурации для development режима.
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
