
<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section class="bg-greylightest u-pv50">

      <div class="row">
        <div class="col-xs-9 col-xs-offset-3 col-sm-3 col-sm-offset-1">
          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft" style="padding-top: 2px;">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

          <? if ($is_article == true): ?>
            <a href="<?= $site->find('blog')->url() ?>"><h1 class="u-semibold c-greymedium"><?= $site->find('blog')->title() ?></h1></a>
          <? endif ?>

        </div>
        <div class="col-xs-12 col-sm-5 u-pl80">
          <h1><?= $page->title() ?></h1>
          <div class="u-block u-mt30"><?= $page->text()->kirbytext() ?></div>
        </div>
      </div>

    </section>

    <section class="bg-greylightest u-pv50 article-list">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-sm-offset-1"></div>

        <div class="col-xs-12 col-sm-7 article">

          <div class="row row-internalpadding">
            <? foreach ($site->find('events')->children()->visible()->flip() as $event) : ?>

              <div class="col-xs-12 col-sm-6">
                <div class="bg-white u-pa20">
                  <div class="u-aligncenter u-mb20">
                    <i class="ion ion-calendar ion-3x c-greylightest"></i>
                  </div>
                  <h3><?= $event->title() ?></h3>
                  <date><?= $event->date('%d %B %Y') ?></date>
                  <p class="u-lineheight20 u-mt5"><small><?= $event->description()->kirbytext() ?></small></p>
                  <? if ($event->facebook_link()->isNotEmpty()): ?>
                    <a href="<?= $event->facebook_link() ?>">Event on facebook</a>
                  <? endif ?>
                </div>
              </div>

            <? endforeach ?>
          </div>

        </div>

    </section>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

  </body>

</html>
