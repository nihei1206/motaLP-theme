<!-- functions.php -->
<?php
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'sidebar-nav' => 'sidebar-nav',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// カスタム投稿タイプ
function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => '新着情報'
    );
    register_post_type( 'news', $args );
    $args = array(
        'public' => true,
        'label'  => '仕事実績'
      );
      register_post_type( 'works', $args );
}
add_action( 'init', 'codex_custom_init' );


// テーマカスタマイザー設定
function theme_customizer_extension($wp_customize) {
    //処理
    //セクション
    $wp_customize->add_section( 'seo', array (
    'title' => 'SEO関連',
    'priority' => 100,
   ));
    $wp_customize->add_setting( 'ogp', array (
    'default' => 'true',
    ));
    //コントロール
    $wp_customize->add_control( 'ogp', array(
    'section' => 'seo',
    'settings' => 'ogp',
    'label' =>'OGPの設定',
    'description' => 'ソーシャルメディアへの拡散を最適化します。SEO関連のプラグインで管理している場合はオフにしてください。',
    'type' => 'checkbox',
    'priority' => 20,
   ));
   //OGP設定
    function ogp() {
    return get_theme_mod( 'ogp', true );
   }

    //SNS
   $wp_customize->add_section( 'sns_acount', array(
    'title'     => 'SNS連携',
    'priority'  => 100,
    ));
    $wp_customize->add_setting( 'sns_tw', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control( 'sns_acount_tw', array(
    'settings'  => 'sns_tw',
    'label'     => 'Twitterアカウント',
    'description' => '<small>@を含めずにTwitterIDを入力してください</small>',
    'section'   => 'sns_acount',
    'type'      => 'text',
    ));

        //copyright
   $wp_customize->add_section( 'copy_right', array(
    'title'     => 'CopyRight',
    'priority'  => 2000,
    ));
    $wp_customize->add_setting( 'copy', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control( 'footer_copy_right', array(
    'settings'  => 'copy',
    'label'     => 'CopyRight',
    'description' => '<small>著作権情報</small>',
    'section'   => 'copy_right',
    'type'      => 'text',
    ));
   
   }
   add_action('customize_register', 'theme_customizer_extension');

?>

