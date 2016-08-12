<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <? snippet('language-switcher') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-animated">
      <? snippet('logo-svg', array('emblem' => true, 'color' => '#ff5000')) ?>
    </a>

    <div class="bg-greylightest" style="height: 250px;">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-5 u-pt50 c-bluedarkfade">
        
          <h1 class="u-mb30">
            <? snippet('logo-svg', array('word' => true, 'color' => '#8a8a8d')) ?>
          </h1>

          <?= $page->text()->kirbytext() ?>

        </div>
      </div>
    </div>

    <div class="u-relative bg-bluedarkfade u-overflowhidden" style="display: flex; min-height: calc(100vh - 250px);">

      <? snippet('image-carousel', array('page' => $page)) ?>

      <section class="u-stick-bottomfull u-pb10">

        <? $boxes = $page->content_boxes()->split() ?>

        <div class="row u-relative u-z2 u-no-p-events" style="margin-top: -50px;">
          <div class="col-xs-12 col-sm-1 col-md-4 col-md-offset-1" style="display: flex;">

            <? if (in_array('member', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-appearOnLoad u-mb10">
                <a href="<?= url('members') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('members')->title()) ?></h4>
                <div id="member_result"></div>
              </div>
            <? endif ?>

          </div>
          <div class="col-xs-12 col-sm-5 col-md-3" style="display: flex;">

            <? if (in_array('blog', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-appearOnLoad u-mb10">
                <a href="<?= url('blog') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('blog')->title()) ?></h4>
                <div id="blog_result"></div>
              </div>
            <? endif ?>

          </div>
          <div class="col-xs-12 col-sm-5 col-md-3 u-no-p-events" style="display: flex;">

            <? if (in_array('event', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-appearOnLoad u-mb10">
                <a href="<?= url('events') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('events')->title()) ?></h4>
                <div id="event_result"></div>
              </div>
            <? endif ?>

          </div>
        </div>

      </section>

    </div>

    <? snippet('social-bar') ?>

    <? // Configurable sections from subpages ?>
    <? foreach ($page->children()->visible() as $section) : ?>

      <? $bgcolor = ($section->bgcolor()->isNotEmpty()) ? 'bg-' . $section->bgcolor() : 'bg-white'; ?>

      <section class="<?= $bgcolor ?> u-pv150">
        <div class="row">
          <? if($section->slug() == 'whats-inside') : ?>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1 u-aligncenter u-pv20 u-relative">
              <div class="u-stick-topfull u-aligncenter u-opacity30">
                <? snippet('icon-svg', ['type' => 'flexible', 'size' => '200', 'classes' => '']); ?>
                <? snippet('icon-svg', ['type' => 'desk', 'size' => '150', 'classes' => '']); ?>
              </div>
              <div class="u-relative u-mt30">
                <?
                snippet('icon-svg', ['type' => 'lounge', 'size' => '80', 'classes' => '']);
                snippet('icon-svg', ['type' => 'coffee', 'size' => '80', 'classes' => '']);
                snippet('icon-svg', ['type' => 'printer', 'size' => '80', 'classes' => '']);
                snippet('icon-svg', ['type' => 'presentation', 'size' => '80', 'classes' => '']);
                ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-5 c-white">
              <?= $section->text()->kirbytext() ?>
            </div>
          <? elseif($section->slug() == 'membership-options') : ?>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1 u-relative">

              <div class="row row-internalpadding u-mt20 u-ph30">
                <? $membership = $pages->find('membership-options') ?>
                <? foreach ($membership->cards()->toStructure() as $card) : ?>

                  <div class="col-xs-6 u-mb20">
                    <a href="<?= $membership->url() ?>" class="u-block bg-bluedarkfade c-white u-heightfull">

                      <? if ($image = $card->image()) : ?>
                        <img src="<?= thumb($membership->image($image), array('width' => 320))->url() ?>" alt="" class="u-block u-maxwidth100p" />
                      <? endif ?>

                      <div class="u-pa10">
                        <h4><?= $card->title() ?></h4>
                      </div>
                    </a>
                  </div>

                <? endforeach ?>
              </div>

            </div>
            <div class="col-xs-12 col-sm-5 u-pt50">
              <?= $section->text()->kirbytext() ?>
            </div>
          <?endif; ?>
        </div>
      </section>

    <? endforeach ?>

    <? snippet('footer') ?>

  </body>

</html>
