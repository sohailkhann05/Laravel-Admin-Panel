<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smtp extends Model
{
    protected $fillable = [
    	'driver',
    	'host',
    	'port',
    	'username',
    	'password',
    	'encryption',
    	'smtp_slug'
    ];
}
