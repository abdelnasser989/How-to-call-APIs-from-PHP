<?php

require_once 'C:\Users\<Nasser>\vendor\autoload.php';

$api_key = 'Token???';

$data = [

  'name'  =>  'mohamed',
  'email' =>  'mohamed989@gmail.com'
];


 

 $stripe = new \Stripe\StripeClient($api_key);

 $customer = $stripe->customers->create($data);

 echo $customer;

?>