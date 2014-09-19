	$(document).ready(function  (argument) {
			//设置进度条宽度 @width 是控制进度条的走向 @eq(0)是表示第一个进度条 第二个进度条可以用 eq(1)
			$('.process_bar_inner').eq(0).css('width','100%');
			//设置进度条中间的字 @left决定的是箭头的位置，有1%的偏差; @text()是传值，表示百分比
			$('.percent').css({'left':'99%','color':'#4475f6','text-align':'center','font-size':'12px'}).text('100%');
			//获取yes_flag对象
			var yes_flag =$('.yes_flag');
			//将所有的yes_flag隐藏
			yes_flag.css('display','none');
			//获取三角图标对象
			var sj = $('.sj');
			//获取子列表的标题
			var list_title =$('.list_title');
			//获取列表内容1和2对象
			var item1 = $('#collapseOne');
			var item2 = $('#collapseTwo')
			//new一个数组
			var arr = new Array();
			arr.push(item1,item2);
			list_title.each(function  (i,e) {
				// body...
				$(this).click(function  (ev) {
					// body...
					if(arr[i].css('display')!='none'){
						sj.eq(i).css('background','url("./skin/sanjiao_r.png") 5px no-repeat');
					}else{
						sj.eq(i).css('background','url("./skin/sanjiao.png") 5px no-repeat');
					}
				})
			});
			$("#tz").click(function () {
	        	$("#modal").css("display","block");
	        	$("#modal-white").load("./invest.php",{"money":0});
			})
			 //关闭事件
        $("#modal-close-btn").click(function (ev) {
        	$("#modal").css('display','none');
        })
		})