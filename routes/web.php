<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::get('singapore/popular-travel-destinations', 'PagesController@popular');
Route::get('singapore/travel-agencies', 'PagesController@travelagencies');
Route::get('singapore/aboutus.html', 'PagesController@aboutus');
Route::get('singapore/contactus.html', 'PagesController@contactus');


Route::get('singapore/package/{idx}.html', 'PackageController@show');

Route::get('singapore/travel-agency-detail/{agencylabel}.html', 'AgencyController@show');
Route::get('singapore/travel-agencies/list/{start}.html', 'AgencyController@list');
Route::get('singapore/travel-agencies/location/{location}.html', 'AgencyController@location');

Route::post('search', 'SearchController@search');
Route::get('search', array('uses' => 'SearchController@search'));



Route::get('/singapore/travel-packages/{page}/{destination}.html', function($page,$destination){ 
	return redirect()->action('PackagesController@show', ['page' => $page, 'destination' => $destination], 301);
}); 


/*
Route::get('/singapore/travel-packages/1/{destination}.html', function($destination){ 
	return redirect()->action('PackagesController@show', ['destination' => $destination], 301);
}); 
*/


Route::get('singapore/travel-packages/{destination}', 'PackagesController@show');
Route::get('popular-travel-packages', 'PackagesController@popular');
