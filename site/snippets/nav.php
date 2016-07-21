<? $pages = $site->pages()->visible() ?>

<nav>
  <ul>
    <? foreach($pages as $page) : ?>
      <li><a href="<?= $page->url() ?>"><?= $page->title() ?></a></li>
    <? endforeach ?>
  </ul>
</nav>

<!-- Nav toggle button -->
<a href="#" onclick="toggleMenu();" class="nav-toggle">
  <span></span><span></span><span></span>
</a>

<!-- Nav content overlay -->
<a href="#" onclick="toggleMenu('close')" class="nav-fade"></a>
