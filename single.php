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
		<a href="http://www.88bnb.com" title="WebSite主题演示"><img src="wp-content/themes/ajdec/images/logo.png" alt="WebSite主题演示"></a>
		</div>
		<div class="search-form">
			<form method="get" id="searchform" action="http://demo.leonhere.com/wpwebsite/">
				<input type="text" class="s" name="s" placeholder="输入工具名称，如域名" value="">
				<input type="submit" class="submit" name="submit" value="查找">
			</form>
		</div>
				<div class="notice">
			<ul class="newsList" style="top: 44px;">
								<li><a href="http://demo.leonhere.com/wpwebsite/news/24.html" target="_blank" title="做营销还是要回归人性 再好的广告也得直击内心">做营销还是要回归人性 再好的广告也得直击内心</a></li>
								<li><a href="http://demo.leonhere.com/wpwebsite/news/23.html" target="_blank" title="百度最新推出的“蓝天算法”内容是什么？">百度最新推出的“蓝天算法”内容是什么？</a></li>
								<li><a href="http://demo.leonhere.com/wpwebsite/news/21.html" target="_blank" title="360搜索上线“悟空算法” 助百万站长抗击黑客攻击">360搜索上线“悟空算法” 助百万站长抗击黑客攻击</a></li>
								<li><a href="http://demo.leonhere.com/wpwebsite/news/7.html" target="_blank" title="即日起，阿里云30+产品免费6个月">即日起，阿里云30+产品免费6个月</a></li>
							</ul>
			<ul class="swap" style="top: -132px;">
								<li><a href="http://demo.leonhere.com/wpwebsite/news/24.html" target="_blank" title="做营销还是要回归人性 再好的广告也得直击内心">做营销还是要回归人性 再好的广告也得直击内心</a></li>
								<li><a href="http://demo.leonhere.com/wpwebsite/news/23.html" target="_blank" title="百度最新推出的“蓝天算法”内容是什么？">百度最新推出的“蓝天算法”内容是什么？</a></li>
								<li><a href="http://demo.leonhere.com/wpwebsite/news/21.html" target="_blank" title="360搜索上线“悟空算法” 助百万站长抗击黑客攻击">360搜索上线“悟空算法” 助百万站长抗击黑客攻击</a></li>
								<li><a href="http://demo.leonhere.com/wpwebsite/news/7.html" target="_blank" title="即日起，阿里云30+产品免费6个月">即日起，阿里云30+产品免费6个月</a></li>
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
<?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'menus','container_class'=>'inner menu', 'fallback_cb' => '' ,'walker'=>new aj_menu_walker()) ); ?>	
</nav>
<div class="blank"></div><div class="inner container">	
<main class="main">
		<div class="breadcrumb"><a href="http://demo.leonhere.com/wpwebsite" title="WebSite主题演示">网站首页</a> <i>/</i> <a href="http://demo.leonhere.com/wpwebsite/topics/news">新闻动态</a> <i>/</i> </div>
					
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
<ins class="adsbygoogle" style="display: block; height: 90px;" data-ad-client="ca-pub-9642311778195731" data-ad-slot="6411638153" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:760px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:760px;background-color:transparent;"><iframe width="760" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;width:760px;height:90px;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>				</div>
	<?php while ( have_posts() ) : the_post(); ?>
		
	<?php the_content(); ?>
			<?php endwhile; ?>
	
</div>			
			<section class="news-related">	
				<h3>您可能还会喜欢：</h3>
				<ul>
									<li><a href="http://demo.leonhere.com/wpwebsite/news/23.html" target="_blank" title="百度最新推出的“蓝天算法”内容是什么？">百度最新推出的“蓝天算法”内容是什么？</a></li>
									<li><a href="http://demo.leonhere.com/wpwebsite/news/21.html" target="_blank" title="360搜索上线“悟空算法” 助百万站长抗击黑客攻击">360搜索上线“悟空算法” 助百万站长抗击黑客攻击</a></li>
									<li><a href="http://demo.leonhere.com/wpwebsite/news/7.html" target="_blank" title="即日起，阿里云30+产品免费6个月">即日起，阿里云30+产品免费6个月</a></li>
					
				</ul>
			</section>
						<div class="post-comments">
	<h3>发表评论</h3>
	<div class="comments">
					
		<div id="respond">
						<form id="commentform" name="commentform" action="http://demo.leonhere.com/wpwebsite/wp-comments-post.php" method="post">
								<p>
					<label for="author">昵称：*</label>
					<input type="text" name="author" id="author" class="text" value="" tabindex="1">
				</p>
				<p>
					<label for="email">邮箱：*</label>
					<input type="text" name="email" class="text" id="email" value="" tabindex="2">
				</p>
				<p>
					<label for="url">网址：</label>
					<input type="text" name="url" class="text" value="" tabindex="3">
				</p>
								<p>
					<textarea name="comment" id="comment" tabindex="4"></textarea>
				</p>
				<p>
					<input type="submit" name="submit" class="submit" value="立即发布" tabindex="5">
					<a rel="nofollow" id="cancel-comment-reply-link" href="/wpwebsite/news/24.html#respond" style="display:none;">点击这里取消回复。</a>				</p>
				<input type="hidden" name="comment_post_ID" value="24" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
				<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="d1fa3b6140"></p><p style="display: none;"></p>			<input type="hidden" id="ak_js" name="ak_js" value="1516038272335"></form>			
				
		</div>			
	</div>
