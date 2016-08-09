<? if ($carousel = $page->carousel_images()->toStructure()) : ?>
  <div class="u-absolute owl-carousel owl-carousel-muted" style="height: 100%;">
    <? foreach($carousel as $image) :?>
      <figure><img src="<?= $page->image($image)->url() ?>" alt="" /></figure>
    <? endforeach ?>
  </div>
<? endif ?>
