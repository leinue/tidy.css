<div class="header">
	 <h1>定制系统</h1>
</div>
<div class="content">
	<h3 class="marketing-header">基础介绍</h3>
	<p>因为CSS的可覆盖性,使得定制操作十分容易.您只需要像平常覆盖CSS样式那样覆盖Tidy中的就可以了.</p>
	<h3 class="marketing-header">简单的一个实例</h3>
	<p>我们给我们的列表加上一个标题,原列表如下</p>
	<div class="list-group">
		<a href="" id="doc-basic" class="btn">基础</a>
		<a href="" id="doc-grid" class="btn">栅格</a>
		<a href="" id="doc-form" class="btn">表单</a>
		<a href="" id="doc-input" class="btn">输入</a>
		<a href="" id="doc-table" class="btn">表格</a>
		<a href="" id="doc-menu" class="btn">菜单</a>
		<a href="" id="doc-pagniation" class="btn">分页</a>
		<a href="" id="doc-img" class="btn">图片</a>
		<a href="" id="doc-list" class="btn">列表</a>
		<a href="" id="doc-custom" class="btn">定制</a>
		<a href="" class="btn">其它</a>
	</div>
	<pre class="code code-wrap code-wrap-full"><code>&lt;div class="list-group"&gt;
	&lt;a href="" id="doc-basic" class="btn"&gt;基础&lt;/a&gt;
	&lt;a href="" id="doc-grid" class="btn"&gt;栅格&lt;/a&gt;
	&lt;a href="" id="doc-form" class="btn"&gt;表单&lt;/a&gt;
	&lt;a href="" id="doc-input" class="btn"&gt;输入&lt;/a&gt;
	&lt;a href="" id="doc-table" class="btn"&gt;表格&lt;/a&gt;
	&lt;a href="" id="doc-menu" class="btn"&gt;菜单&lt;/a&gt;
	&lt;a href="" id="doc-pagniation" class="btn"&gt;分页&lt;/a&gt;
	&lt;a href="" id="doc-img" class="btn"&gt;图片&lt;/a&gt;
	&lt;a href="" id="doc-list" class="btn"&gt;列表&lt;/a&gt;
	&lt;a href="" id="doc-custom" class="btn"&gt;定制&lt;/a&gt;
	&lt;a href="" class="btn"&gt;其它&lt;/a&gt;
&lt;/div&gt;</code></pre>
	<p>标题我们不妨用div来标识,于是我们使用如下的css代码</p>
	<style type="text/css">
		.list-group div{
			text-align: center;
			width: 100%;
			border-top: 1px solid rgb(205,205,205);
			border-left: 1px solid rgb(205,205,205);
			border-right: 1px solid rgb(205,205,205);
			padding: 0.3em;
			cursor: pointer;
			background: rgb(238,238,238);
		}
	</style>
	<pre class="code code-wrap code-wrap-full"><code>.list-group div{
		text-align: center;
		width: 100%;
		border-top: 1px solid rgb(205,205,205);
		border-left: 1px solid rgb(205,205,205);
		border-right: 1px solid rgb(205,205,205);
		padding: 0.3em;
		cursor: pointer;
		background: rgb(238,238,238);
}</code></pre>
	<p>然后一个定制就完成了:)</p>
	<div class="list-group">
		<div class="list-group-title">列表标题</div>
		<a href="" id="doc-basic" class="btn">基础</a>
		<a href="" id="doc-grid" class="btn">栅格</a>
		<a href="" id="doc-form" class="btn">表单</a>
		<a href="" id="doc-input" class="btn">输入</a>
		<a href="" id="doc-table" class="btn">表格</a>
		<a href="" id="doc-menu" class="btn">菜单</a>
		<a href="" id="doc-pagniation" class="btn">分页</a>
		<a href="" id="doc-img" class="btn">图片</a>
		<a href="" id="doc-list" class="btn">列表</a>
		<a href="" id="doc-custom" class="btn">定制</a>
		<a href="" class="btn">其它</a>
	</div>
	<p>请继续您的旅程吧:)</p>
</div>