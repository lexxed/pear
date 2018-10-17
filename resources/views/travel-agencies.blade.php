@extends('master')

@section('title', 'Singapore Travel Agencies Directory ')
@section('description', 'Singapore Travel Agencies Directory ')

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
      <div class="column is-12">

        <div class="box">
          <div class="content">    

            <p><strong>Singapore Travel Agencies Directory Listings by Name</strong></p>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/7.html') }}">7</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/a.html') }}">A</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/b.html') }}">B</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/c.html') }}">C</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/d.html') }}">D</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/e.html') }}">E</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/f.html') }}">F</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/g.html') }}">G</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/h.html') }}">H</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/i.html') }}">I</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/j.html') }}">J</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/k.html') }}">K</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/l.html') }}">L</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/m.html') }}">M</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/n.html') }}">N</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/o.html') }}">O</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/p.html') }}">P</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/q.html') }}">Q</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/r.html') }}">R</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/s.html') }}">S</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/t.html') }}">T</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/u.html') }}">U</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/v.html') }}">V</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/w.html') }}">W</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/x.html') }}">X</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/y.html') }}">Y</a>
            <a class="button is-primary is-rounded" href="{{ url('singapore/travel-agencies/list/z.html') }}">Z</a>
            </p><br>

           <p><strong>Singapore Travel Agencies Directory Listings by Location</strong></p>
           <a href="{{ url('singapore/travel-agencies/location/chinatown.html') }}">Chinatown,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/peoples-pk.html') }}">People's Park,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/north-bridge.html') }}">North Bridge Road,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/south-bridge.html') }}">South Bridge Road,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/eu-tong-sen.html') }}">Eu Tong Sen,</a>   
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/orchard.html') }}">Orchard,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/jurong.html') }}">Jurong,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/suntec.html') }}">Suntec,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/east-coast.html') }}">East Coast,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/serangoon.html') }}">Serangoon,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/bras-basah.html') }}">Bras Basah,</a>
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/beach.html') }}">Beach Road,</a>  
           &nbsp;<a href="{{ url('singapore/travel-agencies/location/harbourfront.html') }}">Harbour Front</a>   
          </p><br>            

          <p><strong>Travel packages going to:</strong></p>
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Bali') }}" class="ctag5">Bali</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Bangkok') }}" class="ctag5">Bangkok</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Batam') }}" class="ctag2">Batam</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Beijing') }}" class="ctag2">Beijing</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Berjaya') }}" class="ctag2">Berjaya</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Bintan') }}" class="ctag5">Bintan</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Cairns') }}" class="ctag2">Cairns</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Cambodia') }}" class="ctag1">Cambodia</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/CameronHighlands') }}" class="ctag2">Cameron</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/ChawengBeach') }}" class="ctag1">Chaweng Beach</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Chiangmai') }}" class="ctag3">Chiangmai</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/ColmarTropicale') }}" class="ctag2">Colmar Tropicale</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Disneyland') }}" class="ctag3">Disneyland</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Genting') }}Genting" class="ctag5">Genting</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/GoldCoast') }}" class="ctag4">Gold Coast</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Hanoi') }}" class="ctag2">Hanoi</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Ho-Chi-Minh') }}" class="ctag2">HoChiMinh</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/HongKong') }}" class="ctag5">HongKong</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Koh-Samui') }}" class="ctag2">Koh Samui</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Korea') }}" class="ctag1">Korea</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Krabi') }}" class="ctag1">Krabi</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/KualaLumpur') }}" class="ctag5">Kuala lumpur</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Kuching') }}" class="ctag3">Kuching</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Langkawi') }}" class="ctag5">Langkawi</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Macau') }}" class="ctag1">Macau</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Malacca') }}" class="ctag2">Malacca</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Maldives') }}" class="ctag2">Maldives</a>     
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Manila') }}" class="ctag2">Manila</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Melbourne') }}" class="ctag5">Melbourne</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Mines') }}" class="ctag1">Mines Resort</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/New-Zealand') }}" class="ctag1">New Zealand</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Nusa-Dua') }}" class="ctag1">Nusa Dua</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Japan') }}" class="ctag2">Japan</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Penang') }}" class="ctag3">Penang</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Perth') }}" class="ctag5">Perth</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Phnom Penh') }}" class="ctag3">Phnom Penh</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Phuket') }}" class="ctag2">Phuket</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Redang') }}" class="ctag4">Redang</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Saigon') }}" class="ctag2">Saigon</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Samui') }}" class="ctag2">Samui</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Shanghai') }}" class="ctag3">Shanghai</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Shenzhen') }}" class="ctag4">Shenzhen</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/SiemReap') }}" class="ctag2">SiemReap</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/SunwayLagoon') }}" class="ctag2">Sunway Lagoon</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Sydney') }}" class="ctag5">Sydney</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Taipei') }}" class="ctag3">Taipei</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Taiwan') }}" class="ctag1">Taiwan</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Terengganu') }}" class="ctag1">Terengganu</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Tioman') }}" class="ctag4">Tioman</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Tokyo') }}" class="ctag2">Tokyo</a>  
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Yangon') }}" class="ctag1">Yangon</a>
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Vietnam') }}" class="ctag1">Vietnam</a>
          <a class="button is-primary is-rounded" href="{{ url('singapore/travel-packages/Star-Cruise') }}" class="ctag1">Star Cruise</a>


	        </div>  
        </div>      
  
        <?php /*
        <div class="box">
            ...
        </div> 
        */ ?>

      </div>

      @php
      /*
      <div class="column is-4">
        <div class="box related-list">
          <p class="autoplay">
            <span class="autoplay-title"></span>
          </p>



        </div>
      </div>      
      */
      @endphp



    </div>
  </div>	

  <div class="spacer"></div>

@endsection	