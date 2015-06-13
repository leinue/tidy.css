<div class="header">
	 <h1>栅格布局</h1>
</div>
<div class="content">
	<h3 class="marketing-header">栅格布局介绍</h3>
	<p>栅格布局是响应式布局的基础,这里会介绍Tidy中栅格布局的基本语法,使用方法,工作原理等</p>
	<h3 class="marketing-subheader">基本语法</h3>
	<p>Tidy中栅格布局使用.tidy-g作为最外围div的类名,栅格名使用.tidy-u-*-*.比如.tidy-u-1代表100%宽度,.tidy-u-1-2代表50%的宽度.以下是可用类名的参考表格</p>
	<table class="tidy-table" style="margin-top:10px;">
		<tr>
			<th>最低</th>
			<th>最高</th>
			<th>补充</th>
		</tr>
		<tr>
			<td>.tidy-u-1</td>
			<td>.tidy-u-1</td>
			<td>100%宽度到100%宽度</td>
		</tr>
		<tr>
			<td>.tidy-u-1-2</td>
			<td>.tidy-u-2-2</td>
			<td>50%宽度到100%宽度</td>
		</tr>
		<tr>
			<td>.tidy-u-1-3</td>
			<td>.tidy-u-3-3</td>
			<td>33%宽度到100%宽度</td>
		</tr>
		<tr>
			<td>.tidy-u-1-8</td>
			<td>.tidy-u-8-8</td>
			<td>12.5%宽度到100%宽度</td>
		</tr>
		<tr>
			<td>.tidy-u-1-12</td>
			<td>.tidy-u-12-12</td>
			<td>1%宽度到100%宽度</td>
		</tr>
	</table>
	<h3 class="marketing-subheader">使用方法</h3>
	<p>假如我需要一个三栏布局,则可以使用如下代码</p>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-g</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-u-1-3</span><span class="string quote">"</span><span class="support tag close">&gt;</span> ... <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-u-1-3</span><span class="string quote">"</span><span class="support tag close">&gt;</span> ... <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-u-1-3</span><span class="string quote">"</span><span class="support tag close">&gt;</span> ... <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span>
<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span></code></pre>
	<p>注意,Tidy中栅格布局默认是没有margin和padding的,如有需要建议在栅格中另加div,把栅格只作为分栏的工具</p>
	<p>一旦您使用Tidy,我们建议您使用em代替px,因为这样对响应式更好</p>
	<pre class="code code-wrap code-wrap-full"><em>1em=16px</em></pre>
	<p>此外,我们还提供了<em>.tidy-visual</em>方法帮助您更好的理解栅格布局,一旦使用它,每个栅格都会产生一条border包裹,以便帮助您更好的看到真实情况</p>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-g</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-u-1-3 tidy-visual</span><span class="string quote">"</span><span class="support tag close">&gt;</span> tidy-u-1-3 tidy-visual <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-u-1-3 tidy-visual</span><span class="string quote">"</span><span class="support tag close">&gt;</span> tidy-u-1-3 tidy-visual <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-u-1-3 tidy-visual</span><span class="string quote">"</span><span class="support tag close">&gt;</span> tidy-u-1-3 tidy-visual <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span>
