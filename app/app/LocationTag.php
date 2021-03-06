<?php

namespace App;
use Eloquent;

class LocationTag extends Eloquent
{
    protected $fillable = [
        'name', 'description',
    ];
	
	protected $table = 'location_tag';
	
    public function locations()
    {
        return $this->belongsToMany('App\Location');
    }
}
