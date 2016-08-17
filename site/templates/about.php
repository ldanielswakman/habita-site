<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section class="u-pin-topfull u-height100vh u-z0 bg-bluedarkfade">

      <? snippet('image-carousel', array('page' => $page)) ?>

    </section>

    <section class="u-relative u-z1 u-no-p-events">

      <div class="row">
        <div class="col-xs-12 col-sm-3 col-sm-offset-1">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
          <div class="u-floatleft u-pl120 u-height50 u-sm-hide"></div>

          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft u-mr15 logo-svg-word-wrapper">
            <? snippet('logo-svg', array('word' => true, 'color' => '#fff')) ?>
          </a>
        </div>
        <div class="col-xs-12 col-sm-8 article u-p-events u-mt70vh-sm">

          <div class="u-pv20 u-sm-show"></div>
          <h1 class="c-white u-mb50"><?= $page->title() ?></h1>

        </div>
        <div class="col-xs-8 col-xs-offset-4 col-sm-3 col-sm-offset-1">
        </div>
        <div class="col-xs-12 col-sm-7 article u-pt40 u-pb80 bg-white u-p-events">

          <div class="u-pv20 u-sm-hide"></div>

          <?= $page->text()->kirbytext() ?>

        </div>

        <div class="col-xs-12 col-sm-1 bg-white u-p-events"></div>

        <? if (count($page->features()->yaml())) : ?>

          <div class="col-xs-8 col-xs-offset-4 col-sm-3 col-sm-offset-1"></div>

          <div class="col-xs-12 col-sm-7 bg-greylightest u-p-events u-pv80">

            <div class="article">
              <div class="row row-internalpadding u-aligncenter">

                <? foreach ($page->features()->toStructure() as $feature) : ?>

                  <div class="col-xs-6 col-sm-3 u-mb30">
                    <? if ($feature->icon()->isNotEmpty()) : ?>
                      <? snippet('icon-svg', ['type' => $feature->icon(), 'size' => '60', 'classes' => '']) ?><br>
                    <? else : ?>
                      <div class="u-inlineblock u-width50 u-height50 bg-greylight u-mt10"></div><br>
                    <? endif ?>
                    <b class="c-grey"><?= $feature->title() ?></b>
                  </div>
                <? endforeach ?>
                
              </div>
            </div>

          </div>

          <div class="col-xs-12 col-sm-1 bg-greylightest u-p-events"></div>

        <? endif ?>

      </div>

    </section>

    <div class="u-relative u-z1">

      <? snippet('newsletter-next-bar') ?>

      <? snippet('footer') ?>

    </div>

  </body>

</html>
