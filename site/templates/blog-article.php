<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header', array('page' => $page)) ?>

  <body>

    <? snippet('nav') ?>

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

          <div class="u-relative article-list u-mt50 u-sm-hide u-fromLeftOnLoad" style="height: calc(100% - 130px);">
            <div class="u-pin-topfull u-widthfull u-heightfull u-overflowscroll u-pl120 u-pr10">
              <div id="blog_result"></div>
            </div>
            <style>
              #blog_result .excerpt { display: none; }
            </style>
          </div>

        </div>
        <div class="bg-white col-xs-12 col-sm-7 article u-pb80">

          <div class="u-pt60 u-pb40">
            <h1><?= $page->title() ?></h1>
            <time class="c-grey u-opacity50"><?= $page->date('%d %B %Y') ?></time>
          </div>

          <?= $page->text()->kirbytext() ?>

          <div class="u-aligncenter">
            <div class=" u-mt40">
              <hr class="u-inlineblock u-width50 u-mr20 u-opacity50">
              <div class="u-inlineblock" style="vertical-align: middle;"><? snippet('logo-svg', array('emblem' => true, 'height' => 40, 'color' => 'rgba(86, 81, 73, 0.1)')) ?></div>
              <hr class="u-inlineblock u-width50 u-ml20 u-opacity50">
            </div>
          </div>

        </div>
        <div class="bg-white col-xs-12 col-sm-1"></div>
      </div>
    </section>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

    <? snippet('scripts-blog') ?>

  </body>

</html>
