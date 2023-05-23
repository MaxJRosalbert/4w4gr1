<?php
    /**
     * Template permettant d'afficher la zone aside de l'atelier
     */
?>

<aside class="site__aside">
<!-- <h3>Menu secondaire</h3> -->
    <?php 
        // echo $menu;
        wp_nav_menu(array(
        "menu"=>"atelier",
        "container"=>"nav"
    )) ?>
</aside>