<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <!-- Social share parameters -->
  <meta property="og:image" content="<?= url('assets/images/anemptyspace.jpg') ?>" />
  <meta property="og:title" content="<?= $site->title() ?>" />
  <meta property="og:site_name" content="<?= $site->title() ?>" />
  <meta property="og:description" content="<?= $pages->find('home')->tagline()->text() ?>" />

  <?
  $css_assets = array(
    'assets/css/flexboxgrid.min.css',
    'assets/css/ionicons.min.css',
    'assets/css/owl.carousel.min.css',
    'assets/css/updates-style.css',
  );

  $js_assets = ($_SERVER['SERVER_NAME'] == 'localhost') ? array(
    // local assets
    'assets/js/jquery-2.2.3.min.js',
    'assets/js/jquery.smooth-scroll.min.js',
    'assets/js/jquery.sticky-kit.min.js',
    'assets/js/owl.carousel.min.js',
    'assets/js/updates-scripts.js',
    // 'assets/js/updates-api.js',
    ) : array(
    // production assets
    '//code.jquery.com/jquery-2.2.3.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.7.2/jquery.smooth-scroll.min.js',
    '//cdn.jsdelivr.net/jquery.sticky-kit/1.1.2/jquery.sticky-kit.min.js',
    // '//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js',
    '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js',
    'assets/js/updates-scripts.js',
    );
  ?>
  
  <?= css($css_assets) ?>
  <?= js($js_assets) ?>

  <link rel="shortcut icon" href="assets/images/favicon<?= ($_SERVER['SERVER_NAME'] == 'localhost') ? '_testing' : '' ?>.ico">

</head>
