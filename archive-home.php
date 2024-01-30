<?php get_header(); ?>

    <main class="l-main">  
        <div class="inner u-w_maxpc u-mar-mxa">
            <!--メインビジュアル-->
            <div class="max-w[90rem] u-justify-center u-disp-flex u-mar-mxa u-mar-b45">
                <h1>
                    <picture class="u-posi-rela u-disp-flex u-justify-center">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 200px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" class="u-w_tabmv u-h_maxpc u-mar-mt55tab" alt="">
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
                    <section class="u-w_100p85p u-mar-mxa p-homeebisu_post">
                        <?php if( have_posts()) : while( have_posts()) : the_post(); ?>
                            <article class="c-card_post c-bk_post1 u-mar-my30 u-pad-p40">
                                <h2 class="c-title_post u-disp-flex">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" class="u-w_56">
                                    <p class="u-pad-pt3 u-pad-pl3"><?php the_title(); ?></p>
                                </h2>
                                <div class="u-disp-flexblocktab">
                                    <?php the_content(); ?>
                                </div>
                                
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
        <hr class="p-com_hr1">

        <!--フッター上部会社情報-->
        <div class="l-main-btm p-homeebisu_btminfo c-bk_mainbtm">
            <div class="l-main_info p-com_fontfam c-txt_12 u-disp-flexblocktab">
                <article class="l-main-info1 u-pad-px20p0tab u-text-c">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-ebisu1.png" alt="えびす様アイコン">
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color4">特定非営利活動法人&nbsp&nbspみつわ</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎753番地&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-4936</p>
                        </div>
                    </address>
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color4">株式会社&nbsp&nbspみつわ</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎753番地&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-4936</p>
                        </div>
                    </address>
                </article>
                <article class="l-main-info2 u-mar-mt25tab u-pad-px20p0tab u-text-c">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-daikoku1.png" alt="大黒様アイコン">
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color5">特定非営利活動法人&nbsp&nbspみつわ</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎753番地&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-4936</p>
                        </div>
                    </address>
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color5">株式会社&nbsp&nbspみつわ</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎753番地&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-4936</p>
                        </div>
                    </address>
                </article>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13351.997868092525!2d130.0550677!3d33.2141102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3540294fd7958cbb%3A0xd7593b2f4f47c1d6!2z5a6F5bm86ICB5omA44OH44Kk44K144O844OT44K556yR44Gz44GZ!5e0!3m2!1sja!2sjp!4v1705554500077!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="l-main_map"></iframe>
        </div>

    </main>
    
<?php get_footer(); ?>