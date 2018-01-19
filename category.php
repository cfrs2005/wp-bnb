<?php get_header(); ?>

    <body>

<?php global $wp_query;
$cat_id = get_query_var('cat');
?>
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
    <main class="main wuse">
        <div class="bgb mb10">
            <div class="row">
                <div class="col-12 col-m-24">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php query_posts('posts_per_page=4&caller_get_posts=1&cat=' . implode(',', bnb_get('index_swf_banner'))); ?>
                            <?php
                            $i = 1;
                            while (have_posts()) : the_post(); ?>
                                <div class="swiper-slide"><a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('swiper-category', array('alt' => get_the_title()));
                                        } else { ?>
                                            <img src="<?php echo catch_image() ?>"
                                                 alt="<?php the_title(); ?>"/>
                                        <?php } ?>
                                        <p><?php echo cut_str($post->post_title, 34); ?></p></a>
                                </div>
                                <?php $i++; ?>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-m-24">
                    <div class="index-new1">
                        <ul class="black-a f-14">

                            <?php query_posts('posts_per_page=2&caller_get_posts=1&cat='.$cat_id);
                            while (have_posts()) : the_post(); ?>
                                <li class="pd15-1 border-b">

                                    <p class="site-name1 mb10">

                                        <a target="_blank" href="<?php the_permalink(); ?>"
                                           title="<?php the_title(); ?>"
                                           class="title"><span>推荐</span><?php echo cut_str($post->post_title, 34); ?>
                                        </a>
                                    </p>
                                    <p class="site-intro1">　　<?php echo get_post_excerpt($post); ?></p>

                                </li>
                                <?php $i++; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-nav bgb mb10">
            <ul class="clearfix">
                <?php query_posts('posts_per_page=10&caller_get_posts=1&cat='.$cat_id);
                while (have_posts()) : the_post(); ?>
                    <li>
                        <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                           class="title"><span>推荐</span><?php echo cut_str($post->post_title, 34); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>

        <div class="bgb">
            <h3 class="title mb20"><?php single_cat_title(); ?></h3>
            <?php
            while (have_posts()) : the_post(); ?>
                <section class="section1 wow fadeIn cate19 auth1">
                    <div class="thumbnail">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail', array('alt' => get_the_title()));
                            } else { ?>
                                <img class="home-thumb" src="<?php echo catch_image() ?>"
                                     alt="<?php the_title(); ?>"/>
                            <?php } ?></a>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                           target="_blank"><?php the_title(); ?></a></h2>
                    <div class="postmeta">
                        <span><i class="fa fa-user"></i> AB</span>
                        <span><i class="fa fa-clock-o"></i> <time>2018-01-17</time></span>
                        <span><i class="fa fa-eye"></i> 259</span>
                        <span><i class="fa fa-comments-o"></i> 0</span>
                    </div>
                    <div class="excerpt">
                        <p><?php echo get_post_excerpt($post); ?></p>
                    </div>
                </section>
                <?php $i++; ?>
            <?php endwhile; ?>

            <div class="pagenavi">

            </div>
        </div>
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