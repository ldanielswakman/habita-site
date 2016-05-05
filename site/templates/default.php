<?php snippet('header') ?>

  <div class="panel-impression">
    
    <div class="u-pinned-bottomleft u-fullwidth u-aligncenter u-pa10">
      <a href="mailto:info@habita.com.tr" target="_blank" class="button button-white button-rounded u-mr5">
        <i class="ion ion-android-mail ion-15x"></i>
        <!-- Email us -->
      </a>
      <a href="https://www.facebook.com/habita.coworking" target="_blank" class="button button-white button-rounded u-mr5">
        <i class="ion ion-social-facebook ion-15x"></i>
        <!-- Facebook -->
      </a>
      <a href="https://twitter.com/habita_co" target="_blank" class="button button-white button-rounded u-mr5">
        <i class="ion ion-social-twitter ion-15x"></i>
        <!-- Twitter -->
      </a>
      <a href="https://www.instagram.com/habita_co" target="_blank" class="button button-white button-rounded u-mr5">
        <i class="ion ion-social-instagram ion-15x"></i>
        <!-- Instagram -->
      </a>
    </div>

  </div>

  <main class="panel-content" id="top">

    <? snippet('language-switcher') ?>

    <a href="#top" class="u-block u-aligncenter u-pa50 bg-white">
      <? snippet('logo-svg', array('height' => '30px')) ?>
    </a>

    <header class="u-aligncenter u-ph50 u-mb50">

      <h2 class="c-orange u-mb20 text-600"><?= $pages->find('home')->tagline()->text() ?></h2>

      <small><?= $pages->find('home')->text()->kirbytext() ?></small>

    </header>

    <form action="#updates" class="bg-white i-sticky u-pr50">

      <div class="u-flex u-hideoverflow">

        <a href="#top" class="u-floatleft u-ph15 u-pt15 u-aligncenter u-width80 i-slideinonscroll" data-scroll-offset="400">
          <?php snippet('logo-svg', array('height' => '30px', 'emblem' => true)) ?>
        </a>

        <div class="u-relative u-flex-grow">
          <input id="updates_search" class="field u-mt10" placeholder="<?= l::get('search_field_placeholder') ?>" name="q" value="<?= get('q') ?>" />
          <button type="submit" class="u-hide"></button>

          <div class="u-pinned-topright u-mt10">
            <? if($tag = param('tag')) :?>
              <!-- <span class="tag"><?= $tag ?> <a href="<?= url() ?>" class="u-ml5"><i class="ion ion-close-round"></i></a></span> -->
            <? endif ?>
            <? if($q = get('q')) :?>
              <a href="<?= url() ?>" class="u-inlineblock u-pv5"><i class="ion ion-close-round"></i></a>
            <? endif ?>
          </div>

        </div>

        <? snippet('updates_tags') ?>

      </div>

    </form>

    <div id="updates" class="u-ph50 u-pt20 u-mt20">
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

          <h3><?= $article->title() ?> <a href="#<?= $article->slug() ?>" class="c-textlight u-ml5"><i class="ion ion-link"></i></a></h3>
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
