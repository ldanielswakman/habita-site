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

    <div id="updates" class="u-mt50">
      <?
      $articles = $pages->find('updates')->children()->visible()->sortby('date', 'desc');
      // add the tag filter
      if($tag = param('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
      }
      ?>
      <? foreach ($articles as $article) :?>

        <article id="<?= $article->slug() ?>" class="article u-mb80 <? e($article->hasImages(), ' article-hasImages') ?>">

          <h3><?= $article->title() ?></h3>
          <time datetime="<?= $article->date('%Y-%m-%d') ?>" pubdate class="date"><?= $article->date('%d %B %Y') ?></time><br />

          <?= $article->text()->kirbytext() ?>

          <div class="tags u-mt10">
            <? foreach(explode(',',$article->tags()) as $tag) :?>
              <a href="<?= url() . '/tag:' . $tag ?>" class="tag"><?= $tag ?></a>
            <? endforeach ?>
          </div>

        </article>

      <? endforeach ?>
    </div>

    <?php snippet('footer') ?>

  </main>
