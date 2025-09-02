<?php
function my_enqueue_scripts() {
    $uri = esc_url( get_template_directory_uri() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bundle_js', $uri . '/assets/js/bundle.js', [] );
    wp_enqueue_style( 'my_styles', $uri . '/assets/css/styles.css', [] );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus([
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ',
]);

// メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
    if ( is_singular( 'post' ) ) {
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    } elseif ( is_page() ) {
        return get_the_title();
    } elseif ( is_category() ) {
        return single_cat_title();
    }
    return '';
}

// 子ページを取得する関数
function get_child_pages( $number = -1 ) {
    $parent_id = get_the_ID();
    $args = [
        'posts_per_page' => -1,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
    ];
    $child_pages = new WP_Query( $args );
    return $child_pages;
}