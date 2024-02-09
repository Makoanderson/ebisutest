<?php get_header(); ?>
    <main>
        <?php if( have_posts()): while( have_posts()): the_post(); ?>
        <div class="inner max-w[90rem]">
            <div class="max-w[90rem]">
                <h1>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 900px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page_mu.png" alt="">
                        <p><?php the_title(); ?></p>
                    </picture>
                </h1>
            </div>
        </div>
        <section>
            <?php the_content(); ?>
        </section>    
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
    <!--sidebar-->
    <?php get_sidebar('caresalon'); ?>
<?php get_footer(); ?>