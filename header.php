<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="特定非営利活動法人みつわのWebサイト">
    <?php wp_head(); ?>
</head>
<header>
    <?php wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'l-header_menu',
        'container' => '',
        ));
    ?>
</header> 
<body>   