<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User Extends Eloquent
{
    public $name;

    public $timestamps = [];

    protected $fillable = ['username', 'email'];
}