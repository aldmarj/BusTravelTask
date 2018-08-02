<?php

use models\Customer;
use \Slim\App;

$app->post('/customer/update', function($req, $res, $args) use ($app) {
    $body = $req->getParsedBody();
    
    $customer = Customer::where('customer_id', $body['customer_id'])->first();

    if ($customer) {
      Customer::where('customer_id', $body['customer_id'])->update(array('is_current' => 0));
      $revisedCustomer = Customer::create([
                'name' => $body['name'],
                'phone_num' => $body['phone_num'],
                'email' => $body['email'],
                'note' => $body['note'],
                'customer_id' => $body['customer_id'],
                'is_current' => 1
        ]);   
        
        echo 'Customer Updated';
    } else {
        echo 'No Such Customer Exists';
    }

});