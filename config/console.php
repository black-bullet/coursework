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
            'admin'=>[
                'class'=>'mdm\admin\Module',
                'layout' => 'left-menu',
                ],
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'path\to\models\User',
                    'idField' => 'user_id', // id field of model User
                ]
            ],
            'gii' => 'yii\gii\Module',
        ],
        'components' => [
            'authManager' => [
                'class' => 'yii\rbac\PhpManager',
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
        //'db' => $db,
        'db'=>[
            'connectionString' => 'mysql:host=localhost;dbname=semester',
            'emulatePrepare' => true,
            'username' => 'project',
            'password' => '12345678',
            'charset' => 'utf8',
            ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'admin/*', // add or remove allowed actions to this list
        ]
    ],
    'params' => $params,
];
