@extends('master')

@section('title', 'Compare travel packages frm Singapore travel agencies : Travelpear')
@section('description', 'Compare travel packages frm Singapore Travel Agencies.')

@section('content')

<section class="hero is-primary is-medium header-image">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-2">
          Travelpear: Compare travel packages
        </h1>
        <h2 class="subtitle is-5">
          2880 travel deals from Travel Agencies in Singapore
        </h2>
        <p>
            <span>
              <a href="{{ url('singapore/travel-packages/Bangkok') }}" class="button is-outlined" >Bangkok</a>
              &nbsp;
              <a href="{{ url('singapore/travel-packages/Hongkong') }}" class="button is-outlined" >Hongkong</a>
              &nbsp;
              <a href="{{ url('singapore/travel-packages/Bali') }}" class="button is-outlined" >Bali</a>
              @php
              /*
              &nbsp;
              <a href="{{ url('singapore/travel-packages/1/malaysia.html') }}" class="button is-outlined" >Bali</a>
              */
              @endphp
            </span>
        </p>
        <p><br>
          <a href="{{ url('/singapore/popular-travel-destinations') }}">
          See more destinations..
          </a>
        </p>
      </div>
    </div>
  </section>
  <div class="hero-cta">
    <nav class="level">
      <div class="level-item has-text-centered">
        <form class="nav-item control has-addons searchbox" id="searchhome" method="POST" action="/search/">
          {{ csrf_field() }}
          <input name="q" class="input" type="text" placeholder="Search travel deals">
          <a class="button is-primary" onclick="document.getElementById('searchhome').submit();">
          &nbsp; <i class="fa fa-search"></i> 
          </a>
        </form>    
      </div>
    </nav>
  </div>
  <?php
  /*
  <div class="section main">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
          <div class="panel">
            <div class="panel-block section">
              <p class="has-text-centered"><i class="fa fa-camera-retro icon-block"></i></p>
              <br>
              <p>
                Truehotelvideos compiles all hotel videos for easy review of which hotel to
              </p>
              <br>
              
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="panel">
            <div class="panel-block section">
              <p class="has-text-centered"><i class="fa fa-bar-chart icon-block"></i></p>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
              <br>
              
            </div>
          </div>

        </div>
        <div class="column is-4">
          <div class="panel">
            <div class="panel-block section">
              <p class="has-text-centered"><i class="fa fa-cloud icon-block"></i></p>
              <br>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
              <br>
              
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  */
  ?>

  <div class="spacer"></div>

@endsection	