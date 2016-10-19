<header>
    <div class="banner">
        <img src="<?php print render($logo); ?>" class="logo"/>
    </div>
    <nav>
        <div class="container">
            <?php if ($main_menu): ?>
              <?php print theme('links', array('links' => menu_navigation_links('main-menu'))); ?>
            <?php endif; ?>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <h1><?php print render($title); ?></h1>
        <p><?php print render($page['content']); ?></p>
    </div>
</main>

<footer>

    <div class="container">
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>

    </div>
</footer>
