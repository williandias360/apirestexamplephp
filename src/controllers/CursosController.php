<?php

namespace AreaGestao;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class CursosController {

    protected $containerInterface;

    function __construct(ContainerInterface $containerInterface = null) {
        if (!is_null($containerInterface)) {
            $this->containerInterface = $containerInterface;
        }
    }

    public function incluir(ServerRequestInterface $request, ResponseInterface $response, array $args) {
        $response->getBody()->write(json_encode([
            "CodigoCurso" => 1,
            "Nome"        => "Curso de PHP",
        ]));
        return $response->withHeader('Content-Type', 'application/json')
                        ->withStatus(201);
    }

    public function alterar(ServerRequestInterface $request, ResponseInterface $response, array $args) {

        return $response->withHeader("Content-Type", "application/json")
                        ->withStatus(202);
    }

}
