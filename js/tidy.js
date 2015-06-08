	$(document).ready(function(){
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

	});

	var setHeaderIcon=function(url,normalSize=20,hoverSize=30){
		//https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png
		$('.tidy-menu ul li.header-icon').css({
			'background':'url('+url+') no-repeat center center',
			'background-size':normalSize+'px'
		});

		$('.tidy-menu ul li.header-icon').hover(function(){
			$(this).css({
				'background':'url('+url+') no-repeat center center',
				'background-size':hoverSize+'px'
			});
		},function(){
			$(this).css({
				'background':'url('+url+') no-repeat center center',
				'background-size':normalSize+'px'
			});
		});
	};

	$('.tidy-menu ul li').hover(function(){
		var this_=$(this);
		var thisNext=this_.find('.tidy-menu-second-level');
		if(thisNext.length!=0){
			var thisID=thisNext.attr('id');
			var thisType=thisID.split('-')[1];
			var which2Display='page-'+thisType;
			var _thisSecondLevel=$('.tidy-menu ul li #'+which2Display);
			_thisSecondLevel.fadeIn(100);
			_thisSecondLevel.css({
				'width':this_.width()+20
			});
					
			this_.find('li').css({
				'width':this_.width+20+'px;'
			});
		}
	},function(){
		if($(this).find('.tidy-menu-second-level').length!=0){
			var thisS=$(this).find('.tidy-menu-second-level');
			thisS.fadeOut(50);	
		}
	});

