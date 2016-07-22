$(document).ready(function() {


  $('body').addClass('isLoaded');


  // Owl carousel
  $('.owl-carousel').each(function() {
    $(this).owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      navText: ["<i class='ion ion-15x ion-ios-arrow-back'></i>", "<i class='ion ion-15x ion-ios-arrow-forward'></i>"],
      // lazyLoad : true,
      autoPlay: true,
      autoplayTimeout: 1000,
      // slideSpeed : 300,
      // paginationSpeed : 400,
    });
  });

  randomBlogPost('blog/api', '#blog_result');

});



// UI: toggle menu
function toggleMenu(state) {
  if(state != 'close') {
    $('body').toggleClass('navIsOpen');
  } else {
    $('body').removeClass('navIsOpen');
  }
}


// 
function randomBlogPost(baseURL, target) {

  // build API URL
  $updates_api_url = baseURL;
  $target = $(target);

  console.log('making API call...');

  $.getJSON( $updates_api_url, function(r) {

    console.log('...reply received!');

    // empty target container
    $target.html('');

    $randompost = Math.floor((Math.random() * r['data'].length) + 1);

    $html  = '<a href="' + r['data'][$randompost]['url'] + '">';
    $html += '<h4>' + r['data'][$randompost]['title'] + '</h4>';
    $html += '<time pubdate class="date">' + r['data'][$randompost]['date'] + '</time><br />';
    $excerpt = r['data'][$randompost]['text'].substring(0, 100);
    $readmore = '...';
    $html += '<p>' + $excerpt + $readmore + '</p>';
    $html += '</a>';

    $target.html($html);

    $target.closest('.u-appearOnLoad').addClass('isLoaded');

  })
}
