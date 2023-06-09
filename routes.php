<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/BOController.php';
require_once 'controllers/FOController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/FolhaObraController.php';
require_once 'controllers/LinhaObraController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'bo' => [
        'index' => ['GET', 'BOController', 'index'],
        'login' => ['POST', 'BOController', 'login'],
        'logout' => ['GET', 'BOController', 'logout'],
    ],
    'fo' => [
        'index' => ['GET', 'FOController', 'index'],
        'login' => ['POST', 'FOController', 'login'],
        'logout' => ['GET', 'FOController', 'logout'],
    ],
    'home' => [
        'index' => ['GET', 'HomeController', 'index'],
    ],
    'empresa' => [
        'index' => ['GET', 'EmpresaController', 'index'],
        'show' => ['GET', 'EmpresaController', 'show'],
        'create' => ['GET', 'EmpresaController', 'create'],
        'store' => ['POST', 'EmpresaController', 'store'],
        'edit' => ['GET', 'EmpresaController', 'edit'],
        'update' => ['POST', 'EmpresaController', 'update'],
        'delete' => ['GET', 'EmpresaController', 'delete'],
    ],
    'user' => [
        'index' => ['GET', 'UserController', 'index'],
        'show' => ['GET', 'UserController', 'show'],
        'create' => ['GET', 'UserController', 'create'],
        'store' => ['POST', 'UserController', 'store'],
        'edit' => ['GET', 'UserController', 'edit'],
        'update' => ['POST', 'UserController', 'update'],
        'delete' => ['GET', 'UserController', 'delete'],
    ],
    'iva' =>[
        'index' => ['GET','IvaController','index'],
        'show' => ['GET','IvaController','show'],
        'create' => ['GET','IvaController','create'],
        'store' => ['POST','IvaController','store'],
        'edit' => ['GET','IvaController','edit'],
        'update' => ['POST','IvaController','update'],
        'delete' => ['GET','IvaController','delete'],
    ],
    'servico' =>[
        'index' => ['GET','ServicoController','index'],
        'show' => ['GET','ServicoController','show'],
        'create' => ['GET','ServicoController','create'],
        'store' => ['POST','ServicoController','store'],
        'edit' => ['GET','ServicoController','edit'],
        'update' => ['POST','ServicoController','update'],
        'delete' => ['GET','ServicoController','delete'],
    ],
    'folhaobra' =>[
        'index' => ['GET','FolhaObraController','index'],
        'show' => ['GET','FolhaObraController','show'],
        'create' => ['GET','FolhaObraController','create'],
        'store' => ['POST','FolhaObraController','store'],
        'edit' => ['GET','FolhaObraController','edit'],
        'update' => ['POST','FolhaObraController','update'],
        'delete' => ['GET','FolhaObraController','delete'],
    ],
    'linhaobra' =>[
        'index' => ['GET','LinhaObraController','index'],
        'show' => ['GET','LinhaObraController','show'],
        'create' => ['GET','LinhaObraController','create'],
        'store' => ['POST','LinhaObraController','store'],
        'edit' => ['GET','LinhaObraController','edit'],
        'update' => ['POST','LinhaObraController','update'],
        'delete' => ['GET','LinhaObraController','delete'],
    ],
]
?>
