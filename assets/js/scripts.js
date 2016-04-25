$(document).ready(function() {

  // initiate smooth scroll
  $('a[href^="#"]').smoothScroll();


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
