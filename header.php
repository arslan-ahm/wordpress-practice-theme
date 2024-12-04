<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        if (is_home() || is_front_page()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="<?php echo home_url(); ?>">Cool Cooks</a>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'primary-menu', 'container' => 'ul')); ?>
        </nav>
    </header>