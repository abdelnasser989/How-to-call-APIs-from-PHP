<?php


require_once 'C:\Users\<Nasser>\vendor\autoload.php';



 $payload = json_encode([

    "title" => "Updated title"
 ]);

 $headers = [

    "Content-type" => "application/json; charset=UTF-8"
 ];
  
  $client = new GuzzleHttp\Client();

  $response = $client->patch("https://jsonplaceholder.typicode.com/albums/1", [
    "headers" => $headers,
     "body"   => $payload
  ]);

//   var_dump((string) $response->getBody());
 
  var_dump($response->get_header('content-type'));




?>