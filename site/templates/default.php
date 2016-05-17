<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <?php snippet('header') ?>

  <body>

    <div class="panel panel--impression">
      
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

    <main class="panel panel--content" id="top">

      <? snippet('language-switcher') ?>

      <a href="#top" class="u-block u-aligncenter u-pa50 bg-white">
        <? snippet('logo-svg', array('height' => 30)) ?>
      </a>

      <header class="u-aligncenter u-ph50 u-mb10">

        <h2 class="c-orange u-mb20 text-600"><?= $pages->find('home')->tagline()->text() ?></h2>

        <small><?= $pages->find('home')->text()->kirbytext() ?></small>

      </header>

      <?php snippet('newsletter_signup') ?>

      <div class="u-mt50">
      </div>

      <form action="#updates" class="bg-white i-sticky u-pr50">

        <div class="u-flex u-hideoverflow">

          <a href="#top" class="u-floatleft u-ph15 u-pt15 u-aligncenter u-width80 i-slideinonscroll" data-scroll-offset="400">
            <?php snippet('logo-svg', array('height' => 30, 'emblem' => true)) ?>
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

      <div id="updates" class="articles u-mt20">
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
        $randompos = rand(0, $articles->count()/3);
        // $randompos = 2;
        ?>
        <? foreach ($articles as $article) :?>

          <article id="<?= $article->slug() ?>" class="article u-mb80 <? e($article->hasImages(), ' article--hasImages') ?>">

            <h3><?= $article->title() ?> <a href="#<?= $article->slug() ?>" class="c-textlight u-ml5"><i class="ion ion-link"></i></a></h3>
            <time datetime="<?= $article->date('%Y-%m-%d') ?>" pubdate class="date"><?= $article->date('%d %B %Y') ?></time><br />

            <?= $article->text()->kirbytext() ?>

            <? if(strlen($article->tags()->text()) > 0) :?>
              <div class="tags u-mt10">
                <? foreach(explode(',',$article->tags()) as $tag) :?>
                  <a href="<?= url() . '/tag:' . $tag ?>" class="tag"><?= $tag ?></a>
                <? endforeach ?>
              </div>
            <? endif ?>

          </article>

          <?
          // show 'sign up to newsletter' CTA on $randompos
          if($articles->count() > 3 && ($articles->count() - $article->num()) === $randompos) :
          ?>
            <div class="bg-greylightest u-rounded u-pa20 u-mb80">
              <div class="u-mb20">
                <i class="ion ion-android-drafts ion-2x c-textlight u-floatleft u-mr20 u-mb20"></i>
                <h3 class="c-orange u-pt5"><?= l::get('newsletter_signup_title') ?></h3>
                <p><small><?= l::get('newsletter_signup_descr') ?></small></p>
              </div>
              <?php snippet('newsletter_signup') ?>
            </div>
          <? endif ?>

        <? endforeach ?>
      </div>

      <?php snippet('footer') ?>

    </main>

  </body>

</html>
