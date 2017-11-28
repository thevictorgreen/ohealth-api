<?php

  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  function replay( Request $request, Response $response ) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("What up doe, $name");
    return $response;
  }

  require './vendor/autoload.php';

  $app = new \Slim\App;

  $app->get('/hello/{name}', replay);

  $app->run();

?>
