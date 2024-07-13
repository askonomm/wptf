<?php

use App\Controllers\SiteController;
use Asko\Router\Router;

return function (Router $router) {
    $router->get('/', [SiteController::class, 'index']);
    $router->get('/{slug}', [SiteController::class, 'post']);
};