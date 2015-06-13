	<footer>
		<div class="footer">
			<p>Designed By <a href="http://ivydom.com">xieyang</a>,Build with <a href="http://tidy.ivydom.com">Tidy</a> version 0.1 on 2015-06-18</p>
			<p>© 2015 <a href="http://ivydom.com">ivydom</a> All rights reserved.</p>
		</div>
	</footer>
	<script type="text/javascript" src="js/tidy.js"></script>
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