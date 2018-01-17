<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title><?php $t = trim(wp_title('', false));
        if ($t) echo $t; else '';
        bloginfo('name');
        if (is_home()) echo get_option('blogdescription');
        if ($paged > 1) echo '-Page ', $paged; ?></title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo HOME_URI . '/favicon.ico' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI ?>/css/swiper-3.3.1.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI ?>/css/font-awesome.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI ?>/style.css" media="screen"/>
    <script type="text/javascript" src="<?php echo THEME_URI ?>/js/swiper-3.3.1.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo THEME_URI?>/js/html5-css3.js"></script>
    <![endif]-->
    <meta name='robots' content='noindex,follow'/>

</head>