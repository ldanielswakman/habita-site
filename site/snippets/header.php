<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?= css('assets/css/main.css') ?>
    <?= css('assets/css/style.css') ?>

    <?= js('assets/js/jquery-2.2.3.min.js') ?>
    <?= js('assets/js/jquery.smooth-scroll.min.js') ?>
    <?= js('assets/js/jquery.sticky-kit.min.js') ?>

    <script>
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

              request_url = '<?= ($site->language() != 'tr') ? $site->language() . '/' : '' ?>updates/api';
              getArticles(request_url, '#updates', $('#updates_search').val());

            }, 200 );

            // if($(this).val().length > 3) {

            //     console.log('it changed and has value is: ' + $(this).val());

            //     $(this).addClass('isActive');

            //     request_url = '<?= ($site->language() != 'tr') ? $site->language() . '/' : '' ?>updates/api';
            //     getArticles(request_url, '#updates', $(this).val());

            // } else {
            //     $(this).removeClass('isActive');
            // }
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


    </script>

  </head>

<body>
