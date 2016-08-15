<section class="bg-orange c-white">
  <div class="row">
    <div id="newsletter-signup" class="col-xs-12 col-sm-4 u-pv70 u-ph20 u-aligncenter">
      <h3><?= l::get('newsletter_signup_title') ?></h3>
      <p><?= l::get('newsletter_signup_descr') . '!' ?></p>
    </div>
    <div class="col-xs-12 col-sm-4 u-pv75 u-ph20 u-alignleft">
      <? snippet('newsletter_signup', ['theme' => 'light']) ?>
    </div>
    <div class="col-xs-12 col-sm-3 first-xs last-sm u-aligncenter">
      <? if($page->hasNextVisible()): ?>
        <a href="<?= $page->nextVisible()->url() ?>" class="u-block link-block u-lineheight30 u-pv80 u-ph20">
          <small><?= strtoupper(l::get('next')) ?>:</small> <b><?= $page->nextVisible()->title() ?></b>
        </a>
      <? endif ?>
    </div>
  </div>
</section>
