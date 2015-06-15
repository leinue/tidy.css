	alert('dsdsd');

	/*分割按钮开始*/
	$('.btn-split li').click(function(){
		var _this=$(this);
		var isAllowMultiselect=_this.parent().hasClass('allow-multiselect');
		var _thisBtn=_this.find('a.btn');
		var _thisBtnIndex=_this.index(0);
		var _thisActive=_this.parent().find('li a.btn.btn-split-active');
		var _thisActiveIndex=_thisActive.parent().index(0);
		if(!isAllowMultiselect){
			_thisActive.removeClass('btn-split-active');
		}else{
			if(_this.find('a').hasClass('btn-split-active')){
				_this.find('a').removeClass('btn-split-active');
			}
		}
		if(_thisBtnIndex!=_thisActiveIndex || _thisActiveIndex==-1){
			_thisBtn.addClass('btn-split-active');
		}
		return false;
	});

	// $('.tidy-menu ul li:nth-child(1)').hover(function(){
	// 	$(this).css({
	// 		'background':'url('+url+') no-repeat center center',
	// 		'background-size':hoverSize+'px'
	// 	});
	// },function(){
	// 	$(this).css({
	// 		'background':'url('+url+') no-repeat center center',
	// 		'background-size':normalSize+'px'
	// 	});
	// });

	/*设置图标*/
	// function setHeaderIcon(url,normalSize=20,hoverSize=30){
	// 	$('.tidy-menu ul li.header-icon').css({
	// 		'background':'url('+url+') no-repeat center center',
	// 		'background-size':normalSize+'px'
	// 	});
	// }

	// /*二级菜单开始*/
	// $('.tidy-menu ul li').hover(function(){
	// 	var this_=$(this);
	// 	var thisNext=this_.find('.tidy-menu-second-level');
	// 	if(thisNext.length!=0){
	// 		var thisID=thisNext.attr('id');
	// 		var thisType=thisID.split('-');
	// 		thisType=thisType[1];
	// 		var which2Display='page-'+thisType;
	// 		var _thisSecondLevel=$('.tidy-menu ul li #'+which2Display);
	// 		_thisSecondLevel.fadeIn(10);
	// 		_thisSecondLevel.css({
	// 			'width':this_.width()+20,
	// 			'opacity':'1'
	// 		});
	// 		this_.find('li').css({
	// 			'width':this_.width+20+'px;',
	// 			'opacity':'1'
	// 		});
	// 	}
	// },function(){
	// 	if($(this).find('.tidy-menu-second-level').length!=0){
	// 		var thisS=$(this).find('.tidy-menu-second-level');
	// 		thisS.fadeOut(50);	
	// 	}
	// });


	// /*分页开始*/
	// function removeActive(obj){
	// 	$(obj).parent().find('.pagination-active').removeClass('pagination-active');
	// }

	// function getTotalPages(obj){
	// 	return $(obj).parent().attr('whole-page');
	// }

	// function getCurrentPage(obj){
	// 	var _thisActiveID=$(obj).parent().find('.pagination-active').attr('id');
	// 	_thisActiveID=_thisActiveID.split('_');
	// 	return _thisActiveID[1];
	// }

	// function getFirstpage(obj){
	// 	return $(obj).parent().find('li:nth-child(3)').html();
	// }

	// function getLastPage(obj){
	// 	return parseInt($(obj).parent().find('li').length)-6;
	// }

	// function getNextPage(cp){
	// 	return parseInt(cp)+1;
	// }

	// function setThisPageActive(obj,page){
	// 	removeActive(obj);
	// 	$(obj).parent().find('#page_'+page).addClass('pagination-active');
	// }

	// function reDrawPage(obj,s,l){
	// 	l=(l==null)?false:l;
	// 	if(!l){
	// 		var start=s;
	// 	}else{
	// 		var start=parseInt(s)-parseInt(getLastPage(obj))+1;
	// 	}
	// 	$(obj).parent().find('li a').each(function(){
	// 		if(!isNaN($(this).html())){
	// 			$(this).html(start);
	// 			$(this).attr('id','page_'+start);
	// 			start=parseInt(start)+1;
	// 		}
	// 	});
	// }

	// function towhichPage(obj,lastPage,nextPage,isLast){
	// 	isLast=(isLast==null)?false:isLast;
	// 	var _thisParent=$(obj).parent();
	// 	if(!isLast){
	// 		var mid=Math.ceil(Math.ceil(getLastPage(obj))/2);
	// 		var midPos=mid+2;
	// 		removeActive(obj);
	// 		var index=nextPage-mid+1;
	// 	}else{
	// 		midPos=getLastPage(obj)+2;
	// 		var index=lastPage;
	// 		nextPage=index;
	// 		removeActive(obj);
	// 	}
	// 	reDrawPage(obj,index,isLast);
	// 	_thisParent.find('li:nth-child('+midPos+')').html('<a class="btn pagination-active" id="page_'+nextPage+'" href="javascript:void(0)">'+nextPage+'</a>');
	// }

	// $('.pagination ul li').click(function(){
	// 	if($(this).find('input').length!=0){return;}
	// 	var tagAInThis=$(this).find('a');
	// 	var htmlInA=tagAInThis.attr('id');
	// 	htmlInA=htmlInA.split('_');
	// 	htmlInA=htmlInA[1];
	// 	if(!isNaN(htmlInA) && htmlInA>=1 && $(this).find('a').hasClass('.pagination-active')!=true){
	// 		removeActive(this);
	// 		tagAInThis.addClass('pagination-active');
	// 		if($(this).index()==8){
	// 			var lastPage=getLastPage(this);
	// 			var currentPage=getCurrentPage(this);
	// 			towhichPage(this,lastPage,currentPage);
	// 		}else{
	// 			if($(this).index()==2){
	// 				var start=$(this).find('a').html();
	// 				reDrawPage(this,start-3);
	// 				setThisPageActive(this,start);
	// 			}
	// 		}
	// 	}else{
	// 		switch(htmlInA){
	// 			case 'home':
	// 				if($(this).parent().find('#page_1').length==0){
	// 					var start=1;
	// 					reDrawPage(this,start);
	// 					setThisPageActive(this,1);
	// 				}else{
	// 					setThisPageActive(this,1);
	// 				}
	// 				break;
	// 			case 'next':
	// 				var _this=$(this);
	// 				var _thisParent=_this.parent();
	// 				var firstPage=getFirstpage(this);
	// 				var lastPage=getLastPage(this);
	// 				var currentPage=getCurrentPage(this);
	// 				var nextPage=getNextPage(currentPage);
	// 				if(nextPage>=lastPage && nextPage<=getTotalPages(this)){
	// 					towhichPage(this,lastPage,nextPage);
	// 				}else{
	// 					setThisPageActive(this,nextPage);
	// 				}
	// 				break;
	// 			case 'last':
	// 				var total=getTotalPages(this);
	// 				var lastPage=getLastPage(this);
	// 				var nextPage=getNextPage(total);
	// 				if(total>=lastPage && total<=getTotalPages(this)){
	// 					towhichPage(this,total,nextPage,true);
	// 				}else{
	// 					setThisPageActive(this,total);
	// 				}
	// 				break;
	// 			case 'submit':
	// 				var pageObtained=$(this).parent().find('input').val();
	// 				if(pageObtained==''){
	// 					alert('请输入页数');
	// 				}else{
	// 					towhichPage(this,pageObtained,getNextPage(pageObtained)-1);
	// 				}
	// 				break;
	// 		}
	// 	}
	// 	// $('html,body').animate({scrollTop:$('#top_pixiv_img').height()-$('.cg_title').height()}, 'slow');
	// });

	$(window).scroll(handleTopMenuEvent);

	function handleTopMenuEvent(){
		if($('.tidy-menu').hasClass('fixed')){
			if($(document).scrollTop()>$('.tidy-menu').height()){
				$('.tidy-menu').css('position','fixed');
			}else{
				$('.tidy-menu').css('position','relative');
			}
			// $('.main-section').css('margin-top',$('.tidy-menu').height());
		}
	}

	$('.main-section').css('margin-top',-$('.tidy-menu').height()/3+'px');

	if(localStorage.currentActiveMenu!='undefined'){
		var activeIndex=localStorage.currentActiveMenu;
		$('.tidy-menu-active').removeClass('tidy-menu-active');
		$('.tidy-menu ul li:nth-child('+activeIndex+')').addClass('tidy-menu-active');
	}

	$('.tidy-menu ul li').click(function(){
		if($(this).index()!==0){
			$('.tidy-menu-active').removeClass('tidy-menu-active');
			$(this).addClass('tidy-menu-active');
			var thisURL=$(this).find('a').attr('href');
			localStorage.currentActiveMenu=$(this).index()+1;
			self.location=thisURL;
		}
	});

	$('.tidy-menu ul li ul .tidy-menu-active').attr('class','');

	function setFooterPosition(prevHeight){
		if($('.main-section').height()<$(window).height()-$('footer').height()){
			$('.main-section').css('height',prevHeight);
		}else{
			$('.main-section').css('height',$('.main-section').height()+100);
		}
	}

	setFooterPosition($(window).height()-$('footer').height());

	var isMenuSlided=false;

	if($(document).width()<568){
		$('.tidy-menu').css('margin-top',-$('.tidy-menu ul').height());
		isMenuSlided=false;
		$('.tidy-menu').append('<div class="tidy-menu-mini"><div style="width:100%;height:100%;padding:20px"></div></div>');
		$('.tidy-menu-mini div').css('background','transparent url("images/logo.png") no-repeat scroll center center / 30px auto');
	}

	$('.tidy-menu-mini').click(function(){
		$('.tidy-menu').css('margin-top','0px');
		$('.tidy-menu-second-level').hide();
		$('.tidy-menu-mini').hide();
		isMenuSlided=true;
	});

	$('.tidy-menu ul li:nth-child(1)').click(function(){
		if(isMenuSlided && $(document).width()<568){
			$('.tidy-menu').css('margin-top',-$('.tidy-menu ul').height());
			$('.tidy-menu-mini').show();
			isMenuSlided=false;
			return false;
		}else{
			location.reload();
		}
	});

