;(function($){

	$.fn.fullSlide = function(config){
		
		if(this.length > 1){
			this.each(function(){
				$(this).fullSlide(config);
			});	
			return ;
		}
		// 参数合并
		var set = $.extend($.fn.fullSlide.defaultConfig,config);
		
		var box = this,
			autoTimer = null,
			sleepTime = null,
			list = this.children(),
			buttonList = null,
			w	=	0,
			h	=	0,
			length = list.length,
			curIndex = set.begin,
			prevIndex = undefined;
		
		// 初始化
		var initialize = function(){
			w	=	list.outerWidth(true);
			h	=	list.outerHeight(true);
			list.css({position:'absolute',zIndex : 0}).eq(curIndex).css({zIndex : 2 , left : 0});
			
			if(!!set.pager && $(set.pager).length > 0){
				buildListButton();	
			}
			
			if(set.auto > 0){
				start();
			}
			// 加载第一张图片
			if(set.attr != 'src'){
				loadPic(curIndex);
			}
			
			if(!!set.response){
				// 响应屏幕变化
				var resTime = null;
					$(window).resize(function(){
						resTime = setTimeout(function(){
							w = list.outerWidth(true);
						},50);
					});
			}
			
			set.initCallback();
			
			if(buttonList){
				buttonList.click(function(){
					var i = buttonList.index(this);
					$(this).addClass(set.active).siblings().removeClass(set.active);	
					skip(curIndex,i);
				});	
			}
			
			box.add(buttonList).hover(function(){
				clearTimeout(sleepTime);
				clearInterval(autoTimer);
			},function(){
				sleepTime = setTimeout(function(){
					start();
				},100);
				
			});
		};
		// 创建列表形式的按钮
		var buildListButton = function(){
			var s = '';
			for(var i = 0; i < length; i++){
				var num = set.number ? i+1 : '';
				if(curIndex == i){
					s += '<a class="'+set.active+'" href="javascript:;">'+num+'</a>';
				}else{
					s += '<a href="javascript:;">'+num+'</a>';
				}	
			}
			buttonList = $(s);
			$(set.pager).append(buttonList);	
		};
		
		// 懒加载图片
		var loadPic = function(i){
			var img = list.eq(i).find('img');
			img.each(function(){
				if(!$(this).attr(set.attr)) return;
				$(this).attr({src : $(this).attr(set.attr)});
				$(this).removeAttr(set.attr);	
			});
		};
		
		var skip = function(c,n){
			if(c === n) return;
			// 懒加载图片
			if(set.attr !== 'src'){
				loadPic(n)
			}
			
			if(n == next() || n > c){
				list.eq(n).css({zIndex : 1,left:w});
				list.eq(c).stop(true,false).animate({left:-w},set.speed,set.fx,function(){
					$(this).css({left : 0, zIndex:0});	
				});
				
			}else{
				list.eq(n).css({zIndex : 1,left:-w});
				list.eq(c).stop(true,false).animate({left:w},set.speed,set.fx,function(){
					$(this).css({left : 0, zIndex:0});	
				});
			}
			list.eq(n).stop(true,false).animate({left:0},set.speed,set.fx);
			prevIndex = c;
			curIndex = n;
			buttonList.eq(curIndex).addClass(set.active).siblings().removeClass(set.active);
		}
		
		var next = function(){
			return curIndex + 1 == length ? 0 : curIndex*1 + 1;	
		}
		
		var prev = function(){
			return curIndex - 1 < 0 ? length - 1 : curIndex*1 - 1;	
		}
		
		var start = function(){
			autoTimer = setInterval(function(){
				skip(curIndex,next());	
			},set.auto);
		}
		
		initialize();
		
	}
	$.fn.fullSlide.defaultConfig = {

			auto : 4000, // 自动播放时间间隔(0为不自动播放)

			speed : 800, // 每次动画执行时间

			effect : "left",	// 动画效果  left,top,fade 
			
			fx : 'swing',

			attr : "src",	// 存储图片的路劲 懒加载优化

			pager : '',		// 生成列表按钮

			left : '',		//左按钮

			right : '',		//右按钮

			before : $.noop, // 动画执行前回调

			after : $.noop, //动画执行后回调
			
			initCallback : $.noop, // 初始化完成回调 

			response : 'false', // 是否响应式(适应屏幕)
			
			active	:	'cur',	// 激活状态的className
			
			number	:	false,	// 是否显示列表按钮的编号
			
			begin	:	'0'		// 从第几张开始
	}

})(jQuery);