<?php snippet('header') ?>

  <main id="top">

    <a href="#top" class="u-block u-aligncenter u-pa20 bg-white i-sticky">
      <?php snippet('logo-svg', array('height' => '30px')) ?>
    </a>

    <header class="u-aligncenter u-mb50">
      <h1 class="c-textlight">Habita</h1>
      <h2 class="c-orangedark"><?= $page->tagline()->kirbytext() ?></h2>
    </header>

    <div class="u-mb50"><?= $page->text()->kirbytext() ?></div>

    <div class="u-relative">
      <input id="updates_search" class="field u-fullwidth u-mb20" placeholder="What are you looking for?" name="q" value="<?= $_GET['q'] ?>" />
    </div>

    <div id="updates">
      <div class="u-aligncenter u-pa20">
        <img src="assets/images/preloader.gif" alt="" class="u-inlineblock" width="24px" /><br />
        loading articles
      </div>
    </div>

    <script>
      request_url = '<?= ($site->language() != 'tr') ? $site->language() . '/' : '' ?>updates/api';
      getArticles(request_url, '#updates', '<?= $_GET['q'] ?>');
    </script>

    <?php snippet('footer') ?>

  </main>
