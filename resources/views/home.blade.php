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

                    <br>
                    <br>
                    <p>We knew of each other a year before we first met. That’s right, it took a whole year before we would even speak to each other! It all started at an IVCF (a Christian club on campus) party. We never actually talked to each other that night but Sam's friends, Joshua and Jordyn, had met her and instantly saw the chemistry that could be. Don’t ask us how, they just did! After the party, they sat Sam down and told him of Sarah and how we were on the same wavelength. Sam shrugged itoff at the time and that was that.</p>

                    <p>Our fates clashed again at a week long camp retreat. Like our previous "encounter", we never talked. Take a look at this picture to see just how close we got without even interacting with each other.</p>

                    <br>
                    <br>
                    <div class='col-md-8 col-md-offset-2'>
                        <img class='img-responsive' src='{!!asset( "images/sarah_sam_mark_central.jpg")!!}' alt='image of Sarah and Sam at Mark Central'>
                    </div>
                    <div class='clearfix'></div>                  
                    <br>
                    <br>
                    
                    <p>Finally, a few months later, we became bible study co-leaders. That’s when this happened</p>

                    <br>
                    <br>
                    <div class='col-md-8 col-md-offset-2'>
                        <img class='img-responive' src='{!!asset( "images/sarah_post.png")!!}' alt='image of Sarah facebook post'>
                    </div>
                    <div class='clearfix'></div>
                    <br>
                    <br>

                    <p>From "being around but never interacting", we quickly became ingrained into each other's lives as we led Bible studies together and sparred on Saturday mornings. Our lives mixed like gravy and mashed potatoes.</p>

                    <p>Samuel quickly grew feelings for Sarah and had concluded that Sarah felt the same way; in his opinion, ther signs were too many. When he first approached her about this, she grew quiet and then mumbled, "umm, this is awkward". The stars were apparantly not aligned.</p>

                    <p>Despite the awkward encounter, our friendship continued to grow deeper. Samuel had become really confused at this point. He had expected to Sarah to push back on the friendship to confirm her platonic feelings. Pondering on it, he realized that maybe Sarah liked him but was going through some stuff.</p>

                    <p>So, we met up again. Samuel explained that he saw this going two ways. One she liked him but there were things going in her life that prevented her from being in a relationship. Two, she really did not have any interest in a romantic relationship and he really should just forget about all of this.</p>

                    <p>You probably won’t be able to guess what she said. Ready for it?</p>

                    <p>. . .</p>

                    <p>“I guess I could like you if I forced myself to.”</p>

                    <p>Sarah, reluctant to turn Sam down again, had tried to express it more elegantly than last time. Needless to say, Sarah eventually began to reciprocate the feelings a month later and after a couple more months of careful thought, she decided to tell Sam.</p>

                    <p>Our relationship has been more or less followed the same template: Samuel has always been eager to move to the next stage (sometimes impatiently) while Sarah has been cautious (sometimes reluctant). The exception to this ocurred in August of 2017 when Sarah decided she was ready for marriage and rather than telling Samuel (which is what he was waiting for), she decided to keep her feelings hidden from him until they took a trip to BC with youth from OCBC and Joe, another youth leader. On top of Sunny Peaks mountain, Sarah proposed.</p> 

                    <p>So here we are now, getting ready for marriage and we want you to be a part of it 🙂</p>

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