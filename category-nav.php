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
    <main>
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