<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/controllers/HomeController.php';

$app = AppFactory::create();

/*$app->get('/', function (Request $request, Response $response, $args) {
    $ciao = new Mustache_Engine;
    $template = file_get_contents("./templates/home.mst");
    $html = $ciao->render($template, array("planet" => "ooooooooooooooooooooooooooooooooo"));

    $response->getBody()->write($html);
    return $response;
});*/

$app->get('/[{nome:[\w]+}]', 'HomeController:home');

$app->run();