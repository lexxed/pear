@extends('master')


@section('title',  'Singapore Travel Agencies starting with ' . ucfirst($start))
@section('description', 'Singapore Travel Agencies starting with ' . ucfirst($start))

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


            
            <div class="box"><!-- box 2-->
              <p><strong>Travel agents starting with </strong></p>


                    @foreach($agency as $agency)
                      <a class="block-link" href="{{ url('singapore/travel-agency-detail/' . $agency->label . '.html') }}">
                        <b>{{ $agency->fullname }}</b>
                      </a>                    
                      {!! $agency->address !!}<br><br>

                    @endforeach


            </div><!-- box 2 end-->


	        </div>  
        </div>      
  


      </div><!-- column is-8 end-->

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