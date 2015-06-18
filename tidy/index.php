<!doctype html>
<html>

<head>
	<meta charset="utf8">
	<title>Tidy - 响应式CSS3框架</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
	<link rel="stylesheet" type="text/css" href="tidy.css">
</head>

<body>
	<div class="tidy-menu alpha">
		<ul>
			<li class="header-icon"></li>
			<li><a href="index.php">首页</a></li>
			<!-- <li>下载</li> -->
			<li>
				<a href="document.php">示例页面1</a>
				<ul id="page-doc" class="tidy-menu-second-level">
					<li><a id="basic" href="javascript:void(0)">基础</a></li>
					<li><a id="grid" href="javascript:void(0)">栅格</a></li>
					<li><a id="form" href="javascript:void(0)">表单</a></li>
					<li><a id="input" href="javascript:void(0)">输入</a></li>
					<li><a id="table" href="javascript:void(0)">表格</a></li>
					<li><a id="menu" href="javascript:void(0)">菜单</a></li>
					<li><a id="pagination" href="javascript:void(0)">分页</a></li>
					<li><a id="img" href="javascript:void(0)">图片</a></li>
					<li><a id="list" href="javascript:void(0)">列表</a></li>
					<li><a id="custom" href="javascript:void(0)">定制</a></li>
				</ul>
			</li>
			<li><a href="javascript.php">示例页面2</a></li>
			<li><a href="view.php">示例页面3</a></li>
			<li><a href="bug.php">示例页面4</a></li>
			<li><a href="about.php">示例页面5</a></li>
			<li><a href="http://ivydom.com">示例页面6</a></li>
		</ul>
	</div>

	<script>
		function setDocIndex(){
			$('.doc-capation .list-group a:nth-child('+localStorage.currentDocIndex+')').addClass('list-group-a-active');
		}
	</script>

	<style type="text/css">
		.content{
			margin: 0 auto;
			width: 100%;
			text-align: center;
			padding-top: 200px;
		}
	</style>

	<section class="main-section">
		<div class="tidy-g">
			<div class="tidy-u-1">
				<div class="content">
					<h1>Hello,Tidy :)</h1>					
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="footer">
			<p>Designed By <a href="http://ivydom.com">xieyang</a>,Build with <a href="http://tidy.ivydom.com">Tidy</a> version 0.1 on 2015-06-18</p>
			<p>© 2015 <a href="http://ivydom.com">ivydom</a> All rights reserved.</p>
		</div>
	</footer>
	<script type="text/javascript" src="tidy.js"></script>
	<script type="text/javascript">
		setHeaderIcon('images/logo.png',30,40);
		
		$('.tidy-menu ul li #page-doc li').click(function(){
			var thisTitle=$(this).find('a').attr('id');
			localStorage.currentActiveMenu=3;
			window.location.href="document.php#"+thisTitle+"#"+parseInt($(this).index()+1);
			return false;
		});

	</script>
</body>
</html>