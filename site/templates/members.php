<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section class="bg-greylightest u-pv50">

      <div class="row">
        <div class="col-xs-9 col-xs-offset-3 col-sm-3 col-sm-offset-1">
          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft" style="padding-top: 2px;">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

        </div>
        <div class="col-xs-12 col-sm-5 u-pl80">
          <h1><?= $page->title() ?></h1>
          <div class="u-block u-mt30"><?= $page->text()->kirbytext() ?></div>
        </div>
      </div>

    </section>

    <? $article_padding = ($is_article) ? 'u-pb50' : 'u-pv50'; ?>
    <section class="bg-greylightest <?= $article_padding ?> article-list">

      <? foreach ($site->find('members')->children()->visible()->flip() as $member) : ?>

        <div class="row u-mb30">
          <div class="col-xs-12 col-sm-1 col-sm-offset-3 u-alignright">
            <? if ($image = $member->image($image_obj)) : ?>
              <div class="badge" style="background-image:url('<?= $image->url() ?>');"></div>
            <? endif ?>
          </div>
          <div class="col-xs-12 col-sm-5 article">

            <a href="<?= $member->url() ?>" class="u-block">

              <h3><?= $member->title() ?></h3>

              <? $fields = ['linkedin_url', 'job_title']; ?>

              <? if ($member->job_title()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>job title:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->job_title() ?></div>
                </div>
              <? endif ?>

              <? if ($member->bio()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>bio:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->bio() ?></div>
                </div>
              <? endif ?>

              <? if ($member->linkedin_url()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>linkedin_url:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->linkedin_url() ?></div>
                </div>
              <? endif ?>

              <? if ($member->twitter_url()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>twitter_url:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->twitter_url() ?></div>
                </div>
              <? endif ?>

              <? if ($member->facebook_url()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>facebook_url:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->facebook_url() ?></div>
                </div>
              <? endif ?>

              <? if ($member->instagram_url()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>instagram_url:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->instagram_url() ?></div>
                </div>
              <? endif ?>

              <? if ($member->website_url()->isNotEmpty()) : ?>
                <div class="row row-internalpadding">
                  <div class="col-xs-12 col-sm-3"><small>website_url:</small></div>
                  <div class="col-xs-12 col-sm-9"><?= $member->website_url() ?></div>
                </div>
              <? endif ?>


            </a>

          </div>
        </div>

      <? endforeach ?>

    </section>

    <? snippet('footer') ?>

  </body>

</html>
