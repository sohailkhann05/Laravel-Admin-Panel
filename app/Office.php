<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
    	'name',
    	'phone',
    	'email',
    	'address',
    	'office_slug'
    ];
}
