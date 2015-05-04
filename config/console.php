<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

return [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii'],
    'controllerNamespace' => 'app\commands',
        'modules' => [
            'admin' => [
                'class' => 'mdm\admin\Module',
            ],
            'debug' => 'yii\debug\Module',
            'gii' => 'yii\gii\Module',
        ],
        'components' => [
            'authManager' => [
                'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
                'cache' => 'cache,' 
            ],
            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],
            'log' => [
                'targets' => [
                    [
                        'class' => 'yii\log\FileTarget',
                        'levels' => ['error', 'warning'],
                    ],
                ],
            ],
            'db' => $db,
        ],
    //'db' => $db,
    'params' => $params,
];
