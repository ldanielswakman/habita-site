
<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header', array('page' => $page)) ?>

  <body>

    <? snippet('nav') ?>

    <? snippet('contactform') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <?
    $bgimage = '';
    if($image = $page->bgimage()) {
      $bgimage .= ' style="background-image: url(\'';
      $bgimage .= $page->image($image)->url();
      $bgimage .= '\');"';
    }
    ?>
    <section class="bg-greylightest bg-imagemuted c-white"<?= $bgimage ?>>

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

        </div>
        <div class="col-xs-12 col-sm-6 u-pl80 u-pv50">
          <h1><?= $page->title() ?></h1>
          <div class="u-block u-mt30"><?= $page->text()->kirbytext() ?></div>
        </div>
      </div>

    </section>

    <section class="bg-greylightest u-pv50 article-list">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-sm-offset-1"></div>

        <div class="col-xs-12 col-sm-8 col-md-7 article">

          <div class="row row-internalpadding">
            <? foreach ($site->find('events')->children()->visible()->flip() as $event) : ?>

              <div class="col-xs-12 col-sm-6 u-flex-grow1">
                <div class="bg-white u-mb20">
                  <?
                  $bgimage = '';
                  if ($image = $event->cover_image()) {
                    $bgimage = ' style="background-image: url(\'' . thumb($event->image(), array('width' => 320))->url() . '\');"';
                  }
                  ?>
                  <div class="bg-greylight bg-imagemuted u-aligncenter u-height150 u-pv30"<?= $bgimage ?>>
                    <? if ($event->cover_image()->isEmpty()): ?>
                      <i class="ion ion-calendar ion-3x c-greylight"></i>
                    <? endif ?>
                  </div>
                  <div class="u-pa20">
                    <h3><?= $event->title() ?></h3>
                    <date><?= $event->date('%d %B %Y') ?></date>
                    <div class="u-lineheight20 u-mt5"><small><?= $event->description()->kirbytext() ?></small></div>
                    <? if ($event->facebook_link()->isNotEmpty()): ?>
                      <a href="<?= $event->facebook_link() ?>">Event on facebook</a>
                    <? endif ?>
                  </div>
                </div>
              </div>

            <? endforeach ?>
          </div>

        </div>

    </section>

    <? snippet('newsletter-next-bar') ?>

    <? snippet('footer') ?>

    <script>setFavicon();</script>

  </body>

</html>
