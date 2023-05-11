<?php 
/**
 * single.php est le modèle par défaut qui affiche un article
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <pre>single.php</pre>
        <h1>Bienvenue sur 4W4</h1>
    <?php if(have_posts()):
            while (have_posts()): the_post(); ?>
            <article class="article__single">                
                <h3><?php  the_post_thumbnail('medium'); ?><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </article>
            <hr>
            <?php endwhile; ?>
           <?php  endif; ?>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>