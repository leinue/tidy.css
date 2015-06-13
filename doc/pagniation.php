<div class="header">
	 <h1>分页系统</h1>
</div>
<div class="content">
	<h3 class="marketing-header">基础介绍</h3>
	<p>数据量大的时候会进行分页,因此这也是必须的功能.Tidy中分页控件使用.pagination类.目前仅有一种,下个版本会加入其它样式.目前在使用上也有些bug,下个版本会做出修正.</p>
	<h3 class="marketing-header">使用分页控件</h3>
	<p>使用.pagination类即可</p>
	<div style="width: 100%;" class="pagination">
		<ul whole-page="233">
			<li></li>
			<li><a class="btn" id="page_home" href="javascript:void(0)">首</a></li>
			<li><a class="btn pagination-active" id="page_1" href="javascript:void(0)">1</a></li>
			<li><a class="btn" id="page_2" href="javascript:void(0)">2</a></li>
			<li><a class="btn" id="page_3" href="javascript:void(0)">3</a></li>
			<li><a class="btn" id="page_4" href="javascript:void(0)">4</a></li>
			<li><a class="btn" id="page_5" href="javascript:void(0)">5</a></li>
			<li><a class="btn" id="page_6" href="javascript:void(0)">6</a></li>
			<li><a class="btn" id="page_7" href="javascript:void(0)">7</a></li>
			<li><a class="btn" id="page_next" href="javascript:void(0)">下</a></li>
			<li><a class="btn" id="page_last" href="javascript:void(0)">末</a></li>
			<li><input class="the_input small" id="page_page" type="number"></li>
			<li><a class="btn" id="page_submit" href="javascript:void(0)">确定</a></li>
		</ul>
	</div>
	<pre class="code code-wrap code-wrap-full"><code>&lt;div style="width: 100%;" class="pagination"&gt;
	&lt;ul whole-page="233"&gt;
		&lt;li&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_home" href="javascript:void(0)"&gt;首&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn pagination-active" id="page_1" href="javascript:void(0)"&gt;1&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_2" href="javascript:void(0)"&gt;2&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_3" href="javascript:void(0)"&gt;3&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_4" href="javascript:void(0)"&gt;4&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_5" href="javascript:void(0)"&gt;5&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_6" href="javascript:void(0)"&gt;6&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_7" href="javascript:void(0)"&gt;7&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_next" href="javascript:void(0)"&gt;下&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_last" href="javascript:void(0)"&gt;末&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;input class="the_input small" id="page_page" type="number"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a class="btn" id="page_submit" href="javascript:void(0)"&gt;确定&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code></col></pre>
	<p>ul中各参数的作用如下:</p>
	<p>ul中的whole-page指全部的页数,js需要用这个判断</p>
	<p>每个li的id必须为page_页数,且页数必须和真实页数相同</p>
	<p>每个ul只能有7页</p>
	<p>其它各项不允许改动,允许改动的只有中间的数字部分</p>
	</div>
</div>

<script>
</script>