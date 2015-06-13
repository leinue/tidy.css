<div class="header">
	 <h1>输入系统</h1>
</div>
<div class="content">
	<h3 class="marketing-header">基础介绍</h3>
	<p>输入系统包括:按钮,输入框,选择框,单选框,列表选择框等</p>
	<h3 class="marketing-header">按钮</h3>
	<p>Tidy提供了5种颜色,3种风格,5种形式的按钮,足够日常使用</p>
	<h3 class="marketing-subheader">普通按钮</h3>
	<p>使用.btn类</p>
	<a href="" class="btn">普通按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;<span class="support tag-name">a</span> <span class="support attribute">href</span>="" <span class="support attribute">class</span>="<span class="support value">btn</span>"&gt;普通按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">成功按钮</h3>
	<p>使用.btn .btn-success类</p>
	<a href="" class="btn btn-success">成功按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;<span class="support tag-name">a</span> <span class="support attribute">href</span>="" <span class="support attribute">class</span>="<span class="support value">btn btn-sccess</span>"&gt;成功按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">失败按钮</h3>
	<p>使用.btn .btn-error类</p>
	<a href="" class="btn btn-error">失败按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;<span class="support tag-name">a</span> <span class="support attribute">href</span>="" <span class="support attribute">class</span>="<span class="support value">btn btn-error</span>"&gt;失败按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">警告按钮</h3>
	<p>使用.btn .btn-warning</p>
	<a href="" class="btn btn-warning">警告按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;<span class="support tag-name">a</span> <span class="support attribute">href</span>="" <span class="support attribute">class</span>="<span class="support value">btn btn-waring</span>"&gt;警告按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">轻色按钮</h3>
	<p>使用.btn .btn-light</p>
	<a href="" class="btn btn-light">轻色按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;<span class="support tag-name">a</span> <span class="support attribute">href</span>="" <span class="support attribute">class</span>="<span class="support value">btn btn-light</span>"&gt;轻色按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">按钮大小</h3>
	<p>Tidy有5种按钮大小呈现方式,下面的表格是相关类的说明</p>
	<table class="tidy-table" style="margin-top:10px;margin-bottom:10px">
		<tr>
			<th>类名</th>
			<th>含义</th>
		</tr>
		<tr>
			<td>btn-xs</td>
			<td>极小</td>
		</tr>
		<tr>
			<td>btn-sm</td>
			<td>稍小</td>
		</tr>
		<tr>
			<td>btn-lg</td>
			<td>稍大</td>
		</tr>
		<tr>
			<td>btn-xl</td>
			<td>极大</td>
		</tr>
	</table>
	<a href="" class="btn btn-success btn-xs">成功极小按钮</a>
	<a href="" class="btn btn-error btn-sm">失败小按钮</a>
	<a href="" class="btn">普通正常按钮</a>
	<a href="" class="btn btn-warning btn-lg">警告大按钮</a>
	<a href="" class="btn btn-light btn-xl">轻色极大按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;a href="" class="btn btn-success btn-xs"&gt;成功极小按钮&lt;/a&gt;
&lt;a href="" class="btn btn-error btn-sm"&gt;失败小按钮&lt;/a&gt;
&lt;a href="" class="btn"&gt;普通正常按钮&lt;/a&gt;
&lt;a href="" class="btn btn-warning btn-lg"&gt;警告大按钮&lt;/a&gt;
&lt;a href="" class="btn btn-light btn-xl"&gt;轻色极大按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">透明按钮</h3>
	<p>透明按钮指鼠标悬浮时背景透明,使用.btn-alpha类</p>
	<a class="btn btn-alpha">透明按钮</a>
	<pre class="code code-wrap code-wrap-full"><code>&lt;a class="btn btn-alpha"&gt;透明按钮&lt;/a&gt;</code></pre>
	<h3 class="marketing-subheader">使用不同标签的按钮</h3>
	<p>Tidy中的按钮不仅可以使用a标签,input,button标签皆可使用</p>
	<a href="" class="btn">a标签按钮</a>
	<button class="btn">button标签按钮</button>
	<input class="btn" type="button" value="input标签按钮">
	<pre class="code code-wrap code-wrap-full"><code>&lt;a href="" class="btn"&gt;a标签按钮&lt;/a&gt;
&lt;button class="btn"&gt;button标签按钮&lt;/button&gt;
&lt;input class="btn" type="button" value="input标签按钮"&gt;</code></pre>
	<h3 class="marketing-subheader">分割按钮</h3>
	<div style="margin-top:10px;" class="tidy-g">
		<div class="tidy-u-1-3">
			<ul class="btn-split">
				<li><a href="" class="btn btn-split">A</a></li>
				<li><a href="" class="btn btn-split btn-split-active">B</a></li>
				<li><a href="" class="btn btn-split">C</a></li>
			</ul>	
		</div>
		<div class="tidy-u-1-3">
			<ul class="btn-split allow-multiselect">
				<li><a href="" class="btn btn-split btn-split-active">A</a></li>
				<li><a href="" class="btn btn-split">B</a></li>
			</ul>
		</div>
	</div>
	<pre class="code code-wrap code-wrap-full"><code>&lt;div style="margin-top:10px;" class="tidy-g"&gt;
	&lt;div class="tidy-u-1-3"&gt;
		&lt;ul class="btn-split"&gt;
			&lt;li&gt;&lt;a href="" class="btn btn-split"&gt;A&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="" class="btn btn-split btn-split-active"&gt;B&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="" class="btn btn-split"&gt;C&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="tidy-u-1-3"&gt;
		&lt;ul class="btn-split allow-multiselect"&gt;
			&lt;li&gt;&lt;a href="" class="btn btn-split btn-split-active"&gt;A&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href="" class="btn btn-split"&gt;B&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	<h3 class="marketing-header">输入框</h3>
	<p>除了普通输入框之外,我们还提供了栅格输入框</p>
	<h3 class="marketing-subheader">基本输入框</h3>
	<p>基本输入框的使用只要使用正常input标签就行了</p>
	<input type="text" placeholder="基本输入框">
	<textarea placeholder="基本多行输入框"></textarea>
	<pre class="code code-wrap code-wrap-full"><code>&lt;input type="text" placeholder="基本输入框"&gt;
&lt;textarea placeholder="基本多行输入框"&gt;&lt;/textarea&gt;</code></pre>
	<h3 class="marketing-subheader">栅格输入框</h3>
	<p>栅格输入框系统在开发中,会在下一版本放出,用法和div栅格系统是一样的</p>
	<h3 class="marketing-header">选择框</h3>
	<input type="checkbox">checkbox没有做定制
	<pre class="code code-wrap cpde-wrap-full"><code>&lt;input type="checkbox"&gt;checkbox没有做定制</code></pre>
	<h3 class="marketing-header">单选框</h3>
	<input type="radio">radio没有做定制
	<pre class="code code-wrap cpde-wrap-full"><code>&lt;input type="radio"&gt;radio没有做定制</code></pre>
	<h3 class="marketing-header">列表选择框</h3>
	<p>列表选择框配合了CSS3的动画效果</p>
	<select>
        <option>江苏</option>
        <option>浙江</option>
        <option>上海</option>
    </select>
    <pre class="code code-wrap cpde-wrap-full"><code>&lt;select&gt;
	&lt;option&gt;江苏&lt;/option&gt;
	&lt;option&gt;浙江&lt;/option&gt;
	&lt;option&gt;上海&lt;/option&gt;
&lt;/select&gt;</code></pre>
</div>