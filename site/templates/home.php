<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header', array('page' => $page, 'meta_image' => url('assets/images/sitting-meeting.jpg'), 'meta_descr' => $site->description()->html())) ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>
    
    <? snippet('language-switcher') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-animated">
      <? snippet('logo-svg', array('emblem' => true, 'color' => '#ff5000')) ?>
    </a>

    <div class="bg-greylightest">  <!-- style="height: 250px;" -->

      <div class="row logo-aligner">
        <div class="col-xs-12 col-sm-6 col-sm-offset-5 c-bluedarkfade">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
        
          <h1 class="u-mb30">
            <? snippet('logo-svg', array('word' => true, 'color' => '#8a8a8d')) ?>
          </h1>

          <div class="u-xs-show u-pv10">
          </div>

          <?= $page->text()->kirbytext() ?>

        </div>
      </div>
    </div>

    <?
    if ($image = $page->carousel_images()->toStructure()->first()) {
      $firstimg = $page->image($image)->url();
    }
    ?>

    <div class="u-relative bg-bluedarkfade u-overflowhidden u-flex-column" style="min-height: calc(100vh - 250px);"> <!-- background-image: url('<?= $firstimg ?>'); -->

      <? snippet('image-carousel', array('page' => $page)) ?>

      <section class="intro-box-container u-pt1r">

        <? $boxes = $page->content_boxes()->split() ?>

        <div class="row u-relative u-z2 u-no-p-events">
          <div class="col-xs-12 col-sm-1 col-md-4 col-md-offset-1" style="display: flex;">

            <? if (in_array('member', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-appearOnLoad u-mb1r">
                <a href="<?= url('members') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
                <h4 class="h4-capped"><?= strtoupper($site->find('members')->title()) ?></h4>
                <div id="member_result"></div>
              </div>
            <? endif ?>

          </div>
          <div class="col-xs-12 col-sm-5 col-md-3" style="display: flex;">

            <? if (in_array('blog', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-appearOnLoad u-mb1r">
                <a href="<?= url('blog') ?>" class="button button-small button-outline-reveal u-floatright"><?= l::get('see_all') ?></a>
                <h4 class="h4-capped"><?= strtoupper($site->find('blog')->title()) ?></h4>
                <div id="blog_result"></div>
              </div>
            <? endif ?>

          </div>
          <div class="col-xs-12 col-sm-5 col-md-3 u-no-p-events" style="display: flex;">

            <? if (in_array('event', $boxes)) : ?>
              <div class="bg-white-faded90 u-pa15 u-widthfull u-appearOnLoad u-mb1r">
                <a href="<?= url('events') ?>" class="button button-small button-outline-reveal u-floatright"><?= l::get('see_all') ?></a>
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

      <section class="<?= $bgcolor ?> u-pv15vw">
        <div class="row">

          <? if($section->slug() == 'whats-inside') : ?>

            <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 u-aligncenter u-pv20 u-relative">
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

          <? elseif($section->slug() == 'membership-options') : ?>

            <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 u-relative">

              <div class="row row-internalpadding u-ph30-sm">
                <? $membership = $pages->find('membership-options') ?>
                <? foreach ($membership->cards()->toStructure() as $card) : ?>

                  <div class="col-xs-6 u-mb20">
                    <a href="<?= $membership->url() ?>" class="u-block bg-bluedarkfade c-white u-heightfull">

                      <? if ($image = $card->image()) : ?>
                        <img src="<?= thumb($membership->image($image), array('width' => 400))->url() ?>" alt="" class="u-block u-maxwidth100p" />
                      <? endif ?>

                      <div class="u-pa10">
                        <h4><?= $card->title() ?></h4>
                      </div>
                    </a>
                  </div>

                <? endforeach ?>
              </div>

            </div>

          <? else: ?>

            <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1">
            </div>

          <?endif; ?>

          <div class="col-xs-12 col-sm-7 col-md-6<?= (in_array($section->bgcolor(), ['grey', 'orange', 'orangedark', 'bluedarkfade'])) ? ' c-white' : ''; ?>">
            <?= $section->text()->kirbytext() ?>
          </div>

        </div>
      </section>

    <? endforeach ?>

    <? snippet('footer', array('page' => $page)) ?>

    <? snippet('scripts-home') ?>

  </body>

</html>
