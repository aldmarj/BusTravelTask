<?php

use models\Customer;
use \Slim\App;

$app->get('/customer/{c_id}', function($request, $response, $args) use ($app) {

    $customer = Customer::where('customer_id', $args['c_id'])->latest();
   
});