<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">div</span></span><span class="support tag close">&gt;</span></code></pre>	
	<p>那么您将会看到</p>
	<div class="tidy-g">
	    <div class="tidy-u-1-3 tidy-visual"> tidy-u-1-3 tidy-visual </div>
	    <div class="tidy-u-1-3 tidy-visual"> tidy-u-1-3 tidy-visual </div>
	    <div class="tidy-u-1-3 tidy-visual"> tidy-u-1-3 tidy-visual </div>
	</div>
	<p>当然也可以这样</p>
	<div style="border-top:1px solid rgb(229,229,229);" class="tidy-g white-bg">
		<div class="tidy-u-1 tidy-u-md-1-2 tidy-u-lg-1-4 tidy-visual">
			tidy-u-1 tidy-u-md-1-2 tidy-u-lg-1-4
		</div>
		<div class="tidy-u-1-1 tidy-u-md-1-2 tidy-u-lg-1-4 tidy-visual">
			tidy-u-1-1 tidy-u-md-1-2 tidy-u-lg-1-4
		</div>
		<div class="tidy-u-5-5 tidy-u-md-1-2 tidy-u-lg-1-4 tidy-visual">
			tidy-u-5-5 tidy-u-md-1-2 tidy-u-lg-1-4
		</div>
		<div class="tidy-u-12-12 tidy-u-md-1-2 tidy-u-lg-1-4 tidy-visual">
			tidy-u-12-12 tidy-u-lg-1-4
		</div>
	</div>
	<div class="tidy-g white-bg">
		<div class="tidy-u-1-3 tidy-visual">
			tidy-u-1-3
		</div>
		<div class="tidy-u-1-3 tidy-visual">
			tidy-u-1-3
		</div>
		<div class="tidy-u-1-3 tidy-visual">
			tidy-u-1-3
		</div>
	</div>
	<div class="tidy-g white-bg">
		<div class="tidy-u-1-4 tidy-visual">
			tidy-u-1-3
		</div>
		<div class="tidy-u-3-4 tidy-visual">
			tidy-u-2-3
		</div>
	</div>
	<div class="tidy-g white-bg">
			<div class="tidy-u-4-5 tidy-visual">
				tidy-u-4-5
			</div>
			<div class="tidy-u-1-5 tidy-visual">
				tidy-u-1-5
			</div>
	</div>
	<div style="border-bottom:1px solid rgb(229,229,229)" class="tidy-g white-bg">
		<div class="tidy-u-1-12 tidy-visual">
			tidy-u-1-12
		</div>
		<div class="tidy-u-5-12 tidy-visual">
			tidy-u-5-12
		</div>
		<div class="tidy-u-5-12 tidy-visual">
			tidy-u-5-12
		</div>
		<div class="tidy-u-1-12 tidy-visual">
			tidy-u-1-12
		</div>
	</div>
	<p>祝调试愉快:)</p>
	<h3 class="marketing-subheader">工作原理</h3>
	<p>想快速进入开发的用户可以跳过这里:)</p>
	<p>
		主要技术:
		<ol>
			<li>media查询</li>
			<li>流体布局</li>
		</ol>
	</p>
	<p>
		详细介绍:
		<ol>
			<li>
				media查询
				<p>
					<em>使用 @media 查询，你可以针对不同的媒体类型定义不同的样式。可以针对不同的屏幕尺寸设置不同的样式，特别是如果你需要设置设计响应式的页面，@media 是非常有用的。当你重置浏览器大小的过程中，页面也会根据浏览器的宽度和高度重新渲染页面。</em>
					<p>
						语法:
						<pre class="code code-wrap code-wrap-full">@media mediatype and|not|only (media feature) {<br><em>	CSS-Code;</em><br>}</pre>
					</p>
					我们在Tidy中定义了4种屏幕方案
					<table class="tidy-table" style="margin-top:10px;">
						<tr>
							<th>px</th>
							<th>em</th>
						</tr>
						<tr>
							<td>>=568px</td>
							<td>>=35.5em</td>
						</tr>
						<tr>
							<td>>=768px</td>
							<td>>=46em</td>
						</tr>
						<tr>
							<td>>=1024px</td>
							<td>>=64em</td>
						</tr>
						<tr>
							<td>>=1280px</td>
							<td>>=80em</td>
						</tr>
					</table>
				</p>
			</li>
			<li>
				流体布局
				<p>所谓流体布局就是百分比布局,您只需要记下这一条公式就好</p>
				<pre class="code code-warp code-wrap-full"><em>当前元素百分比=当前元素宽度/高度÷父元素宽度/高度</em></pre>
				比如定义.tidy-u-1-2,我们使用:width=50%;
			</li>
		</ol>
	</p>
	<h3 class="marketing-header">响应式布局示例</h3>
	<p>您可以拖动浏览器窗口进行测试:)</p>
	<ol>
		<li>
			<p>响应式图片</p>
			<div class="tidy-g">
				<div class="tidy-u-1-2">
					<img src="images/re1.JPG" class="tidy-img-responsive">
				</div>
				<div class="tidy-u-1-2">
					<img src="images/re2.JPG" class="tidy-img-responsive">
				</div>
			</div>	
		</li>
		<li>
			<p>响应式文字</p>
			<div class="tidy-g">
				<div class="tidy-u-1-3">
					<div class="marketing noborder">
						<h3>弃妇</h3>
						回车在门前，欲上心更悲。<br>
						路旁见花发，似妾初嫁时。<br>
						养蚕已成茧，织素犹在机。<br>
						新人应笑此，何如画蛾眉！
					</div>
				</div>
				<div class="tidy-u-1-3">
					<div class="marketing noborder">
						<h3>李金发</h3>
						长发披遍我两眼之前，<br>
						遂隔断了一切羞恶之疾视，<br>
						与鲜血之急流，枯骨之沉睡。<br>
						黑夜与蚊虫联步徐来，
					</div>
				</div>
				<div class="tidy-u-1-3">
					<div class="marketing noborder">
						<h3>刘贺</h3>		
						越此短墙之角，<br>
						狂呼在我清白之耳后<br>
						如荒野狂风怒号：<br>
						战栗了无数游牧。<br>
					</div>
				</div>
			</div>
		</li>
	</ol>
</div>