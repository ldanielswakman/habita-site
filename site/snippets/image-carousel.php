<? if ($carousel = $page->carousel_images()->toStructure()) : ?>
  <div class="owl-carousel owl-carousel-muted">
    <? foreach($carousel as $image) :?>
      <figure><img src="<?= $page->image($image)->url() ?>" alt="" /></figure>
    <? endforeach ?>
  </div>
<? endif ?>
