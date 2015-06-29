
<?php require('header.php'); ?>
	<section class="main-section">
		<div class="tidy-u-1">
			<div class="main">
				<div class="hero-title">
					<div class="hero-logo">
						<h1 style="font-size:80%">BUG提交</h1>
					</div>
					<h2 class="hreo-tagline">欢迎您提出在使用过程中发现的BUG:)我们会尽快解决</h2>
					<h4>同时感谢以下贡献者:</h4>
					<a href="http://www.microhu.com/">微狐网</a>
				</div>
			</div>
		</div>

		<!-- 多说评论框 start -->
		<div class="ds-thread" data-thread-key="10086" data-num-items="10" data-excerpt-length="100" data-title="BUG提交" data-url="http://tidy.ivydom.com/bug.php"></div>
		<script type="text/javascript">
			var duoshuoQuery = {short_name:"tidy"};
				(function() {
					var ds = document.createElement('script');
					ds.type = 'text/javascript';ds.async = true;
					ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
					ds.charset = 'UTF-8';
					(document.getElementsByTagName('head')[0] 
					 || document.getElementsByTagName('body')[0]).appendChild(ds);
				})();
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				setFooterPosition($('#ds-thread').height());
			});
		</script>
	</section>
<?php require('footer.php'); ?>
