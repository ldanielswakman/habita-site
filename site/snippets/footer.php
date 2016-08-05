<div class="footer bg-white u-pt50 u-pb100">

  <div class="row">
    <div class="col-xs-7 col-sm-3 col-sm-offset-4 content">
      
      <? $pages = $site->pages()->visible() ?>
      <? $pagecount = round((count($pages->toArray())/2)); ?>
      <ul class="footer-menu u-mb20">
        <? $i = 0; ?>
        <? foreach($pages as $page) : ?>
          <? $i++; ?>
          <li><a href="<?= $page->url() ?>"<?= ($page->isOpen()) ? ' class="isActive"' : ''; ?>><?= $page->title() ?></a></li>

          <? if ($i == $pagecount): ?>
              </ul>
            </div>
            <div class="col-xs-5 col-sm-2">
              <ul class="footer-menu u-mb20">
          <? endif ?>

        <? endforeach ?>
      </ul>

    </div>
    <div class="col-xs-12 col-sm-2">
      <small class="u-block u-lineheight20 c-greymedium">
        <?= $site->footertext()->kirbytext() ?>
      </small>
    </div>

  </div>
</div>

<a href="http://www.ldaniel.eu/" target="_blank" class="u-block bg-greylightest c-greymedium u-pv20">
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-sm-offset-1">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>
    <div class="col-xs-12 col-sm-7">
      Designed and built by <strong>ldaniel.eu</strong>
    </div>
  </div>
</a>
