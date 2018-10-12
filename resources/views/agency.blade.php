@extends('master')

@section('title', $agency->fullname .  ' - Singapore Travel Agency')
@section('description', 'List travel packages from ' . $agency->fullname)

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

              <font class="fta">{{ $agency->fullname }}</font><br>
              {!! $agency->address !!}<br>
              {{ $agency->tel }}<br>
              @if(!empty($agency->website))
                {{ $agency->website }}<br>
              @endif
              {{ $agency->email }}<br>

            </div><!-- box 1 end-->

            
            @if (!$packages->isEmpty())

              <div class="box"><!-- box 2-->
                 <p><strong>Travel packages from {{ $agency->fullname }}</strong></p>

                  <table class="table">
                    <thead>
                      <tr>
                        <th>Destination</th>
                        <th>Timespan</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($packages as $package)
                        <tr>
                          <td>
                            <a class="block-link" href="{{ url('singapore/package/' . $package->idx . '.html') }}">
                              {{ str_limit($package->destination, $limit = 50, $end = '...') }}
                            </a>
                          </td>
                          <td>
                            @php
                              # timespan
                              //if($package->day == 0 && $package->nite == 0) $timespan = 'Airfare Only ';
                              //if($package->day == 0 && $package->nite == 0 && $$package->destcn == "Malaysia") $timespan = 'Coach Only ';
                              if(!empty($package->day) && !empty($package->nite)) $timespan = $package->day."D " . $package->nite . "N ";
                              if(empty($package->day) && !empty($package->nite)) $timespan = $package->nite . " Nite stay ";
                              if(!empty($package->day) && empty($package->nite)) $timespan = $package->day . " D ";  
                            @endphp          
                            {{ $timespan }}
                          </td>
                          <td>
                            @if(!empty($package->price2))
                                ${{ $package->price2 }}
                            @endif                
                          </td>
                        </tr>        
                      @endforeach    
                    </tbody>
                  </table>
                  {{ $packages->links() }}       

              </div><!-- box 2 end-->

            @else

              <div class="box"><!-- box 2-->
                  <p><strong>No packages from {{ $agency->fullname }} found, here are some popular packages</strong></p>

                  <table class="table">
                    <thead>
                      <tr>
                        <th>Destination</th>
                        <th>Timespan</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($packagesPopular as $package)
                        <tr>
                          <td>
                            <a class="block-link" href="{{ url('singapore/package/' . $package->idx . '.html') }}">
                              {{ str_limit($package->destination, $limit = 50, $end = '...') }}
                            </a>
                          </td>
                          <td>
                            @php
                              # timespan
                              //if($package->day == 0 && $package->nite == 0) $timespan = 'Airfare Only ';
                              //if($package->day == 0 && $package->nite == 0 && $$package->destcn == "Malaysia") $timespan = 'Coach Only ';
                              if(!empty($package->day) && !empty($package->nite)) $timespan = $package->day."D " . $package->nite . "N ";
                              if(empty($package->day) && !empty($package->nite)) $timespan = $package->nite . " Nite stay ";
                              if(!empty($package->day) && empty($package->nite)) $timespan = $package->day . " D ";  
                            @endphp          
                            {{ $timespan }}
                          </td>
                          <td>
                            @if(!empty($package->price2))
                                ${{ $package->price2 }}
                            @endif                
                          </td>
                        </tr>        
                      @endforeach    
                    </tbody>
                  </table>
              </div><!-- box 2 end-->

            @endif


	        </div>  
        </div>      
  


      </div><!-- column is-8 end-->

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