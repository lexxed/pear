<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
	{
		//$product = Product::where('slug', 'royal-jelly')->firstOrFail();


		return view('home');
		//return view('cities')->with(['cities' => $cities, 'country' => $country]);    	
		//return view('cities')->with(['cities' => $cities, 'country' => $country]);
	} 

    public function popular() 
	{
		return view('popular-travel-destinations');	
	}  	

    public function travelagencies() 
	{
		return view('travel-agencies');	
	}  		


    public function contactus() 
	{
		return view('contactus');	
	}  		

    public function aboutus() 
	{
		return view('aboutus');	
	}  			
}
