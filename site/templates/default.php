<?php snippet('header') ?>

  <div class="panel-impression"></div>

  <main class="panel-content" id="top">

    <a href="#top" class="u-block u-aligncenter u-pa20 u-pt50 bg-white">
      <?php snippet('logo-svg', array('height' => '30px')) ?>
    </a>

    <header class="u-aligncenter u-ph50 u-mb50">

      <h2 class="c-orangedark u-mb20"><?= $page->tagline()->text() ?></h2>

      <?= $page->text()->kirbytext() ?>

    </header>

    <form class="u-mb20 bg-white i-sticky u-ph20 u-pr20">

      <div class="u-flex u-hideoverflow">

        <a href="#top" class="u-floatleft u-ph15 u-pt15 u-aligncenter u-width80 i-slideinonscroll" data-scroll-offset="400">
          <?php snippet('logo-svg', array('height' => '30px', 'emblem' => true)) ?>
        </a>

        <div class="u-relative u-flex-grow">
          <input id="updates_search" class="field u-mv10" placeholder="<?= l::get('search_field_placeholder') ?>" name="q" value="<?= get('q') ?>" />
          <button type="submit" class="u-hide"></button>

          <div class="u-pinned-topright u-mt10">
            <? if($tag = param('tag')) :?>
              <!-- <span class="tag"><?= $tag ?> <a href="<?= url() ?>" class="u-ml5"><i class="ion ion-close-round"></i></a></span> -->
            <? endif ?>
            <? if($q = get('q')) :?>
              <a href="<?= url() ?>" class="u-inlineblock u-pv10"><i class="ion ion-close-round"></i></a>
            <? endif ?>
          </div>

        </div>

      </div>

      <div class="tags u-ml80">
        <? $updates_tags = $pages->find('updates')->children()->visible()->pluck('tags',',', true) ?>
        <? foreach($updates_tags as $tag): ?>
          <? if (param('tag') == $tag) :?>
            <span class="tag"><?= html($tag) ?><a href="<?= $site->language()->url() ?>" class="u-ml5"><i class="ion ion-close-round"></i></a></span>
          <? else :?>
            <a href="<?= $site->language()->url() . '/tag:' . $tag ?>" class="tag<?= e(!$active, ' tag--inactive') ?>"><?= html($tag) ?></a>
          <? endif ?>
        <? endforeach ?>
      </div>

    </form>

    <div id="updates" class="u-ph50 u-pt50">
      <?
      $articles = $pages->find('updates')->children()->visible()->sortby('date', 'desc');
      // add the tag filter
      if($tag = param('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
      }
      // add the tag filter
      if($q = get('q')) {
        $articles = $articles->search($q);
      }
      ?>
      <? foreach ($articles as $article) :?>

        <article id="<?= $article->slug() ?>" class="article u-mb80 <? e($article->hasImages(), ' article--hasImages') ?>">

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
