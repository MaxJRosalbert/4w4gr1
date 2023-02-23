<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max-J 4W4</title>
    
    <?php wp_head(); ?>
</head>
<body>
    <header class="site__entete">
        <nav class="bar__Navi">
            <?php the_custom_logo(); ?> 
            <?php  wp_nav_menu(array( 
                            "menu" => "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete"
                        )); ?>

<input id="toggle" type="checkbox"></input>

<label for="toggle" class="hamburger">
  <div class="top-bun"></div>
  <div class="meat"></div>
  <div class="bottom-bun"></div>
</label>

            <?php get_search_form(); ?>

        </nav>
        <h1><a class="site__titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site__description"><?= bloginfo('description'); ?></h2>
</header>