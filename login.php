<!DOCTYPE html>
<html>
<head>
	<meta charset="gb2312"/>
  	<link rel="stylesheet" type="text/css" href="./css/base.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="./css/login-page.css">
    <script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
 	<script type="text/javascript" src="./js/common.js"></script>
    <script type="text/javascript" src="./js/login-page.js"></script>
</head>
<body>
 <div class="rel m0a wd840 mt22" >
        <div class="login_title_bg "></div>
        <div id="left_pic"></div>
        <form action="/red/mymoney.php">
         <!--登陆框 start-->
            <div id="login_right">
                <!--标题 start-->
                <div>登陆</div>
                <!--标题 end-->
                <!--用户名-->
                <div class="mt10 rel">
                    <div class="yes_icon" ></div>
                    <div >手机号：</div>
                    <!--login_input是一个样式class-->
                    <input class="login_input wd100_ ht32 mt10" id="login_phone" type="text">
                    <div class="waring">waring</div>
                </div>
                <!--用户名-->
                <!--密码-->
                <div class="mt10 rel">
                    <div class="yes_icon"></div>
                    <div class="who">密码：<a class="fr" href="findbyphone.php">忘记密码</a></div>
                    <!--password_input是一个样式class-->
                    <input class="password_input wd100_ ht32 mt10" id="login_password" type="password">
                    <div class="waring">waring</div>
                </div>
                <!--密码-->
                <div class="mt22">
                    <input type="submit" class="common_btn_on wd120 ht32 ftwhite" value="登陆"/>
                    <a class="fr lh32" href="regsiter.php">免费注册</a>
                </div>
            </div>
            <!--登陆框 end-->
        </form>    
    </div>
    <div class="clear-fix"></div>
 
<?php
    require('footer.php');
?>