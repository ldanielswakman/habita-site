<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header', array('page' => $page)) ?>

  <body>

    <? snippet('nav') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section>

      <div class="row">
        <div class="col-xs-12 col-sm-4 bg-greylightest">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
          <div class="u-floatleft u-pl120 u-height50 u-sm-hide"></div>

          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft u-mr15 logo-svg-word-wrapper">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

        </div>
        <div class="col-xs-12 col-sm-8 col-md-7 article u-pv50">

          <h1 class="u-mb50"><?= $page->title() ?></h1>

          <?= $page->text()->kirbytext() ?>

        </div>

        <? if (count($page->cards()->yaml())) : ?>

          <div class="col-xs-12 col-sm-4 bg-greylightest"></div>

          <div class="col-xs-12 col-sm-8 col-md-7 u-ph0">

            <div class="article__edgetoedge">
              <div class="row row-internalpadding">

                <? foreach ($page->cards()->toStructure() as $card) : ?>
                  <? $bgcolor = ($card->bgcolor()->isNotEmpty()) ? 'bg-' . $card->bgcolor() : 'bg-white'; ?>

                  <div class="col-xs-12 col-sm-6">
                    <div class="<?= $bgcolor ?> c-white u-mb30 card">

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

                        <? $features = $pages->filterBy('template', 'about')->first()->features()->toStructure() ?>

                        <div class="u-clearfix detail">
                          <? foreach($card->icons()->split() as $icon) : ?>
                            <?
                            $title = 'empty';
                            foreach ($features as $feature):
                              if($feature->icon() == $icon) { $title = $feature->title(); }
                            endforeach;
                            ?>
                            <div class="u-clearfix" title="<?= $title ?>">
                              <div class="u-floatleft"><? snippet('icon-svg', ['type' => $icon, 'size' => '30', 'classes' => '']) ?></div>
                              <div class="u-floatleft u-lineheight30 u-ml10"><?= $title ?></div>
                            </div>
                          <? endforeach ?>
                        </div>
                        <div class="not-detail">
                          <? foreach($card->icons()->split() as $icon) : ?>
                            <?
                            $title = 'empty';
                            foreach ($features as $feature):
                              if($feature->icon() == $icon) { $title = $feature->title(); }
                            endforeach;
                            ?>
                            <span title="<?= $title ?>"><? snippet('icon-svg', ['type' => $icon, 'size' => '30', 'classes' => '']) ?>
                          <? endforeach ?>
                        </div>

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

        <? endif ?>

      </div>

    </section>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

    <script>setFavicon();</script>

  </body>

</html>
