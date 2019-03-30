;(function($){
	
	$.fn.anchor = function(speed,fx){
		
		var speed = speed || 500;
		var fx = fx || 'swing';
		
		// 没有选中锚点 整页面的锚点都应用
		if(this.length < 1){
			$('a[href^=#]').anchor(speed);
			return;
		}
		
		this.each(function(){
			
			$(this).click(function(e){
				
				var url = $.trim($(this).attr('href'));
				
				if(url.indexOf('#') == -1) return;
				
				var to = $('a[name='+url.substr(url.indexOf('#')+1)+']');

				if(to.length > 0){
					
					var t = to.offset().top;
					
					$('html,body').stop(true,false).animate({scrollTop:t},speed);
					
					e.preventDefault();
				}
				
				
			});
				
		});
		
	}
	
})(jQuery);