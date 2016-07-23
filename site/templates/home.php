<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <div class="bg-greylightest" style="height: 250px;">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-5 u-pv40">
        
          <h1 class="c-orange u-mb30">habita</h1>

          <?= $page->intro()->kirbytext() ?>

        </div>
      </div>
    </div>

    <div class="u-relative bg-bluedarkfade">

      <? if ($images = $page->images()->sortBy('sort', 'asc')) : ?>
        <div class="u-absolute owl-carousel" style="height: calc(100vh - 250px - 10px);">
          <? foreach($images as $image) :?>
            <figure><img src="<?= $image->url() ?>" alt="" /></figure>
          <? endforeach ?>
        </div>
      <? endif ?>

      <div class="row u-relative u-z2 u-no-p-events">
        <div class="col-xs-12 col-sm-4 col-sm-offset-5">
          <div class="bg-white u-pa20 u-mt20 u-appearOnLoad">

            <a href="<?= url('blog') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>

            <h4 class="c-greylight u-lineheight30" style="font-weight: 500; letter-spacing: 0.2em;">BLOG</h4>

            <div id="blog_result">loading blog posts...</div>

          </div>

        </div>
      </div>

      <div class="row u-relative u-z2 u-no-p-events">

        <div class="col-xs-12 col-sm-4 col-sm-offset-2">
          <div class="bg-white u-pa20 u-mt60 u-appearOnLoad">

            <a href="<?= url('events') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>

            <h4 class="c-greylight u-lineheight30" style="font-weight: 500; letter-spacing: 0.2em;">EVENTS</h4>

            <div id="event_result">
              loading events...
            </div>

          </div>

        </div>

        <div class="col-xs-12 col-sm-4 col-sm-offset-1 u-no-p-events">
          <div class="bg-white u-pa20 u-mt20 u-appearOnLoad">

            <a href="<?= url('members') ?>" class="button button-small button-outline-reveal u-floatright">See all</a>

            <h4 class="c-greylight u-lineheight30" style="font-weight: 500; letter-spacing: 0.2em;">MEMBERS</h4>

            <div id="member_result">loading members...</div>

          </div>

        </div>

      </div>

    </div>

    <div class="bg-orange c-white u-pv50">

      <!-- <div class="row">
        <div class="col-xs-12 col-sm-7 col-sm-offset-5">
          sdlfsdlkjfslkj
        </div>
      </div> -->

    </div>


    <div class="bg-white u-pv50">

      <div class="row">
        <div class="col-xs-12 col-sm-7 col-sm-offset-5">
          <? $pages = $site->pages()->visible() ?>

          <ul>
            <? foreach($pages as $page) : ?>
              <li><a href="<?= $page->url() ?>"><?= $page->title() ?></a></li>
            <? endforeach ?>
          </ul>

        </div>
      </div>
    </div>

    <div class="footer">
    </div>

    <a href="javascript:toggleMenu();">
      <? snippet('logo-svg', array('emblem' => true, 'color' => '#ff5000')) ?>    
    </a>

    <? snippet('nav') ?>

  </body>

</html>
