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
    'assets/css/style.css'
    ) : array(
    'assets/css/updates-style.css'
    );

  $js_assets = ($_SERVER['SERVER_NAME'] == 'localhost') ? array(
    ) : array(
    );
  ?>
  
  <?= css($css_assets) ?>
  <?= js($js_assets) ?>

</head>