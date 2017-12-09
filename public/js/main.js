$(document).ready(function() {
    $('.carousel').carousel({
        interval: 5000
    })

    $('.our-story-btn-svg').click(
	    function(){
	    	$('.our-story-btn-svg').toggleClass('rotate-anim');
		}
	);

});