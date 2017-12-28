$(document).ready(function() {

	var boys = {
		'paul_loh': {
			'name': 'Paul Loh',
			'description': 'aeefase asefesaf asefea esf g boij ijl.'
		},
		'paul_beckmann': {
			'name': 'Paul Beckmann',
			'description': 'bxbae saefesf asefea esf g boij iesafasefjl.'
		},
		'aaron_wong': {
			'name': 'Aaron Wong',
			'description': 'aeefase asefesaf.'
		},
		'daniel_chan': {
			'name': 'Daniel Chan',
			'description': 'Daniel is my second brother. yoyo.aeefase asefesaf asefea esf g boij ijl.'
		},
		'ezekiel_chan': {
			'name': 'Ezekiel Chan',
			'description': 'Ezekiel makes a lot of money. aeefase asefesaf asefea esf g boij ijl.'
		},
		'jonathan_chan': {
			'name': 'Jonathan Chan',
			'description': 'Jonathan sings like Pavarotti aeefase asefesaf asefea esf g boij ijl.'
		}
	};

	/* should be able to refactor these two functions into one
	 * or at least combine most of their logic into another funciton
	 */
	$('a[name="guy"]').click(function(eventObj){
		var name_key = $(this).attr('value');
		var img_id = '#' + name_key + '_img';

		$('#guy_name').html(boys[name_key]['name']);
		$('#guy_description').html(boys[name_key]['description']);
		$('#imagesOfGuys').children().removeClass('current-guy');
		$(img_id).addClass('current-guy');
	});

	$('a[name="girl"]').click(function(eventObj){
		var name_key = $(this).attr('value');
		var img_id = '#' + name_key + '_img';

		$('#girl_name').html(girls[name_key]['name']);
		$('#girl_description').html(girls[name_key]['description']);
		$('#imagesOfGuys').children().removeClass('current-girl');
		$(img_id).addClass('current-girl');
	});

    $('.carousel').carousel({
       interval: false
    })

    $('.our-story-btn-svg').click(
	    function(){
	    	$('.our-story-btn-svg').toggleClass('rotate-anim');
	    	$('#our-heading-text').toggleClass('our-highlight-text');
	    	$('#story-heading-text').toggleClass('story-highlight-text');
		}
	);

});