<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

  <section>

      <div class="row">
        <div class="col-xs-8 col-xs-offset-4 col-sm-3 col-sm-offset-1 bg-greylightest-extendleft u-pv50">
          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft" style="padding-top: 2px;">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>
        </div>
        <div class="col-xs-12 col-sm-7 article u-pv50">

          <h1 class="u-mb50"><?= $page->title() ?></h1>

          <?= $page->text()->kirbytext() ?>

        </div>

        <div class="col-xs-8 col-xs-offset-4 col-sm-3 col-sm-offset-1 bg-greylightest-extendleft u-pv50"></div>

        <div class="col-xs-12 col-sm-7 u-ph0">

          <div class="article__edgetoedge">
            <div class="row row-internalpadding">


              <? foreach ($page->cards()->toStructure() as $card) : ?>
                <? $bgcolor = ($card->bgcolor()->isNotEmpty()) ? 'bg-' . $card->bgcolor() : 'bg-white'; ?>

                <div class="col-xs-12 col-sm-6">
                  <div class="<?= $bgcolor ?> c-white u-mb30">

                    <? if ($image = $card->image()) : ?>
                      <img src="<?= $page->image($image)->url() ?>" alt="" class="u-block u-maxwidth100p" />
                    <? endif ?>

                    <div class="u-ph30 u-pt30 u-pb15">

                      <div class="u-floatright" style="margin: -15px -15px 0 0;">
                        <? if ($type = $card->type()) : ?>
                          <? snippet('icon-svg', ['type' => $type, 'size' => '80', 'classes' => '']) ?>
                        <? endif ?>
                      </div>

                      <h3 class="u-mb5"><?= $card->title() ?></h3>

                      <? foreach($card->icons()->split() as $icon) : ?>
                        <? snippet('icon-svg', ['type' => $icon, 'size' => '30', 'classes' => '']) ?>
                      <? endforeach ?>

                      <br>

                      <?= $card->text()->kirbytext() ?>

                    </div>

                    <div class="u-clearfix">
                      <?= $card->action()->kirbytext() ?>
                    </div>

                  </div>
                </div>
              <? endforeach ?>
              
            </div>
          </div>

        </div>
      </div>

    </section>

    <section class="bg-orange u-pv50">

      <? snippet('newsletter_signup') ?>

    </section>

    <? snippet('footer') ?>

  </body>

</html>
