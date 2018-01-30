<?php get_header(); ?>
<body>
<header class="header">
    <div class="inner">
        <div class="logo">
            <a href="<?php echo HOME_URI; ?>" title="WebSite主题演示">
                <img src="<?php echo THEME_URI; ?>/images/logo.png"
                     alt="WebSite主题演示"></a>
        </div>
        <div class="search-form">
            <form method="get" id="searchform" action="<?php echo HOME_URI; ?>">
                <input type="text" class="s" name="s" placeholder="需要查询的" value="">
                <input type="submit" class="submit" name="submit" value="查找">
            </form>
        </div>
        <div class="notice">
            <ul class="newsList" style="top: 44px;">
                <?php get_archives('postbypost', 10); ?>

            </ul>
            <ul class="swap" style="top: -132px;">
                <?php get_archives('postbypost', 10); ?>

            </ul>
        </div>
        <div class="mobilesch">
            <i class="schbtn"></i>
        </div>
        <div class="mobilenav">
            <div class="navbtn">
                <i></i><i></i><i></i>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</header>
<nav class="nav">
    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'menus', 'container_class' => 'inner menu', 'fallback_cb' => '', 'walker' => new aj_menu_walker())); ?>
</nav>
<div class="blank"></div>
<div class="inner container">


    <main class="main">
        <div class="breadcrumb"><a href="<?php echo HOME_URI; ?>" title="WebSite主题演示">网站首页</a>
            <i>/</i> <?php the_category(', ') ?> <i>/</i></div>
        <article class="site-post">
            <div class="site-logo">

                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('swiper-category', array('alt' => get_the_title()));
                    } else { ?>
                        <img src="<?php echo catch_image() ?>"
                             alt="<?php the_title(); ?>"/>
                    <?php } ?></a>
            </div>
            <div class="site-info">
                <h1><?php the_title(); ?></h1>
                <ul>
                    <li>更新日期：<?php the_time('Y-m-d H:i') ?></li>
                    <li>查看次数：14147</li>
                    <li>点评次数：2</li>
                    <li>编辑寄语：<?php the_title(); ?></li>
                </ul>
            </div>
            <div class="site-go">
                <?php
                $affurl = '';
                if (is_single()) {
                    $affurl = get_post_meta($post->ID, "_affurl_value", true);
                    $affurl = trim(strip_tags($affurl));
                }

                ?>
                <a rel="nofollow" href="<?php echo $affurl; ?>" target="_blank">立即前往</a>
            </div>

            <div class="site-content">
                <div class="site-entry">
                    <h4>详细介绍</h4>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>






                <section class="news-related">
                    <h3>相关资讯</h3>
                    <ul>
                            <?php
                            $post_tags = wp_get_post_tags($post->ID);
                            if ($post_tags) {
                                foreach ($post_tags as $tag) {
                                    $tag_list[] .= $tag->term_id;
                                }
                                $post_tag = $tag_list[mt_rand(0, count($tag_list) - 1)];
                                $args = array(
                                    'tag__in' => array($post_tag),
                                    'category__not_in' => array(NULL),
                                    'post__not_in' => array($post->ID),
                                    'showposts' => 6,
                                    'caller_get_posts' => 1
                                );
                                query_posts($args);
                                if (have_posts()) : while (have_posts()) : the_post();
                                    update_post_caches($posts); ?>
                                    <li>
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"
                                           title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile;
                                else :
                                    $ashu_cats = wp_get_post_categories($post->ID);
                                    if ($ashu_cats) {
                                        $args = array(
                                            'category__in' => array($ashu_cats[0]),
                                            'post__not_in' => array($post->ID),
                                            'showposts' => 6,
                                            'caller_get_posts' => 1
                                        );
                                        query_posts($args);
                                        if (have_posts()):while (have_posts()):the_post();
                                            update_post_caches($posts); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>" rel="bookmark"
                                                   title="<?php the_title_attribute(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; endif;
                                        wp_reset_query();
                                    } ?>
                                <?php endif;
                                wp_reset_query();
                            } ?>
                    </ul>
                </section>
            </div>
            <section class="site-related">
                <ul class="mb10">

                    <?php
                    $post_tags = wp_get_post_tags($post->ID);
                    if ($post_tags) {
                        foreach ($post_tags as $tag) {
                            $tag_list[] .= $tag->term_id;
                        }
                        $post_tag = $tag_list[mt_rand(0, count($tag_list) - 1)];
                        $args = array(
                            'tag__in' => array($post_tag),
                            'category__not_in' => array(NULL),
                            'post__not_in' => array($post->ID),
                            'showposts' => 6,
                            'caller_get_posts' => 1
                        );
                        query_posts($args);
                        if (have_posts()) : while (have_posts()) : the_post();
                            update_post_caches($posts); ?>
                            <li>
                                <div class="site-logo">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('swiper-category', array('alt' => get_the_title()));
                                        } else { ?>
                                            <img src="<?php echo catch_image() ?>"
                                                 alt="<?php the_title(); ?>"/>
                                        <?php } ?></a>
                                </div>
                                <p>
                                    <a href="<?php the_permalink(); ?>" rel="bookmark"
                                       title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>

                            </li>
                        <?php endwhile;
                        else :
                            $ashu_cats = wp_get_post_categories($post->ID);
                            if ($ashu_cats) {
                                $args = array(
                                    'category__in' => array($ashu_cats[0]),
                                    'post__not_in' => array($post->ID),
                                    'showposts' => 6,
                                    'caller_get_posts' => 1
                                );
                                query_posts($args);
                                if (have_posts()):while (have_posts()):the_post();
                                    update_post_caches($posts); ?>
                                    <li>
                                        <div class="site-logo">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('swiper-category', array('alt' => get_the_title()));
                                                } else { ?>
                                                    <img src="<?php echo catch_image() ?>"
                                                         alt="<?php the_title(); ?>"/>
                                                <?php } ?></a>
                                        </div>
                                        <p>
                                            <a href="<?php the_permalink(); ?>" rel="bookmark"
                                               title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>

                                    </li>
                                <?php endwhile; endif;
                                wp_reset_query();
                            } ?>
                        <?php endif;
                        wp_reset_query();
                    } ?>
                </ul>
                <div class="site-entry post-ad">
                    <a href="http://www.5bite.com/post/46.html" target="_blank"><img
                            src="http://www.5bite.com/zb_users/upload/2017/08/fengtai.jpg" width="920" height="90"
                            border="0"/></a>
                </div>
            </section>


            <div class="post-comments">
                <?php comments_template(); ?>
            </div>

        </article>
    </main>


    <aside class="sidebar">
        <section class="widget hot"><h3>最新添加</h3>
            <ul>
                <?php get_archives('postbypost', 10); ?>
            </ul>
        </section>
        <section class="widget hot"><h3>热门关注</h3>
            <ul>
                <?php get_archives('postbypost', 10); ?>
            </ul>
        </section>
        <section class="widget"><h3>最新资讯</h3>
            <ul>
                <?php get_archives('postbypost', 10); ?>
            </ul>
        </section>
        <section class="widget_text widget">
            <div class="textwidget custom-html-widget">
            </div>
        </section>
    </aside>
</div>

<?php get_footer(); ?>
