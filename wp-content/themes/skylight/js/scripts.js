$(document).ready(function () {
  //     $('a[href*=#]').bind('click', function(e) {
  //             e.preventDefault(); // prevent hard jump, the default behavior

  //             var target = $(this).attr("href"); // Set the target as variable

  //             // perform animated scrolling by getting top-position of target-element and set it as scroll target
  //             $('html, body').stop().animate({
  //                     scrollTop: $(target).offset().top
  //             }, 600, function() {
  //                     location.hash = target; //attach the hash (#jumptarget) to the pageurl
  //             });

  //             return false;
  //     });

  //     $(window).scroll(function() {
  //         var scrollDistance = $(window).scrollTop() + 10;

  //         // Show/hide menu on scroll
  //         //if (scrollDistance >= 850) {
  //         //		$('nav').fadeIn("fast");
  //         //} else {
  //         //		$('nav').fadeOut("fast");
  //         //}

  //         // Assign active class to nav links while scolling
  //         $('.page-section').each(function(i) {
  //                 if ($(this).position().top <= scrollDistance) {
  //                         $('.nav-list .nav-item a.active').removeClass('active');
  //                         $('.nav-list .nav-item a').eq(i).addClass('active');
  //                 }
  //         });
  //     }).scroll();
  $(".project-carousel").owlCarousel({
    loop: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        margin: 30,
        items: 1,
        stagePadding: 200,
      },
    },
  });

  $(".project-detail-carousel").owlCarousel({
    loop: true,
    // margin: 30,
    nav: true,
    // stagePadding: 200,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $(".testimonial-carousel").owlCarousel({
    loop: true,
    //     margin: 30,
    nav: true,
    //     stagePadding: 200,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  ScrollReveal({
    distance: "30px",
    origin: "bottom",
    duration: 2000,
    opacity: 0,
  });

  //about section reveal 
  ScrollReveal().reveal(".about-title");
  ScrollReveal().reveal(".about-description", {delay: 150});
  ScrollReveal().reveal(".about .btn-more", {delay: 300});
  ScrollReveal().reveal(".about-img", {delay: 450});

  // service section reveal
  ScrollReveal().reveal(".service-list .service-item-wrapper");
  ScrollReveal().reveal(".service-list .service-item-wrapper:nth-child(2)", {delay: 150});
  ScrollReveal().reveal(".service-list .service-item-wrapper:nth-child(3)", {delay: 300});
  
  // projects section reveal
  ScrollReveal().reveal(".projects .section-title");
  ScrollReveal().reveal(".projects .project-carousel", {delay: 150});
  
  // testimonial section reveal
  ScrollReveal().reveal(".testimonial .section-title");
  ScrollReveal().reveal(".testimonial .testimonial-carousel", {delay: 150});

});
