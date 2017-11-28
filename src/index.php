<?php

  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  // DECLARE ENDPOINTS HERE
  require './endpoints/replay.php';

  // IMPORT
  require './vendor/autoload.php';

  // INIT
  $app = new \Slim\App;

  // CONNECT ROUTES TO ENDPOINTS
  $app->get('/hello/{name}', replay);

  // RUN APPLICATION
  $app->run();

?>
