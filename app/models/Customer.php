<?php

namespace models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent {
    public $table = 'customers';
    public $fillable = ['name', 'phone_num', 'email','note', 'is_current', 'revision', 'customer_id', 'last_verified_at' ];
}