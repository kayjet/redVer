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
         <!--��½�� start-->
            <div id="login_right">
                <!--���� start-->
                <div>��½</div>
                <!--���� end-->
                <!--�û���-->
                <div class="mt10 rel">
                    <div class="yes_icon" ></div>
                    <div >�ֻ��ţ�</div>
                    <!--login_input��һ����ʽclass-->
                    <input class="login_input wd100_ ht32 mt10" id="login_phone" type="text">
                    <div class="waring">waring</div>
                </div>
                <!--�û���-->
                <!--����-->
                <div class="mt10 rel">
                    <div class="yes_icon"></div>
                    <div class="who">���룺<a class="fr" href="findbyphone.php">��������</a></div>
                    <!--password_input��һ����ʽclass-->
                    <input class="password_input wd100_ ht32 mt10" id="login_password" type="password">
                    <div class="waring">waring</div>
                </div>
                <!--����-->
                <div class="mt22">
                    <input type="submit" class="common_btn_on wd120 ht32 ftwhite" value="��½"/>
                    <a class="fr lh32" href="regsiter.php">���ע��</a>
                </div>
            </div>
            <!--��½�� end-->
        </form>    
    </div>
    <div class="clear-fix"></div>
 
<?php
    require('footer.php');
?>