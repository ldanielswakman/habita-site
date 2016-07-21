<? $pages = $site->pages()->visible() ?>

<nav>
  <ul>
    <? foreach($pages as $page) : ?>
      <li><a href="<?= $page->url() ?>"><?= $page->title() ?></a></li>
    <? endforeach ?>
  </ul>
</nav>
