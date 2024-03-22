<?php

// 'gmenu' は register_nav_menus で登録したメニューの識別子
/*$menu_args = array(
    'theme_location' => 'gmenu',
    'container'      => 'nav',
    'container_class'=> 'menu-class', // メニューをラップする要素のクラス
    'menu_class'     => 'menu-list', // メニューのul要素のクラス
);

wp_nav_menu($menu_args);*/

/*ヘッダーとフッターおよびその他のメニュー追加、言語設定*/
function my_theme_setup() {
    register_nav_menus(array(
        'main-menu' => 'メインメニュー',
        'footer-menu' => 'フッターメニュー',
        'homeebisu-menu' => '老人ホーム笑びすメニュー',
        'yoroebisu-menu' => '宅幼老所笑びすメニュー',
        'dayebisu-menu' => 'デイサービス笑びすメニュー',
        'daykutsuku-menu' => 'デイサービス久津具メニュー',
        'school-menu' => 'スクールメニュー'
    ));
    load_theme_textdomain('ebisu', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'my_theme_setup');

/*フォント設定、CSSファイル読込*/
function readScript()
{
    wp_enqueue_style(
        'Noto Serif Jp',
        '//fonts.googleapis.com/css2?family=Noto+serif+JP:wght@400;500;600;700&display=swap',
        []
    );
    wp_enqueue_style(
      'Zen Maru Gothic',
      '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;600;700&family=Zen+Maru+Gothic:wght@500;700&display=swap',
      []
    );
    wp_enqueue_style(
        'M plus 1',
        '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@300;400;500&display=swap',
        []
    );
    wp_enqueue_style(
        'M plus 1p',
        '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@300&family=M+PLUS+1p:wght@300&display=swap',
        []
    );
    wp_enqueue_style(
        'cssStyle',
        get_template_directory_uri() . '/css/style.css',
        filemtime(get_template_directory() . '/css/style.css'),
        [],
        false,
    );
}
add_action('wp_enqueue_scripts', 'readScript');

/*jsファイルの読み込み*/
function my_theme_enqueue_scripts() {
  // main.jsを登録
  wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
// wp_enqueue_scripts フックに登録したスクリプトを追加
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

/*ウィジェット機能追加*/
function my_theme_widgets_init() {
    register_sidebar( array(
      'name' => 'Main Sidebar',
      'id' => 'main-sidebar',
    ) );
  }
add_action( 'widgets_init', 'my_theme_widgets_init' );

  /* ---------- カスタム投稿の追加 ---------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( // カスタム投稿タイプの追加関数
    'album', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'アルバム', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );
  register_taxonomy_for_object_type('category', 'album');
  register_taxonomy_for_object_type('post_tag', 'album');


  register_post_type( // カスタム投稿タイプの追加関数
    'news', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'お知らせ', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'mitsuwa', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'みつわについて', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'home', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => '有料老人ホーム笑びすについて', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'yoro', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => '宅幼老所笑びすについて', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'dayebisu', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'デイサービス笑びすについて', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'daykutsuku', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'デイサービス久津具について', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'emiya', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => '笑美屋について', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'caresalon', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'ケアサロンについて', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'school', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'スクール', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_post_type( // カスタム投稿タイプの追加関数
    'NPO', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'NPO活動', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );

  /*function sortpost_rand($query) {
    if(is_admin() || !$query->is_main_query()){
        return;
    }
    $query->set('orderby', 'menu_order');
  }
  add_action('pre_get_posts', 'sortpost_rand');*/

  /**
   * Font Awesome Kit Setup
   *
   * This will add your Font Awesome Kit to the front-end, the admin back-end,
   * and the login screen area.
   */
  if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
          }
        );
      }
    }
  }
  fa_custom_setup_kit('https://kit.fontawesome.com/7891763146.js');
}

