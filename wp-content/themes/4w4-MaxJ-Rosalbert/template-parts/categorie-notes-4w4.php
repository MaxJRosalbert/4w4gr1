<?php
    /**
     * «template part­» gabarit categorie-cours permet d'afficher un article blockflex
     * qui s'intègre dans la liste des cours qu'accède avec category/cours
     *
     */
    $titre = get_the_title();
    if (substr($titre,0,1) == 0) {
        substr($titre,1);
    }
    // 
    // if (substr($titre,0,1) == 0) { }
?>
<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>

<?php
    // the excerpt() echo du résumé du post
    // the_content() echo (afficher) le contenu complet du post
?>
