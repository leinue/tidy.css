<?php require('header.php'); ?>
	<section class="main-section">
		<div class="tidy-g">
			<div class="marketing noborder ">
				<div class="tidy-u-1">
					<div class="content">
						<div class="header">
							<h1>javascript</h1>
							<p>这里提供您可能会在开发过程中使用到的javascript函数和jQuery提示</p>
						</div>
						<div style="padding:1em;" class="tidy-u-1">
							<div class="list-group">
								<a href="" class="btn">
									<h3>setHeaderIcon()</h3>
									<p>setHeaderIcon=function(url,normalSize=20,hoverSize=30);</p>
									<p>设置左上角图标,normalsize为默认高度/宽度(正方形)</p>
									<p>hoversize为鼠标悬浮后的高度/宽度(正方形)</p>
								</a>
							</div>
						</div>
						<div style="padding:1em;" class="tidy-u-1">
							<div class="list-group">
								<a href="" class="btn">
									<h3>setFooterPosition()</h3>
									<p>setHeaderIcon=setFooterPosition(prevHeight);</p>
									<p>您在开发过程中如果使用ajax技术可能会遇到底部footer漂浮的现象</p>
									<p>这个时候setFooterPosition()函数是您的好帮手</p>
									<p>参数prevHeight为footer上一个元素的高度(Tidy中footer的display方式为relative)</p>
									<p>如:setFooterPostion($('.marketing').height())</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		document.title="javascript - Tidy";
	</script>
<?php require('footer.php'); ?>