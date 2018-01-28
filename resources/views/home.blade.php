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
                            <li id="event-nav"><a href="#">Event Details<span class="sr-only">(current)</span></a></li>
                            <li><a href="#" class="rsvp-button" data-toggle="modal" data-target="#rsvpModal">RSVP</a></li>
                            <li><a href="#" id="things-nav">Things To Do</a></li>
                            <li><a href="#" id="wedding-party-nav">Wedding Party</a></li>
                            <li><a href="#" id="registry-nav">Registry</a></li>
                            <li><a href="#" id="photos-nav">Photos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="wow fadeInDown" id="our-story-btn">
            <h2 class="our-story-heading-text">
                <span id="our-heading-text">Our</span><span id="story-heading-text"> Story</span>
            </h2>
            <img role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" data-wow-offset="200" class="our-story-btn-svg" src='{!!asset( "images/chevron.png")!!}'>
        </div>
    </div>
</div>
<div class='jumbotron' id='second-body'>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class='container'>
            <div class="row" id="accordion" role="tablist" aria-multiselectable="true">
                @include('our_story')
            </div>
        </div>
    </div>
</div>
<div class='jumbotron wow slideInUp' id='third-body' data-wow-offset="300">
    <div class="row row-no-margin">
        <div class="col-md-6">
            <div class="details-left-holder">
                <div class="details-left">
                    <img src='{!! asset("/images/details_rings_bg.jpg")!!}'>
                    <div class="details-date text-center">
                        <h1>10th June</h1>
                        <h1 id="details-year">2018</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <h1>Event Details</h1>
            <div class="row">
                <div class="details-location">StoneFields</div>
                <h2 class="details-subheading">1985 9th Line Carleton Place  ON K7C 3P2</h2>
            </div>
            <div class="row details-time">
                <div class="col-md-12 text-center">
                    <div class="col-md-3 col-md-offset-3 details-item">
                        <img src='{!!asset( "images/wedding.png")!!}' alt='cheers' class="details-icon">
                        <h2 class="details-subheading">Ceremony<br>400PM</h2>
                    </div>
                    <div class="col-md-3 details-item">
                        <img src='{!!asset( "images/cheers.png")!!}' alt='cheers' class="details-icon">
                        <h2 class="details-subheading">Reception<br>600PM</h2>
                    </div>
                </div>
                <!-- <div class="row">
    <div class="text-center">
        <div role="button" href="#" class="rsvp-button" id="rsvp-button" data-toggle="modal" data-target="#rsvpModal">
            <h1>RSVP</h1>
        </div>
    </div>
</div> -->
            </div>
        </div>
    </div>
</div>
<div id="fourth-body">
    <div id='carousel-section' class='carousel slide wow fadeInUp' data-wow-offset="300" data-ride='carousel'>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-section" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-section" data-slide-to="1"></li>
            <li data-target="#carousel-section" data-slide-to="2"></li>
            <li data-target="#carousel-section" data-slide-to="3"></li>
            <li data-target="#carousel-section" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-header">
            <h1>Things Todo in Ottawa</h1>
            <span class='registryOptionText'>If you're coming to Ottawa for the first time, we've compiled a list of things that you should do while you're here!</span>
        </div>
        <div class="carousel-inner">
            <div class="item active">
                <img src='{!!asset( "images/byward_market_2.jpg")!!}' alt='image of byward market'>
                <div class="carousel-caption">
                    <h1>Byward Market</h1>
                    <p>Street performers. Lively public. Local farmer's market.</p>
                </div>
            </div>
            <div class="item">
                <img src='{!!asset( "images/nature_museum.jpg")!!}' alt='image of nature museum'>
                <div class="carousel-caption">
                    <h1>Nature Museum</h1>
                    <p>Fun for adults and kids!</p>
                </div>
            </div>
            <div class="item">
                <img src='{!!asset( "images/dominion_arboretum_2.jpg")!!}' alt='image of dominion arboretum'>
                <div class="carousel-caption">
                    <h1>Dominion Arboretum</h1>
                    <p>Take a stroll or go for a picnic, Sam and Sarah did.</p>
                </div>
            </div>
            <div class="item">
                <img src='{!!asset( "images/national_gallery_of_canada.jpg")!!}' alt='image of national gallery of canada'>
                <div class="carousel-caption">
                    <h1>National Gallery of Canada</h1>
                    <p>Fan of art? We will know where to find you if you're late to the wedding.</p>
                </div>
            </div>
            <div class="item">
                <img src='{!!asset( "images/uji_cafe.jpg")!!}' alt='image of cafe uji'>
                <div class="carousel-caption">
                    <h1>Cafe Uji</h1>
                    <p>Try some Japanese cheesecake.</p>
                </div>
            </div>
        </div>
        <!-- Carousel Control -->
        <a class='left carousel-control' href='#carousel-section' role='button' data-slide='prev'>
                    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span><span class='sr-only'>Previous</span>
                </a>
        <a class='right carousel-control' href='#carousel-section' role='button' data-slide='next'>
                    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
    </div>
