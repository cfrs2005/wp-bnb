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

        <article class="site-post post blog-post">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="postmeta">
                <span>发布时间：<?php //the_time( 'Y-m-d H:i' ) ?></span>
                <span>浏览次数：242</span>
                <span>评论次数：0</span>
            </div>
            <div class="entry">
                <div class="post-ad">
                    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- 自适应广告 -->
                    <ins class="adsbygoogle" style="display: block; height: 90px;"
                         data-ad-client="ca-pub-9642311778195731" data-ad-slot="6411638153" data-ad-format="auto"
                         data-adsbygoogle-status="done">
                        <ins id="aswift_0_expand"
                             style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:760px;background-color:transparent;">
                            <ins id="aswift_0_anchor"
                                 style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:760px;background-color:transparent;">
                                <iframe width="760" height="90" frameborder="0" marginwidth="0" marginheight="0"
                                        vspace="0" hspace="0" allowtransparency="true" scrolling="no"
                                        allowfullscreen="true"
                                        onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}"
                                        id="aswift_0" name="aswift_0"
                                        style="left:0;position:absolute;top:0;width:760px;height:90px;"></iframe>
                            </ins>
                        </ins>
                    </ins>
                    <script>
(adsbygoogle = window.adsbygoogle || []).push({});




                    </script>
                </div>
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>
                <?php endwhile; ?>

            </div>
            <section class="news-related">
                <h3>您可能还会喜欢：</h3>
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
