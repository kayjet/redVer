  $(document).ready(function  (argument) {
        var check = false;
    //设置再次发送时间
    var timeout = 15;
    //设置点击次数，次数越多，时间越久
    var count = 1;
        var get_yzm = $('#sj_yzm');
           //验证码点击事件
            get_yzm.click(function () {
                if (!check) {
                    $(this).attr("disabled", true);
                    check = true;
                    count = count + 1;
                    var timer = setInterval(function () {
                        if (timeout > 0) {
                            timeout = timeout - 1;
                            get_yzm.css('background', 'gray');
                            get_yzm.attr('value', timeout + '秒后重发'); //span
                        } else {
                            timeout = 15 * count;
                            get_yzm.attr('value', '获取验证码'); //span
                            get_yzm.css('background', '#3498DB');
                            check = false;
                            get_yzm.attr("disabled", false);
                            clearInterval(timer);
                        }
                    }, 1000);
                }
            });
        var waring = $('.waring');
        var yesIcon = $('.yes_icon');
        waring.css('display','none');
        isUsernameRight('find_by_phone', waring.eq(0), yesIcon.eq(0));
         $('#to_email').click(function  (ev) {
            // body...
            window.location.href="findbyemail.php";
        });
        
        	$("#input_yzm").on('keyup',function () {
        		alert(1)
				$(this).val($(this).val().replace(/\D/g, ''));
				var a = $(this).val();
				if(a.length>6){
					$(this).val('');
				}
			})
    })