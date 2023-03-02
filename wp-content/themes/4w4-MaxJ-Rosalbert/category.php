<?php 
/**
 * Category.php est le modèle par défaut pour afficher une archive d'article 
 * de catégorie spécifique
 * https:localhost:8000/4w4gr1/category/cours/
 * https:localhost:8000/4w4gr1/category/note-4w4/
 */
?>

<?php get_header(); ?>
    <main class="site__main">
   <section class="blocflex">
   <?php
      $category = get_queried_object();
    //   Permet de définir la nouvelle requête 
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
    // Création d'une nouvelle requête
      $query = new WP_Query( $args );
    // Tout le reste fr l'extraction de données est basée sur la nouvelle 
    // requête contenu dans $query
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post();
         get_template_part("template-parts/categorie", $category->slug);
         ?>
         <?php endwhile; ?>
      <?php endif;
   wp_reset_postdata();?>
   </section>
</main>
    <?php get_footer(); ?>
