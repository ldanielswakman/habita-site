<?
$is_article = ($page->template() == 'blog-article') ? true : false; 
?>

<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <? $header_bg = ($is_article) ? 'bg-greylightest' : 'bg-white'; ?>
    <section class="<?= $header_bg ?> u-pv50">

      <div class="row">
        <div class="col-xs-9 col-xs-offset-3 col-sm-4 col-sm-offset-1">
          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft" style="padding-top: 2px;">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

          <? if ($is_article == true): ?>
            <a href="<?= $site->find('blog')->url() ?>"><h1 class="u-semibold c-greymedium"><?= $site->find('blog')->title() ?></h1></a>
          <? endif ?>

        </div>
        <div class="col-xs-12 col-sm-5">
          <h1><?= $page->title() ?></h1>
          <? if ($is_article != true): ?>
            <div class="u-block u-mt30"><?= $page->text()->kirbytext() ?></div>
          <? endif ?>
        </div>
      </div>

    </section>

    <? $article_padding = ($is_article) ? 'u-pb50' : 'u-pv50'; ?>
    <section class="bg-greylightest <?= $article_padding ?> article-list">

      <? foreach ($site->find('blog')->children()->visible()->flip() as $article) : ?>

        <div class="row u-mb30">
          <? if ($is_article != true): ?>
            <div class="col-xs-12 col-sm-3 col-sm-offset-1">
            </div>
          <? endif ?>
          <div class="col-xs-12 col-sm-5 col-sm-offset-1">

            <a href="<?= $article->url() ?>" class="u-block">
              <h3><?= $article->title() ?></h3>
              <date><?= $article->date('%d %B %Y') ?></date>
              <? if ($is_article != true): ?>
                <p class="u-lineheight20 u-mt5"><small><?= excerpt($article->text(), 100) ?></small></p>
              <? endif ?>
            </a>

          </div>
        </div>

      <? endforeach ?>

    </section>

    <? if ($is_article == true): ?>
      <section id="article" class="u-pin-topfull u-z10 u-no-p-events u-overflowscroll u-height100vh">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
          </div>
          <div class="bg-white u-minheight100vh col-xs-12 col-sm-7 u-p-events article">
            <h1 class="u-pv60"><?= $page->title() ?></h1>
            <?= $page->text()->kirbytext() ?>
          </div>
          <div class="bg-white u-minheight100vh col-xs-12 col-sm-1"></div>
        </div>
      </section>
    <? endif ?>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

  </body>

</html>
