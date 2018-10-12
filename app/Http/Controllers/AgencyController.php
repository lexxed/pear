<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Agency;

class AgencyController extends Controller
{
    public function show($agencylabel)
    {
        //$package = Package::where('idx', $idx)->firstOrFail();

	    $agency = Agency::where('label', $agencylabel)->firstOrFail();

        $packages = Package::where('agencylabel', '=' ,$agencylabel)
                        //where('destination', '=', $destination)
                        ->where('status', '=', 'live')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
        				//->get();
        				->paginate(20);

        $packagesPopular = Package::where('status', '=', 'live')  
                        //where('destination', '=', $destination)
                        //->where('status', '=', 'live')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				//->orderBy('cpc', 'desc')
        				->inRandomOrder()
                        //->orderBy('rating_average', 'desc')
        				//->get();
        				->limit(20)
        				->get();
        //var_dump($agency);

		return view('agency')->with(['agency' => $agency, 'packages' => $packages, 'packagesPopular' => $packagesPopular]);
		    	
    }        

    public function list($start)
    {
        //$package = Package::where('idx', $idx)->firstOrFail();

		$start = str_limit($start, $limit = 1, $end = "");

        $agency = Agency::where('fullname', 'LIKE', $start . '%')
                        //where('destination', '=', $destination)
                        //->where('status', '=', 'live')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				//->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
        				->get();
        				//->paginate(20);

        //var_dump($agency);

		return view('agencylist')->with(['agency' => $agency, 'start' => $start]);
		
    	//} else {
    	//	return view('hotel')->with(['hotel' => $hotel, 'agodahotel' => $agodahotel, 'similar' => $similar, 'videos' => $videos]);    		
    	//}
    	
    }       

    public function location($location)
    {
        //$package = Package::where('idx', $idx)->firstOrFail();

		//$start = str_limit($start, $limit = 1, $end = "");
		$location =  str_replace('-', ' ', $location);


        $agency = Agency::where('address', 'LIKE', '%' . $location . '%')
                        //where('destination', '=', $destination)
                        //->where('status', '=', 'live')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				//->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
        				->get();
        				//->paginate(20);

        //var_dump($agency);

		return view('agencylocation')->with(['agency' => $agency, 'location' => $location]);
		
    	//} else {
    	//	return view('hotel')->with(['hotel' => $hotel, 'agodahotel' => $agodahotel, 'similar' => $similar, 'videos' => $videos]);    		
    	//}
    	
    } 

}
