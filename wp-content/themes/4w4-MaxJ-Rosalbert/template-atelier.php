<?php
/**
 * Template name: Atelier
 */
?>
<?php get_header(); ?>
<main class="site__main aside-atelier">
    <pre>Les ateliers du TIM</pre>
    <?php
        if ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail('medium'); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content();?>
        <table>
            <tr>
                <th>Date</th>
                <td><?php the_field('date'); ?></td>
            </tr>
            <tr>
                <th>Heure</th>
                <td><?php the_field('heure'); ?></td>
            </tr>
            <tr>
                <th>Durée</th>
                <td><?php the_field('duree'); ?>Heures</td>
            </tr>
            <tr>
                <th>Local</th>
                <td><?php the_field('local'); ?></td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td><?php the_field('formateur'); ?></td>
            </tr>
        </table>
        <?php endif;?>
</main><!-- #main -->
    <?php
get_footer();