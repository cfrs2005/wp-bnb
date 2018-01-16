<?php
/**
 * The main template file
 *
 * @package Vtrois
 * @version 2.3
 */

get_header(); ?>
    <body class="home blog" style="">
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
        <div class="row">
            <div class="col-12 col-m-24">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php query_posts('posts_per_page=10&caller_get_posts=1'); ?>
                        <?php
                        $i = 1;
                        while (have_posts()) : the_post(); ?>
                            <div class="swiper-slide"><a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('alt' => get_the_title()));
                                    } else { ?>
                                        <img class="home-thumb" src="<?php echo catch_image() ?>"
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
                <script>
                    var swiper = new Swiper('.swiper-container', {
                        pagination: '.swiper-pagination',
                        paginationClickable: true,
                        spaceBetween: 30,
                        centeredSlides: true,
                        autoplay: 2500,
                        loop : true,
                        autoplayDisableOnInteraction: false
                    });
                </script>
            </div>
            <div class="col-12 col-m-24">
                <div class="index-new1">
                    <h2 class="tx-title3">最新文章</h2>
                    <ul class="tx-ph-ul ul-38 black-a f-14">
                        <?php query_posts('posts_per_page=10&caller_get_posts=1'); ?>
                        <?php
                        $i = 1;
                        while (have_posts()) : the_post(); ?>
                            <li>
                                <i><?php echo $i; ?></i>
                                <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                   class="title"><?php echo cut_str($post->post_title, 34); ?></a>
                            </li>
                            <?php $i++; ?>
                        <?php endwhile; ?>

                    </ul>
                </div>
            </div>
        </div>
        <?php
        $categoryList = get_categories();
        foreach ($categoryList as $category) {
            ?>
            <section class="box">
                <h3><?php echo $category->name; ?></h3>
                <span class="more"><a href="<?php echo HOME_URI . "/category/" . $category->name; ?>"
                                      title="主机域名">更多 <i>+</i></a></span>
                <ul>
                    <?php query_posts('cat=' . $category->term_id); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <div class="site-logo">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('alt' => get_the_title()));
                                    } else { ?>
                                        <img class="home-thumb" src="<?php echo catch_image() ?>"
                                             alt="<?php the_title(); ?>"/>
                                    <?php } ?></a>

                            </div>
                            <p class="site-name"><a href="<?php the_permalink(); ?>"
                                                    target="_blank"><?php echo cut_str($post->post_title, 50); ?></a>
                            </p>
                            <p class="site-intro"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50, "..."); ?></p>

                        </li>
                    <?php endwhile; ?>
                </ul>
            </section>
            <?php
        }
        ?>

        <div class="box widget-ad">
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