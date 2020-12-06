$('.top-content').backstretch("assets/img/backgrounds/1.jpg");




/********************************* */
// add scroll animation and make navbar links work
/********************************* */
function scroll_to(clicked_link, nav_height) {
    var element_class = clicked_link.attr('href').replace('#', '.');
    var scroll_to = 0;
    if(element_class != '.top-content') {
        element_class += '-container';
        scroll_to = $(element_class).offset().top - nav_height;
    }
    if($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
    }
}

/********************************* */
// add typewriter animation to header description
/********************************* */
var occupation = document.getElementById('typed-occupation');

var typedOccupation = new Typewriter(occupation, {
    loop: false,
    delay: 40
});

typedOccupation.typeString('senior @ oregon state, studying computer science. ')
    .pauseFor(300)
    .deleteChars(2)
    .pauseFor(100)
    .typeString(' & studio art')
    .pauseFor(2500)
    .start();


jQuery(document).ready(function() {
 
    // ...
 
    // toggle "navbar-no-bg" class
    $('.top-content .text').waypoint(function() {
        $('nav').toggleClass('navbar-no-bg');
    });
    
    // Navigation
   $('a.scroll-link').on('click', function(e) {
        e.preventDefault();
        scroll_to($(this), $('nav').outerHeight());
    });
    

    // back-to-top button functionality
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('.back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
 
});