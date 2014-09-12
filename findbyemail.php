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
            <div class="tabs498 fl  tabs_off lh200" style="margin-right:4px;"  id="to_phone" >手机找回</div>
            <div class="tabs498 fl titleColor">邮箱找回</div>
        </div>
       <!--  <div class="wd680 m0a tc rel">
          <div  class="common_btn_on wd100 ht32  ftwhite fl ml180 email_btn_off " ><a href="findbyphone.php">手机找回</a></div>
          <div class="common_btn_on wd100 ht32  ftwhite fl ml40 email_btn_on " >邮箱找回</div>
        </div> -->
        <div class="clear-fix"></div>
        <!--邮箱div-->
        <div class="wd680 m0a tc rel">  	
            <span>邮箱：&nbsp;&nbsp;&nbsp;</span>
            <input class="email_input ht32 wd250 mt30" id="find_by_email"><!--<==============在此获得输入内容-->
            <div class="yes_icon"></div>
            <div class="waring wd325 m0a">1111</div>
        </div>
         <!--邮箱end-->
         <!--动态验证码 div-->
        <div class="wd680 m0a tc rel">
        	<span>验证码：</span>
        	&nbsp;&nbsp;<input class=" yzm_input ht32 mt30" id="user_input_yzm"><!--<==============在此获得输入内容-->
            <input type="button" class="tabs_off wd100 ht32 " style="background:#efefef;"id="get_yzm" value="获取验证码"><!--按钮-->
            <div class="yes_icon"></div>
            <div class="waring wd325 m0a">1111</div>
        </div>
         <!--动态验证码 div-->
         <!--2个按钮-->
        <div class="wd680 m0a tc">
        	 <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite" value="确认">
              <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite " value="取消">&ensp;
        </div>
        <!--2个按钮 end-->
    </div>
</div>
</form><!--表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里表单在这里 end-->
    <div class="clear-fix"></div>
<script type="text/javascript">
    $(document).ready(function  (argument) {
        var pic_yzm = $('#get_yzm');
        pic_yzm.attr('value',getRandomCode()).click(function  (ev) {
            $(this).attr('value',getRandomCode());
        });
		var waring = $('.waring');
		waring.css('display','none');
		var yes_icon = $('.yes_icon');
		yes_icon.eq(0).css('right',195);
		isEmailRight('find_by_email',waring.eq(0),yes_icon.eq(0));
		isYzmRight('user_input_yzm','get_yzm',waring.eq(1),yes_icon.eq(1));


        $('#to_phone').click(function  (ev) {
            // body...
            window.location.href="findbyphone.php";
        });
    })
</script>
<?php
    require('footer.php');
?>