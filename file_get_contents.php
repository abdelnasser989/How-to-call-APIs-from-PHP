<?php

 $pay_load = json_encode([

    "title" => "updated_title"
 ]);

 $options =[

    "http" => [

        "method" => "PATCH",
        "header" => "Content-type: application/json; charset=UTF-8",
        "content"=> $pay_load 
    ]
 ];  

 $context = stream_context_create($options);

 $data =  file_get_contents('https://jsonplaceholder.typicode.com/albums/1', false ,
 $context);

 var_dump($data);

 print_r($http_response_header);