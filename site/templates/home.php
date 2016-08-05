<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

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

    <div class="u-relative bg-bluedarkfade u-overflowhidden" style="display: flex; min-height: calc(100vh - 250px - 10px);">

      <? if ($carousel = $page->carousel_images()->toStructure()) : ?>
        <div class="u-absolute owl-carousel" style="height: 100%;">
          <? foreach($carousel as $image) :?>
            <figure><img src="<?= $page->image($image)->url() ?>" alt="" /></figure>
          <? endforeach ?>
        </div>
      <? endif ?>

      <div class="u-widthfull u-flex-alignend">
      <? $boxes = $page->content_boxes()->split() ?>

        <div class="row u-relative u-z2 u-no-p-events">
          <div class="col-xs-12 col-sm-3 col-sm-offset-2" style="display: flex;">

            <? if (in_array('event', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-flex-alignend u-appearOnLoad">
                <a href="<?= url('events') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('events')->title()) ?></h4>
                <div id="event_result"></div>
              </div>
            <? endif ?>

          </div>
          <div class="col-xs-12 col-sm-4" style="display: flex;">

            <? if (in_array('blog', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-flex-alignend u-appearOnLoad">
                <a href="<?= url('blog') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('blog')->title()) ?></h4>
                <div id="blog_result"></div>
              </div>
            <? endif ?>

          </div>
          <div class="col-xs-12 col-sm-3 u-no-p-events" style="display: flex;">

            <? if (in_array('member', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-flex-alignend u-appearOnLoad">
                <a href="<?= url('members') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('members')->title()) ?></h4>
                <div id="member_result"></div>
              </div>
            <? endif ?>

          </div>
        </div>
      </div>

    </div>

    <? snippet('social-bar') ?>

    <? // Configurable sections from subpages ?>
    <? foreach ($page->children()->visible() as $section) : ?>

      <? $bgcolor = ($section->bgcolor()->isNotEmpty()) ? 'bg-' . $section->bgcolor() : 'bg-white'; ?>

      <section class="<?= $bgcolor ?> u-pv50">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-sm-offset-1 u-aligncenter u-pv20">
            <?
            // This is temporary
            if($section->slug() == 'whats-inside') :
              snippet('icon-svg', ['type' => 'food', 'size' => '60', 'classes' => '']);
              snippet('icon-svg', ['type' => 'printer', 'size' => '60', 'classes' => '']);
              snippet('icon-svg', ['type' => 'presentation', 'size' => '60', 'classes' => '']);
            endif;
            ?>
          </div>
          <div class="col-xs-12 col-sm-5">
            <?= $section->text()->kirbytext() ?>
          </div>
        </div>
      </section>

    <? endforeach ?>

    <? snippet('footer') ?>

  </body>

</html>
