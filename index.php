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
			<section class="box">
			<h3>品牌推荐</h3>		
				<ul>

				<?php while (have_posts()) : the_post(); ?>
			<li>
				<div class="site-logo">
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
<?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail', array('alt' => get_the_title()));
} else { ?>
<img class="home-thumb" src="<?php echo catch_image() ?>" alt="<?php the_title(); ?>" />
<?php } ?></a>
                                 
</div>
                                       <p class="site-name">                                                         <a href="<?php the_permalink(); ?>" target="_blank"><?php echo cut_str($post->post_title,50); ?></a>
                                                                 </p>
                                        <p class="site-intro"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50,"..."); ?></p>

			</li>  
					<?php endwhile; ?>		
		</ul>	
		</section>
				<div class="box widget-ad">
			<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 自适应广告 -->
<ins class="adsbygoogle" style="display: block; height: 90px;" data-ad-client="ca-pub-9642311778195731" data-ad-slot="6411638153" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:800px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:800px;background-color:transparent;"><iframe width="800" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;width:800px;height:90px;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>		</div>
					<section class="box">
			<h3>主机域名</h3>
			<span class="more"><a href="http://demo.leonhere.com/wpwebsite/host" title="主机域名">更多 <i>+</i></a></span>
						<ul>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/18.html" target="_blank" title="老薛主机">	<img alt="老薛主机" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/7f362456dffb818fe485.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/18.html" target="_blank">老薛主机</a>
											</p>
					<p class="site-intro">便宜的国外空间、香港主机服务器提供商</p>
				</li>
								<li>
									<div class="site-logo">
												<a rel="nofollow" href="http://demo.leonhere.com/wpwebsite/go/15" target="_blank">	<img alt="西部数码" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/3fa9f4096ce0f9304d09.jpg">
</a>
												
												<i>荐</i>
											</div>
									<p class="site-name">
												<a rel="nofollow" href="http://demo.leonhere.com/wpwebsite/go/15" target="_blank">西部数码</a>
											</p>
					<p class="site-intro">国内十强主机服务器提供商</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/89.html" target="_blank" title="阿里云">	<img alt="阿里云" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/c6be3cc80ca920a1e8c3.jpg">
</a>
												
												<i>荐</i>
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/89.html" target="_blank">阿里云</a>
											</p>
					<p class="site-intro">阿里巴巴旗下品牌，国内最大网站服务器提供商</p>
				</li>
							</ul>
					</section>
				<section class="box">
			<h3>名人名博</h3>
			<span class="more"><a href="http://demo.leonhere.com/wpwebsite/blog" title="名人名博">更多 <i>+</i></a></span>
						<ul>
								<li>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/79.html" target="_blank">我爱水煮鱼</a>
											</p>
					<p class="site-intro">应该是目前国内关于 WordPress 最专业的博客了</p>
				</li>
								<li>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/77.html" target="_blank">异次元软件</a>
											</p>
					<p class="site-intro">推荐精选实用的软件，有大量绿色、实用软件及资源下载</p>
				</li>
								<li>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/75.html" target="_blank">王通博客</a>
											</p>
					<p class="site-intro">中国网络营销知名人士，出版国内首本搜索引擎营销书籍</p>
				</li>
								<li>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/73.html" target="_blank">Zac博客</a>
											</p>
					<p class="site-intro">《SEO每日一帖》作者、中国网络营销知名人士</p>
				</li>
								<li>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/71.html" target="_blank">卢松松博客</a>
											</p>
					<p class="site-intro">知名草根站长，IT/SEO博主，互联网观察员</p>
				</li>
								<li>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/69.html" target="_blank">月光博客</a>
											</p>
					<p class="site-intro">一个专注于互联网和搜索引擎的知名IT科技博客</p>
				</li>
							</ul>
					</section>
				<section class="box">
			<h3>站长工具</h3>
			<span class="more"><a href="http://demo.leonhere.com/wpwebsite/tool" title="站长工具">更多 <i>+</i></a></span>
						<ul>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/48.html" target="_blank" title="百度指数">	<img alt="百度指数" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/3321467b32d6fac3c42a.jpg">
