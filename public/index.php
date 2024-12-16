<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\cores\Application;


$app = new Application(__DIR__);


$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');


$app->run();
