<div class="u-pinned-topright">
  <? foreach($site->languages() as $language): ?>
    <? if ($site->language() != $language): ?>
      <a href="<?= $language->url() ?>" class="link--grey u-inlineblock u-pa10">
        <i class="ion ion-arrow-swap"></i>
        <?= html($language->name()) ?>
      </a>
    <? endif ?>
  <? endforeach ?>
</div>
