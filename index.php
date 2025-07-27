<?php
use RestJS\App;
use App\Api\Category\Router as CategoryRouter;
use App\Api\User\Router as UserRouter;
use App\Api\User\Controller as UserController;
use App\Middleware\Authorization;

require __DIR__ . '/vendor/autoload.php';

/** Create Application */
$app = App::create(__DIR__);

// Authentication Routes
$app->post('/auth/login/', [UserController::class, 'login']);
$app->post('/auth/logout/', [UserController::class, 'logout'])->add(Authorization::class);
$app->post('/auth/refreshtoken/', [UserController::class, 'regenerateAccessToken']);

// Application Routes
$app->group('/categories', CategoryRouter::class)->add(Authorization::class);
$app->group('/users', UserRouter::class)->add(Authorization::class);

// Application Execute or Run
$app->run();