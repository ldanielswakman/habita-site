$(document).ready(function() {

  // Owl carousel
  $('.owl-carousel').each(function() {
    $(this).owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ["<i class='ion ion-15x ion-arrow-left-c'></i>", "<i class='ion ion-15x ion-arrow-right-c'></i>"],
      // lazyLoad : true,
      autoPlay: true,
      autoplayTimeout: 5000,
      // slideSpeed : 300,
      // paginationSpeed : 400,
    });
  });
  
});


function toggleMenu(state) {
  if(state != 'close') {
    $('body').toggleClass('navIsOpen');
  } else {
    $('body').removeClass('navIsOpen');
  }
}
