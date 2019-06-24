<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function ballot(){
    	return $this->belongsTo(Ballot::class);
	}
	public function fullname(){
    	return $this->first_name . " " . $this->last_name;
	}
}
