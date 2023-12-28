<?php get_header(); ?>
    <main>
        <?php if( have_posts()): while( have_posts()): the_post(); ?>
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
            <?php the_content(); ?>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('concept'); ?></p>
                            <p><?php the_field('concept_subtitle'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('concept_sec1'); ?></dd>
                    <dd><?php the_field('concept_sec2'); ?></dd>
                    <dd>
                        <picture>
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_contentimg1.png" media="(min-width: 900px)" >
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_contentimg1" alt="">
                        </picture>
                    </dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('purpose'); ?></p>
                            <p><?php the_field('purpose_subtitle'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('purpose_sec1'); ?></dd>
                    <dd><?php the_field('purpose_sec2'); ?></dd>
                    <dd>
                        <picture>
                            <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_contentimg2.png" media="(min-width: 900px)" >
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_contentimg2" alt="">
                        </picture>
                    </dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('concept'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('concept_sec1'); ?></dd>
                    <dd><?php the_field('concept_sec2'); ?></dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('concept'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('concept_sec1'); ?></dd>
                    <dd><?php the_field('concept_sec2'); ?></dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('concept'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('concept_sec1'); ?></dd>
                    <dd><?php the_field('concept_sec2'); ?></dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('concept'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('concept_sec1'); ?></dd>
                    <dd><?php the_field('concept_sec2'); ?></dd>
                </dl>
            </article>
            <article>
                <dl>
                    <dt>
                        <h4>
                            <picture>
                                <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" media="(min-width: 900px)" >
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" alt="">
                            </picture>
                            <p><?php the_field('concept'); ?></p>
                        </h4>
                    </dt>
                    <dd><?php the_field('concept_sec1'); ?></dd>
                    <dd><?php the_field('concept_sec2'); ?></dd>
                </dl>
            </article>
        </section>    
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>