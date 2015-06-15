<!doctype html>
<html>

<head>
	<meta charset="utf8">
	<title>Tidy - 响应式CSS3框架</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
	<link rel="stylesheet" type="text/css" href="css/tidy.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="tidy-menu fixed alpha">
		<ul>
			<li class="header-icon"></li>
			<li><a href="index.php">首页</a></li>
			<!-- <li>下载</li> -->
			<li>
				<a href="document.php">文档</a>
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
			<li><a href="javascript.php">javascipt</a></li>
			<li><a href="view.php">演示</a></li>
			<li><a href="about.php">关于</a></li>
			<li><a href="http://ivydom.com">联系</a></li>
		</ul>
	</div>

	<script>
		function setDocIndex(){
			$('.doc-capation .list-group a:nth-child('+localStorage.currentDocIndex+')').addClass('list-group-a-active');
		}
	</script>