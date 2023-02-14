<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main>
        <pre>front-page.php</pre>
        <h1>Bienvenue sur 4W4</h1>
    <?php if(have_posts()):
            while (have_posts()): the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <?php the_excerpt(); ?>
                <?php the_permalink(); ?>
            </article>
            <hr>
            <?php endwhile; ?>
           <?php  endif; ?>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>