</a>
												
												<i>荐</i>
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/48.html" target="_blank">百度指数</a>
											</p>
					<p class="site-intro">可以研究关键词搜索趋势，选择网站关键词必备</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/45.html" target="_blank" title="JiaThis">	<img alt="JiaThis" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/3624ad4a8d1cc348c92a.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/45.html" target="_blank">JiaThis</a>
											</p>
					<p class="site-intro">社会化分享按钮及移动端分享代码提供商</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/42.html" target="_blank" title="词库网">	<img alt="词库网" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/7c0375d361a1e19c639e.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/42.html" target="_blank">词库网</a>
											</p>
					<p class="site-intro">词库网专业提供各类关键词查询服务，网站SEO优化必备</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/39.html" target="_blank" title="友盟+">	<img alt="友盟+" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/420d7d213161d7041c3a.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/39.html" target="_blank">友盟+</a>
											</p>
					<p class="site-intro">著名网站流量统计，前身是cnzz</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/36.html" target="_blank" title="爱站网">	<img alt="爱站网" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/809c23c725f9f1e92ead.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/36.html" target="_blank">爱站网</a>
											</p>
					<p class="site-intro">著名中文站点综合查询工具，查询结果精确</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/33.html" target="_blank" title="站长之家">	<img alt="站长之家" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/7fe59479d0dc47a7e5aa.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/33.html" target="_blank">站长之家</a>
											</p>
					<p class="site-intro">著名站长资讯网站站长之家推出的站长工具</p>
				</li>
							</ul>
					</section>
				<section class="box">
			<h3>站长资讯</h3>
			<span class="more"><a href="http://demo.leonhere.com/wpwebsite/info" title="站长资讯">更多 <i>+</i></a></span>
						<ul>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/87.html" target="_blank" title="A5创业网">	<img alt="A5创业网" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/8cb0163e94c4df226293.jpg">
</a>
												
												<i>荐</i>
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/87.html" target="_blank">A5创业网</a>
											</p>
					<p class="site-intro">互联网创业者必看的网站，关注站长、电商、科技</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/84.html" target="_blank" title="站长之家">	<img alt="站长之家" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/8583f0c84e59eff2f847.jpg">
</a>
												
												<i>荐</i>
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/84.html" target="_blank">站长之家</a>
											</p>
					<p class="site-intro">国内知名中文网站站长资讯社区网站！</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/81.html" target="_blank" title="搜外网">	<img alt="搜外网" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/6a5834e32479e3241201.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/81.html" target="_blank">搜外网</a>
											</p>
					<p class="site-intro">SEO十万个为什么，SEO培训入门教程</p>
				</li>
							</ul>
					</section>
				<section class="box">
			<h3>网络素材</h3>
			<span class="more"><a href="http://demo.leonhere.com/wpwebsite/source" title="网络素材">更多 <i>+</i></a></span>
						<ul>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/66.html" target="_blank" title="懒人之家">	<img alt="懒人之家" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/3e6d8f3043e064a95da4.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/66.html" target="_blank">懒人之家</a>
											</p>
					<p class="site-intro">可能是JS网页特效代码收集最全的懒站！</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/63.html" target="_blank" title="酷站代码">	<img alt="酷站代码" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/aa76fcc1cac3ee96e61c.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/63.html" target="_blank">酷站代码</a>
											</p>
					<p class="site-intro">提供精选网页设计制作教程与网站素材模板</p>
				</li>
								<li>
									<div class="site-logo">
												<a href="http://demo.leonhere.com/wpwebsite/60.html" target="_blank" title="16素材网">	<img alt="16素材网" src="http://demo.leonhere.com/wpwebsite/wp-content/uploads/sites/3/2016/12/a99b88b622744aa7a3f5.jpg">
