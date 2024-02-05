<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__ .'/../views/Home.php';

class HomeController{

    /**
     * Metodo per l'accesso alla home page
     * @method GET
     */

    function home(Request $request, Response $response, $args){

        //Fetch dei dati dal DB
        $myData = array("planet" => "000000000000000000000000000000000000", 
        "author"=> $args["nome"],
        "alunni"=>["Lodde", "Sarti", "Morali"],
        "script"=>"alert('Benvenuto!')"
        );

        $view = new Home();
        $view->setData($myData);

        $response->getBody()->write($view->render());
        return $response;
    }
}