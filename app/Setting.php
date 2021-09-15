<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    	'opening_day',
    	'closing_day',
    	'opening_time',
    	'closing_time',
    	'phone_number',
    	'email_address',
    	'facebook_link',
    	'instagram_link',
    	'location_address',
    	'site_name',
    	'about_info_short',
    	'about_info_long',
    	'about_banner',
    	'site_logo',
        'fav_icon',
        'setting_slug'
    ];
}
