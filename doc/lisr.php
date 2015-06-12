<div class="header">
	 <h1>基础入门</h1>
</div>
<div class="content">
	<h3 class="marketing-header">安装Tidy</h3>
	<p>安装Tidy只需要引入CSS文件</p>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">link</spans></span> <span class="support attribute">rel</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">stylesheet</span><span class="string quote">"</span> <span class="support attribute">href</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">http://ivydom.com/tidy/0.1.0/tidy-min.css</span><span class="string quote">"</span><span class="support tag close">&gt;</span></code></pre>
	<h3 class="marketing-header">简单的响应式布局</h3>
	<p>在Tidy中使用响应式只需调用.tidy-g类作为外围div,然后使用.tidy-u-*-*即可,比如</p>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">.tidy-g</span><span class="string quote">"</span><span class="support tag close">&gt;</span><br>&nbsp;&nbsp;<span class="support tag">&lt;</span>div <span class="support attribute">class</span>="<span class="string value">.tidy-u-1"</span><span class="support tag">&gt;</span>&lt;/div&gt;<br>&lt;/div&gt;</code></pre>
</div>