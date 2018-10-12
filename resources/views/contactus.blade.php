@extends('master')

@section('title', 'Travelpear.com.sg - Contact Us')
@section('description', 'Travelpear.com.sg - Contact Us')

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

            <p><strong>Contact Us</strong></p>

  <p>
  We welcome users to give us any feedback or suggestions<br><br>
  Please email us at  <img src="{{ asset('img/travelpear_email.gif') }}" alt="about" class="img-responsive">
  <br><br>
  Thank you for using travelpear! 
  </p>            


  


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