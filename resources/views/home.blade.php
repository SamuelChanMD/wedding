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
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default text-center">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active" id="wedding-nav"><a href="#">Wedding Details<span class="sr-only">(current)</span></a></li>
                            <li><a href="#" id="things-nav">Things To Do</a></li>
                            <li><a href="#" id="wedding-party-nav">Wedding Party</a></li>
                            <li><a href="#" id="registry-nav">Registry</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <div class="row">
        <div role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" id="our-story-btn" aria-controls="collapseOne" class="wow fadeInDown" data-wow-offset="200">
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
<div class='jumbotron wow slideInUp' id='third-body' data-wow-offset="300">
    <div class='container text-center' id='details-section'>
        <h1>Wedding Details</h1>
        <h2>10th June 2018</h2>
        <h2>StoneFields</h2>
        <h2>1985 9th Line Carleton Place  ON K7C 3P2</h2>
        <h2>Ceremony at 330 PM Reception at 600 PM</h2>
        <!-- <h2></h2> -->
        <button type="button" class="btn btn-lg" id="rsvp-button" data-toggle="modal" data-target="#rsvpModal">
            RSVP
        </button>
    </div>
</div>
<div class='jumbotron wow fadeInUp' id='fourth-body' data-wow-offset="300">
    <div class='container text-center'>
        <h1>Things Todo in Ottawa</h1>
        <p>If you're coming to Ottawa for the first time, we've compiled a list of things that you should do while you're here!</p>
        <div class='col-md-10 col-md-offset-1'>
            <div id='carousel-section' class='carousel slide' data-ride='carousel'>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-section" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-section" data-slide-to="1"></li>
                    <li data-target="#carousel-section" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
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
<div class='jumbotron' id='fifth-body' data-wow-offset="300">
    <div class='container'>
        <div class='col-md-12 text-center'>
            <h1>Wedding Party</h1>
            <div class='col-md-6 wow fadeInLeft' data-wow-duration="1.25s">
                <h2>Girls</h2>
                <h3 id='girl_name' class='huge'>Grace Kim</h3>
                <div id='imagesOfGirls' class='wedding-image-holder'>
                    <img id='grace_kim_img' class='img-responsive img-circle wedding-party-image current-girl' src='{!!asset( "images/grace_kim.jpg")!!}' alt='image of Grace Kim'>
                    <img id='chelsea_anne_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/chelsea_anne.jpg")!!}' alt='image of Chelsea Anne'>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
            <div class='col-md-6 wow fadeInRight' data-wow-duration="1.25s">
                <h2>Guys</h2>
                <h3 id='guy_name' class='huge'>Paul Loh</h3>
                <div id='imagesOfGuys' class='wedding-image-holder'>
                    <img id='paul_loh_img' class='img-responsive img-circle wedding-party-image current-guy' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Paul Loh'>
                    <img id='aaron_wong_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/aaron_wong.jpg")!!}' alt='image of Aaron Wong'>
                    <img id='daniel_chan_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/daniel_chan.jpg")!!}' alt='image of Daniel Chan'>
                    <img id='ezekiel_chan_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/ezekiel_chan.jpg")!!}' alt='image of Ezekiel Chan'>
                    <img id='jonathan_chan_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/jonathan_chan.jpg")!!}' alt='image of Jonathan Chan'>
                </div>
                <p id='guy_description'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
        </div>
    </div>
    <div class='container'>
        <ul id='list-girls' class='wedding-party-list'>
            <li><a href='#girl_name' name='girl' value='grace_kim'>
                <img id='grace_kim_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/grace_kim.jpg")!!}' alt='image of Grace Kim'>
            </a></li>
            <li><a href='#girl_name' name='girl' value='chelsea_anne'>
                <img id='chelsea_anne_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/chelsea_anne.jpg")!!}' alt='image of Chelsea Anne'>
            </a></li>
            <li><a href='#girl_name' name='girl' value='puja_ahluwalia'>
                <img id='puja_ahluwalia_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Puja Ahluwalia'>
            </a></li>
            <li><a href='#girl_name' name='girl' value='jessica_lee'>
                <img id='jessica_lee_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Jessica Lee'>
            </a></li>
            <li><a href='#girl_name' name='girl' value='vikki_moon'>
                <img id='vikki_moon_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Vikki Moon'>
            </a></li>
            <li><a href='#girl_name' name='girl' value='randelee_macdonald'>
                <img id='randelee_macdonald_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Randelee Macdonald'>
            </a></li>
        </ul>
        <ul id='list-guys' class='wedding-party-list'>
            <li><a href='#guy_name' name='guy' value='paul_loh'>
                <img id='paul_loh_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Paul Loh'>
            </a></li>
            <li><a href='#guy_name' name='guy' value='paul_beckmann'>
                <img id='paul_beckmann_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Paul Beckmann'>
            </a></li>
            <li><a href='#guy_name' name='guy' value='aaron_wong'>
                <img id='aaron_wong_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/aaron_wong.jpg")!!}' alt='image of Aaron Wong'>
            </a></li>
            <li><a href='#guy_name' name='guy' value='daniel_chan'>
                <img id='daniel_chan_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/daniel_chan.jpg")!!}' alt='image of Daniel Chan'>
            </a></li>
            <li><a href='#guy_name' name='guy' value='ezekiel_chan'>
                <img id='ezekiel_chan_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/ezekiel_chan.jpg")!!}' alt='image of Ezekiel Chan'>
            </a></li>
            <li><a href='#guy_name' name='guy' value='jonathan_chan'>
                <img id='jonathan_chan_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/jonathan_chan.jpg")!!}' alt='image of Jonathan Chan'>
            </a></li>
        </ul>
    </div>
</div>
<div class='jumbotron wow slideInUp' id='sixth-body' data-wow-offset="300">
    <div class='container text-center'>
        <h1>Registry</h1>
    </div>
</div>
<div class='container text-center'>
    <footer>
        <h3>Sam and Sarah 2017</h3>
    </footer>
</div>
<button id="scrollTopBtn">Back To Top</button>
@component('modal') @endcomponent @stop