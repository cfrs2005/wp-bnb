<?php
register_nav_menus(
   array(
      'header-menu' => __( '导航菜单' ),
      'mini-menu' => __( '移动版菜单' )
   )
);

class aj_menu_walker extends Walker_Nav_Menu{
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        
	//var_dump($element);
	if( $element->post_title == '首页' ){
            $classes = empty( $element->classes ) ? array() : (array) $element->classes;
            $classes[] = 'nl';
            $element->classes =$classes;
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}

//标题文字截断
function cut_str($src_str,$cut_length)
{
    $return_str='';
    $i=0;
    $n=0;
    $str_length=strlen($src_str);
    while (($n<$cut_length) && ($i<=$str_length))
    {
        $tmp_str=substr($src_str,$i,1);
        $ascnum=ord($tmp_str);
        if ($ascnum>=224)
        {
            $return_str=$return_str.substr($src_str,$i,3);
            $i=$i+3;
            $n=$n+2;
        }
        elseif ($ascnum>=192)
        {
            $return_str=$return_str.substr($src_str,$i,2);
            $i=$i+2;
            $n=$n+2;
        }
        elseif ($ascnum>=65 && $ascnum<=90)
        {
            $return_str=$return_str.substr($src_str,$i,1);
            $i=$i+1;
            $n=$n+2;
        }
        else 
        {
            $return_str=$return_str.substr($src_str,$i,1);
            $i=$i+1;
            $n=$n+1;
        }
    }
    if ($i<$str_length)
    {
        $return_str = $return_str . '';
    }
    if (get_post_status() == 'private')
    {
        $return_str = $return_str . '（private）';
    }
    return $return_str;
}

// 自动缩略图
function catch_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
		$random = mt_rand(1, 10);
		echo get_bloginfo ( 'stylesheet_directory' );
		echo '/images/random/'.$random.'.jpg';
  }
  return $first_img;
}
