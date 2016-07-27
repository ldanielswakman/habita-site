<div class="footer bg-white u-pt50 u-pb100">

  <div class="row">
    <div class="col-xs-12 col-sm-3 col-sm-offset-4 u-pl80">
      
      <? $pages = $site->pages()->visible() ?>
      <? $pagecount = (count($pages->toArray())/2); ?>
      <ul class="footer-menu">
        <? $i = 0; ?>
        <? foreach($pages as $page) : ?>
          <? $i++; ?>
          <li><a href="<?= $page->url() ?>"<?= ($page->isOpen()) ? ' class="isActive"' : ''; ?>><?= $page->title() ?></a></li>

          <? if ($i == $pagecount): ?>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-2">
              <ul class="footer-menu">
          <? endif ?>

        <? endforeach ?>
      </ul>

    </div>
    <div class="col-xs-12 col-sm-2">
      <small class="u-block u-lineheight20 c-greymedium">Nasa Ofis Kiralama Danısmanlık ve 
      Organizasyon Hizmetleri Tic. Ltd. Sti.<br>
      Yeşilce Mahallesi Ulubaş Cad. No:23/3<br>
      34418 Kağıthane, Istanbul</small>
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
