	$(document).ready(function  (argument) {
			   var b= $('.flag').css('height');
					$('#108').css('height',b);
				var h;
				$(".flag img").load(function(){
					/*	当图片加载完成时控制银行卡添加以后div变形的问题。
					这边用2行代码，比多写N多DIV来的简单些。。。至少我是这么想的*/
					   h = $('.flag').css('height');
					$('#108').css('height',h);
				}); 
				/*	当图片加载完成时控制银行卡添加以后div变形的问题。
					这边用2行代码，比多写N多DIV来的简单些。。。至少我是这么想的*/
				//手机验证码输入
				$("#sj_yzm").on('keyup',function (ev) {
		         	$(this).val($(this).val().replace(/\D/g, ''));
		         	var a = $(this).val();
		         	if(a.length>6){
		         		$(this).val('');
		         	}
		         })
				//自动计算利率
				$("#tz_money").on('keyup',function (e) {
					   	$(this).val($(this).val().replace(/\D/g, ''));
					   	var a = $(this).val();
					   	var lx = a*0.08/12*24;
					   	$("#lixi").text(lx);
				})
				//提交按钮事件
				$("#next").click(function (e) {
					var bbb =$("#tz_money").val();
					if(bbb !='' && bbb !=0 && bbb%1000==0  && $(":checkbox")[0].checked){
						/*以下为兼容ie的方法*/
						try{
							$(this).attr('type','submit');
						}catch(e){
								$("#ie_two").click();
						}
					}else{
						alert("请核查填写信息(如投资金额是否为1000的整数倍，验证码是否正确，阅读条款是否勾选)");
						$("#tz_money").focus();
					}
				})
})