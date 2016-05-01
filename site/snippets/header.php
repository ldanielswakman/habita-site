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
      'https://fonts.googleapis.com/css?family=Work+Sans:400,600,700,500',
      'https://fonts.googleapis.com/css?family=Martel:400,700,600',
    )) ?>

    <?= js(array(
      'assets/js/jquery-2.2.3.min.js',
      'assets/js/jquery.smooth-scroll.min.js',
      'assets/js/jquery.sticky-kit.min.js',
      'assets/js/scripts.js',
      // 'assets/js/updates-api.js',
    )) ?>

  </head>

<body>
