<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <? snippet('nav') ?>

  <a href="#" onclick="return toggleMenu();" class="nav-logo">
    <? snippet('logo-svg', array('emblem' => true, 'color' => '#ff5000')) ?>    
  </a>

  <body>

    <div class="bg-greylightest" style="height: 250px;">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-5 u-pt50">
        
          <h1 class="u-mb30">
            <? snippet('logo-svg', array('word' => true, 'color' => '#8a8a8d')) ?>
          </h1>

          <?= $page->intro()->kirbytext() ?>

        </div>
      </div>
    </div>

    <div class="u-relative bg-bluedarkfade u-overflowhidden" style="display: flex; min-height: calc(100vh - 250px - 10px);">

      <? if ($images = $page->images()->sortBy('sort', 'asc')) : ?>
        <div class="u-absolute owl-carousel" style="height: 100%;">
          <? foreach($images as $image) :?>
            <figure><img src="<?= $image->url() ?>" alt="" /></figure>
          <? endforeach ?>
        </div>
      <? endif ?>

      <div style="width: 100%; align-self: flex-end;">

        <div class="row u-relative u-z2 u-no-p-events">
          <div class="col-xs-12 col-sm-3 col-sm-offset-2" style="display: flex;">

            <div class="bg-white-faded90 u-pa15 u-appearOnLoad" style="width: 100%; align-self: flex-end;">
              <a href="<?= url('events') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
              <h4 class="h4-capped"><?= strtoupper($site->find('events')->title()) ?></h4>
              <div id="event_result"></div>
            </div>

          </div>

          <div class="col-xs-12 col-sm-4" style="display: flex;">

            <div class="bg-white-faded90 u-pa15 u-appearOnLoad" style="width: 100%; align-self: flex-end;">
              <a href="<?= url('blog') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
              <h4 class="h4-capped"><?= strtoupper($site->find('blog')->title()) ?></h4>
              <div id="blog_result"></div>
            </div>

          </div>

          <div class="col-xs-12 col-sm-3 u-no-p-events" style="display: flex;">

            <div class="bg-white-faded90 u-pa15 u-appearOnLoad" style="width: 100%; align-self: flex-end;">
              <a href="<?= url('members') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>
              <h4 class="h4-capped"><?= strtoupper($site->find('members')->title()) ?></h4>
              <div id="member_result"></div>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="bg-orange c-white u-aligncenter">

      <div class="row">
        <div class="col-xs-6 col-sm-3">
          <a href="https://www.facebook.com/habita.coworking" class="u-block u-pv30">
            <i class="ion ion-social-facebook ion-2x"></i><br>
            Get habita in your news feed
          </a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="https://www.facebook.com/habita.coworking" class="u-block u-pv30">
            <i class="ion ion-social-instagram ion-2x"></i><br>
            See our latest photos
          </a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="https://www.facebook.com/habita.coworking" class="u-block u-pv30">
            <i class="ion ion-social-twitter ion-2x"></i><br>
            Have a look at our tweets
          </a>
        </div>
        <div class="col-xs-6 col-sm-3">
          <a href="https://www.facebook.com/habita.coworking" class="u-block u-pv30">
            <i class="ion ion-android-mail ion-2x"></i><br>
            Drop us an email
          </a>
        </div>
      </div>

    </div>

    <? snippet('footer') ?>

  </body>

</html>
