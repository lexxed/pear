@extends('master')

@section('title', 'Search for ' . $q)
@section('description', 'Hotels in ')

@section('content')

  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
          <a href="{{ url('/') }}">Home</a> > 
          <a href="{{ url('/hotels/thailand') }}">Thailand</a> 
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="columns">
      <div class="column is-8">

        <div class="box">
          <div class="content">    
           
            @if($message)
                <h1>{{ $message }} '{{ $q }}'</h1>
                <p>Here are some recommended travel deals.</p>
            @else
                <h1>Search results for '{{ $q }}'.</h1>
            @endif

            @foreach($packages as $package)

              @php
                  $agency = App\Agency::where('label', $package->agencylabel)
                                    //->where('submitby', '=', config('constants.vidAllowCode'))  
                                    ->first();
              @endphp             
              <div class="columns custom-columns">
                <div class="column">
                    <a class="block-link" href="{{ url('singapore/package/' . $package->idx . '.html') }}">
                    <b>{{ $package->destination }}&nbsp;{{ $package->day }}D&nbsp;{{ $package->nite }}N</b><br>
                    </a>
                    {{ $agency->fullname }}<br>
                    SGD&nbsp;
                    @if ($package->price2 != 0)
                      {{ $package->price2 }}<br>
                    @elseif ($package->price != 0)
                      {{ $package->price }}<br>
                    @endif  
                  </a>
                </div>          
              </div>
              
            @endforeach

            <br>
            {{ $packages->appends(Request::only('q'))->links() }}




	        </div>  
        </div>                
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