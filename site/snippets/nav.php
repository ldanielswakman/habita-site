<? $pages = $site->pages()->visible() ?>

<nav>
  <ul>
    <? foreach($pages as $page) : ?>
      <li><a href="<?= $page->url() ?>"<?= ($page->isOpen()) ? ' class="isActive"' : ''; ?>><?= $page->title() ?></a></li>
    <? endforeach ?>
  </ul>

  <? snippet('language-switcher') ?>
  
</nav>

<!-- Nav toggle button -->
<a href="#" onclick="return toggleMenu();" class="nav-toggle">
  <span></span><span></span><span></span>
</a>

<!-- Nav content overlay -->
<a href="#" onclick="return toggleMenu('close')" class="nav-fade"></a>
