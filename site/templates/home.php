<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <div class="bg-greylightest" style="height: 250px;">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-5 u-pv40">
          <h1 class="c-orange u-mb30">habita</h1>

          <blockquote>An open &amp; transparent<br> <b>coworking hub</b> for everyone...</blockquote>

          <div class="u-mv20">
            <button class="button button-primary u-mr10">explore</button>
            <button class="button button-outline">contact us</button>
          </div>

        </div>
      </div>
    </div>

    <div class="u-relative">

      <? if ($images = $page->images()->sortBy('sort', 'asc')) : ?>
        <div class="u-absolute owl-carousel" style="height: calc(100vh - 250px);">
          <? foreach($images as $image) :?>
            <figure><img src="<?= $image->url() ?>" alt="" /></figure>
          <? endforeach ?>
        </div>
      <? endif ?>

      <div class="row u-relative u-z2">
        <div class="col-xs-12 col-sm-4 col-sm-offset-5">
          <div class="bg-white u-pa30">

            <h4 class="c-greylight" style="font-weight: 500; letter-spacing: 0.25em;">FROM THE BLOG</h4>

            <div id="blog_result">posts will be here...</div>

          </div>

        </div>
      </div>

    </div>

    <a href="javascript:toggleMenu();">
      <? snippet('logo-svg', array('emblem' => true, 'color' => '#ff5000')) ?>    
    </a>

    <? snippet('nav') ?>

  </body>

</html>
