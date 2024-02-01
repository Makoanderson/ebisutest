<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="特定非営利活動法人みつわのWebサイト">
    <?php wp_head(); ?>
</head>

<body>
    <div class="l-header" id="head">
    <header class="l-header_menu l-header_posi c-bk_header p-com_fontfam c-txt_16">
        <div class="l-inner_header">
            <h1 class="u-disp-flex">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" class="u-mar-mt10">
                <div class="u-pad-pyhdtxt c-txt_14tab">
                    <p class="c-txt_color5 u-mar-mb5">特定非営利活動法人&nbsp;みつわ</p>
                    <p class="c-txt_color5">株式会社&nbsp;みつわ</p>
                </div>
            </h1>
            <div class="p-header_ham">
                <button class="c-btn_ham">
                    <span></span>
                    <span></span>
                    <span></span>
                    <p class="c-btn_hamtxt">MENU</p>
                </button>
            </div>
            <nav class="p-header_nav p-nav_header" id="js-nav">
                <div class="p-nav_inner">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'l-header_nav',
                        'container' => '',
                        ));
                    ?>
                </div>
            </nav>    
            
        </div>
    </header> 
   