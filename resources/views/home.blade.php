@extends('layout') @section('title', 'Sam & Sarah') @section('content')
<div id='bannerImage' style='background-image: url(" {!! ( isset($img_banner) ? asset($img_banner) : asset( 'images/home_page.JPG')) !!} ");'>
    <div class='caption'>
        <div class='container'>
            <div class='row'>
                <h1 class='pull-left' id='sarah'>Sarah</h1>
                <h1 class='pull-right' id='sam'>Sam</h1>
            </div>
        </div>
    </div>
</div>
<div class='jumbotron' id='second-body'>
    <div class='container'>
        <div class='panel-body text-center' id='our-story-section'>
            <h1>Our Story</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
            </p>
        </div>
    </div>
</div>
<div class='jumbotron test' id='third-body'>
    <div id='carousel-section' class='carousel slide' data-ride='carousel'>
        
        <div class='carousel-inner text-center' role='listbox'>
            <div class='item active'>
                <div class='container' id='details-section'>
                    <h1>Details</h1>
                    <h2>15th June 2018</h2>
                    <h2>StoneFields</h2>
                    <h2>1985 9th Line Carleton Place  ON K7C 3P2</h2>
                    <h2>1500 HR till 2300 HR</h2>
                    <div id='rsvp-button'><a href='{{route("rsvp")}}'> RVSP </a></div>
                </div>
                <div class='carousel-caption'>
                </div>
            </div>
            <div class='item'>
                <div class='container' id='details-section'>
                    <h1>Details</h1>
                    <h2>15th June 2018</h2>
                    <h2>StoneFields</h2>
                    <h2>1985 9th Line Carleton Place  ON K7C 3P2</h2>
                    <h2>1500 HR till 2300 HR</h2>
                    <div id='rsvp-button'>RVSP</div>
                </div>
                <div class='carousel-caption'>
                </div>
            </div>
        </div>
        <ol class='carousel-indicators'>
            <li data-target='#carousel-section' data-slide-to='0' class='active'></li>
            <li data-target='#carousel-section' data-slide-to='1'></li>
        </ol>
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
<div class='jumbotron' id='fourth-body'>
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
@stop