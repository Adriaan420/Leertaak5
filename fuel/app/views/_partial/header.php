<header>
    <div class="container">
        <?php
        if (!Auth::check()) {
            echo '<a class="btn pull-right btn-default" href="'.Uri::base(false).'auth/login'.'" role="button">Login</a>';
        }else{
            echo '<a class="btn pull-right btn-default" href="'.Uri::base(false).'auth/logout'.'" role="button">Logout</a>';
        }
        ?>
    </div>
</header>