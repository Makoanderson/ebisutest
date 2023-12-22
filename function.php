<?php

function custom_theme_support()
{
    add_theme_support('html5', ['menus', 'title-tag', 'caption']);
    add_theme_support('title-tag');
    add_theme_support('responsive-embeds'); //管理画面からメディアがレスポンシブ対応になる
    //メニュー
    add_theme_support('automatic-feed-links');
    register_nav_menus([
        'gmenu' => 'メインメニュー',
    ]);
    add_theme_support('html5', ['menus', 'title-tag', 'caption']);
    add_theme_support('title-tag');
    add_theme_support('responsive-embeds'); //管理画面からメディアがレスポンシブ対応になる
    //メニュー
    register_nav_menus([
        'gmenu' => 'メインメニュー',
    ]);
}
add_action('after_setup_theme', 'custom_theme_support');

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
