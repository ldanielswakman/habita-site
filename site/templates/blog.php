<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section class="bg-white u-pb50">

      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-4">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
          <div class="u-floatleft u-pl120 u-height50 u-sm-hide"></div>

          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft u-mr15 logo-svg-word-wrapper">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

          <a href="<?= $page->url() ?>"><h2 class="u-sm-show u-semibold c-greymedium"><?= $page->title() ?></h2></a>

        </div>
        <div class="col-xs-12 col-sm-8 col-md-7 article">
          <a href="<?= $page->url() ?>"><h2 class="u-sm-hide u-mt50 u-semibold c-greymedium"><?= $page->title() ?></h2></a>
          <div class="u-block u-mt30"><?= $page->text()->kirbytext() ?></div>
        </div>
      </div>

    </section>

    <section class="bg-greylightest u-pv50 article-list">

      <? foreach ($page->children()->visible()->flip() as $article) : ?>

        <a href="<?= $article->url() ?>" class="row u-mb30">
            <div class="col-xs-3 col-sm-offset-1 col-sm-2 col-md-offset-2 col-md-2 u-aligncenter u-pt5">
              <? if ($article->hasImages()): ?>
                <? $image = $article->images()->first() ?>
                <div class="article-list-image u-inlineblock u-width120 u-maxwidth100p u-pv40 bg-image" style="background-image: url('<?= thumb($article->image(), array('width' => 320))->url() ?>');">
                </div>
              <? endif ?>
            </div>
          <div class="col-xs-9 col-sm-8 col-md-7 article">

            <h3><?= $article->title() ?></h3>
            <time><?= $article->date('%d %B %Y') ?></time>
            <? if ($is_article != true): ?>
              <p class="u-lineheight20 u-mt5"><small><?= excerpt($article->text(), 100) ?></small></p>
            <? endif ?>

          </div>
        </a>

      <? endforeach ?>

    </section>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

    <? snippet('scripts-blog') ?>

  </body>

</html>
