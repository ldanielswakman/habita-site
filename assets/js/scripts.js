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

  // start with fetching random blog post...
  getRandomContent('blog/api', '#blog_result', 'blog');

  // .. when done, get random member ...
  randomContentRequest['blog'].done(function() {
    getRandomContent('members/api', '#member_result', 'member');

    // .. when done, get random member ...
    randomContentRequest['member'].done(function() {
      getRandomContent('events/api', '#event_result', 'event');
    });

  });

});



// UI: toggle menu
function toggleMenu(state) {
  if(state != 'close') {
    $('body').toggleClass('navIsOpen');
  } else {
    $('body').removeClass('navIsOpen');
  }
}


// retrieve blog posts from API and output a random post
function getRandomContent(baseURL, target, type) {

  // define parameters
  var $url = (baseURL) ? baseURL : '';
  var $target = (target) ? $(target) : '';
  var $type = (type) ? type : 'undefined';

  console.log('making ' + type + ' API call...');

  randomContentRequest = [];
  randomContentRequest[$type] = $.getJSON( $url, function(r) {

    console.log('...reply for ' + type + ' received!');

    // empty target container
    $target.html('');

    // get random item from array
    var $randompost = Math.floor((Math.random() * r['data'].length));
    item = r['data'][$randompost];

    // different output structure based on type
    if (type == 'blog') {
      var $html  = '<a href="' + item['url'] + '">';
      $html += '<h4>' + item['title'] + '</h4>';
      $html += '<time pubdate class="date">' + item['date'] + '</time><br />';
      var $excerpt = item['text'].substring(0, 100);
      var $readmore = '...';
      $html += '<p>' + $excerpt + $readmore + '</p>';
      $html += '</a>';
    } else if (type == 'member') {
      var $html  = '<a>';
      $html += '<h4>' + item['title'] + '</h4>';
      $html += '</a>';
    } else if (type == 'event') {
      var $html  = '<a href="' + item['url'] + '">';
      $html += '<h4>' + item['title'] + '</h4>';
      $html += '<time pubdate class="date">' + item['date'] + '</time><br />';
      $html += '</a>';
    } else {
      console.log('wrong or no `type` defined');
    }

    $target.html($html);

    $target.closest('.u-appearOnLoad').addClass('isLoaded');

  })
}
