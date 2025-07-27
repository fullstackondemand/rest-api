<?php
declare(strict_types=1);
namespace App\Api\Category;

use Slim\Routing\RouteCollectorProxy;
use App\Api\Category\Controller;

class Router {
    public function __invoke(RouteCollectorProxy $router) {
        $router->get('/', [Controller::class, "findAll"]);
        $router->get('/{id:[0-9]+}/', [Controller::class, "filter"]);
        $router->get('/{slug:[a-z0-9-]+}/', [Controller::class, "filter"]);
    }
}