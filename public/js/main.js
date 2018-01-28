$(document).ready(function() {

    $("#loading-container").fadeOut(2500);

    var boys = {
        'paul_loh': {
            'name': 'Paul Loh',
            'description': 'My best man, Paul Loh. Aside from our first year in university, when my workout odor was apparently too abhorrent for him, he has been a very generous and honest friend. Generous cause he keeps on giving and helping, whether it be paying for the bill when we out, driving me to work or designing and developing half of this website. Honest cause he is both open enough to share his own life and bold enough to give me the advice I need. Ohh, and he is also explosive. If you don’t know what I mean, you will when it gets time to boogie. '
        },
        'paul_beckmann': {
            'name': 'Paul Beckmann',
            'description': 'Paul being a natural outgoing and social guy, always seems to be doing something, whether it be travelling, advancing his professional career in a handsome suit and tie, joining the reserves, taking law school, or getting married. His mere aura alone makes me more outgoing and sociable. Why, if it weren\'nt for him, I might not even have a job as he has devoted much time in teaching me how to write a resume and cover letter. He even dedicated a whole night to prepping me for an interview!'
        },
        'aaron_wong': {
            'name': 'Aaron Wong',
            'description': 'I am confident in saying that Aaron is one of the most unique and loving friends I know. He is always down to give you his time, attention, and food and not necessarily in that order. He is also one of the most daring friends I know, for at the time of this writing, he has ventured into an isolated area somewhere in the northern regions with the not much more than the essentials, in the middle of January, for a whole month. Bless your soul, Aaron.'
        },
        'daniel_chan': {
            'name': 'Daniel Chan',
            'description': 'As the oldest brother, I revelled at being the strongest and biggest, back in the day. Alas, the tables have turned and Daniel now bench presses twice my weight routinely - maybe because he is in the Royal Military College. However he possesses another trait that is far more impressive: his instinctiveness to smile at challenges and pain. So whether it be sailing in the cold waters of Iceland, obtaining a black belt in Taekwondo, or running endless miles with full combat gear, he likes it as long as it pushes him to new feats. '
        },
        'ezekiel_chan': {
            'name': 'Ezekiel Chan',
            'description': 'They say that the younger ones in the family are spoiled and lazy but that just isn’t the case with Ezekiel. Having worked many hours at McDonald’s and reaching solid grades in High School, he could have gone to university without a dime from his family or the government. However, for those of you who may not know him so well, do not be deceived by his initial aura of reservedness, there lies a true comedian behind the curtains. '
        },
        'jonathan_chan': {
            'name': 'Jonathan Chan',
            'description': 'Jonathan, the youngest brother, is full of creativity and a fast learner. Having written a few songs and also put his own PC together, he is apt in both art and technology. Jonathan and I both really enjoy board games, an apparent attribute that is not carried by many in the Chan family, who dismiss these games as either “trivial” or “boring”. As such, we end up playing more video games. I am sure Jonathan is fine with this though, as he excels his older brothers in some of them.'
        }
    };

    var girls = {
        'grace_kim': {
            'name': 'Grace Kim',
            'description': 'Sister of the bride with a child at her side. From worst-of-worst enemies to two halves of one person, we’ve been through it all. Tragically loves the bed more than food, her apathetic life finds small hope in decorating her home.'
        },
        'puja_ahluwalia': {
            'name': 'Puja Ahluwali',
            'description': 'The youngest amiga from the Ladouceur Losers (our old house name) and the most dumb points gained (don’t worry, you can laugh). Adult lifestyle; child at heart. Aspiring chef, no compass, but a big heart! Also a crucial planner behind our proposal story <3'
        },
        'chelsea_anne': {
            'name': 'Chelsea Anne',
            'description': 'The eldest amiga from the Ladouceur Losers (our old house name) and the most smart points gained. Fond of food, politics, and traveling. Catch her on her blog @ seasidesandsidestreats.com!'
        },
        'jessica_lee': {
            'name': 'Jessica Lee',
            'description': 'This small-bodied lady can out-eat a full grown man. A young and wise owl who peers gently into your soul. Mighty with words, and humble as a mouse. Give her 5 minutes and she will give you her life. That’s what makes her Maid of Honor!'
        },
        'vikki_moon': {
            'name': 'Vikki Moon',
            'description': 'If you become her friend you will immediately notice two things: gifts and emojis galore! This young fashionista is consumed by writing letters to her friends, going on coffee dates, and brightening people’s days! Our friendship began in East Asia and blossomed at home in Canada. Separated by provinces, she is a very fun pen pal to have!'
        },
        'randelee_macdonald': {
            'name': 'Randelee MacDonald',
            'description': 'Life is never boring nor balanced for this chica! A nomad and a hidden talent for training dogs, she loves chill times around campfires and epic adventures with friends. Who knows what’s next for this lady!'
        }
    };

    /* should be able to refactor these two functions into one
     * or at least combine most of their logic into another funciton
     */
    $('a[name="guy"]').click(function(eventObj) {
        eventObj.preventDefault();
        var name_key = $(this).attr('value');
        var img_id = '#' + name_key + '_img';

        $('#guy_name').html(boys[name_key]['name']);
        $('#guy_description').html(boys[name_key]['description']);
        $('#imagesOfGuys').children().removeClass('current-guy');
        $(img_id).addClass('current-guy');
    });

    $('a[name="girl"]').click(function(eventObj) {
        eventObj.preventDefault();
        var name_key = $(this).attr('value');
        var img_id = '#' + name_key + '_img';

        $('#girl_name').html(girls[name_key]['name']);
        $('#girl_description').html(girls[name_key]['description']);
        $('#imagesOfGirls').children().removeClass('current-girl');
        $(img_id).addClass('current-girl');
    });

    $('a[name="guy"][value="paul_loh"]').click();
    $('a[name="girl"][value="grace_kim"]').click();

    $('.carousel').carousel({
        interval: false
    })

    $('.our-story-btn-svg').click(
        function() {
            $('.our-story-btn-svg').toggleClass('rotate-anim');
            $('#our-heading-text').toggleClass('our-highlight-text');
            $('#story-heading-text').toggleClass('story-highlight-text');
        }
    );

    $("#event-nav").click(function() {
        $('html, body').animate({
            scrollTop: $("#third-body").offset().top
        }, 2000);
    });

    $("#things-nav").click(function() {
        $('html, body').animate({
            scrollTop: $("#fourth-body").offset().top
        }, 2000);
    });

    $("#wedding-party-nav").click(function() {
        $('html, body').animate({
            scrollTop: $("#fifth-body").offset().top
        }, 2000);
    });

    $("#registry-nav").click(function() {
        $('html, body').animate({
            scrollTop: $("#sixth-body").offset().top
        }, 2000);
    });

    $("#photos-nav").click(function() {
        $('html, body').animate({
            scrollTop: $("#seventh-body").offset().top
        }, 2000);
    });

    $("#scrollTopBtn").click(function() {
        $('html, body').animate({
            scrollTop: $("html,body").offset().top
        }, 2000);
    });
});

window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollTopBtn").style.display = "block";
    } else {
        document.getElementById("scrollTopBtn").style.display = "none";
    }
}

/*
 * Photo Section
 */

$('.engagementPhoto').click(function(event) {
    var pic = event.currentTarget.attributes.src.value;
    var largePicURL = pic.substring(0, pic.indexOf("_thumbnail")) + ".jpg";
    $('#imageModal').attr('src', largePicURL);
    $('#photoModalDialog').addClass('modalWidth');
});