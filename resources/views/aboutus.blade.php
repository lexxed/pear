@extends('master')

@section('title', 'Travelpear.com.sg - About Us')
@section('description', 'Travelpear.com.sg - About Us')

@section('content')

  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
          <a href="{{ url('/') }}">Home</a> > 
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="columns">
      <div class="column is-8">

        <div class="box">
          <div class="content">    

            <p><strong>About Us</strong></p>


    We all have the experience of searching through newspapers classifieds everyday, going to chinatown to 
    look for the cheapest travel packages..<br><br>
    Travelpear is created to make it easier for you to find the ideal travel package you want.
    <br><br>    
    Travelpear have a team of editors that compiles travel packages from Travel Agencies in Singapore.  
    So that you are able to find the best travel packages in the shortest time possible.
    <br><br>
    We welcome any feedback and suggestions you may have to improve our site. 
    <br>Please email us at <img src="{{ asset('img/travelpear_email.gif') }}" alt="about" class="img-responsive">
    <br><br>



  


	        </div>  
        </div>      
  
        <?php /*
        <div class="box">
            ...
        </div> 
        */ ?>

      </div>

      <div class="column is-4">
        <div class="box related-list">
          <p class="autoplay">
            <span class="autoplay-title">Ads</span>
          </p>
          @include('partials.adsense')      

        </div>
      </div>      



    </div>
  </div>	

  <div class="spacer"></div>

@endsection	