<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Agency;


class PackagesController extends Controller
{
    public function show($destination)
    {

        //$cities = Cities::where('slug', $cityslug)->firstOrFail();
        //$city = $cities->city;

        $destination = str_replace("-"," ",$destination);


        $packages = Package::where('destination', 'LIKE', '%' . $destination . '%')
                        //where('destination', '=', $destination)
                        ->where('status', '=', 'live')  
        				//->where('star_rating', '>', $star_limit)
                        //->where('photo1', '!=', '')
        				->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
        				->paginate(20);
                        //->simplePaginate(10);
           				//->get();    

        /*				
        $similar = Hotel::where('city', '=', $city)
                              ->where('live', '!=', '0')  
                              ->where('star_rating', '>', $star_limit)
                              ->where('photo1', '!=', '')
                              ->get()
                              ->random(3);  
        */

        //with('agodahotel')
        //return view('hotels',  compact('hotels'));               				

		//return view('hotels')->with(['hotels' => $hotels, 'similar' => $similar, 'country' => $country, 'city' => $city, 'cityslug' => $cityslug]);    		           		
        //var_dump($packages);

        return view('travel-packages')->with(['packages' => $packages, 'destination' => $destination]);

		//$agodahotels = agodahotel::with('Hotel')->get();
		//return view('user.index',  compact('users'));           				

        //$hotels = \DB::table('hotels')
        //    			->join('agodahotels', 'hotels.agodaid', '=', 'agodahotels.tel_id')
        //        		->where('hotels.city', '=', $city)
        //        		->where('hotels.star_rating', '>', 3)
                		//->orderBy('hotels.rating_average', 'desc')
        //        		->orderBy('hotels.star_rating', 'desc')
        //        		->take(10)
        //    			->get();   

		//$hotels = \DB::select('SELECT * from hotels 
		//						WHERE city = ? 
		//							AND star_rating  > ?
		//						ORDER BY rating_average DESC								
		//						LIMIT 10', [$city, 3]);

        //return view('user.index', ['users' => $users]);

        //var_dump($hotels);

        
        
    }

    public function popular()
    {


        $packages = Package::where('status', '=', 'live')  
                        ->orderBy('cpc', 'desc')
                        //->orderBy('rating_average', 'desc')
                        ->paginate(20);
                        //->simplePaginate(10);
                        //->get();    


        return view('popular-travel-packages')->with(['packages' => $packages]);

        
        
    } 

 
}

