<div class="bg-orange c-white u-aligncenter">

  <div class="row row-nopadding">

    <? foreach($site->socialmedia()->toStructure() as $item) : ?>
      <div class="col-xs-6 col-sm">
        <a href="<?= $item->link() ?>" target="_blank" class="u-block link-block u-pv30 u-ph10">
          <i class="ion ion-<?= $item->type() ?> ion-2x"></i><br>
          <?= $item->text() ?>
        </a>
      </div>
    <? endforeach ?>

  </div>

</div>
