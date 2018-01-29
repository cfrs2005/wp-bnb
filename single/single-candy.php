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
                    $affurl = get_post_meta($post->ID, "_affurl", true);
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
                        <li><a href="http://www.5bite.com/post/1870.html" target="_blank" title="刘强东视频流出：京东或将接受比特币支付！">刘强东视频流出：京东或将接受比特币支付！</a>
                        </li>
                        <li><a href="http://www.5bite.com/post/1823.html" target="_blank" title="比特币涨至50000元！幕后推手大揭秘！">比特币涨至50000元！幕后推手大揭秘！</a>
                        </li>
                        <li><a href="http://www.5bite.com/post/1752.html" target="_blank"
                               title="比特币白皮书9周年！比特币市值700000000000元！">比特币白皮书9周年！比特币市值700000000000元！</a></li>
                        <li><a href="http://www.5bite.com/post/1736.html" target="_blank" title="最后一天！明天起，比特币将彻底告别中国！">最后一天！明天起，比特币将彻底告别中国！</a>
                        </li>
                        <li><a href="http://www.5bite.com/post/1658.html" target="_blank" title="新加坡央行：比特币本身并不需要被监管">新加坡央行：比特币本身并不需要被监管</a>
                        </li>
                        <li><a href="http://www.5bite.com/post/606.html" target="_blank"
                               title="美国国会考虑认可比特币">美国国会考虑认可比特币</a></li>
                        <li><a href="http://www.5bite.com/post/584.html" target="_blank"
                               title="《财富》：较之VC，ICO能为比特币创业公司筹集更多资金">《财富》：较之VC，ICO能为比特币创业公司筹集更多资金</a></li>
                        <li><a href="http://www.5bite.com/post/555.html" target="_blank" title="纽约市公务员因用工作设备挖比特币遭处罚">纽约市公务员因用工作设备挖比特币遭处罚</a>
                        </li>
                        <li><a href="http://www.5bite.com/post/554.html" target="_blank"
                               title="Belfrics计划在非洲各国成立比特币交易所">Belfrics计划在非洲各国成立比特币交易所</a></li>
                        <li><a href="http://www.5bite.com/post/553.html" target="_blank" title="上市公司融资用新招：比特币兑换股票">上市公司融资用新招：比特币兑换股票</a>
                        </li>

                    </ul>
                </section>
            </div>
            <section class="site-related">
                <ul class="mb10">
                    <li>
                        <div class="site-logo">
                            <a href="http://www.5bite.com/post/3186.html" target="_blank" title="智能坊"><img alt="智能坊"
                                                                                                           src="http://www.5bite.com/zb_users/upload/2018/01/201801161516110898160736.jpg"/></a>
                        </div>
                        <p><a href="http://www.5bite.com/post/3186.html" target="_blank" title="智能坊">智能坊</a></p>
                    </li>
                    <li>
                        <div class="site-logo">
                            <a href="http://www.5bite.com/post/2367.html" target="_blank" title="Cream（CRM）"><img
                                    alt="Cream（CRM）"
                                    src="http://www.5bite.com/zb_users/upload/2017/12/201712041512380518540298.jpg"/></a>
                        </div>
                        <p><a href="http://www.5bite.com/post/2367.html" target="_blank"
                              title="Cream（CRM）">Cream（CRM）</a></p>
                    </li>
                    <li>
                        <div class="site-logo">
                            <a href="http://www.5bite.com/post/2348.html" target="_blank" title="沃尔顿币（WTC）"><img
                                    alt="沃尔顿币（WTC）"
                                    src="http://www.5bite.com/zb_users/upload/2017/12/201712031512298709154010.jpg"/></a>
                        </div>
                        <p><a href="http://www.5bite.com/post/2348.html" target="_blank" title="沃尔顿币（WTC）">沃尔顿币（WTC）</a>
                        </p>
                    </li>
                    <li>
                        <div class="site-logo">
                            <a href="http://www.5bite.com/post/2336.html" target="_blank" title="玩客币"><img alt="玩客币"
                                                                                                           src="http://www.5bite.com/zb_users/upload/2017/12/201712021512213421890239.jpg"/></a>
                        </div>
                        <p><a href="http://www.5bite.com/post/2336.html" target="_blank" title="玩客币">玩客币</a></p>
                    </li>
                    <li>
                        <div class="site-logo">
                            <a href="http://www.5bite.com/post/2315.html" target="_blank" title="比特币钻石(BCD)"><img
                                    alt="比特币钻石(BCD)"
                                    src="http://www.5bite.com/zb_users/upload/2017/12/201712011512126364193610.jpg"/></a>
                        </div>
                        <p><a href="http://www.5bite.com/post/2315.html" target="_blank"
                              title="比特币钻石(BCD)">比特币钻石(BCD)</a></p>
                    </li>
                    <li>
                        <div class="site-logo">
                            <a href="http://www.5bite.com/post/2314.html" target="_blank" title="比特币黄金(BTG)"><img
                                    alt="比特币黄金(BTG)"
                                    src="http://www.5bite.com/zb_users/upload/2017/12/201712011512125131631481.jpg"/></a>
                        </div>
                        <p><a href="http://www.5bite.com/post/2314.html" target="_blank"
                              title="比特币黄金(BTG)">比特币黄金(BTG)</a></p>
                    </li>
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
