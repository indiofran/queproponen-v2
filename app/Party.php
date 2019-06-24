<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    public function place(){
    	return $this->belongsTo(Place::class);
	}
	public function ballots(){
    	return $this->hasMany(Ballot::class);
	}
	public function proposals(){
    	return $this->hasMany(Proposals::class)->where('approved',1);
	}
}
