<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

    <? snippet('nav') ?>

  <body>

    <div class="row">
      <div class="col-xs-12 col-sm-4 bg-greylightest-extendleft u-pv200">
      </div>
      <div class="col-xs-12 col-sm-7 u-pv50 article">

        <h1 class="u-mt15 u-mb50"><?= $page->title() ?></h1>

        <?= $page->text()->kirbytext() ?>

      </div>
    </div>

    <? snippet('footer') ?>

  </body>

</html>
