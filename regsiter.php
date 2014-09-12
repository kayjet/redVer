<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="./css/regsiter-page.css">
    <script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="./js/common.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/base.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <style type="text/css">
    </style>
</head>
<body background="./skin/1234_01_01.png">
<form action="regcheck.ghtml" method="post" target="_self">
<div class="rel m0a wd1000 mt22">
	<!--logo跳转 start-->
    <div class="login_title_bg" onClick="window.open('/index.ghtml','_self')"></div>
    <!--logo跳转 end-->
    <div class="rel m0a wd1000 mt10">
        <div class="titleColor" style=" box-shadow:5px 5px 5px #c0c0c0">注册</div>
        <div class="wd1000 " style="padding-bottom:30px; box-shadow:5px 5px 5px #c0c0c0; background:#FFF; padding-top:22px;">
        <div class="reg_item_container">
        	<!--输入信息正确以后弹出来的钩 start-->
            <div class="yes_icon"></div>
            <!--输入信息正确以后弹出来的钩 end-->
            <span>手机号：</span>
            <!--手机号的input框 start-->
            <input type="text" id="Tel" name="Tel" class="login_input wd100_ ht32 " placeholder="请输入手机号">
            <!--手机号的input框 end-->
            <!--警告框 start 这里就是显示提示信息的，这个111是没用的测试信息-->
            <div class="waring">1111</div>
            <!--警告框 end-->
            <!--经理您定义的 start-->
            <input type="hidden" id="UserID" name="UserID" value="20140904100700304">
            <input type="hidden" id="Stat" name="Stat" value="正常">
            <input type="hidden" id="ModDate" name="ModDate" value="2014-9-4 10:07:00">
            <!--经理您定义的 end-->
        </div>
        <div class="reg_item_container mt30">
        	<!--输入信息正确以后弹出来的钩 start-->
            <div class="yes_icon" style="right:155px;"></div>
            <!--输入信息正确以后弹出来的钩 end-->
            <span>验证码：</span>
            <!--验证码的input框 start-->
            <input placeholder="验证码"class="yzm_input wd50_ ht32 mr22">
            <!--验证码的input框 end-->
            <!--获取验证码的button start-->
            <input type="button" id="yzm_btn"  value="获取验证码" class="common_btn_on ftwhite ht32 wd40_"/>
            <!--获取验证码的button start-->
            <div class="waring">1111</div>
        </div>
        <div class="reg_item_container mt30">
            <span>密码：</span>
            <div class="small_icon2"></div>
            <div class="yes_icon"></div>
            <!--输入密码框-->
            <input type="password" name="Password" id="reg_password" placeholder="请输入密码" class="password_input  wd100_ ht32">
             <div class="waring">1111</div>
        </div>
        <div class="reg_item_container mt30">
            <span>确认密码：</span>
            <div class="small_icon2"></div>
            <div class="yes_icon"></div>
            <!--确认密码密码框-->
            <input type="password" placeholder="请确认密码" id="reg_pass_confirm" class="password_input  wd100_ ht32"/>
            <div class="waring">1111</div>
        </div>
        <div id="aaa"></div>
        <div class="reg_item_container mt30">
            <span>兴趣：</span>
            <p><input class="input_margin input_checkbox"  type="checkbox"><span class="lh10">理财</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">电影</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">旅游</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">时尚</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">便民</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">数码</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">饮食</span></p>
            <div class="clear-fix"></div>
            <div class="waring mt9">1111</div>
        </div>
        <div class="m0a rel wd1000 tc mt10">
             <input type="submit" class="common_btn_on ftwhite ht32 wd200 " id="reg_btn" value="马上注册"/>
        </div>
        </div>
    </div>
    
    
</div>
</form>
    </div>
    <div class="clear-fix"></div>
    <script type="text/javascript" src="./js/regsiter-page.js"></script>
<?php
    require('footer.php');
?>