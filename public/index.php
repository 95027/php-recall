<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require __DIR__ . '/../core/helpers.php';

$GLOBALS['config'] = [
    'notification' => require base_path('config/notification.php'),
];

use Core\App;

session_start();

$app = new App();

$app->run();
