<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="cursor-dot"> <div id="cursor-circle"></div> </div>

    <header id="header">
        <div class="container-nopd">
            <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></span>
            <div>
                <nav class="top">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'secondary-menu',
                        'menu_id'        => 'secondary-menu',
                    ));
                    ?>
                </nav>
                <nav class="main">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>