<div class="header">
	 <h1>表单系统</h1>
</div>
<div class="content">
	<h3 class="marketing-header">基础介绍</h3>
	<p>我们为您提供了三种表单陈列方式:行表单,列表单和集成表单.当然您完全也可以进行定制,这在后续内容中会有说明</p>
	<h3 class="marketing-header">行表单</h3>
	<p>行表单指以行显示的表单,只需要给form标签加上.tidy-form类名即可</p>
	<div class="tidy-u-1">
		<form class="tidy-form">
		    <fieldset>
		        <legend>行表单</legend>
		        <input type="email" placeholder="邮箱">
		        <input type="password" disabled placeholder="密码">
		        <label for="remember">
		            <input id="remember" type="checkbox"> 记住我
		        </label>
		        <button type="submit" class="btn">登录</button>
		    </fieldset>
		</form>
	</div>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">form</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-form</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">fieldset</span></span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">legend</span></span><span class="support tag close">&gt;</span>行表单<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">legend</span></span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">email</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">邮箱</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">password</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">密码</span><span class="string quote">"</span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">label</span></span> <span class="support attribute">for</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">remember</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
            <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">id</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">remember</span><span class="string quote">"</span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">checkbox</span><span class="string quote">"</span><span class="support tag close">&gt;</span> 记住我
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">label</span></span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">button</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">submit</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">btn</span><span class="string quote">"</span><span class="support tag close">&gt;</span>登录<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">button</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">fieldset</span></span><span class="support tag close">&gt;</span>
<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">form</span></span><span class="support tag close">&gt;</span></code></pre>
	<h3 class="marketing-header">列表单</h3>
	<p>列表单指以列显示的表单,使用.tidy-form .tidy-form-stacked</p>
	<div class="tidy-u-1">
		<form class="tidy-form tidy-form-stacked">
			<fieldset>
		        <legend>列表单</legend>

		        <label for="email">邮箱</label>
		        <input id="email" type="email" placeholder="邮箱">

		        <label for="password">密码</label>
		        <input id="password" type="password" placeholder="密码">

		        <label for="state">城市</label>
		        <select id="state">
		            <option>江苏</option>
		            <option>浙江</option>
		            <option>上海</option>
		        </select>

		        <label for="remember" class="tidy-checkbox">
		            <input id="remember" type="checkbox"> 记住我
		        </label>

		        <button type="submit" class="btn">登录</button>
		    </fieldset>
		</form>
	</div>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">form</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-form tidy-form-stacked</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">fieldset</span></span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">legend</span></span><span class="support tag close">&gt;</span>列表表单<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">legend</span></span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">label</span></span> <span class="support attribute">for</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">email</span><span class="string quote">"</span><span class="support tag close">&gt;</span>邮箱<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">label</span></span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">id</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">email</span><span class="string quote">"</span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">email</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">Email</span><span class="string quote">"</span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">label</span></span> <span class="support attribute">for</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">password</span><span class="string quote">"</span><span class="support tag close">&gt;</span>密码<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">label</span></span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">id</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">password</span><span class="string quote">"</span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">password</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">Password</span><span class="string quote">"</span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">label</span></span> <span class="support attribute">for</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">state</span><span class="string quote">"</span><span class="support tag close">&gt;</span>城市<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">label</span></span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">select</span></span> <span class="support attribute">id</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">state</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
            <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">option</span></span><span class="support tag close">&gt;</span>江苏<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">option</span></span><span class="support tag close">&gt;</span>
            <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">option</span></span><span class="support tag close">&gt;</span>浙江<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">option</span></span><span class="support tag close">&gt;</span>
            <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">option</span></span><span class="support tag close">&gt;</span>上海<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">option</span></span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">select</span></span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">label</span></span> <span class="support attribute">for</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">remember</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-checkbox</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
            <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">id</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">remember</span><span class="string quote">"</span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">checkbox</span><span class="string quote">"</span><span class="support tag close">&gt;</span> 记住我
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">label</span></span><span class="support tag close">&gt;</span>

        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">button</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">submit</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">btn</span><span class="string quote">"</span><span class="support tag close">&gt;</span>登录<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">button</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">fieldset</span></span><span class="support tag close">&gt;</span>
<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">form</span></span><span class="support tag close">&gt;</span></code></pre>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">.tidy-g</span><span class="string quote">"</span><span class="support tag close">&gt;</span><br>&nbsp;&nbsp;<span class="support tag">&lt;</span>div <span class="support attribute">class</span>="<span class="string value">.tidy-u-1"</span><span class="support tag">&gt;</span>&lt;/div&gt;<br>&lt;/div&gt;</code></pre>
	<h3 class="marketing-header">集成表单</h3>
	<p>集成表单需要给form添加.tidy-form类,然后给fieldset标签添加.tidy-group类</p>
	<div class="tidy-u-1">
		<form class="tidy-form">
		    <fieldset class="tidy-group">
		        <input type="text" class="tidy-input-1-2" placeholder="用户名">
		        <input type="text" class="tidy-input-1-2" placeholder="密码">
		        <input type="email" class="tidy-input-1-2" placeholder="邮箱">
		    </fieldset>

		    <fieldset class="tidy-group">
		        <input type="text" class="tidy-input-1-2" placeholder="内容">
		        <textarea class="tidy-input-1-2" placeholder="textarea也是可以使用的"></textarea>
		    </fieldset>

		    <button type="submit" class="btn">登录</button>
		</form>
	</div>
	<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">form</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-form</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">fieldset</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-group</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">text</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-input-1-2</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">用户名</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">text</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-input-1-2</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">密码</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">email</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-input-1-2</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">邮箱</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">fieldset</span></span><span class="support tag close">&gt;</span>

    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">fieldset</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-group</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">input</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">text</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-input-1-2</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">内容</span><span class="string quote">"</span><span class="support tag close">&gt;</span>
        <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">textarea</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">tidy-input-1-2</span><span class="string quote">"</span> <span class="support attribute">placeholder</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">textarea也是可以使用的</span><span class="string quote">"</span><span class="support tag close">&gt;</span><span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">textarea</span></span><span class="support tag close">&gt;</span>
    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">fieldset</span></span><span class="support tag close">&gt;</span>

    <span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">button</span></span> <span class="support attribute">type</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">submit</span><span class="string quote">"</span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">btn</span><span class="string quote">"</span><span class="support tag close">&gt;</span>登录<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">button</span></span><span class="support tag close">&gt;</span>
<span class="support tag"><span class="support tag">&lt;</span><span class="support tag special">/</span><span class="support tag-name">form</span></span><span class="support tag close">&gt;</span></code></pre>
</div>