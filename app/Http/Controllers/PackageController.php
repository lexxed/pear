<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Agency;

class PackageController extends Controller
{
    public function show($idx)
    {
        $package = Package::where('idx', $idx)->firstOrFail();

	    $agency = Agency::where('label', $package->agencylabel)->firstOrFail();



        //var_dump($agency);

		return view('package')->with(['package' => $package, 'agency' => $agency]);
		
    	//} else {
    	//	return view('hotel')->with(['hotel' => $hotel, 'agodahotel' => $agodahotel, 'similar' => $similar, 'videos' => $videos]);    		
    	//}
    	
    }      
}

