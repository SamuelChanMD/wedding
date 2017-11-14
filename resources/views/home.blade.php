@extends('layout') @section('title', 'Wedding 3') @section('content')
<div id='bannerImage' style='background-image: url("{!! ( isset($img_banner) ? asset($img_banner) : asset('images/home_page.JPG')) !!}");'>
	 	<div class='caption'>
	 		<div class="container">
	        <h1 class="pull-left" id="sarah">Sarah</h1>
	        <h1 class="pull-right" id="sam">Sam</h1>
	    </div>
 	</div>

</div>
<div class="container" id="secondBody">
	<div class="panel-body" id="our-story-section">
    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
    </p>
</div>
</div>
<div class="jumbotron test" id="thirdBody">
	<div class="container">
    	<h1>Details</h1>
    	<h2>15th June 2018</h2>
	</div>
</div>
@stop
