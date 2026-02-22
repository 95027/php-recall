<?php

use App\Controllers\HomeController;



$router->get('/', [HomeController::class, 'home']);
$router->get('/about', [HomeController::class, 'about']);
$router->get('/send-notification', [HomeController::class, 'sendNotification']);
