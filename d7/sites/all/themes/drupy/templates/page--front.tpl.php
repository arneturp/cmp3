<!-- Begin page.tpl.php -->
<header>
</header>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?php print drupal_get_path('theme', 'Drupy'); ?>/img/logo.png" alt="Example Drupal Theme">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
                $user_menu = menu_navigation_links('main-menu');
                print theme('links', array(
                  'links' => $user_menu,
                  'attributes' => array(
                    'id' => 'user-menu',
                    'class' => array('nav', 'navbar-nav', 'navbar-right'),
                  ),

                ));
            ?>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Hello World</h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <!--<div class="panel">
                    <div class="panel-head">
                        Evenementen
                    </div>
                    <div class="panel-body">

                    </div>
                </div>-->

                <?php print render($page['sidebar']); ?>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="prefooter">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Deze site</h2>
                    <ul class="footer-nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">Over ons</a></li>
                        <li><a href="">Nieuws</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <h2>Interesse?</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat inventore placeat eos non aspernatur cumque cupiditate doloribus magni ullam accusantium repellendus totam et alias eum asperiores, dolore cum, ducimus itaque.
                    </p>
                </div>
                <div class="col-md-3">
                    <h2>Contact</h2>
                    <p>
                        Arne Turpyn<br>
                        Zaveleinde 22<br>
                        8553 Otegem<br>
                        0471 26 52 23<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Copyright © 2016 Arne Turpyn | Site by Arne Turpyn </p>
        </div>
    </div>
</footer>
<!-- End page.tpl.php -->
