 $(document).ready(function (argument) {
   //获取屏幕高度详情见common.js中该方法
   var height = getClientHeight();
   var width = getClientWidth();
   var next_btn = $('#next_btn');
   var bh = $('body,html');
   //初始化第一个div的高度
   $('.fgray').eq(0).css({
     'height': height - 270
   });
    var marginLeft = (width-60)/2;
   setTimeout(function (e) {
   	    next_btn.css({'opacity':'1','filter':'alpha(opacity=0)','margin-left':marginLeft});
   },500);
   //初始化除第一屏以外的div高度
   for (var i = 1; i < 12; i++) {
     $('.fgray').eq(i).css({
       'height': height
     });
   };
   var gray_block = $('.gray_block');
	gray_block.eq(0).addClass('red_block');
   //隐藏和显示next按钮
   $(window).on('scroll', function (e) {
     var sh = $(document).scrollTop();
     if (sh > height * 7 - 180) {
       next_btn.css('display', 'none');
     } else {
       next_btn.css('display', 'block');
     }
	 var sh = $(document).scrollTop();
     if (sh < height - 180 || sh == 0) {
      	gray_block.removeClass('red_block');
		gray_block.eq(0).addClass('red_block');
     } else if (sh > height - 180 && sh < height * 2 - 180) {
     	 gray_block.removeClass('red_block');
		gray_block.eq(1).addClass('red_block');
     } else if (sh > height * 2 - 180 && sh < height * 3 - 180) {
       gray_block.removeClass('red_block');
		gray_block.eq(2).addClass('red_block');
     } else if (sh > height * 3 - 180 && sh < height * 4 - 180) {
      	gray_block.removeClass('red_block');
		gray_block.eq(3).addClass('red_block');
     } else if (sh > height * 4 - 180 && sh < height * 5 - 180) {
     	 gray_block.removeClass('red_block');
		gray_block.eq(4).addClass('red_block');
     } else if (sh > height * 5 - 180 && sh < height * 6 - 180) {
     	gray_block.removeClass('red_block');
		gray_block.eq(5).addClass('red_block');
     } else if (sh > height * 6 - 180 && sh < height * 7 - 180) {
      	gray_block.removeClass('red_block');
		gray_block.eq(6).addClass('red_block');
     }else if (sh > height * 7 - 180 ) {
      	gray_block.removeClass('red_block');
		gray_block.eq(7).addClass('red_block');
     }
   })
   gray_block.each(function(index, element) {
        $(this).click(function(){
			//gray_block.removeClass('red_block');
			//gray_block.eq(index).addClass('red_block');
			TweenLite.to(bh, 1, {
				 scrollTop: height*index
			 })
		});
    });

   //next按钮click行为控制
   next_btn.click(function (e) {
     var sh = $(document).scrollTop();
     if (sh < height - 180 || sh == 0) {
       TweenLite.to(bh, 1, {
         scrollTop: height
       });
     } else if (sh > height - 180 && sh < height * 2 - 180) {
       TweenLite.to(bh, 1, {
         scrollTop: height * 2
       });
      
     } else if (sh > height * 2 - 180 && sh < height * 3 - 180) {
       TweenLite.to(bh, 1, {
         scrollTop: height * 3
       });
     } else if (sh > height * 3 - 180 && sh < height * 4 - 180) {
       TweenLite.to(bh, 1, {
         scrollTop: height * 4
       });
     } else if (sh > height * 4 - 180 && sh < height * 5 - 180) {
       TweenLite.to(bh, 1, {
         scrollTop: height * 5
       });
     } else if (sh > height * 5 - 180 && sh < height * 6 - 180) {
       TweenLite.to(bh, 1, {
         scrollTop: height * 6
       })
	     
     } else if (sh > height * 6 - 180 && sh < height * 7 - 180) {
       TweenLite.to(bh, 1, {
         scrollTop: height * 7
       });
          $(this).css({'bottom':'-100px'});
	        setTimeout(function(){
	       		next_btn.css('bottom','50px');
	       },800);
     }
   });
   $('.footer_color').css('margin-top',0);
	$("#action_bar").css('top',height/2)
 })