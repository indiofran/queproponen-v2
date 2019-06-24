<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Http\Request;

class PartiesController extends Controller
{
    public function index(){
    	$parties = Party::all();
    	return response()->json($parties);
	}
	public function show(Party $party){
    	return response()->json($party);
	}
}
