<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Agency;


class SearchController extends Controller
{
    public function search(Request $request)
    {
    	//dd($request->q);
    	$message = '';

        $packages = Package::where('destination', 'LIKE', '%' . $request->q . '%')
                        //where('destination', '=', $destination)
                        ->where('status', '=', 'live')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
        				->paginate(20);
/*        				
        $hotels = Hotel::where('hotelname', 'LIKE', '%'.$request->q.'%')
                        ->where('live', '!=', '0')  
                        ->where('photo1', '!=', '')
        				->orderBy('vidcount', 'desc')
                        ->orderBy('rating_average', 'desc')
        				->paginate(10);
*/
		if($packages->isEmpty()) {

			$message = "Sorry, no results found for ";
        	$packages = Package::where('status', '=', 'live')  
        					->orderBy('cpc', 'desc')
        					//->limit(10)
        					//->get();
        					->paginate(20);
		}        				    	

    	return view('search')->with(['packages' => $packages, 'q' => $request->q,'message' => $message]);
    }   
}