</div>
<div class='jumbotron' id='fifth-body' data-wow-offset="300">
    <!-- What needs to be done in wedding party section
    3. Sarah's content of girls needs review
    4. Need to confirm girl side pictures
    -->
    <div class='row'>
        <div class='col-md-12 text-center'>
            <h1 id="wedding-heading">Wedding Party</h1>
            <div class='col-md-6 wow fadeInLeft' data-wow-duration="0.75s">
                <h1 id="bridesmaids-heading">Bridesmaids</h1>
                <div class='bridesmaids-temp'>
                    <div id='imagesOfGirls' class='wedding-image-holder'>
                        <img id='jessica_lee_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/jessica_lee.jpg")!!}' alt='image of Jessica Lee'>
                        <img id='randelee_macdonald_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/randelee_macdonald.jpg")!!}' alt='image of Randelee Macdonald'>
                        <img id='vikki_moon_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/vikki_moon.jpg")!!}' alt='image of Vikki Moon'>
                        <img id='grace_kim_img' class='img-responsive img-circle wedding-party-image current-girl' src='{!!asset( "images/grace_kim.jpg")!!}' alt='image of Grace Kim'>
                        <img id='chelsea_anne_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/chelsea_anne.jpg")!!}' alt='image of Chelsea Anne'>
                        <img id='puja_ahluwalia_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/puja_ahluwalia.jpg")!!}' alt='image of Puja Ahluwalia'>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading girl-postcard-heading">
                        <h2 id='girl_name' class='text-center'></h2>
                    </div>
                    <div class="panel-body girl-postcard">
                        <p class='wedding-party-description text-center' id="girl_description"></p>
                        <div class="row">
                            <ul id='list-girls' class='wedding-party-list'>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='girl' name='girl' value='grace_kim'>
                            <img id='grace_kim_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/grace_kim.jpg")!!}' alt='image of Grace Kim'>
                        </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='girl' name='girl' value='chelsea_anne'>
                            <img id='chelsea_anne_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/chelsea_anne.jpg")!!}' alt='image of Chelsea Anne'>
                        </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='girl' name='girl' value='puja_ahluwalia'>
                            <img id='puja_ahluwalia_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/puja_ahluwalia.jpg")!!}' alt='image of Puja Ahluwalia'>
                        </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='girl' name='girl' value='vikki_moon'>
                            <img id='vikki_moon_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/vikki_moon.jpg")!!}' alt='image of Vikki Moon'>
                        </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='girl' name='girl' value='randelee_macdonald'>
                            <img id='randelee_macdonald_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/randelee_macdonald.jpg")!!}' alt='image of Randelee Macdonald'>
                        </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='girl' name='girl' value='jessica_lee'>
                            <img id='jessica_lee_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/jessica_lee.jpg")!!}' alt='image of Jessica Lee'>
                        </a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-6 wow fadeInRight' data-wow-duration="0.75s">
                <h1 id="groomsmen-heading">Groomsmen</h1>
                <div class='groomsmen-temp'>
                    <div id='imagesOfGuys' class='wedding-image-holder'>
                        <img id='paul_loh_img' class='img-responsive img-circle wedding-party-image current-guy' src='{!!asset( "images/paul_loh.jpg")!!}' alt='image of Paul Loh'>
                        <img id='paul_beckmann_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/paul_beckmann.jpg")!!}' alt='image of Paul Beckmann'>
                        <img id='aaron_wong_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/aaron_wong.jpg")!!}' alt='image of Aaron Wong'>
                        <img id='daniel_chan_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/daniel_chan.jpg")!!}' alt='image of Daniel Chan'>
                        <img id='ezekiel_chan_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/ezekiel_chan.jpg")!!}' alt='image of Ezekiel Chan'>
                        <img id='jonathan_chan_img' class='img-responsive img-circle wedding-party-image' src='{!!asset( "images/jonathan_chan.jpg")!!}' alt='image of Jonathan Chan'>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading guy-postcard-heading">
                        <h2 id='guy_name' class='text-center'></h2>
                    </div>
                    <div class="panel-body guy-postcard">
                        <p class='wedding-party-description text-center' id="guy_description"></p>
                        <div class="row">
                            <ul id='list-guys' class='wedding-party-list'>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='guy wow fadeIn' data-wow-dealy='1.25s' name='guy' value='paul_loh'>
                                        <img id='paul_loh_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/paul_loh.jpg ")!!}' alt='image of Paul Loh'>
                                    </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='guy' name='guy' value='paul_beckmann'>
                                        <img id='paul_beckmann_token' class='img-responsive img-circle wedding-party-token ' src='{!!asset( "images/paul_beckmann.jpg")!!}' alt='image of Paul Beckmann'>
                                    </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='guy' name='guy' value='aaron_wong'>
                                        <img id='aaron_wong_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/aaron_wong.jpg ")!!}' alt='image of Aaron Wong'>
                                    </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='guy' name='guy' value='daniel_chan'>
                                        <img id='daniel_chan_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/daniel_chan.jpg")!!}' alt='image of Daniel Chan'>
                                    </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='guy' name='guy' value='ezekiel_chan'>
                                        <img id='ezekiel_chan_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/ezekiel_chan.jpg ")!!}' alt='image of Ezekiel Chan'>
                                    </a></li>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-2">
                                    <li><a href='#' class='guy' name='guy' value='jonathan_chan'>
                                        <img id='jonathan_chan_token' class='img-responsive img-circle wedding-party-token' src='{!!asset( "images/jonathan_chan.jpg")!!}' alt='image of Jonathan Chan'>
                                    </a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='jumbotron wow slideInUp' id='sixth-body' data-wow-offset="300">
    <!-- What needs to be done in REGISTRY section
            1. Center registryOptionText
            2. Content Review
            3. Link to zola once we open it
    -->
    <div class='container text-center'>
        <div class="row">
            <h1>Registry</h1>
            <br>
            <p>Should you like to support us financially, there are three different ways you can help. Hover over the one of your choice! For any gift you want to send before the day of the wedding, the delivery address is 86 Blackburn Avenue, Ottawa, ON, K1N 8A5.
            </p>
        </div>
        <div class='row registryRow'>
            <div class="col-md-12" id="registryOptionRow">
                <div class='col-md-4'>
                    <div class="registryOption">
                        <div class="registryContainer">
                            <img class='img-responsive' src='{!!asset( "images/zola.png" )!!}'>
                            <div class='registryOptionContent'>
                                <span class='registryOptionText'>Help us build a lovely home by purchasing a household item on Zola!</span>
                            </div>
                        </div>
                        <div class='registryOptionHeader'>
                            <strong>ZOLA REGISTRY</strong>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class="registryOption">
                        <div class="registryContainer">
                            <img class='img-responsive' src='{!!asset( "images/piggy_bank.png" )!!}'>
                            <div class='registryOptionContent'>
                                <span class='registryOptionText'>Make a monetary donation to help us with the big stuff!</span>
                            </div>
                        </div>
                        <div class='registryOptionHeader'>
                            <strong>CASH FUND</strong>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class="registryOption">
                        <div class="registryContainer">
                            <img class='img-responsive' src='{!!asset( "images/gift.png" )!!}'>
                            <div class='registryOptionContent'>
                                <span class='registryOptionText'>Already have a gift in mind? Send to the address above or wait until the wedding day!</span>
                            </div>
                        </div>
                        <div class='registryOptionHeader'>
                            <strong>PERSONAL GIFT</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='jumbotron wow slideInUp' id='seventh-body' data-wow-offset="300">
    <div class='container text-center'>
        <h1 class="heading">Engagement Photos</h1>
        <div class='row'>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_1_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_4_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_5_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_6_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_7_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_8_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
        </div>
        <div class='row'>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_2_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
            <div class='col-md-4'>
                <img class='img-responsive img-thumbnail engagementPhoto' src='{!!asset( "images/thumbnails/engagement_photo_3_thumbnail.jpg" )!!}' data-toggle="modal" data-target="#engagementPhotoModal">
            </div>
            <div class='col-md-4'>
            </div>
        </div>
    </div>
</div>
<div class="modal animated bounceInDown" id="engagementPhotoModal" tabindex="-1" role="dialog" aria-labelledby="whatIsThis">
    <div id='photoModalDialog' class="modal-dialog modalWidth" role="document">
        <div id="imageModalContainer" class="modal-content">
            <img id='imageModal' class='img-responsive img-thumbnail' src=''>
        </div>
    </div>
</div>
<div class='container text-center'>
    <footer>
        <h3>Sam and Sarah 2018</h3>
    </footer>
</div>
<button id="scrollTopBtn"><span class="glyphicon glyphicon-menu-up"></span> Back To Top</button>
@component('modal') @endcomponent @stop