<?php get_header(); ?>
<?php if (is_front_page()) : ?>
    <main>
        <div class="inner">

            <!--メインビジュアル-->

            <!--トップへ戻る追従ボタン-->
            <a class="c-btn-pagetop u-disp-block" href="/#head">
                <div class="c-btn-pagetop__arrow"></div>
                <p>Top</p>
            </a>

            <!--挨拶セクション-->
            <figure class="u-disp-flex">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-ebisu1.png" alt="恵比寿様アイコン" class="">
                <p>ようこそ ”みつわ笑びす” へ</p>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-daikoku1.png" alt="大黒様アイコン" class="">
            </figure>

            <!--施設紹介セクション-->
            <div>
                <p>築100年の古民家で家庭的な日々を、フットケアで健康を、地域・ボランティアの方と楽しいひと時が笑びすにはあります</p>
                <button type="button" onclick="location.href='URL'">施設紹介</button>
                <ul>
                    <li>
                        <a href="#">宅幼老所笑びす</a>
                    </li>
                    <li>
                        <a href="#">有料老人ホーム</a>
                    </li>
                    <li>
                        <a href="#">デイサービス笑びす</a>
                    </li>
                    <li>
                        <a href="#">デイサービス久津具</a>
                    </li>
                </ul>
            </div>

            <!--お知らせセクション-->
            <section>
                <h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front-lable.png" alt="アクセス(タイトル)" class="">
                    <p><span>お知らせや行事予定など</span></p>
                </h3>
                <div>
                    <div>
                        お知らせアーカイブが入ります
                    </div>
                    <button type="button" onclick="location.href='URL'">
                        <p>その他の情報</p>
                        <img>
                    </button>
                </div>
            </section>

            <!--facebookセクション-->
            <section>
                <h3>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front-lable.png" alt="アクセス(タイトル)" class="">
                    <p><span>Facebook, フォトアルバム</span>日々の様子をお届けします</p>
                </h3>
                <div>
                    <div>
                        <iframe></iframe>
                        <iframe></iframe>
                    </div>
                    <button type="button" onclick="location.href='URL'">
                        <p>笑びすアルバムログインページ</p>
                        <img>
                        <p>ログインについての文章をここに記載します</p>
                    </button>
                </div>
            </section>

            <!--バナーセクション-->
            <article>
                <ul>
                    <li>
                        <img>
                        <div>
                            <h3>テスト<span>testtest</span></h3>
                            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                            <button onclick="location.href='URL'" type="button">
                                <p>詳しくはコチラ</p>
                                <img>↑マーク
                            </button>
                        </div>
                    </li>
                    <li>
                        <img>
                        <div>
                            <h3>日本フットケア協会認定<span>ケアサロン笑びす</span></h3>
                            <p>若い方から中高年、男性、女性、あらゆる年代の方にお勧めができるフットケアです。</p>
                            <button onclick="location.href='URL'" type="button">
                                <p>詳しくはコチラ</p>
                                <img>↑マーク
                            </button>
                        </div>
                    </li>
                    <li>
                        <img>
                        <div>
                            <h3>NPO法人<span>みつわの活動</span></h3>
                            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                            <button onclick="location.href='URL'" type="button">
                                <p>詳しくはコチラ</p>
                                <img>↑マーク
                            </button>
                        </div>
                    </li>
                    <li>
                        <img>
                        <div>
                            <h3><span>採用情報</span></h3>
                            <p>見学・体験・ボランティアもお受けいたします</p>
                            <button onclick="location.href='URL'" type="button">
                                <p>詳しくはコチラ</p>
                                <img>↑マーク
                            </button>
                        </div>
                    </li>
                </ul>
            </article>

        </div>

        <!--フッター上部会社情報-->
        <div class="l-main-btm p-homeebisu_btminfo c-bk_mainbtm">
            <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front-bar_access.png" alt="アクセス(タイトル)" class="">
                <p>アクセス</p>
            </figure>
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
                        <h3 class="c-title_16 c-txt_color4">宅幼老所笑びす/有料老人ホーム笑びす/デイサービス笑びす</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎753番地&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-4936</p>
                        </div>
                    </address>
                    <br>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-benten.jpg" alt="えびす様アイコン">
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color4">喫茶えみや</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎761番地1&nbsp;</p>
                            <p class="">TEL:090-7409-3727</p>
                        </div>
                    </address>
                </article>
                <article class="l-main-info2 u-mar-mt25tab u-pad-px20p0tab u-text-c">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-daikoku1.png" alt="大黒様アイコン">
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color5">株式会社&nbsp&nbspみつわ</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎760番地1&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-3000</p>
                        </div>
                    </address>
                    <address class="u-mar-mt15">
                        <h3 class="c-title_16 c-txt_color5">デイサービス久津具</h3>
                        <div class="u-disp-flexblocklpc">
                            <p class="">〒849-2204&nbsp;佐賀県武雄市北方町大字大崎760番地1&nbsp;</p>
                            <p class="">TEL&FAX:0954-36-3000</p>
                        </div>
                    </address>
                </article>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d417.250862039154!2d130.05515562361632!3d33.21391543079698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1709872785736!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="l-main_map"></iframe>
        </div>

    </main>
<?php endif; ?>
<?php get_footer(); ?>