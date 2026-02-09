<?php

use App\Controllers\HomeController;



$router->get('/', [HomeController::class, 'home']);
$router->get('/about', [HomeController::class, 'about']);
