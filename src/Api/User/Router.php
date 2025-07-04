<?php
declare(strict_types=1);
namespace RestAPI\Api\User;

use Slim\Routing\RouteCollectorProxy;
use RestAPI\Api\User\Controller;

class Router {
    public function __invoke(RouteCollectorProxy $router) {
        $router->get('/', [Controller::class, "findAll"]);
        $router->get('/{id:[0-9]+}/', [Controller::class, "filter"]);
        $router->get('/{username:[a-z0-9-]+}/', [Controller::class, "filter"]);
    }
}