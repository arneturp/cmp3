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
        <div class="row">
            <div class="col-md-8">
                <h1>Laatste nieuws</h1>
                <div class="row">
                    <?php
                        $articles = node_load_multiple(array(), array('type' => 'article')); var_dump($articles);

                        foreach ($articles as $article) {
                    ?>
                        <div class="col-md-4">
                            <article>
                                <div class="content">
                                    <h2><?php echo $article->title; ?></h2>
                                </div>
                            </article>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-4 sidebar">
                <div class="panel">
                    <p>
                        Lorem lol ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>

    <div class="container">
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>

    </div>
</footer>
