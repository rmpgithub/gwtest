$(document).ready(function () {

    $('.hamburger').on('click', function (e) {
        $(this).toggleClass('active');
        $('nav').toggleClass('active');
    });

    /*$('.flag.GB').on('click', function(e){
    	alert('website will be available soon');
    }); 
    $('.flag.UK').on('click', function(e){
    	alert('сторiнка незабаром буде доступна');
    });*/

    $('.menu').toggleClass('fixed', $(window).scrollTop() > 50);

    // $('.gallery .row a').simpleLightbox();

    $('.slider-index').slick({
        infinite: true,
        adaptiveHeight: true,
        autoplay: true,
        speed: 1600,
        // fade: true
    });

    $('.gallery a').simpleLightbox();



});

// Set the date we're counting down to
var countDownDate = new Date("June 20, 2020 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    //     + minutes + "m " + seconds + "s ";
    document.getElementById('counter').innerHTML = days + ' dni ' + hours + ' godzin ' + minutes + 'minut';

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("counter").innerHTML = "To już! Zapraszamy!";
    }
}, 1000);