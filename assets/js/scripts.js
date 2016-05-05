$(document).ready(function() {

  // initiate smooth scroll
  $('a[href^="#"]').smoothScroll({
    offset: -70,
    afterScroll: function() {
      if(history.pushState) {
        history.pushState(null, null, $(this).attr('href'));
      }
      else {
        location.hash = $(this).attr('href');
      }
    },
  });
  // execute smoothscroll on page load if hash is present
  if(location.hash) {
    $.smoothScroll({
      offset: -70,
      scrollTarget: location.hash
    });
  }


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

events = 'ready scroll resize scrollstart scrollstop';
$(document).on(events, function() { slideInOnScroll(); });
