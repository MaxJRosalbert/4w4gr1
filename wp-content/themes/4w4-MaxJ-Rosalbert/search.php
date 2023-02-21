<?php
/**
 * Modèle de recherche
 */
?>

<?php
get_header();
?>
<main class="site__main">

<section class="recherche__section">
   <?php
   if (have_posts()):
      while(have_posts()): the_post(); ?>
      <article>
         <h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h5>
         <?php echo wp_trim_words(get_the_excerpt(), 60) ?>
         <hr>
      </article>
      <?php endwhile; ?>
   <?php endif; ?>
</section>
</main>
<?php
get_footer();