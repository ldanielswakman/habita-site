<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? $meta_image = ($image = $page->image()) ? $image->url() : ''; ?>
  <? snippet('header', array('meta_title' => $page->title(), 'meta_descr' => excerpt($page->text(), 160), 'meta_image' => $meta_image)) ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section id="article" class="bg-greylightest">
      <div class="row">
        <div class="col-xs-12 col-sm-4">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
          <div class="u-floatleft u-pl120 u-height50 u-sm-hide"></div>

          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft u-mr15 logo-svg-word-wrapper">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

          <a href="<?= $site->find('blog')->url() ?>"><h2 class="u-semibold c-greymedium"><?= $site->find('blog')->title() ?></h2></a>

          <div class="u-maxheight100p u-overflowscroll u-mt50 article-list u-pl120 u-sm-hide u-fromLeftOnLoad">
            <div id="blog_result"></div>
            <style>
              #blog_result .excerpt { display: none; }
            </style>
          </div>

        </div>
        <div class="bg-white col-xs-12 col-sm-7 article u-pb80">
          <h1 class="u-pv60"><?= $page->title() ?></h1>
          <?= $page->text()->kirbytext() ?>
        </div>
        <div class="bg-white col-xs-12 col-sm-1"></div>
      </div>
    </section>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

    <? snippet('scripts-blog') ?>

  </body>

</html>
