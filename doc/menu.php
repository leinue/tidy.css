<div class="header">
	 <h1>菜单系统</h1>
</div>
<div class="content">
	<h3 class="marketing-header">基础介绍</h3>
	<p>菜单使用类.tidy-menu标识,此外,我们还提供了fixed类用来置顶,alpha类用来表示透明(默认0.9).目前Tidy只支持到二级菜单</p>
	<h3 class="marketing-header">使用菜单</h3>
	<p>菜单使用.tidy-menu类,html代码使用ul</p>
	<h3 class="marketing-subheader">基础菜单</h3>
	<p>基础菜单包括了基本的导航功能</p>
	<div style="position:relative!important;" class="tidy-menu">
		<ul>
			<li class="header-icon">ICON</li>
			<li><a href="index.php">首页</a></li>
			<li><a href="document.php">文档</a></li>
			<li><a href="javascript.php">javascipt</a></li>
		</ul>
	</div>
	<pre class="code code-wrap code-wrap-full"><code>&lt;div class="tidy-menu"&gt;
	&lt;ul&gt;
		&lt;li class="header-icon"&gt;ICON&lt;/li&gt;
		&lt;li&gt;&lt;a href="index.php"&gt;首页&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="document.php"&gt;文档&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="javascript.php"&gt;javascipt&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code></pre>
	<h3 class="marketing-subheader">置顶菜单</h3>
	<p>要使用置顶菜单,只需要在.tidy-menu类后加fixed即可</p>
	<pre class="code code-wrap code-wrap-full"><code>&lt;div class="tidy-menu fixed"&gt;&lt;/div&gt;</code></pre>
	<h3 class="marketing-subheader">透明菜单</h3>
	<p>要使用透明菜单,只需要在.tidy-menu类后加alpha即可</p>
	<div class="tidy-menu alpha">
		<ul>
			<li class="header-icon">ICON</li>
			<li><a href="index.php">首页</a></li>
			<li><a href="document.php">文档</a></li>
			<li><a href="javascript.php">javascipt</a></li>
		</ul>
	</div>
	<pre class="code code-wrap code-wrap-full"><code>&lt;div class="tidy-menu alpha"&gt;
	&lt;ul&gt;
		&lt;li class="header-icon"&gt;ICON&lt;/li&gt;
		&lt;li&gt;&lt;a href="index.php"&gt;首页&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="document.php"&gt;文档&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="javascript.php"&gt;javascipt&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code></pre>
	<h3 class="marketing-subheader">二级菜单</h3>
	<p>Tidy目前的多级菜单只支持到二级菜单,且还存在bug,这些问题会在下个版本中修复,下面这个就显示不出来,因为目前的bug是每个页面只能有一个menu</p>
	<p>二级菜单的使用方法是在li中继续添加&lt;ul&gt;&lt;li&gt;&lt;/li&gt;&lt;/ul&gt;标签</p>
	<p>二级菜单的类名为.tidy-menu-second-level,且每个ul必须有一个id</p>
	<p>方法有些繁琐,下个版本会解决:)</p>
	<div class="tidy-menu alpha">
		<ul>
			<li class="header-icon">ICON</li>
			<li>
				<a href="index.php">二级示例</a>
				<ul class="tidy-menu-second-level" id="test">
					<li>二级示例</li>
					<li>二级示例</li>
					<li>二级示例</li>
				</ul>
			</li>
			<li><a href="document.php">文档</a></li>
			<li><a href="javascript.php">javascipt</a></li>
		</ul>
	</div>
	<h3 class="marketing-subheader">菜单图标</h3>
	<p>我们建议使用Tidy中的函数来设置菜单图标</p>
	<p>如果使用此方法来设置Tidy菜单中的图标,则需要将ul li的first-child类名设置为.header-icon</p>
	<p><em>菜单图标的位置只能为第一个</em></p>
	<pre class="code code-wrap code-wrap-full"><code>&lt;li class="header-icon"&gt;&lt;/li&gt;</code></pre>
	<p>您不需在li中写任何内容,直接调用setHeaderIcon函数即可</p>
	<div style="padding-top:1em;" class="tidy-u-1">
		<div class="list-group">
			<a href="javascript:void(0)" class="btn">
				<h3>setHeaderIcon()</h3>
				<p>setHeaderIcon=function(url,normalSize=20,hoverSize=30);</p>
				<p>设置左上角图标,normalsize为默认高度/宽度(正方形),hoversize为鼠标悬浮后的高度/宽度(正方形)</p>
			</a>
		</div>
	</div>
</div>