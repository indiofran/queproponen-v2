<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposals extends Model
{
	protected $fillable = ['party_id','category_id','title','description','source'];
	public function party(){
    	return	$this->belongsTo(Party::class);
	}
	public function category(){
    	return $this->belongsTo(Category::class);
	}
	public static function active(){
    	return Proposals::where('approved', 1)->get();
	}
}
