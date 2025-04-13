<?php
function theme_setup() {
    add_theme_support('post-thumbnails'); // サムネイル機能を有効化
    set_post_thumbnail_size(800, 500, true); // デフォルトのサムネイルサイズを指定（幅800px、高さ500px）
}
add_action('after_setup_theme', 'theme_setup');



function custom_post_types() {
    // ギャラリー投稿タイプ
    register_post_type('gallery', array(
        'labels' => array(
            'name' => 'ギャラリー',
            'singular_name' => 'ギャラリーアイテム'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
    ));
}
add_action('init', 'custom_post_types');

?>
