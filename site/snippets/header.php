<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?= css(array(
      'assets/css/style.css',
      'assets/css/ionicons.min.css',
      // '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
      // '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    )) ?>

    <?= js(array(
      'assets/js/jquery-2.2.3.min.js',
      'assets/js/jquery.smooth-scroll.min.js',
      'assets/js/jquery.sticky-kit.min.js',
      // 'assets/js/updates-api.js',
    )) ?>

    <script>
      $(document).ready(function() {
        // initiate smooth scroll
        $('a[href^="#"]').smoothScroll();

        // initiate sticky kit
        $('.i-sticky').each(function() {
          $(this).stick_in_parent();
        });
      });
    </script>

  </head>

<body>
