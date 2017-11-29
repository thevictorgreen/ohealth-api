<?php

  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  // DECLARE ENDPOINTS HERE
  require './endpoints/replay.php';
  require './endpoints/states.php';
  require './endpoints/insurance.php';

  // IMPORT
  require './vendor/autoload.php';

  // INIT
  $app = new \Slim\App;

  // CONNECT ROUTES TO ENDPOINTS
  $app->get('/hello/{name}', replay);
  $app->get('/states', states);
  $app->get('/insurance/{st_id}', insurance);


  // RUN APPLICATION
  $app->run();

?>
