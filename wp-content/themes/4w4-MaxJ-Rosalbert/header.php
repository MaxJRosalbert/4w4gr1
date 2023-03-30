<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max-J 4W4</title>
    
    <?php wp_head(); ?>
</head>
<body class="custom-background site <?php echo(is_front_page()?"no-aside":"")?> <?php echo(is_404()?"no-aside":"")?>">
    <header class="site__entete">
        <section class="entete__nav">
            <?php the_custom_logo(); ?> 

            <input type="checkbox" id="checkbox2" class="checkbox2">
            <label class="menu-burger" for="checkbox2">
                <div class="hamburger hamburger2">
                    <span class="bar bar1"></span>
                    <span class="bar bar2"></span>
                    <span class="bar bar3"></span>
                    <span class="bar bar4"></span>
                </div>
            </label>

            <?php  wp_nav_menu(array( 
                            "menu" => "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete"
                        )); ?>


            <?php get_search_form(); ?>

        </section>
        <h1><a class="site__titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site__description"><?= bloginfo('description'); ?></h2>
        <div class="fondOpaque"></div>
    </header>

<?php
if (! is_front_page() && ! is_404()) {    
    get_template_part("template-parts/aside") ;
} 

?>