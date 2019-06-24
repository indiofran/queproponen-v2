<?php

namespace App\Http\Controllers;

use App\Category;
use App\Party;
use App\Proposals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProposalsController extends Controller
{
    public function getByCategory(Party $party){
    	$categories = Category::all();
    	foreach ($categories as $category){
			$category->partyProposals = $party->proposals->where("category_id", $category->id);
		}
    	return $categories;
	}

	public function index(){
		$categories = Category::all();
		$categories->load(['proposals','proposals.party']);
		return response()->json($categories);
	}

	public function store(Request $request){
    	DB::beginTransaction();
    	try{
			$proposal = new Proposals($request->all());
		}catch (\Exception $exception){
			DB::rollBack();
    		if(App::environment()== 'prod'){
				return response()->json($exception->getMessage());
			}else{
				return response()->json($exception->getTrace());
			}
		}
		$proposal->save();
		DB::commit();
		return response()->json($proposal);
	}
}
