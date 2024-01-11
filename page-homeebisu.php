<?php get_header(); ?>
    <main>
        <?php if( have_posts()): while( have_posts()): the_post(); ?>
        <div class="inner u-w_maxpc u-mar-mxa">

            <!--メインビジュアル-->
            <div class="max-w[90rem] u-justify-center u-disp-flex u-mar-mxa u-mar-b45">
                <h1>
                    <picture class="u-posi-rela u-disp-flex u-justify-center">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 900px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page_mu.png" alt="">
                        <p class="u-posi-abso c-title_mv"><?php the_title(); ?></p>
                    </picture>
                </h1>
            </div>

           
            <!--コンテンツ-->
            <div class="p-homeebisu_main u-disp-flex u-mar-mx1p">

                <div class="p-homeebisu_content u-w_70p">
                    <!--ページ内リンク用サブメニュー-->
                    <nav class="u-h_70">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'homeebisu-menu',
                            'menu_class' => 'p-homeebisu_menu',
                            'container' => '',
                            ));?>
                    </nav>

                    <!--メインコンテンツ-->
                    <section class="u-w_70p">
                        <?php the_content(); ?>
                    </section> 
                </div>
                
                <!--サイドバー-->
                <?php get_sidebar('shisetsu'); ?>
                
            </div>

        </div> 
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
    
<?php get_footer(); ?>