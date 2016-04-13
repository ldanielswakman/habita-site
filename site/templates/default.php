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
      <? $articles = $pages->find('updates')->children()->visible()->sortby('date', 'desc') ?>
      <? foreach ($articles as $article) :?>
        <article id="<?= $article->slug() ?>" class="article u-mb50">
          <h3><?= $article->title() ?></h3>
          <div class="date"><?= $article->date('%d %B %Y') ?></div class="date">
          <?= $article->text() ?>
          </div>
        </article>
      <? endforeach ?>
    </div>

    <?php snippet('footer') ?>

  </main>
