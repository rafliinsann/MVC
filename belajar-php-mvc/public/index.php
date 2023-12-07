<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RafliInsan\BelajarPhpMvc\App\Router;
use RafliInsan\BelajarPhpMvc\View\Index;
use RafliInsan\BelajarPhpMvc\View\Login;
use RafliInsan\BelajarPhpMvc\View\lndex;

// Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/index', Index::class, 'index');
Router::add('GET', '/login', Login::class, 'login');
Router::add('GET', '/lndex', lndex::class, 'lndex');

Router::run();


?>