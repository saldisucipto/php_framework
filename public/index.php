<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;
use app\cores\Application;


$app = new Application(dirname(__DIR__));


$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/', [SiteController::class, 'home']);
$app->router->post('/contact', [SiteController::class, 'handle_contact']);


$app->run();
