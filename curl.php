<?php

//  $pay_load = json_encode([

//     "title" => "Updated_title"
//  ]);

//  $headers = [

//     "Content-type: application/json; charset=UTF-8",
//     "Accept-language:en"
//  ];


//  $ch = curl_init();


//   curl_setopt_array($ch, [
   
//   CURLOPT_URL  => "https://jsonplaceholder.typicode.com/albums/1",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_CUSTOMREQUEST => "PATCH",
//   CURLOPT_POSTFIELDS => $pay_load,
//   CURLOPT_HTTPHEADER => $headers,
//   CURLOPT_HEADER => true
  
//   ]);


//   $date = curl_exec($ch);

//   $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//   curl_close($ch);

//   var_dump($status_code);

//   var_dump($date);


  
  ////////////////////////////// STRIPE CUSTOMER PAY ////////////
  
  $api_key = 'Access Token';

  $data = [

    'name'  =>  'mohamed',
    'email' =>  'mohamed@gmail.com'
  ];


  $ch = curl_init();

  curl_setopt_array($ch , [

   CURLOPT_URL => 'https://api.stripe.com/v1/customers' ,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POSTFIELDS => http_build_query($data),
   CURLOPT_USERPWD => $api_key
  ]);


  
  $data = curl_exec($ch);


  curl_close($ch);

  var_dump($data);



?>