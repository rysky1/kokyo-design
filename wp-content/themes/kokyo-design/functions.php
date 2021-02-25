<?php
// コンテンツ幅をセット
if( ! isset( $content_width ) ) {
    $content_width = 1200;
}
//WPナビゲーションの設定
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル',  //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
));


//WPのバージョン非表示
remove_action('wp_head', 'wp_generator');

//WP　?ver=~削除　readme.htmlやlicense.txt、wp-config-sample.phpを削除
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

function custom_theme_setup() {
    add_theme_support( "automatic-feed-links");
    add_theme_support( "title-tag" );//タイトルタグ追加
    add_theme_support( "post-thumbnails" );
    set_post_thumbnail_size( 1200, 800);//アイキャッチリサイズ
}
add_action("after_setup_theme","custom_theme_setup");

function css_scripts() {
/*
    //hiraku.cssの読み込み
    wp_enqueue_style(
        'hiraku-style',
        get_template_directory_uri() . '/css/hiraku.min.css',
        "",
        '1.0'
    );
*/
    //swiper.cssの読み込み
    wp_enqueue_style(
        'swiper-style',
        get_template_directory_uri() . '/css/swiper-min.css',
        "",
        '1.0'
    );

        //modaal.cssの読み込み
        wp_enqueue_style(
            'modaal-style',
            get_template_directory_uri() . '/css/modaal.css',
            "",
            '1.0'
        );
/*
    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');

	// jQueryの読み込み
    wp_enqueue_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js',
        array(),
        "2.2.4",
        false
    );
*/
/*
    //hiraku.jsの読み込み
    wp_enqueue_script(
        'hiraku-script',
        get_template_directory_uri() . '/js/hiraku.js',
        array( 'jquery' ),
        '1.0',
        true
    );
*/
    //swiper.jsの読み込み
    wp_enqueue_script(
        'swiper-script',
        get_template_directory_uri() . '/js/swiper-bundle.min.js',
        array('jquery'),
        '1.0',
        true
    );

    //modaal.jsの読み込み
    wp_enqueue_script(
        'modaal-script',
        get_template_directory_uri() . '/js/modaal.min.js',
        array('jquery'),
        '1.0',
        true
    );

    //wave.jsの読み込み
    wp_enqueue_script(
        'wave-script',
        get_template_directory_uri() . '/js/wave.js',
        array(),
        '1.1',
        true
    );


    //javascript.jsの読み込み
    wp_enqueue_script(
        'base-script',
        get_template_directory_uri() . '/js/javascript.js',
        array('jquery'),
        '1.1',
        true
    );
}
add_action( 'wp_enqueue_scripts' , 'css_scripts' );

//style.cssの追加　クエリ付与
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'base-style', get_stylesheet_directory_uri() . '/css/style.css?'. date("ymdHis", filemtime( get_stylesheet_directory() . '/css/style.css')), array() );
}

/*
//カスタム投稿タイプ
add_action('init', 'create_post_type');
function create_post_type(){
    $custom_type_name = 'products';
    $taxonomy_name = 'product_item';
    register_post_type($custom_type_name,[
        'labels' => [
            'name' => '制作実績',
            'singular_name' => $custom_type_name,
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'taxonomies' => [$taxonomy_name],
        'supports' => ['title','editor','thumbnail','custom-fields']
    ]);
    register_taxonomy(
        $taxonomy_name,
        $custom_type_name,
        [
            'hierarchical' => true,
            'label' => 'カテゴリー',
            'singular_label' => 'カテゴリー',
            'public' => true,
            'show_ui' => true,
            'rewrite' => true,
            'show_in_rest' => true
        ]
    );
}
//カスタム投稿タイプ　カテゴリ指定

function add_post_taxonomy_restrict_filter() {
    global $post_type;
    if ( 'items' == $post_type ) {
        ?>
        <select name="items_list">
            <option value="">カテゴリー指定なし</option>
            <?php
            $terms = get_terms('items_list');
            foreach ($terms as $term) { ?>
                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
            <?php } ?>
        </select>
        <?php
    }
}
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' );
*/


