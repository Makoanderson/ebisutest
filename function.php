<?php

// 'gmenu' は register_nav_menus で登録したメニューの識別子
$menu_args = array(
    'theme_location' => 'gmenu',
    'container'      => 'nav',
    'container_class'=> 'menu-class', // メニューをラップする要素のクラス
    'menu_class'     => 'menu-list', // メニューのul要素のクラス
);

wp_nav_menu($menu_args);

/*add_action('after_setup_theme', 'custom_theme_support');*/


add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    load_theme_textdomain('ebisu', get_template_directory() . '/languages');
}


function readScript()
{
    wp_enqueue_style(
        'Noto Serif Jp',
        '//fonts.googleapis.com/css2?family=Noto+serif+JP:wght@400;500;600;700&display=swap',
        []
    );
    wp_enqueue_style(
        'M plus 1',
        '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@300;400;500&display=swap',
        []
    );
    wp_enqueue_style(
        'M plus 1p',
        '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@300&family=M+PLUS+1p:wght@300&display=swap',
        []
    );
    wp_enqueue_style(
        'cssStyle',
        get_template_directory_uri() . '/css/style.css',
        filemtime(get_template_directory() . '/css/style.css'),
        [],
        false,
    );
}
add_action('wp_enqueue_scripts', 'readScript');
