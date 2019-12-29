<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);
$app->addBodyParsingMiddleware();
$app->setBasePath("/apirestexample");


$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!!!");
    return $response;
});

$app->post("/test", function (Request $request, Response $response, $args) {
    $product = [
        "CodigoProduto" => 1,
        "Nome" => "Teste"
    ];

    $response->getBody()->write(json_encode($product));
    return $response->withHeader('Content-Type', 'application/json')
        ->withStatus(201);
});

$app->post('/books', function (Request $request, Response $response, $args) {
    $valor = $request->getBody();
    return $response->withBody($valor);
});

$app->run();
