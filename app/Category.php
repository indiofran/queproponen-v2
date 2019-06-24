<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function proposals(){
		return $this->hasMany(Proposals::class)->where("approved", 1);
	}
}
