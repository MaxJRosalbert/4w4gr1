<?php
    /**
     * Template permettant d'afficher la zone aside
     */
?>

<aside class="site__aside">
<?php the_post_thumbnail('medium'); ?>
<h3>Menu secondaire</h3>
    <?php 
    $menu = "notes-4w4"; 
    if(in_category('cours')){ $menu = "cours";}
    if(get_template('aside-atelier')){ $menu = "atelier";}
      // $menu peut prendre les valeurs : "notes-4w4" ou "cours"
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
    
</aside>