<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <!-- This value is to prevent Google Search indexing before the site is live -->
  <!-- NB. REMOVE THIS TAG when switching to full site!!! -->
  <meta name="robots" content="noindex,nofollow"/>

  <!-- Social share parameters -->
  <meta property="og:image" content="<?= url('assets/images/anemptyspace.jpg') ?>" />
  <meta property="og:title" content="<?= $site->title() ?>" />
  <meta property="og:site_name" content="<?= $site->title() ?>" />
  <meta property="og:description" content="<?= $pages->find('home')->tagline()->text() ?>" />

  <?
  $css_assets = ($_SERVER['SERVER_NAME'] == 'localhost') ? array(
    'assets/css/flexboxgrid.min.css',
    'assets/css/ionicons.min.css',
    'assets/css/owl.carousel.min.css',
    'assets/css/style.css',
    ) : array(
    '//cdn.jsdelivr.net/flexboxgrid/6.3.0/flexboxgrid.min.css',
    '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css',
    '//fonts.googleapis.com/css?family=Martel:400,700|Montserrat:400,700&subset=latin-ext',
    'assets/css/style.css',
    );

  $js_assets = ($_SERVER['SERVER_NAME'] == 'localhost') ? array(
    'assets/js/jquery-2.2.3.min.js',
    'assets/js/owl.carousel.min.js',
    'assets/js/scripts.js',
    ) : array(
    'https://code.jquery.com/jquery-2.2.4.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js',
    'assets/js/scripts.js',
    );
  ?>
  
  <?= css($css_assets) ?>
  <?= js($js_assets) ?>

</head>