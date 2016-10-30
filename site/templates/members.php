<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <? snippet('nav') ?>

    <a href="#" onclick="return toggleMenu();" class="nav-logo nav-logo-watermark">
      <? snippet('logo-svg', array('emblem' => true, 'color' => 'rgba(86, 81, 73, 0.1)')) ?>
    </a>

    <section class="bg-white">

      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-4">

          <!-- Layout boxes -->
          <div class="u-pt50 u-sm-hide"></div>
          <div class="u-pt20 u-sm-show"></div>
          <div class="u-floatleft u-pl70 u-height50 u-sm-show"></div>
          <div class="u-floatleft u-pl120 u-height50 u-sm-hide"></div>

          <a href="<?= $site->url( $site->language()->code() ) ?>" class="u-floatleft u-mr15 logo-svg-word-wrapper">
            <? snippet('logo-svg', array('word' => true)) ?>
          </a>

          <a href="<?= $page->url() ?>"><h2 class="u-sm-show u-semibold c-greymedium"><?= $page->title() ?></h2></a>

        </div>
        <div class="col-xs-12 col-sm-8 col-md-7 article">
          <a href="<?= $page->url() ?>"><h2 class="u-sm-hide u-mt50 u-semibold c-greymedium"><?= $page->title() ?></h2></a>
          <div class="u-block u-mt30"><?= $page->text()->kirbytext() ?></div>

          <form class="u-relative u-pt10 u-mt30 u-pr60">
            <input class="field field-box u-pl0" style="border-top-width: 0;" pattern=".{2,}" type="text" name="q" id="q" placeholder="<?= l::get('search_habitans') ?>" value="<?= $query ?>" />
            <label class="field-box--label" style="left: 0;">
              <? $results_string = ($numResults > 1) ? $numResults . ' ' . l::get('results') : $numResults . ' ' . l::get('result'); ?>
              <?= (strlen($query) > 0) ? $results_string : l::get('search') . ' (' . l::get('min_2_char') . ')' ?>
            </label>
            <? if(strlen($query) > 0) : ?>
              <a href="<?= page()->url() ?>" class="u-pinned-topright c-greylight u-pa15"><i class="ion ion-android-close ion-2x"></i></a>
            <? endif ?>
            <input type="submit" style="position: absolute; left: -9999px;" />
          </form>

        </div>
      </div>

    </section>

    <? $article_padding = ($is_article) ? 'u-pb50' : 'u-pv50'; ?>
    <section class="bg-greylightest <?= $article_padding ?> article-list">

      <div class="row row-nopadding">
        <div class="col-xs-12 col-md-11 col-md-offset-1">

          <div class="row u-mb30">

            <? $members = (isset($query) && strlen($query) > 0) ? $results : $site->find('members')->children()->visible()->shuffle(); ?>
            <? foreach ($members as $member) : ?>

              <div class="col-xs-12 col-sm-6 col-md-4 u-pv20 card">

                <div class="u-clearfix u-mb10 u-mr15">
                  <div class="u-floatleft u-mr15">
                    <? if ($image = $member->image($image_obj)) : ?>
                      <div class="badge badge--large" style="background-image:url('<?= thumb($image, array('width' => 160))->url() ?>');"></div>
                    <? else : ?>
                      <div class="badge badge--large u-aligncenter bg-white u-pv25">
                        <i class="ion ion-ios-body ion-2x c-greylight"></i>
                      </div>
                    <? endif ?>
                  </div>

                  <h3 class="u-mt10 u-lineheight20"><?= $member->title() ?></h3>

                  <? if ($member->job_title()->isNotEmpty()) : ?>
                    <small class="u-block u-lineheight15 u-mv5"><?= $member->job_title() ?></small>
                  <? endif ?>

                  <? if ($member->linkedin_url()->isNotEmpty()) : ?>
                      <a class="button button-white-reveal u-floatleft u-height25 u-pa0 u-ph5 u-mr5 u-aligncenter u-lineheight25" style="margin-left: -1px;" target="_blank" href="<?= $member->linkedin_url() ?>" class="u-mr10"><i class="ion ion-social-linkedin"></i></a>
                  <? endif ?>

                  <? if ($member->twitter_url()->isNotEmpty()) : ?>
                      <a class="button button-white-reveal u-floatleft u-height25 u-pa0 u-ph5 u-mr5 u-aligncenter u-lineheight25" style="margin-left: -1px;" target="_blank" href="<?= $member->twitter_url() ?>" class="u-mr10"><i class="ion ion-social-twitter"></i></a>
                  <? endif ?>

                  <? if ($member->facebook_url()->isNotEmpty()) : ?>
                      <a class="button button-white-reveal u-floatleft u-height25 u-pa0 u-ph5 u-mr5 u-aligncenter u-lineheight25" style="margin-left: -1px;" target="_blank" href="<?= $member->facebook_url() ?>" class="u-mr10"><i class="ion ion-social-facebook"></i></a>
                  <? endif ?>

                  <? if ($member->instagram_url()->isNotEmpty()) : ?>
                      <a class="button button-white-reveal u-floatleft u-height25 u-pa0 u-ph5 u-mr5 u-aligncenter u-lineheight25" style="margin-left: -1px;" target="_blank" href="<?= $member->instagram_url() ?>" class="u-mr10"><i class="ion ion-social-instagram"></i></a>
                  <? endif ?>

                  <? if ($member->website_url()->isNotEmpty()) : ?>
                      <a class="button button-white-reveal u-floatleft u-height25 u-pa0 u-ph5 u-mr5 u-aligncenter u-lineheight25" style="margin-left: -1px;" target="_blank" href="<?= $member->website_url() ?>" class="u-mr10"><i class="ion ion-link"></i></a>
                  <? endif ?>

                </div>

                <? // member bio ?>
                <? if ($member->bio()->isNotEmpty()) : ?>
                  <div class="u-mb15">
                    <? $excerpt_length = 140; ?>
                    <? if(strlen($member->bio()) > $excerpt_length) : ?>

                      <small class="u-block not-detail c-greymedium u-mb5" style="line-height: 1.8em;"><?= excerpt($member->bio(), $excerpt_length) ?></small>
                      <small class="u-block detail c-greymedium u-mb5 u-hide"><?= $member->bio()->kirbytext() ?></small>

                      <a href="#expand" class="not-detail"><?= l::get('more') ?> <i class="ion ion-chevron-down"></i></a>
                      <a href="#expand" class="detail"><?= l::get('less') ?> <i class="ion ion-chevron-up"></i></a>

                    <? else : ?>
                      <small class="u-block u-lineheight20 c-greymedium u-mb5"><?= $member->bio()->kirbytext() ?></small>
                    <? endif ?>
                  </div>
                <? endif ?>

              </div>

            <? endforeach ?>

          </div>

        </div>
      </div>

    </section>

    <? snippet('footer') ?>

  </body>

</html>
