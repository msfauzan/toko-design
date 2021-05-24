@extends('master')
@section('content')
    <div class="custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="slider-img zoom" src="{{ $item['gallery'] }}">
                            <div class="carousel-caption slider-text">
                                <h3>{{ $item['name'] }}</h3>
                                <h4>{{ $item['description'] }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
      
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#bs-carousel" data-slide-to="1"></li>
          <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item slides active">
            <div class="slide-1"></div>
            <div class="hero">
              <hgroup>
                  <h1>We are creative</h1>        
                  <h3>Get start your next awesome project</h3>
              </hgroup>
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
          <div class="item slides">
            <div class="slide-2"></div>
            <div class="hero">        
              <hgroup>
                  <h1>We are smart</h1>        
                  <h3>Get start your next awesome project</h3>
              </hgroup>       
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
          <div class="item slides">
            <div class="slide-3"></div>
            <div class="hero">        
              <hgroup>
                  <h1>We are amazing</h1>        
                  <h3>Get start your next awesome project</h3>
              </hgroup>
              <button class="btn btn-hero btn-lg" role="button">See all features</button>
            </div>
          </div>
        </div> 
      </div> --}}
        <div class="trending-wrapper">
            <h1><b>Featured Designs<b></h1>
            <br>
            <div class="row">
                @foreach ($products as $item)
                    <div class="trending-item column">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="trending-image img-thumbnail" src="{{ $item['gallery'] }}">
                            {{-- <div class="">
              <h3>{{$item['name']}}</h3>
            </div> --}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
