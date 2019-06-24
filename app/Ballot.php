<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{

	public function candidates(){
		return $this->hasMany(Candidate::class);
	}
}
