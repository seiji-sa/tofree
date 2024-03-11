<?php

/**
 * テーマのセットアップ
 **/
function my_setup()
{
    'add_theme_support'('post-thumbnails'); // アイキャッチ画像を有効化
    'add_theme_support'('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    'add_theme_support'('title-tag'); // タイトルタグ自動生成
    'add_theme_support'(
        'html5', //HTML5でマークアップ
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
'add_action'('after_setup_theme', 'my_setup');

// ワードプレス管理バー非表示
// add_filter('show_admin_bar', '__return_false');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'about'; // 任意のスラッグ名
    }
    return $args;
}
'add_filter'('register_post_type_args', 'post_has_archive', 10, 2);
/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
    wp_enqueue_style('my-css', get_stylesheet_directory_uri() . '/dist/css/style.css');
    wp_enqueue_script('my-js', get_stylesheet_directory_uri() . '/dist/js/script.js');
    wp_enqueue_style('my-img', get_stylesheet_directory_uri() . '/img/Logo.png');
}
'add_action'('wp_enqueue_scripts', 'my_script_init');
