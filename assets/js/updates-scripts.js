$(document).ready(function() {

  // initiate smooth scroll
  $('a[href^="#"]').smoothScroll({
    offset: -70,
    afterScroll: function() {
      $hash = $(this).attr('href');
      $('.article' + $hash).addClass('isExpanded');

      if(history.pushState) {
        history.pushState(null, null, $hash);
      }
      else {
        location.hash = $hash;
      }
    },
  });
  // execute smoothscroll on page load if hash is present
  if(location.hash) {
    $.smoothScroll({
      offset: -70,
      scrollTarget: location.hash,
      afterScroll: function() {
        $('.article' + location.hash).addClass('isExpanded');
      },
    });
  }


  // Owl carousel
  $('.owl-carousel').each(function() {
    $(this).owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ["<i class='ion ion-15x ion-arrow-left-c'></i>", "<i class='ion ion-15x ion-arrow-right-c'></i>"],
      // lazyLoad : true,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplaySpeed: 1000,
      navSpeed: 1000,
    });
  });


  // Interaction Class: sticky kit
  $('.i-sticky').each(function() {
    $(this).stick_in_parent();
  });

});

// Interaction Class: appear on scroll

function slideInOnScroll() {
  scroll = $(window).scrollTop();
  $('.i-slideinonscroll').each(function() {
    offset = $(this).attr('data-scroll-offset') ? Number($(this).attr('data-scroll-offset')) : 0;

    if (scroll > offset) {
      $(this).addClass('isVisible');
    } else {
      $(this).removeClass('isVisible');
    }
  });
}

function expandArticle(obj) {
  if(obj) {
    obj.closest('.article').toggleClass('isExpanded');
  } else {
    console.log('invalid object...');
  }
}

events = 'ready scroll resize scrollstart scrollstop';
$(document).on(events, function() { slideInOnScroll(); });
