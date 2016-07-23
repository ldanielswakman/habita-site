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
  state = (state) ? state : '';
  if(state != 'close') {
    $('body').toggleClass('navIsOpen');
  } else {
    $('body').removeClass('navIsOpen');
  }
  return false;
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
      var $excerpt = item['excerpt'];
      var $readmore = '...';
      $html += '<p>' + $excerpt + $readmore + '</p>';
      $html += '</a>';

    } else if (type == 'member') {
      var $html  = '<a class="u-block u-clearfix u-mt5" href="' + item['url'] + '">';

      $html += '<div class="badge u-floatleft u-mr10" ';
      $html += 'style="background-image:url(\'' + item['profile_image'] + '\');">';
      $html += '</div>';

      $html += '<h4 class="u-pt5">' + item['title'] + '</h4>';

      if (item['job_title'].length > 0) {
        $html += '<p class="u-truncate"><small>' + item['job_title'] + '</small></p>';
      }

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
