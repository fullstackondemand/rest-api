<?php
use RestJS\App;
use RestAPI\Api\User\Router as UserRouter;
use RestAPI\Api\User\Controller as UserController;
use RestAPI\Middleware\Authorization;

require __DIR__ . '/vendor/autoload.php';

/** Create Application */
$app = App::create(__DIR__);

// Authentication Routes
$app->post('/auth/login/', [UserController::class, 'login']);
$app->post('/auth/logout/', [UserController::class, 'logout'])->add(Authorization::class);
$app->post('/auth/refreshtoken/', [UserController::class, 'regenerateAccessToken']);

// Application Routes
$app->group('/users', UserRouter::class)->add(Authorization::class);

// Application Execute or Run
$app->run();