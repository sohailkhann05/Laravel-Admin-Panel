<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $fillable = [
    	'title',
    	'icon',
    	'background',
    	'category_slug'
    ];

    public function projects()
    {
    	return $this->hasMany(Project::class);
    }
}
