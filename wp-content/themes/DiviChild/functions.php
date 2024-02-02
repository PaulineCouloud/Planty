<?php
function header_func(){
    ob_start();
    ?>
    <header>
        <a href="/" class="logo"><img src="/wp-content/themes/DiviChild/assets/img/Logo.png" alt="Logo Planty" /></a>
        <nav>
            <ul>
                <li><a href="/nous-rencontrer/">Nous rencontrer</a></li>
                <?php
                if (is_user_logged_in()) {
                ?>
                <li><a href="/wp-admin/">Admin</a></li>
                <?php
                } 
                ?>
                <li><a href="/commander" class="bouton_commander">Commander</a></li>
            </ul>
        </nav>
    </header>
    <?php
    $html=ob_get_clean();
    return $html;
}


add_shortcode('header','header_func');