<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body>

    <div class="row">
      <div class="col-xs-12 col-sm-4 bg-greylightest-extendleft u-pv200">
      </div>
      <div class="col-xs-12 col-sm-6 col-sm-offset-1 u-pv50">

        <h1 class="u-mt15 u-mb50"><?= $page->title() ?></h1>

        <p><?= $page->text()->kirbytext() ?></p>

      </div>
    </div>

  <? snippet('nav') ?>

  </body>

</html>
