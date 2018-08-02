<?php namespace models;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Tour extends Eloquent {
    public $table = 'tours';
    public $fillable = ['name'];
}