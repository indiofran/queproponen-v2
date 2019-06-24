<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function parent(){
    	return $this->belongsTo(Place::class, "parent_id");
	}
	public function ballot(){
    	return $this->hasMany(Ballot::class);
	}
}
