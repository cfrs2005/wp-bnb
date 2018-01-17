<?php
if (is_user_admin()) ini_set('display_errors', 'On');

/**
 * add define
 */
define('HOME_URI', home_url());
define('HOME_DIR', rtrim(WP_CONTENT_DIR, "/wp-content"));
define('THEME_FILES', get_stylesheet_directory());
define('THEME_URI', get_stylesheet_directory_uri());
define('AVATAR_DEFAULT', THEME_URI . '/images/avatar-default.png');
define('THUMB_DEFAULT', THEME_URI . '/images/thumbnail.png');
define('THEME_NAME', 'bnb');
define('THEME_VERSION', '1.1');


/**
 * remove head
 */
remove_filter('the_content', 'wptexturize');
remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'show_admin_bar', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('embed_head', 'print_emoji_detection_script');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
add_filter( 'emoji_svg_url', '__return_false' );

add_theme_support( "post-thumbnails" );
add_theme_support( 'post-formats', array('gallery','video') );




register_nav_menus(
    array(
        'header-menu' => __('导航菜单'),
        'mini-menu' => __('移动版菜单')
    )
);

class aj_menu_walker extends Walker_Nav_Menu
{
    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {

        //var_dump($element);
        if ($element->post_title == '首页') {
            $classes = empty($element->classes) ? array() : (array)$element->classes;
            $classes[] = 'nl';
            $element->classes = $classes;
        }
        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}

//标题文字截断
function cut_str($src_str, $cut_length)
{
    $return_str = '';
    $i = 0;
    $n = 0;
    $str_length = strlen($src_str);
    while (($n < $cut_length) && ($i <= $str_length)) {
        $tmp_str = substr($src_str, $i, 1);
        $ascnum = ord($tmp_str);
        if ($ascnum >= 224) {
            $return_str = $return_str . substr($src_str, $i, 3);
            $i = $i + 3;
            $n = $n + 2;
        } elseif ($ascnum >= 192) {
            $return_str = $return_str . substr($src_str, $i, 2);
            $i = $i + 2;
            $n = $n + 2;
        } elseif ($ascnum >= 65 && $ascnum <= 90) {
            $return_str = $return_str . substr($src_str, $i, 1);
            $i = $i + 1;
            $n = $n + 2;
        } else {
            $return_str = $return_str . substr($src_str, $i, 1);
            $i = $i + 1;
            $n = $n + 1;
        }
    }
    if ($i < $str_length) {
        $return_str = $return_str . '';
    }
    if (get_post_status() == 'private') {
        $return_str = $return_str . '（private）';
    }
    return $return_str;
}

// 自动缩略图
function catch_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if (empty($first_img)) { //Defines a default image
        $random = mt_rand(1, 5);
        echo get_bloginfo('stylesheet_directory');
        echo '/images/random/' . $random . '.png';
    }
    return $first_img;
}


function bnb_get($name, $default = false)
{
    $config = get_option('opshui');

    if (!isset($config['id'])) {
        return $default;
    }

    $options = get_option($config['id']);

    if (isset($options[$name])) {
        return $options[$name];
    }

    return $default;
}

