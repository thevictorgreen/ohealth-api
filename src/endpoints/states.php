<?php

  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;


  function states( Request $request, Response $response ) {

    // DATABASE CONNECTION CODE
    $db_host = getenv('DB_HOST');
    $db_name = getenv('DB_NAME');
    $db_user = getenv('DB_USER');
    $db_pass = getenv('DB_PASS');
    $db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8mb4',$db_user,$db_pass);
    // DATABASE CONNECTION CODE

    $results = $db->query("Select * from states");

    $response->getBody()->write( $results->rowCount() );

    return $response;
  }

?>
