<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <div class="bg-greylightest" style="height: 250px;">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-5 u-pv50">
          <h1 class="c-orange u-mb40">habita</h1>

          <blockquote>An open &amp; transparent<br> <b>coworking hub</b> for everyone...</blockquote>
          
        </div>
      </div>
    </div>

    <? if ($images = $page->images()->sortBy('sort', 'asc')) : ?>
      <div class="owl-carousel" style="max-height: calc(100vh - 250px);">
        <? foreach($images as $image) :?>
          <figure><img src="<?= $image->url() ?>" alt="" /></figure>
        <? endforeach ?>
      </div>
    <? endif ?>

    <a href="javascript:toggleMenu();">
      <? snippet('logo-svg', array('emblem' => true, 'color' => '#ff5000')) ?>    
    </a>

    <? snippet('nav') ?>

  </body>

</html>
