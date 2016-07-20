<? $pages = $site->pages()->visible() ?>

<!DOCTYPE html>

<html lang="<?= $site->language() ?>">

  <?php snippet('header') ?>

  <body>

    <nav>
      <ul>
        <? foreach($pages as $page) : ?>
          <li><a href="<?= $page->url() ?>"><?= $page->title() ?></a></li>
        <? endforeach ?>
      </ul>
    </nav>

  </body>

</html>
