<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\cores\Application;


$app = new Application(dirname(__DIR__));


$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/', [SiteController::class, 'home']);
$app->router->post('/contact', [SiteController::class, 'handle_contact']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);



$app->run();
