<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'project_category_id',
    	'title',
    	'description',
    	'link',
    	'banner',
    	'project_slug'
    ];

    public function category()
    {
    	return $this->belongsTo(ProjectCategory::class,'project_category_id');
    }
}
