<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <? snippet('header') ?>

  <body class="bg-greylightest">

    <div class="panel bg-greylightest u-flex-center">

      <div>

        <div class="u-aligncenter u-mb10">
          <? snippet('logo-svg', ['emblem' => true, 'color' => '#ff5000', 'height' => 40]) ?>
        </div>

        <h2 class="u-ph50 u-mb50 u-aligncenter">habita'daki yenilik ve etkinliklerden<br /> haberin olsun istiyorsan...</h2>

        <? snippet('newsletter_signup') ?>

      </div>

    </div>

    <div class="panel panel--content">

      <? snippet('language-switcher') ?>

      <div class="u-aligncenter u-pa50">
        <? snippet('logo-svg', ['color' => '#8a8a8d', 'emblem_color' => '#ff5000', 'height' => 40]) ?>
      </div>

      <div class="bg-orange u-pa50 u-flex">

        <div class="u-pr50">
          <blockquote>Paylaşan, konuşan, tartışan, üreten herkese açık bir komünitenin ortak yaşam ve çalışma alanı.</blockquote>
        </div>

        <figure style="width: 300px;"><img src="<?= url('assets/images/talk.svg') ?>" alt="" /></figure>

      </div>

      <? if ($images = $page->images()) : ?>
        <div class="owl-carousel">
          <? foreach($images as $image) :?>
            <figure><img class="owl-lazy" data-src="<?= $image->url() ?>" alt="" /></figure>
          <? endforeach ?>
        </div>
      <? endif ?>

      <blockquote class="u-pa50">
        Açık alanda sabit masalar, kapalı ofisler ve esnek çalışma alanları açılsa tekliflere yeni habitan'ları bekliyor!
      </blockquote>

      <div class="bg-greylightest u-pa50">

        <h3 class="c-orange u-mb20">habita'da neler var?</h3>

        <p>Zaman, verim ve nitelikten ödün vermeden çalışabilmeniz için ihtiyacınız olan herşey habita’da mevcut!</p>

        <div class="row u-pv20">
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'food', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">ATIŞTIRMALIKLAR</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'wifi', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">MİNİMUM 10 MBPS SİMETRİK İNTERNET</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'time', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">24/7 ÇALIŞMA</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'drink', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">BAR</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'envelope', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">ADRES GÖSTERME</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'presentation', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">TOPLANTI ODALARI</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'coffee', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">SICAK İÇECEKLER</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'printer', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">PRİNTER</h4>
          </div>
          <div class="col-xs-6 u-pv10">
            <? snippet('icon-svg', ['type' => 'boiler', 'size' => '40', 'classes' => 'u-floatleft u-mr10']) ?>
            <h4 class="c-grey u-mt10">MUTFAK</h4>
          </div>
        </div>

      </div>


      <div class="u-pa50">

        <h3 class="c-orange u-mb20">üyelik seçenekleri</h3>

        <p>habita’da kendini çalışırken daha iyi hissetmek isteyen, nefes almaya ihtiyaç duyan ve belki de en önemlisi hep beraber “güzel şeylerin” yaratıldığı bir ekosistemin parçası olmak isteyen herkese göre bir şeyler var...</p>

        <div class="row u-aligncenter u-mt50">
          <div class="col-sm-4 col-xs-12">
            <? snippet('icon-svg', ['type' => 'desk', 'size' => '120', 'classes' => '']) ?>
            <h4 class="c-orange">SABİT MASALAR</h4>
          </div>
          <div class="col-sm-4 col-xs-12">
            <? snippet('icon-svg', ['type' => 'office', 'size' => '120', 'classes' => '']) ?>
            <h4 class="c-orange">KAPALI OFİSLER</h4>
          </div>
          <div class="col-sm-4 col-xs-12">
            <? snippet('icon-svg', ['type' => 'flexible', 'size' => '120', 'classes' => '']) ?>
            <h4 class="c-orange">ESNEK ÇALIŞMA ALANLARI</h4>
          </div>
        </div>

      </div>

      <div class="u-pa50 bg-grey">

        <figure class="u-floatleft u-mr20 u-mt50" style="width: 160px;"><img src="<?= url('assets/images/projection.svg') ?>" alt="" /></figure>

        <h3 class="u-mb20">etkinlikler</h3>

        <p style="margin-left: 180px;">İlham veren hikayeler, yol gösterici öneriler, üretilen ve yaratılan güzellikler kısacası paylaştıkça çoğalan, değerlenen her şey için habita event space...</p>

      </div>

      <div class="row row--nopadding u-hideoverflow">
        <a href="#" class="link--bgorange col-xs-6 u-pa50">
          <i class="ion ion-arrow-left-c ion-3x"></i>
          <br />
          SIGN UP TO OUR NEWSLETTER
        </a>
        <a href="<?= url('/') ?>" class="link--bgorange col-xs-6 u-pa50 u-alignright">
          <i class="ion ion-arrow-right-c ion-3x"></i>
          <br />
          CONTINUE TO THE BLOG
        </a>
      </div>

    </div>

  </body>

</html>