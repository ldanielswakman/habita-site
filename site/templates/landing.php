<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body class="bg-greylightest">

    <div class="panel bg-greylightest u-flex-center">

      <div>

        <div class="u-aligncenter u-mb10">
          <? snippet('logo-svg', ['emblem' => true, 'color' => '#ff5000', 'height' => 40]) ?>
        </div>

        <h2 class="u-ph50 u-mb50 u-aligncenter"><?= l::get('want_to_stay_up_to_date') ?></h2>

        <?php snippet('newsletter_signup', ['name' => true, 'telephone' => true]) ?>

      </div>

    </div>

    <div class="panel panel--content">

      <? snippet('language-switcher') ?>

      <div class="u-aligncenter u-pa50">
        <? snippet('logo-svg', ['color' => '#8a8a8d', 'emblem_color' => '#ff5000', 'height' => 40]) ?>
      </div>

      <div class="bg-orange u-pa50">

        <div class="row">
          <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-1 u-aligncenter">
            <figure><img src="<?= url('assets/images/talk.svg') ?>" alt="" /></figure>
          </div>
          <div class="first-sm col-xs-12 col-sm-8">
            <blockquote><?= $page->test_text() ?></blockquote>

            <p><?= $page->features_title() ?></p>
          </div>
        </div>

      </div>

      <? if ($images = $page->images()->sortBy('sort', 'asc')) : ?>
        <div class="owl-carousel">
          <? foreach($images as $image) :?>
            <? // <figure><img class="owl-lazy" data-src="" alt="" /></figure> ?>
            <figure><img src="<?= $image->url() ?>" alt="" /></figure>
          <? endforeach ?>
        </div>
      <? endif ?>

      <blockquote class="u-pa50"><?= $page->intro_2_text() ?></blockquote>

      <blockquote><?= $page->features_text() ?></blockquote>

      <div class="bg-greylightest u-pa50">

        <h3 class="c-orange u-mb20"><?= $page->features_title() ?></h3>

        <p><?= $page->features_text() ?></p>

        <div class="row u-pv20">

          <? // Features list ?>
          <? foreach ($page->features()->toStructure() as $feature) :?>
            <div class="col-xs-12 col-sm-6 u-pv10">
              <? snippet('icon-svg', ['type' => $feature->icon(), 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
              <h4 class="c-grey u-mt10 u-ml50"><?= $feature->title() ?></h4>
            </div>
          <? endforeach ?>

        </div>

      </div>


      <div class="u-pa50">

        <h3 class="c-orange u-mb20"><?= $page->membership_title() ?></h3>

        <p><?= $page->membership_text() ?></p>

        <div class="row u-aligncenter u-mt50">

          <? // Membership options list ?>
          <? foreach ($page->membership_options()->toStructure() as $option) :?>
            <div class="col-sm-4 col-xs-12">
              <? snippet('icon-svg', ['type' => $option->icon(), 'size' => '120', 'classes' => '']) ?>
              <h4 class="c-orange"><?= $option->title() ?></h4>
            </div>
          <? endforeach ?>

        </div>

      </div>

      <div class="u-pa50 bg-grey">



        <div class="row">
          <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-1 u-aligncenter">
            <figure><img src="<?= url('assets/images/projection.svg') ?>" alt="" /></figure>
          </div>
          <div class="first-sm col-xs-12 col-sm-8">

            <h3 class="u-mb20"><?= $page->events_title() ?></h3>

            <p><?= $page->events_text() ?></p>

            <p><?= $page->test_text() ?></p>

          </div>
        </div>

      </div>

      <div class="row row--nopadding u-hideoverflow">
        <a href="#" class="link--bgorange col-xs-6 u-pa50">
          <i class="ion ion-arrow-left-c ion-2x"></i>
          <br />
          <?= l::get('newsletter_signup_descr') ?>
        </a>
        <a href="<?= url('/') ?>" class="link--bgorange col-xs-6 u-pa50 u-alignright">
          <i class="ion ion-arrow-right-c ion-2x"></i>
          <br />
          <?= l::get('continue_to_blog') ?>
        </a>
      </div>

      <div class="u-pa50">
        <blockquote><?= $page->test_text() ?></blockquote>
      </div>

    </div>

  </body>

</html>