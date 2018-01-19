$(document).ready(function() {

    var boys = {
        'paul_loh': {
            'name': 'Paul Loh',
            'description': 'My best man, Paul Loh. Aside from our first year in university, when my workout odor was apparently too abhorrent for him to gym with me, he has been a very generous and honest friend. Generous cause he keeps on giving, whether it be money (like paying for the bill when we eat out, and we eat out a lot) or his time (like designing and developing over half of this website). Honest cause he is both open enough to share his own life and bold enough to give me the advice I need. Ohh, and he is also explosive. If you don’t know what I mean, you will when it gets time to boogie. '
        },
        'paul_beckmann': {
            'name': 'Paul Beckmann',
            'description': 'Paul being a natural outgoing and social guy, always seems to be doing something, whether it be travelling, advancing his professional career in a handsome suit and tie, joining the reserves, taking law school, or getting married. His mere aura alone makes me more outgoing and sociable. Seriously though, this guy devoted time to teaching me how to write a resume, cover letter, and even spent a whole night prepping for an interview - it was a mixture of bootcamp and a feeling of awkwardness, but it was worth it. '
        },
        'aaron_wong': {
            'name': 'Aaron Wong',
            'description': 'I am confident in saying that Aaron is one of the most unique and loving friends I know. He is always down to give you his time, attention, and food and not necessarily in that order. He is also one of the most daring friends I know. To be honest, at the time of this writing, I was not even sure if he could be a groomsman for I feared he might not even be alive for the wedding! He has ventured into an isolated area somewhere in the northern regions with very little equipment, in the middle of January. Bless your soul, Aaron.'
        },
        'daniel_chan': {
            'name': 'Daniel Chan',
            'description': 'Daniel is the second oldest child in the family, I am the oldest. So as you can imagine, back in the day, I revelled at being the strongest and biggest brother. Alas, the tables have turned and he now bench presses twice my weight routinely - it may having something to do with him joining the Royal Military College. However he possesses another trait that is far more impressive: his instinctiveness to smile at obstacles, challenges, and pain. So whether it be sailing in the cold waters of Iceland, obtaining a black belt in Taekwondo, or running endless miles with full combat gear, he likes it as long as it pushes him to new feats. '
        },
        'ezekiel_chan': {
            'name': 'Ezekiel Chan',
            'description': 'They say that the younger ones in the family are spoiled and lazy but that just isn’t the case with Ezekiel. Having worked many hours at McDonald’s and reaching solid grades in High School, he could have gone to university without a dime from his family or the government. Unfortunately, he has generously offered to help out his oldest brother with some finances, ..oops. Anywho, for those of you who may not know him so well, do not be deceived by his initial aura of reservedness, there lies a true comedian behind the curtains. '
        },
        'jonathan_chan': {
            'name': 'Jonathan Chan',
            'description': 'Jonathan, the youngest brother, is full of creativity and a fast learner. Having written a few songs and also put his own PC together, he is apt in both art and technology. One thing he and I both really enjoy are board games, an apparent attribute that is not carried by many in the Chan family, who dismiss these games as either “trivial” or “boring”. As such, we end up playing less board games and more video games. I am sure Jonathan is fine with this though, as he excels his older brothers in some of them. '
        }
    };

    var girls = {
        'grace_kim': {
            'name': 'Grace Kim',
            'description': 'aeefase asefesaf asefea esf g boij ijl.'
        },
        'puja_ahluwalia': {
            'name': 'Puja Ahluwali',
            'description': 'bxbae saefesf asefea esf g boij iesafasefjl.'
        },
        'chelsea_anne': {
            'name': 'Chelsea Anne',
            'description': 'aeefase asefesaf.'
        },
        'jessica_lee': {
            'name': 'Jessica Lee',
            'description': 'Daniel is my second brother. yoyo.aeefase asefesaf asefea esf g boij ijl.'
        },
        'vikki_moon': {
            'name': 'Vikki Moon',
            'description': 'At a young age, he became permanently blind from a fire. Now he travels around the world, searching for revenge.'
        },
        'randelee_macdonald': {
            'name': 'Randelee MacDonald',
            'description': 'Jonathan sings like Pavarotti aeefase asefesaf asefea esf g boij ijl.'
        }
    };

    /* should be able to refactor these two functions into one
     * or at least combine most of their logic into another funciton
     */
    $('a[name="guy"]').click(function(eventObj) {
        var name_key = $(this).attr('value');
        var img_id = '#' + name_key + '_img';

        $('#guy_name').html(boys[name_key]['name']);
        $('#guy_description').html(boys[name_key]['description']);
        $('#imagesOfGuys').children().removeClass('current-guy');
        $(img_id).addClass('current-guy');
    });

    $('a[name="girl"]').click(function(eventObj) {
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

    $("#wedding-nav").click(function() {
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

$('.engagementPhoto').click(function(event){
    var pic = event.currentTarget.attributes.src.value;
    $('#imageModal').attr('src', pic);
});