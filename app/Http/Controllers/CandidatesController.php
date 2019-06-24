<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function byParty(Party $party){
    	$candidates = array();
    	$ballots = $party->ballots;
    	foreach ($ballots as $ballot){
    		foreach($ballot->candidates as $candidate){
    			array_push($candidates, $candidate);
			}
		}
    	return response()->json($candidates);
	}
}
