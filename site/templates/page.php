<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <? snippet('nav') ?>

  <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
    <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
  </a>

  <body>

    <section>

      <div class="row">
        <div class="col-xs-12 col-sm-3 col-sm-offset-1 bg-greylightest-extendleft u-pv50">
          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft" style="padding-top: 2px;">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>
        </div>
        <div class="col-xs-12 col-sm-7 article u-pv50">

          <h1 class="u-mb50"><?= $page->title() ?></h1>

          <?= $page->text()->kirbytext() ?>

        </div>
      </div>

    </section>

    <section class="bg-orange u-pv50">

      <? snippet('newsletter_signup') ?>

    </section>

    <? snippet('footer') ?>

  </body>

</html>
