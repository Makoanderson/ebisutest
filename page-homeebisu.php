<?php get_header(); ?>
    <main>
        <?php if( have_posts()): while( have_posts()): the_post(); ?>
        <div class="inner max-w[90rem]">
            <div class="max-w[90rem] u-justify-center u-disp-flex u-margin-mxa">
                <h1>
                    <picture class="u-posi-rela u-disp-flex u-justify-center">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 900px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page_mu.png" alt="">
                        <p class="u-posi-abso c-title_mv"><?php the_title(); ?></p>
                    </picture>
                </h1>
            </div>
        </div>
        <nav>
            <ul>
                <li>
                    <?php wp_nav_menu(
                        array('theme_location' => 'homeebisu-menu')
                    );
                    ?>
                </li>
        </ul>
        </nav>
        <section>
            <?php the_content(); ?>
        </section>    
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
    <!--sidebar-->
    <?php get_sidebar('shisetsu'); ?>
<?php get_footer(); ?>