@extends('layout') @section('title', 'Sam & Sarah') @section('content')
<link href='{!! asset("/css/home.css")!!}' rel='stylesheet'>
<div id='first-body' style='background-image: url(" {!! ( isset($img_banner) ? asset($img_banner) : asset( "images/home_page.JPG")) !!} ");' class="text-center">
    <div class='caption'>
        <div class='container'>
            <div class='row'>
                <div class="col-md-6">
                    <h1 class='pull-left name-heading' id="sarah">Sarah</h1>
                </div>
                <div class="col-md-6">
                    <h1 class='pull-right name-heading' id="sam">Sam</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" id="our-story-btn" aria-controls="collapseOne">
            <h2 class="our-story-heading-text">
                <span id="our-heading-text">Our</span><span id="story-heading-text"> Story</span>
            </h2>
            <img class="our-story-btn-svg" src='{!!asset( "images/chevron.png")!!}'>
        </div>
    </div>
</div>
<div class='jumbotron' id='second-body'>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class='container'>
            <div class='panel-body text-center' id='our-story-section'>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel-body">
                        @include('our_story')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='jumbotron' id='third-body'>
    <div class='container text-center' id='details-section'>
        <h1>Details</h1>
        <h2>10th June 2018</h2>
        <h2>StoneFields</h2>
        <h2>1985 9th Line Carleton Place  ON K7C 3P2</h2>
        <h2>Ceremony at 330 PM</h2>
        <h2>Reception at 600 PM</h2>
        <button type="button" class="btn btn-lg" id="rsvp-button" data-toggle="modal" data-target="#rsvpModal">
            RVSP
        </button>
    </div>
</div>
<div class='jumbotron' id='fourth-body'>
    <div class='container text-center'>
        <h1>Todo in Ottawa</h1>
        <div class='col-md-10 col-md-offset-1'>
        <div id='carousel-section' class='carousel slide' data-ride='carousel'>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


            <!-- Wrapper for slides -->
            <!--Actual content to be added, removed, or modified-->
            <div class="carousel-inner">
                <div class="item active">
                    <img src='{!!asset( "images/byward_market.jpg")!!}' alt='image of byward market'>
                    <div class="carousel-caption">
                        <h2>Byward Market</h2>
                        <p>Street performers. Lively public. Lots of places to eat.</p>
                    </div>
                </div>

                <div class="item">
                    <img src='{!!asset( "images/dows_lake.jpg")!!}' alt='image of dows lake'>
                    <div class="carousel-caption">
                        <h2>Dows Lake Pavillion</h2>                    
                        <p>Take a stroll around Dows Lake and along the Rideau Canal.</p>
                    </div>
                </div>

                <div class="item">
                    <img src='{!!asset( "images/uji_cafe.jpg")!!}' alt='image of cafe uji'>
                    <div class="carousel-caption">
                        <h2>Cafe Uji</h2>                    
                        <p>Try some Japanese cheesecake.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Control -->
            <a class='left carousel-control' href='#carousel-section' role='button' data-slide='prev'>
                <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='right carousel-control' href='#carousel-section' role='button' data-slide='next'>
                <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>
        </div>
    </div>
</div>
<div class='jumbotron' id='fifth-body'>
    <div class='container'>
        <div class='col-md-12 text-center'>
            <h1>Wedding Party</h1>
            <div class='col-md-6'>
                <h2>Guys</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
            <div class='col-md-6'>
                <h2>Girls</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
        </div>
    </div>
</div>
<div class='container text-center'>
    <footer> Sam and Sarah 2017 </footer>
</div>
@component('modal') @endcomponent @stop