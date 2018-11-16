<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    protected $appends = ['full_path'];
    
    public function getFullPathAttribute()
	{
		$full_path = asset('storage/banners/' . $this->path);
    	return $full_path;
	}
}
