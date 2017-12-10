$(document).ready(function() {
    $('.carousel').carousel({
        interval: 5000
    })

    $('.our-story-btn-svg').click(
	    function(){
	    	$('.our-story-btn-svg').toggleClass('rotate-anim');
	    	$('#our-heading-text').toggleClass('our-highlight-text');
	    	$('#story-heading-text').toggleClass('story-highlight-text');
		}
	);

});