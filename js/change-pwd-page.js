$(document).ready(function  (argument) {
			// body...
			var yes_icon = $('.yes_icon');
			var waring = $('.waring');
			yes_icon.css('display','none');
			waring.css('display','none');
			isPasswordRight('new_pwd',waring.eq(1),yes_icon.eq(1));
			isPasswordSame('#new_pwd_confirm','#new_pwd',waring.eq(2),yes_icon.eq(2));
			$("#sj_yzm").on('keyup',function () {
				$(this).val($(this).val().replace(/\D/g, ''));
				var a = $(this).val();
				if(a.length>6){
					$(this).val('');
				}
				if(false){
						yes_icon.eq(3).css('display','block');
					}else{
						$(this).css('border','1px red solid');
					}
			})
			
		})