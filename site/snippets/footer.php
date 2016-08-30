<footer class="footer bg-white u-pt50 u-pb50">

  <div class="row">
    <div class="col-xs-7 col-sm-3">
      
      <? $pages = $site->pages()->visible() ?>
      <? $pagecount = round((count($pages->toArray())/2)); ?>
      <ul class="footer-menu u-mb20">
        <? $i = 0; ?>
        <? foreach($pages as $p) : ?>
          <? $i++; ?>
          <li><a href="<?= $p->url() ?>"<?= ($p->isOpen()) ? ' class="isActive"' : ''; ?>><?= $p->title() ?></a></li>

          <? if ($i == $pagecount): ?>
              </ul>
            </div>
            <div class="col-xs-5 col-sm-3">
              <ul class="footer-menu u-mb20">
          <? endif ?>

        <? endforeach ?>
      </ul>

    </div>
    <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 first-sm">
      <small class="u-block u-lineheight20 c-greymedium u-ph30-sm">
        <?= $site->footertext()->kirbytext() ?>
      </small>
    </div>

  </div>
</footer>

<?
// shows awards section if homepage and current date within 60 days of adding date (31 aug)
if ($page->isHomePage() && (time() - (60*60*24*60)) < strtotime('2016-08-31')) :
?>
<section class="bg-white" id="site_awards">
  <div class="row u-pb30">
    <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 c-greylight">
      <small class="u-ph30-sm">
        Awards:
      </small>
    </div>
    <div class="col-xs-12 col-sm-7">
      <a href="http://www.csswinner.com/details/habita-coworking-space/10746" target="_blank" class="u-floatleft u-mr10 u-h-opacity50">
        <img src="<?= url('assets/images/site-awards/csswinner.png') ?>" alt="" />
      </a>
      <a href="http://cssreel.com/Website/habita-coworking-space" target="_blank" class="u-floatleft u-mr10 u-ph30-sm u-mt20 u-h-opacity50">
        <img src="<?= url('assets/images/site-awards/cssreel.png') ?>" alt="" />
      </a>
      <a href="http://www.bestcssaward.com/portfolio/habita-coworking-space/" target="_blank" class="u-floatleft u-h-opacity50">
        <img src="<?= url('assets/images/site-awards/bestcssaward.png') ?>" alt="" />
      </a>
    </div>
  </div>
</section>
<? endif ?>

<a href="http://www.ldaniel.eu/" target="_blank" class="u-block bg-greylightest c-greymedium u-pv20">
  <div class="row">
    <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1">
      <div class="u-ph30-sm">
        <?php echo $site->copyright()->kirbytext() ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-7">
      Designed and built by <strong>ldaniel.eu</strong>
    </div>
  </div>
</a>

<? snippet('google-analytics') ?>
