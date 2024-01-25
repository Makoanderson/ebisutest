<?php get_header(); ?>
    <main>
        
        <div class="inner max-w[90rem]">
            <div class="max-w[90rem]">
                <h1>
                    <picture>
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.svg" media="(min-width: 900px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page_mv.svg" alt="">
                        <p><?php the_title(); ?></p>
                    </picture>
                </h1>
            </div>
        </div>
        <section>
          
        </section>

        <section class="">
        <?php if( have_posts()) : while( have_posts()) : the_post(); ?>  
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; else: ?>
            <p>該当する記事はありません。</p>
        <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>