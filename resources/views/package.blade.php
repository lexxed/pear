@extends('master')

@php
  # timespan
  if(empty($package->day) && empty($package->nite)) $timespan = 'Transport Only ';
  //if(empty($package->day) && empty($package->nite) && $$package->destcn == "Malaysia") $timespan = 'Coach Only ';
  if(!empty($package->day) && !empty($package->nite)) $timespan = $package->day."D " . $package->nite . "N ";
  if(empty($package->day) && !empty($package->nite)) $timespan = $package->nite . " Nite stay ";
  if(!empty($package->day) && empty($package->nite)) $timespan = $package->day . " D ";  
@endphp

@section('title', $timespan . '' . $package->destination . ' from ' . $agency->fullname)
@section('description', 'Compare ' .  $package->destination . ' travel packages')

@section('content')

  <div class="breadcrumb-header">
    <div class="container">
      <div class="columns">
        <div class="column">
          <a href="{{ url('/') }}">Home</a> > 
          <a href="{{ url('/hotels/thailand') }}">Thailand</a> >
          
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="columns">
      <div class="column is-8">

        <div class="box">
          <div class="content">   
            <div class="box"><!-- box 1 -->

              <p><strong>Travel Package Details:</strong></p>

              <div class="dleft"><b>Destination:</b></div>
              <div class="dright"> 
                {{ $package->destination }}
              </div>
              <div class="spacerp">&nbsp;</div>                   

              <div class="dleft"><b>Timespan:</b></div>
              <div class="dright"> 
                {{ $timespan }}
              </div>
              <div class="spacerp">&nbsp;</div>                   

              <div class="dleft"><b>Travel Agency:</b></div>
              <div class="dright"> 
                {{ $agency->fullname }}
              </div>
              <div class="spacerp">&nbsp;</div>                                 

              @if(!empty($package->accom))
                <div class="dleft"><b>Hotel:</b></div>
                <div class="dright"> 
                  {{ $package->accom }}
                </div>
                <div class="spacerp">&nbsp;</div>    
              @endif

              @if(!empty($package->hotelrating))
                <div class="dleft"><b>Hotel Rating:</b></div>
                <div class="dright"> 
                  <span class="stars stars-details">
                    @for ($i = 1; $i <= $package->hotelrating; $i++)
                      <i class="fa fa-star"></i>
                    @endfor

                    <?php
                    $starsLeft = 5 - $package->hotelrating;

                    if (is_float($starsLeft)) {
                      echo '<i class="fa fa-star-half-o"></i>
                      '; // new line else will bunch together
                    }

                    if ($starsLeft > 0) {
                        for ($i = 1; $i <= $starsLeft; $i++) {  // go through each remaining star
                            echo '<i class="fa fa-star-o"></i>
                            ';     
                        }
                    }            
                    ?>
                  </span>  
                </div>
                <div class="spacerp">&nbsp;</div>    
              @endif

              @if(!empty($package->hotelrating))
                <div class="dleft"><b>Travel Agency:</b></div>
                <div class="dright"> 
                  {{ $agency->fullname }}
                </div>
                <div class="spacerp">&nbsp;</div>    
              @endif


                <div class="dleft"><b>Price from:</b></div>
                @if(!empty($package->price))
                  <div class="dright"> 
                    SGD {{ $package->price }} ( Single )
                  </div>
                @endif  
                @if(!empty($package->price2))
                  <div class="dright"> 
                    SGD {{ $package->price2 }} ( Twin )
                  </div>
                @endif                          
                @if(!empty($package->price3))
                  <div class="dright"> 
                    SGD {{ $package->price3 }} ( Triple )
                  </div>
                @endif                                        
                <div class="spacerp">&nbsp;</div>    

            </div><!-- box 1 end-->

            
            <div class="box">
              <p><strong>Additional Notes:</strong></p>
              <p>{!! str_replace('â€“', ' ', $package->comment) !!}</p>
            </div>   

            <div class="box">

              <p><strong>Travel agency or supplier for this travel package:</strong></p>

              <div class="dleft"><b>Travel Agency:</b></div>
              <div class="dright"> 
                <a class="block-link" href="{{ url('singapore/travel-agency-detail/' . $package->agencylabel . '.html') }}">
                  <b>{{ $agency->fullname }}</b>
                </a>
              </div>
              <div class="spacerp">&nbsp;</div>                 

              <div class="dleft"><b>Telephone:</b></div>
              <div class="dright"> 
                {{ $agency->tel }}
              </div>
              <div class="spacerp">&nbsp;</div>                 

              @if(!empty($agency->website))
                <div class="dleft"><b>Website:</b></div>
                <div class="dright"> 
                  {{ $agency->website }}
                </div>
                <div class="spacerp">&nbsp;</div>                 
              @endif

              <div class="dleft"><b>Email:</b></div>
              <div class="dright"> 
                {{ $agency->email }}
              </div>
              <div class="spacerp">&nbsp;</div>                               


            </div>
   
            
       

	        </div>  
        </div>      
  


      </div>

      <div class="column is-4">
        <div class="box related-list">
          <p class="autoplay">
            <span class="autoplay-title">Related travel packages</span>
          </p>

          bbbbb
        </div>
      </div>      



    </div>
  </div>	

  <div class="spacer"></div>

@endsection	