//パンくず
function breadcrumb_func(){
    global $post;
    $str ='';
    $url = esc_url((is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . htmlspecialchars($_SERVER["REQUEST_URI"], ENT_QUOTES, 'UTF-8'));
    if(!is_home() && !is_admin()){
        $str.= '<ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        $str.= '<a href="'.home_url().'" itemprop="item"><span class="home__btn" itemprop="name">'.'Home'.'</span></a><meta itemprop="position" content="1" /></li>';
        if( is_post_type_archive() ){
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$url.'" itemprop="item"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label ).'</span></a><meta itemprop="position" content="2" /></li>';
        } elseif(is_tax()){
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_post_type_archive_link( get_post_type() ).'" itemprop="item"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label ).'</span></a><meta itemprop="position" content="2" /></li>';
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$url.'" itemprop="item"><span itemprop="name">'.single_term_title( '' , false ).'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif(is_tag()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$url.'" itemprop="item"><span itemprop="name">'.single_tag_title( '' , false ).'</span></a><meta itemprop="position" content="2" /></li>';
        } elseif(is_category()) {
        $cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                }
            }
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$url.'" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif(is_page()){
            if($post -> post_parent != 0 ){
                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                foreach($ancestors as $ancestor){
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.get_the_title().'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.get_the_title().'</span></a><meta itemprop="position" content="2" /></li>';
            }
        } elseif(is_single()){
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                }
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$categories[0]->cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.get_the_title().'</span></a><meta itemprop="position" content="4" /></li>';
            } else {
                $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="2" /></li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.get_the_title().'</span></a><meta itemprop="position" content="3" /></li>';
            }
        }
        $str.= '</ul>'."\n";
    }elseif(is_singular('portfolio')){
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        $str.= '<a href="' . get_post_type_archive_link(get_post_type()) . '"><span itemprop="name">' . esc_html(get_post_type_object(get_post_type())->label ) . '</span></a></li>';
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3"></li>';
    }elseif(is_archive()) {
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.$url.'" itemprop="item"><span itemprop="name">'.esc_html(get_the_archive_title()).'</span></a><meta itemprop="position" content="2"></li>';
    }
    return $str;
}
add_shortcode('breadcrumb', 'breadcrumb_func');


// Gutenberg用のCSSを読み込む
add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets_custom' );
function gutenberg_stylesheets_custom() {
    $editor_style_url = get_theme_file_uri('/editor-style.css');
    wp_enqueue_style( 'theme-editor-style', $editor_style_url );

  // JavaScriptも読み込みたい時は、以下を利用
  // wp_enqueue_script( 'theme-gutenberg-js', get_theme_file_uri('/js/gutenberg.js'), array( 'jquery' ), false, true );
}

/*
//住所自動入力
wp_enqueue_script('yubinbango','https://yubinbango.github.io/yubinbango/yubinbango.js',array(),false,true );
*/
/*
//ウィジェット追加
function my_widgets_init() {
	$args  = [
		// ウィジェットエリアの表示名を指定
		'name' => 'ウィジェット01',
		// ウィジェットエリアのIDを指定
		'id' => 'widget-01',
		// 管理画面で表示されるウィジェットエリアの説明を指定。
        'description' => 'ウィジェット01のエリア',
		// ウィジェットの直前に表示するHTML
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		// ウィジェットの直後に表示するHTML
		'after_widget'  => '</div>',
		// ウィジェット内のタイトルの直前に表示するHTML
		'before_title'  => '<h2 class="widget-title">',
		// ウィジェット内のタイトルの直後に表示するHTML
		'after_title'   => '</h2>',
    ];
	register_sidebar( $args  );
}
add_action( 'widgets_init', 'my_widgets_init' );
*/

//編集者権限に外観を追加
function add_theme_caps(){
    $role = get_role( 'editor' );
    $role->add_cap( 'edit_theme_options' );
}
add_action( 'admin_init', 'add_theme_caps' );
/*上記設定を無効　上記削除後、コメントアウト解除
function add_theme_caps(){
    $role = get_role( 'editor' );
    $role->remove_cap( 'edit_theme_options' );
}
add_action( 'admin_init', 'add_theme_caps' );
*/


/**********************************************
投稿者アーカイブ非表示化
これ入れても有効化しない場合：
書き込み後、パーマリンク設定を何も変更せず「変更を保存」を押下する。
http://example.com/?author=1でユーザIDが表示されないか確認
 **********************************************/
add_filter( 'author_rewrite_rules', '__return_empty_array' );
// URLを非表示化
function disable_author_archive() {
	if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
		wp_redirect( home_url( '/404.php' ) );
		exit();
	}
}
add_action('init', 'disable_author_archive');

//投稿機能の「タグ」を無効化
function my_unregister_taxonomies() {
    global $wp_taxonomies;
    // 投稿機能から「タグ」を削除
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
        foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['post_tag']->object_type[$i]);
            }
        }
    }
    return true;
}
add_action('init', 'my_unregister_taxonomies');


//管理画面「コメント」を無効化
function remove_menu() {
    // コメント
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menu', 999 );


//head 無駄なものを削除
remove_action('wp_head', 'wp_resource_hints', 2);
// 絵文字周りのJSやCSSを削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
// REST出力
remove_action('wp_head', 'rest_output_link_wp_head');
// oEmbed 埋め込みカード機能削除
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// フィードリンク（RSS）削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
// Windows Live Writer を使ってブログ投稿をする時に使用するもの：削除
remove_action('wp_head', 'wlwmanifest_link');
// WordPressバージョン削除
remove_action('wp_head', 'wp_generator');
// nextpage,prevpage
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// canonicalのmetaタグ削除
// （URL正規化タグ。複数の類似した内容のページの中で優先されるページを指定できる。）
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// デフォルトタイトルタグの削除
//remove_action( 'wp_head', '_wp_render_title_tag', 1 );

?>