</a>
												
											</div>
									<p class="site-name">
												<a href="http://demo.leonhere.com/wpwebsite/60.html" target="_blank">16素材网</a>
											</p>
					<p class="site-intro">海量免费网页素材，集中国素材网站之经典</p>
				</li>
							</ul>
					</section>
			</main>
	<aside class="sidebar">
<section class="widget hot"><h3>最新添加</h3><ul><li><a href="http://demo.leonhere.com/wpwebsite/87.html" title="A5创业网" target="_blank">· A5创业网</a><span><i>(</i><i class="center">19954</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/84.html" title="站长之家" target="_blank">· 站长之家</a><span><i>(</i><i class="center">19146</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/81.html" title="搜外网" target="_blank">· 搜外网</a><span><i>(</i><i class="center">9988</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/79.html" title="我爱水煮鱼" target="_blank">· 我爱水煮鱼</a><span><i>(</i><i class="center">14996</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/77.html" title="异次元软件" target="_blank">· 异次元软件</a><span><i>(</i><i class="center">9947</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/75.html" title="王通博客" target="_blank">· 王通博客</a><span><i>(</i><i class="center">9897</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/73.html" title="Zac博客" target="_blank">· Zac博客</a><span><i>(</i><i class="center">19616</i><i>)</i></span></li></ul></section><section class="widget hot"><h3>热门关注</h3><ul><li><a href="http://demo.leonhere.com/wpwebsite/87.html" title="A5创业网" target="_blank">· A5创业网</a><span><i>(</i><i class="center">19954</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/73.html" title="Zac博客" target="_blank">· Zac博客</a><span><i>(</i><i class="center">19616</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/84.html" title="站长之家" target="_blank">· 站长之家</a><span><i>(</i><i class="center">19146</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/79.html" title="我爱水煮鱼" target="_blank">· 我爱水煮鱼</a><span><i>(</i><i class="center">14996</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/48.html" title="百度指数" target="_blank">· 百度指数</a><span><i>(</i><i class="center">10048</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/18.html" title="老薛主机" target="_blank">· 老薛主机</a><span><i>(</i><i class="center">10046</i><i>)</i></span></li><li><a href="http://demo.leonhere.com/wpwebsite/81.html" title="搜外网" target="_blank">· 搜外网</a><span><i>(</i><i class="center">9988</i><i>)</i></span></li></ul></section><section class="widget"><h3>最新资讯</h3><ul><li><a href="http://demo.leonhere.com/wpwebsite/news/24.html" title="做营销还是要回归人性 再好的广告也得直击内心" target="_blank">· 做营销还是要回归人性 再好的广告也得直击内心</a></li><li><a href="http://demo.leonhere.com/wpwebsite/news/23.html" title="百度最新推出的“蓝天算法”内容是什么？" target="_blank">· 百度最新推出的“蓝天算法”内容是什么？</a></li><li><a href="http://demo.leonhere.com/wpwebsite/news/21.html" title="360搜索上线“悟空算法” 助百万站长抗击黑客攻击" target="_blank">· 360搜索上线“悟空算法” 助百万站长抗击黑客攻击</a></li><li><a href="http://demo.leonhere.com/wpwebsite/news/7.html" title="即日起，阿里云30+产品免费6个月" target="_blank">· 即日起，阿里云30+产品免费6个月</a></li></ul></section><section class="widget_text widget"><div class="textwidget custom-html-widget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 自适应广告 -->
<ins class="adsbygoogle" style="display: block; height: 600px;" data-ad-client="ca-pub-9642311778195731" data-ad-slot="6411638153" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:200px;background-color:transparent;"><ins id="aswift_1_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:200px;background-color:transparent;"><iframe width="200" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;width:200px;height:600px;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></section></aside></div>

<?php get_footer(); ?>
