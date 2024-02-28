<?php get_header(); ?>

    <main class="l-main">  
        <div class="inner u-w_maxpc u-mar-mxa">
            <!--メインビジュアル-->
            <div class="max-w[90rem] u-justify-center u-disp-flex u-mar-mxa u-mar-b45">
                <h1>
                    <picture class="u-posi-rela u-disp-flex u-justify-center">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" media="(min-width: 200px)" >
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_mv.png" class="u-w_tabmv u-h_maxpc u-mar-mt55tab" alt="">
                        <p class="u-posi-abso c-title_mv">地域共生カフェ<br><span>笑美屋</span><br><br>子供からご高齢者まで誰もが気軽に立ち寄れる癒場</p>
                        <!--<p>可能な限り希望に沿った対応を・・・</p>-->
                        <div class="u-posi-abso c-title_mv2">
                            <p>営業時間：10:00～17:00</p>
                            <p>定休日：水曜日</p>
                            <p>(不定期で日曜日が休み)</p>
                        </div>
                    </picture>
                </h1>
            </div>

            <!--トップへ戻る追従ボタン-->
            <a class="c-btn-pagetop u-disp-block" href="/emiya/#head">
                <div class="c-btn-pagetop__arrow"></div>
                <p>Top</p>
            </a>

            <!--コンテンツ-->
            <div class="p-homeebisu_main u-mar-mx1p">

                <!--<div class="p-homeebisu_content u-w_100p70p">-->
                    <!--ページ内リンク用サブメニュー-->
                    <!--<nav class="p-nav-wrap1 u-h_100p">
                        <?php /*wp_nav_menu(array(
                            'theme_location' => 'dayebisu-menu',
                            'menu_class' => 'p-nav-debisu',
                            'container' => '',
                            ));*/?>
                    </nav>-->

                    <!--メインコンテンツ-->
                    <section class="u-w_100p85p u-mar-mxa p-homeebisu_post">
                        <?php if( have_posts()) : while( have_posts()) : the_post(); ?>
                            <article class="c-card_post c-bk_post1none u-mar-my30 u-pad-p40none">

                            <?php
                            $show_post_ids = array(716, 718, 720, 722, 724);
                                
                            if (is_archive() && in_array(get_the_ID(), $show_post_ids)) : ?>
                                <h2 class="c-title_post u-disp-flex c-bk_title2">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/page-about_titleimg1.png" class="u-w_56">
                                    <p class="u-pad-pt3 u-pad-pl3"><?php the_title(); ?></p>
                                </h2>
                            <?php endif; ?>
                                
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
                <?php /*get_sidebar('shisetsu'); */?>
                
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