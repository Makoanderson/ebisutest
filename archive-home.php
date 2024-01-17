<?php get_header(); ?>

    <main>
        
        <div class="inner u-w_maxpc u-mar-mxa">

            <!--メインビジュアル-->
            <div class="max-w[90rem] u-justify-center u-disp-flex u-mar-mxa u-mar-b45">
                <h1>
                    <picture class="u-posi-rela u-disp-flex u-justify-center">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 200px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page_mu.png" alt="">
                        <p class="u-posi-abso c-title_mv">有料老人ホーム<br><span>笑びすについて</span></p>
                    </picture>
                </h1>
            </div>

           
            <!--コンテンツ-->
            <div class="p-homeebisu_main u-mar-mx1p">

                <div class="p-homeebisu_content u-w_100p70p">
                    <!--ページ内リンク用サブメニュー-->
                    <nav class="p-nav-wrap u-h_100p">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'homeebisu-menu',
                            'menu_class' => 'p-nav-home',
                            'container' => '',
                            ));?>
                    </nav>

                    <!--メインコンテンツ-->
                    <section class="u-w_70p">
                        <?php if( have_posts()) : while( have_posts()) : the_post(); ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile; else : ?>
                            <p>記事はありません。</p>
                        <?php endif; ?>
                    </section> 
                </div>
                
                <!--サイドバー-->
                <?php get_sidebar('shisetsu'); ?>
                
            </div>

        </div> 
        
    </main>
    
<?php get_footer(); ?>