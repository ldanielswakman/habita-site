$(document).ready(function() {

    // initiate smooth scroll
    $('a[href^="#"]').smoothScroll();

    // initiate sticky kit
    $('.i-sticky').each(function() {
        $(this).stick_in_parent();
    });

    // listen to input change for async search
    $('#updates_search').on('input', function() {

        $('#updates_search').removeClass('isActive');

        delay(function(){

          $('#updates_search').addClass('isActive');

          lang_prefix = ($('html')[0].lang !== 'tr') ? $('html')[0].lang + '/' : '';
          request_url = lang_prefix + 'updates/api';
          getArticles(request_url, '#updates', $('#updates_search').val());

        }, 200 );
    });
});

function getArticles(baseURL, target, q) {  
  // build API URL
  $updates_api_url = baseURL;
  $updates_api_url += (q) ? '?q=' + q : '';
  $target = $(target);

  console.log('making API call...');

  // call API
  setTimeout(function() { var getJSONArticles = $.getJSON( $updates_api_url, function(r) {

    console.log('...reply received!');

    // empty target container
    $target.html('');

    // loop through the result
    $.each(r['data'], function(i, article) {

      var $html = '';
      $html += '<div id="' + article['slug'] + '" class="article u-mb50">';
      $html += '<h3>' + article['title'] + '</h3>';
      $html += '<div class="date">' + article['date'] + '</div class="date">';
      $html += '<p>' + article['text'] + '</p>';
      $html += '</div>';

      $target.append($html);
      $('#' + article['slug']).addClass('isLoaded');
      // do some other fancy js/jquery magic here.

    });

  }) }, 50);
}

// timeout for input
var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();
