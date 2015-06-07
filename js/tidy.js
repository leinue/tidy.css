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
