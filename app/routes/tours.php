<?php

use models\Tour;
use \Slim\App;

// $app->config([
//     'baseUrl'=> 'http://localhost/bustraveltask/public'
// ]);

$app->post('/tours', function($req, $res, $args) use ($app) {
    $body = $req->getParsedBody();
    
    $customer = Tour::where('name', $body['name'])->first();

    if ($customer) {
        return $res->withStatus(201)->write(json_encode([
            'already'=> true
        ]));
    }

    $newCustomer = Tour::create([
        'name' => $body['name']
    ]);

    return $res->withStatus(201)->write(json_encode([
        'name' => $body['name']
    ]));

});