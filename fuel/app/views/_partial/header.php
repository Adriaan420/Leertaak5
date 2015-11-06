<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" href="#">
                <?= \Fuel\Core\Asset::img('logo.png',['height' => '50'])?>
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if (Auth::check()) { ?>
                    <li><a href="<?= Uri::create('home') ?>">Statistics</a></li>
                    <li><a href="<?= Uri::create('home/map') ?>">Live map</a></li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li>
                    <?php
                    if (!Auth::check()) {
                        echo '<a href="' . Uri::base(false) . 'auth/login' . '" role="button">Login</a>';
                    } else {
                        echo '<a href="' . Uri::base(false) . 'auth/logout' . '" role="button">Logout</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
   