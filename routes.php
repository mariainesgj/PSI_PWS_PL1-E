<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/BOController.php';
require_once 'controllers/FOController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'empresa' => [
        'index' => ['GET', 'BOController', 'index'],
        'show' => ['POST', 'BOController', 'show'],
    ],
    'home' => [
        'index' => ['GET', 'HomeController', 'index'],
    ],
    'user' => [
        'index' => ['GET', 'FOController', 'index'],
        'show' => ['GET', 'FOController', 'show'],
        'create' => ['GET', 'FOController', 'create'],
        'store' => ['POST', 'FOController', 'store'],
        'edit' => ['GET', 'FOController', 'edit'],
        'update' => ['POST', 'FOController', 'update'],
        'delete' => ['GET', 'FOController', 'delete'],
    ],
    'iva' =>[
        'index' => ['GET','BOController','index'],
        'show' => ['GET','BOController','show'],
        'create' => ['GET','BOController','create'],
        'store' => ['POST','BOController','store'],
        'edit' => ['GET','BOController','edit'],
        'update' => ['POST','BOController','update'],
        'delete' => ['GET','BOController','delete'],
    ],
    'servico' =>[
        'index' => ['GET','BOController','index'],
        'show' => ['GET','BOController','show'],
        'create' => ['GET','BOController','create'],
        'store' => ['POST','BOController','store'],
        'edit' => ['GET','BOController','edit'],
        'update' => ['POST','BOController','update'],
        'delete' => ['GET','BOController','delete'],
    ],
    'folhaobra' =>[
        'index' => ['GET','BOController','index'],
        'show' => ['GET','BOController','show'],
        'create' => ['GET','BOController','create'],
        'store' => ['POST','BOController','store'],
        'edit' => ['GET','BOController','edit'],
        'update' => ['POST','BOController','update'],
        'delete' => ['GET','BOController','delete'],
    ],
    'linhaobra' =>[
        'index' => ['GET','BOController','index'],
        'show' => ['GET','BOController','show'],
        'create' => ['GET','BOController','create'],
        'store' => ['POST','BOController','store'],
        'edit' => ['GET','BOController','edit'],
        'update' => ['POST','BOController','update'],
        'delete' => ['GET','BOController','delete'],
    ],
]
?>