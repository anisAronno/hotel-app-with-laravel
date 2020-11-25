// AOS initialization
;AOS.init();

//Menu Scroll JS



$(window).scroll(function (event) {
    var y = $(this).scrollTop(); //set position from top when to change style in pixels
    if (y >= 300) {
        $('.menu-class').addClass('resized');
    } else {
        $('.menu-class').removeClass('resized');
    }
});

$(window).scroll(function (event) {
    var y = $(this).scrollTop(); //set position from top when to change style in pixels
    if (y >= 300) {
        $('.logo').addClass('logo-resize');
        $('.book-now-btn').css('padding','1.5rem 2rem 1rem 2rem');
        $('.call-btn').css('padding',' 1.8rem 2rem 1.8rem 1rem');
    } else {
        $('.logo').removeClass('logo-resize');
        $('.logo').css('height','4rem');
        $('.book-now-btn').css('padding','2rem');
        $('.call-btn').css('padding','2rem');

    }
});



// owl carousel

$('.carousel').carousel({
    interval: 3000
  })

var owl = $('.owl-carousel');
owl.owlCarousel({
    
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:50000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        600:{
            items:2
        },
        900:{
            items:2
        },
        1000:{
            items:4
        }
    }

});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})





// ----------------
// datepicker
// ---------------

$( function() {
    $( ".datepicker-arrived" ).datepicker();
  } );
  $( function() {
    $( ".datepicker-leave" ).datepicker();
  } );


$(document).ready(function(){
    $('.room-review-more').hide();
    $('.room-review-icon').show();


    $('.room-review-icon').mouseover(function(){
        $('.room-review-more').show();
        $('.room-review-icon').hide();
    })
    $('.room-review-more').mouseleave(function(){
        $('.room-review-more').hide();
        $('.room-review-icon').show();
    })
})


//Isotop
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    });
  });


//Image  Gallery

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}





//Single Room 

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  
}
