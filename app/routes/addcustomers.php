<?php

use models\Customer;
use \Slim\App;

$app->post('/test', function($req, $res, $args) use ($app) {
    $body = $req->getParsedBody();
    
    $customer = Customer::where('customer_id', $body['customer_id'])->first();

    if ($customer) {
        echo 'Customer ID Already Taken';
    } else {
        $newCustomer = Customer::create([
            'name' => $body['name'],
            'phone_num' => $body['phone_num'],
            'email' => $body['email'],
            'note' => $body['note'],
            'customer_id' => $body['customer_id'],
        ]);
    }

    return $res->withStatus(201)->write(json_encode([
        
    ]));

});

