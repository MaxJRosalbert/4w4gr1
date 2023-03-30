<?php 
/**
 * 404 est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <pre>404.php</pre>
        <h1>Erreur 404</h1>
        <h2>Page introuvable, vous pouvez tenter une recherche</h2>
        <div class="recherche404">
            <?php get_search_form(); ?>
        </div>

        <?php
            $menuCours = "cours";
            $menuNotes = "notes-4w4";
        ?>
    
        
        <h2>Nos choix de cours</h2>
        <div class="menu404">
            <?php
                wp_nav_menu(array(
                    "menu"=>$menuCours,
                    "container"=>"nav"))
            ?>
        </div>
        
        <h2>Les notes de cours</h2>
        <div class="menu404">
            <?php
                wp_nav_menu(array(
                    "menu"=>$menuNotes,
                    "container"=>"nav"))
            ?>
        </div>
    </main>
    <?php get_footer(); ?>