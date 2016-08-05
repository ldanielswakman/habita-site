<div class="language-switcher u-pinned-topright u-nowrap">
  <? foreach($site->languages() as $language): ?>
    <? if ($site->language() != $language): ?>
      <a href="<?= $page->url($language->code()) ?>" class="link--grey u-inlineblock u-pa10">
        <i class="ion ion-arrow-swap"></i>
        <?= html($language->name()) ?>
      </a>
    <? endif ?>
  <? endforeach ?>
</div>
