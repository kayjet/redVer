// JavaScript Document
$(document).ready(function (argument) {
	// body...
	var checkboxText = $('.lh10');
	//设置按钮是否点击的flag
	var check = false;
	//设置再次发送时间
	var timeout = 15;
	//设置点击次数，次数越多，时间越久
	var count = 1;
	//获取警告div对象
	var warnObj = $('.waring');
	//将他们全部隐藏
	warnObj.css('display', 'none');
	//钩子
	var yesIcon = $('.yes_icon');
	//隐藏钩子
	yesIcon.css('display', 'none');
	//获取所有的checkbox
	var checkbox = document.getElementsByClassName('input_checkbox');
	//验证用户名是否正确
	isUsernameRight('Tel', warnObj.eq(0), yesIcon.eq(0));
	//验证密码
	isPasswordRight('reg_password', warnObj.eq(2), yesIcon.eq(2));
	//判断2次输入密码是否一致
	isPasswordSame('#reg_pass_confirm', '#reg_password', warnObj.eq(3), yesIcon.eq(3));
	//注册btn的点击事件
	$('#reg_btn').click(function () {

		for (var i = 0; i < checkbox.length; i++) {
			if (checkbox[i].checked) {
				warnObj.eq(4).css('display', 'none');
				break;
			}
			warnObj.eq(4).css('display', 'block').text('请至少选择一项兴趣');

		}
	});
	//验证码点击事件
	$('#yzm_btn').click(function () {
		if (!check) {
			$(this).attr("disabled", true);
			check = true;
			count = count + 1;
			var timer = setInterval(function () {
				if (timeout > 0) {
					timeout = timeout - 1;
					$('#yzm_btn').css('background', 'gray');
					$('#yzm_btn ').attr('value', timeout + '秒后重发'); //span
				} else {
					timeout = 15 * count;
					$('#yzm_btn ').attr('value', '获取验证码'); //span
					$('#yzm_btn').css('background', '#3498DB');
					check = false;
					$('#yzm_btn ').attr("disabled", false);
					clearInterval(timer);
				}
			}, 1000);
		}
	});
	//checkboxText点击事件
	checkboxText.each(function  (i,e) {
		// 设置小手样式
		$(this).css('cursor','pointer');
		//选中事件
		$(this).click(function  (argument) {
			// body...
			if (checkbox[i].checked) {
				checkbox[i].checked =false;
			}else{
				checkbox[i].checked=true;
			}
		})
	})
})