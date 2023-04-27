<?php 
/**
 * 404 est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="erreur404 site__main">
        <pre>404.php</pre>
        <h1 class="erreur404__titre">Erreur 404</h1>
        <h2 class="erreur404__soustitre">Page introuvable, vous pouvez tenter une recherche</h2>
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

    <!-- <main class="erreur404 site__main">
      
      <h1 class="erreur404__titre">Erreur 404</h1>
      <h2 class="erreur404__soustitre">Page introuvable, vous pouvez tenter une recherche</h2>
      <?= get_search_form(); ?>  
      <h2 class="erreur404__soustitre">Nos choix de cours</h2>
      <?php 
          wp_nav_menu(array(
          "menu"=>"cours",
          "container_class"=>"erreur__404__menu",
          "container"=>"nav")); ?>
      <h2 class="erreur404__soustitre">Les notes de cours</h2>
      <?php  wp_nav_menu(array(
              "menu"=>"note-4w4",
              "container_class"=>"erreur__404__menu",
              "container"=>"nav"));   
      ?>
    
  </main> -->
    <?php get_footer(); ?>