<?php

use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;
use AreaGestao\CursosController;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);
$app->addBodyParsingMiddleware();
$app->setBasePath("/apirestexample");

//http://www.slimframework.com/docs/v4/objects/routing.html#route-groups
$app->group("/cursos", function (RouteCollectorProxy $group) {
    $group->post("", CursosController::class . ":incluir");
    $group->put("/{id}", CursosController::class . ":alterar");
});

$app->run();
