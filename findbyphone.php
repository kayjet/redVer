<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/base.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">   
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="css/findpassword-page.css"/>
    <script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="./js/common.js"></script>
</head>
<body>
<form action="regcheck.ghtml" method="post" target="_self"><!--表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里-->
<div class="rel m0a wd1000 mt22">
	<!--logo跳转 start-->
    <div class="login_title_bg " onClick="window.open('/index.ghtml','_self')"></div>
    <!--logo跳转 end-->
    <div class="rel wd1000 m0a mt22 border">
    	<!-- <div class="titleColor">找回密码</div> -->
        <div>
            <div class="tabs498 fl titleColor " style="margin-right:4px;" >手机找回</div>
            <div class="tabs498 fl tabs_off lh200" id="to_email">邮箱找回</div>
        </div>
        <!-- <div class="wd680 m0a tc"> -->
     	  <!--以下是切换2页的超链接-->
          <!-- <div  class="common_btn_on wd100 ht32  ftwhite fl ml180 email_btn_on" >手机找回</div> -->
          <!-- <div type="button" class="common_btn_on wd100 ht32  ftwhite fl ml40 email_btn_off" ><a href="findbyemail.php">邮箱找回</a></div> -->
          <!--以上是切换2页的超链接 end-->
        <!-- </div> -->
        <div class="clear-fix"></div>
        <!--手机号div-->
        <div class="wd680 m0a tc rel">
            <span>手机号：</span>
            <input class="login_input ht32 mt30" id="find_by_phone"><!--<==============在此获得输入内容-->
            <!--以下这个div是没有用的，只是用来对齐而已-->
                <input type="button" class="common_btn_on wd100 " style="opacity:0;">
            <!--以上这个div是没有用的，只是用来对齐而已 end-->
            <div class="yes_icon"></div>
            <div class="waring wd325 m0a ">1111</div>    
        </div>
        <!--手机号div end-->
        <!--短信验证码-->
        <div class="wd680 m0a tc rel">
        	<span>验证码：</span>
        	<input class=" yzm_input ht32 mt30" ><!--<==============在此获得输入内容-->
            <input type="button" class="common_btn_on wd100 ht32 ftwhite "  id="sj_yzm" value="获取验证码"><!--按钮-->
            <div class="yes_icon"></div>
            <div class="waring  wd325 m0a">1111</div>   
        </div>
        <!--短信验证码 end-->
        <!--2个按钮-->
        <div class="wd680 m0a tc">
        	 <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite" value="确认">
              <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite " value="取消">&ensp;
        </div>
        <!--2个按钮 end-->
    </div>
</div>
</form><!--表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里-->
    <div class="clear-fix"></div>
<script type="text/javascript">
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
    })
</script>
<?php
    require('footer.php');
?>