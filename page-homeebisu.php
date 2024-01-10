<?php get_header(); ?>
    <main>
        <?php if( have_posts()): while( have_posts()): the_post(); ?>
        <div class="inner u-w_maxpc u-mar-mxa">
            <div class="max-w[90rem] u-justify-center u-disp-flex u-mar-mxa u-mar-b45">
                <h1>
                    <picture class="u-posi-rela u-disp-flex u-justify-center">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 900px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page_mu.png" alt="">
                        <p class="u-posi-abso c-title_mv"><?php the_title(); ?></p>
                    </picture>
                </h1>
            </div>
            <nav class="u-disp-flex u-h_70 u-justify-end">
            <?php wp_nav_menu(array(
                'theme_location' => 'homeebisu-menu',
                'menu_class' => 'p-homeebisu_menu',
                'container' => '',
                ));?>
        </nav>
        </div>
        
        <section>
            <?php the_content(); ?>
        </section>    
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
    <!--sidebar-->
    <?php get_sidebar('shisetsu'); ?>
<?php get_footer(); ?>