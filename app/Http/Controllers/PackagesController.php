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
        $message = '';
        
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


        if($packages->isEmpty()) {

            $message = "Sorry, no results found for ";
            $packages = Package::where('status', '=', 'live')  
                            ->orderBy('cpc', 'desc')
                            ->paginate(20);
                            //->inRandomOrder();
        }                                  

        return view('travel-packages')->with(['packages' => $packages, 'destination' => $destination,'message' => $message]);

       
        
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

