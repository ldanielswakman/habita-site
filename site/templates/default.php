<?php snippet('header') ?>

  <main>

    <header class="u-aligncenter u-mb50">
      <h1 class="c-textlight">Habita</h1>
      <h2 class="c-orangedark"><?= $page->tagline()->kirbytext() ?></h2>
    </header>

    <?= $page->text()->kirbytext() ?>

  </main>

<?php snippet('footer') ?>