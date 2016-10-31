<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header', array('page' => $page, 'meta_image' => url('assets/images/sitting-meeting.jpg'), 'meta_descr' => $site->description()->html())) ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('language-switcher') ?>

    <section class="bg-bluedarkfade c-white u-minheight90vh">

      <div class="row">
        <div class="col-xs-12 col-sm-4">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
          <div class="u-floatleft u-pl120 u-height50 u-sm-hide"></div>

          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft u-mr15 logo-svg-word-wrapper">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>


          <div class="u-xs-show u-pv10">
          </div>


        </div>
      </div>

      <div class="row u-pv30">
        <div class="col-xs-12 u-aligncenter">
          <? snippet('logo-svg', array('emblem' => true, 'height' => 140, 'color' => 'rgba(0, 0, 0, 0.25)')) ?>
        </div>
        <div class="col-xs-12 u-aligncenter">

          <h3 class="u-mb10"><?= $page->title()->html() ?></h3>
          <?= $page->text() ?><br>

          <div>
            <?
            // searches site for keyword and shows results if found
            $exploded_url = explode('/', $_SERVER['REQUEST_URI']);
            $searched_string = end($exploded_url);
            $results = $site->search($searched_string);
            $index = 0;
            ?>
            <? if ($results->count() > 0): ?>
              <br>
              <?= $page->lookingfor_text() ?>
              <ul class="u-alignleft" style="margin: 0 auto; max-width: 250px;">
              <? foreach($results as $result): $index++; if($index < 6) : ?>
                <li class="u-truncate">
                  <span class="u-inlineblock u-opacity50 u-width80">
                    <?= (in_array($result->parent()->template(), ['blog', 'events', 'members'])) ? ucfirst($result->parent()->template()) : 'Page'; ?>:
                  </span>
                  <a href="<?= $result->url() ?>" class="link-classic"><?= $result->title() ?></a>
                </li>
              <? endif; endforeach; ?>
              </ul>
            <? endif ?>
          </div>

          <a href="javascript:window.history.back();" class="button button-outline u-mt50"><?= l::get('back'); ?></a>
          <a href="<?= $site->homePage()->url() ?>" class="button button-white u-mt50 u-ml20"><?= $site->homePage()->title() ?></a>

        </div>
      </div>

    </section>

    <? // snippet('social-bar') ?>

    <? snippet('footer') ?>

  </body>

</html>
