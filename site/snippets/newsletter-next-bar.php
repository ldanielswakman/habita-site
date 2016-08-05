<section class="bg-orange c-white">
  <div class="row">
    <div class="col-xs-12 col-sm-4 u-pt80 content u-alignright">
      <h3><?= l::get('newsletter_signup_title') ?></h3>
      <p><?= l::get('newsletter_signup_descr') . '!' ?></p>
    </div>
    <div class="col-xs-12 col-sm-4 u-pt80 content u-alignleft">
      <? snippet('newsletter_signup', ['theme' => 'light']) ?>
    </div>
    <div class="col-xs-12 col-sm-3 u-alignright">
      <? if($page->hasNextVisible()): ?>
        <a href="<?= $page->nextVisible()->url() ?>" class="u-block link-block u-lineheight30 u-pv80 u-ph20">
          <small><?= strtoupper(l::get('next')) ?>:</small> <b><?= $page->nextVisible()->title() ?></b>
        </a>
      <? endif ?>
    </div>
  </div>
</section>