</div>
		</article>
					</main>	

<aside class="sidebar">
<section class="widget hot"><h3>最新添加</h3><ul><li><a href="http://demo.leonhere.com/wpwebsite/87.html" title="A5创业网" target="_blank">· A5创业网</a><span><i>(</i><i class="center">19954</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/84.html" title="站长之家" target="_blank">· 站长之家</a><span><i>(</i><i class="center">19146</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/81.html" title="搜外网" target="_blank">· 搜外网</a><span><i>(</i><i class="center">9988</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/79.html" title="我爱水煮鱼" target="_blank">· 我爱水煮鱼</a><span><i>(</i><i class="center">14996</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/77.html" title="异次元软件" target="_blank">· 异次元软件</a><span><i>(</i><i class="center">9947</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/75.html" title="王通博客" target="_blank">· 王通博客</a><span><i>(</i><i class="center">9897</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/73.html" title="Zac博客" target="_blank">· Zac博客</a><span><i>(</i><i class="center">19616</i><i>)</i></span></li></ul></section><section class="widget hot"><h3>热门关注</h3><ul><li><a href="http://demo.leonhere.com/wpwebsite/87.html" title="A5创业网" target="_blank">· A5创业网</a><span><i>(</i><i class="center">19954</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/73.html" title="Zac博客" target="_blank">· Zac博客</a><span><i>(</i><i class="center">19616</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/84.html" title="站长之家" target="_blank">· 站长之家</a><span><i>(</i><i class="center">19146</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/79.html" title="我爱水煮鱼" target="_blank">· 我爱水煮鱼</a><span><i>(</i><i class="center">14996</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/48.html" title="百度指数" target="_blank">· 百度指数</a><span><i>(</i><i class="center">10048</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/18.html" title="老薛主机" target="_blank">· 老薛主机</a><span><i>(</i><i class="center">10046</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/81.html" title="搜外网" target="_blank">· 搜外网</a><span><i>(</i><i class="center">9988</i><i>)</i></span></li></ul></section><section class="widget"><h3>最新资讯</h3><ul><li><a href="http://demo.leonhere.com/wpwebsite/news/24.html" title="做营销还是要回归人性 再好的广告也得直击内心" target="_blank">· 做营销还是要回归人性 再好的广告也得直击内心</a></li><li><a href="http://demo.leonhere.com/wpwebsite/news/23.html" title="百度最新推出的“蓝天算法”内容是什么？" target="_blank">· 百度最新推出的“蓝天算法”内容是什么？</a></li><li><a href="http://demo.leonhere.com/wpwebsite/news/21.html" title="360搜索上线“悟空算法” 助百万站长抗击黑客攻击" target="_blank">· 360搜索上线“悟空算法” 助百万站长抗击黑客攻击</a></li><li><a href="http://demo.leonhere.com/wpwebsite/news/7.html" title="即日起，阿里云30+产品免费6个月" target="_blank">· 即日起，阿里云30+产品免费6个月</a></li></ul></section><section class="widget_text widget"><div class="textwidget custom-html-widget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 自适应广告 -->
<ins class="adsbygoogle" style="display: block; height: 600px;" data-ad-client="ca-pub-9642311778195731" data-ad-slot="6411638153" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:200px;background-color:transparent;"><ins id="aswift_1_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:200px;background-color:transparent;"><iframe width="200" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;width:200px;height:600px;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></section></aside></div>

<?php get_footer(); ?>
