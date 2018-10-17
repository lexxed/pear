@extends('master')

@section('title', ucfirst($destination) . ' travel packages from Singapore Travel Agencies')
@section('description', ' Going ' .  ucfirst($destination) . '? Singapore Travel Agencies deals going to ' .  ucfirst($destination) . '.')

@section('content')

  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
          @include('partials.adsense')    
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
                <h1>{{ $message }} '{{ ucfirst($destination) }}'</h1>
                <p>Here are some recommended travel deals.</p>
            @else
                <p><strong>
                  @if($packages->total() > 20)
                  Showing Results {{ $packages->currentPage()*20-19 }} - {{ $packages->currentPage()*20 }} of about {{ $packages->total() }} for '{{ ucfirst($destination) }}' packages
                  @else
                  Showing {{ $packages->total() }} packages for '{{ ucfirst($destination) }}'
                  @endif
                </strong></p>                
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
                    @if(!empty($agency->fullname))
                    {{ $agency->fullname }}<br>
                    @endif
                    SGD&nbsp;
                    @if ($package->price2 != 0)
                      {{ $package->price2 }}<br>
                    @elseif ($package->price != 0)
                      {{ $package->price }}<br>
                    @endif  
                </div>          
              </div>
              
            @endforeach

            <br>
            {{ $packages->links() }}       
         

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



    </div> <!-- columns -->
  </div>	<!-- container -->

  <div class="spacer"></div>

@endsection	