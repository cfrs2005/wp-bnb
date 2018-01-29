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
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_generator');
add_filter('show_admin_bar', '__return_false');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('embed_head', 'print_emoji_detection_script');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
add_filter('emoji_svg_url', '__return_false');

add_theme_support("post-thumbnails");
add_theme_support('post-formats', array('gallery', 'video'));

add_image_size('swiper-index', 442, 390, true);
add_image_size('swiper-category', 442, 250, true);


//增加自定义aff字段
$new_meta_boxes =
    array(
        "affurl" => array(
            "name" => "_affurl",
            "std" => "http://www.otcbtc.com",
            "title" => "AFF URL:")
    );


function new_meta_boxes()
{
    global $post, $new_meta_boxes;
    foreach ($new_meta_boxes as $meta_box) {
        $meta_box_value = get_post_meta($post->ID, $meta_box['name'] . '_value', true);

        if ($meta_box_value == "")
            $meta_box_value = $meta_box['std'];
        echo '<h4>' . $meta_box['title'] . '</h4>';
        echo '<input name="' . $meta_box['name'] . '_value" value="' . $meta_box_value . '" size="50" /><br />';
    }

    echo '<input type="hidden" name="meta_check" id="meta_check" value="' . wp_create_nonce(plugin_basename(__FILE__)) . '" />';
}

function create_meta_box()
{
    if (function_exists('add_meta_box')) {
        add_meta_box('new-meta-boxes', '自定义模块', 'new_meta_boxes', 'post', 'normal', 'high');
    }
}

function save_postdata($post_id)
{
    global $new_meta_boxes;

    if (!wp_verify_nonce($_POST['meta_check'], plugin_basename(__FILE__)))
        return;

    if (!current_user_can('edit_posts', $post_id))
        return;

    foreach ($new_meta_boxes as $meta_box) {
        $data = $_POST[$meta_box['name'] . '_value'];

        if ($data == "")
            delete_post_meta($post_id, $meta_box['name'] . '_value', get_post_meta($post_id, $meta_box['name'] . '_value', true));
        else
            update_post_meta($post_id, $meta_box['name'] . '_value', $data);
    }
}

add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');


//add single show
define(SINGLE_PATH, TEMPLATEPATH . '/single');
function wp_bnb_single_template($single)
{
    global $wp_query, $post;
    foreach ((array)get_the_category() as $cat) :
        if (file_exists(SINGLE_PATH . '/single-' . $cat->slug . '.php')) {
            return SINGLE_PATH . '/single-' . $cat->slug . '.php';
        } elseif (file_exists(SINGLE_PATH . '/single-' . $cat->term_id . '.php')) {
            return SINGLE_PATH . '/single-' . $cat->term_id . '.php';
        } else {
            return TEMPLATEPATH.'/single.php';
        }
    endforeach;
}

add_filter('single_template', 'wp_bnb_single_template');


require_once(get_stylesheet_directory() . '/theme-options.php');


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

    if (empty($first_img)) {
        //Defines a default image
        echo get_bloginfo('stylesheet_directory');
        echo '/images/random/btc.jpeg';
    }
    return $first_img;
}


/**
 * 获取参数
 * @param $name
 * @param bool $default
 * @return bool
 */
function bnb_get($name, $default = false)
{
    $options = get_option('wp_bnb_options');
    if (isset($options[$name])) {
        return $options[$name];
    }
    return $default;
}


function get_post_excerpt($post, $excerpt_length = 240)
{
    if (!$post) $post = get_post();

    $post_excerpt = $post->post_excerpt;
    if ($post_excerpt == '') {
        $post_content = $post->post_content;
        $post_content = do_shortcode($post_content);
        $post_content = wp_strip_all_tags($post_content);

        $post_excerpt = mb_strimwidth($post_content, 0, $excerpt_length, '…', 'utf-8');
    }

    $post_excerpt = wp_strip_all_tags($post_excerpt);
    $post_excerpt = trim(preg_replace("/[\n\r\t ]+/", ' ', $post_excerpt), ' ');

    return $post_excerpt;
}


