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
	<!--logo��ת start-->
    <div class="login_title_bg" onClick="window.open('/index.ghtml','_self')"></div>
    <!--logo��ת end-->
    <div class="rel m0a wd1000 mt10">
        <div class="titleColor" style=" box-shadow:5px 5px 5px #c0c0c0">ע��</div>
        <div class="wd1000 " style="padding-bottom:30px; box-shadow:5px 5px 5px #c0c0c0; background:#FFF; padding-top:22px;">
        <div class="reg_item_container">
        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
            <div class="yes_icon"></div>
            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
            <span>�ֻ��ţ�</span>
            <!--�ֻ��ŵ�input�� start-->
            <input type="text" id="Tel" name="Tel" class="login_input wd100_ ht32 " placeholder="�������ֻ���">
            <!--�ֻ��ŵ�input�� end-->
            <!--����� start ���������ʾ��ʾ��Ϣ�ģ����111��û�õĲ�����Ϣ-->
            <div class="waring">1111</div>
            <!--����� end-->
            <!--����������� start-->
            <input type="hidden" id="UserID" name="UserID" value="20140904100700304">
            <input type="hidden" id="Stat" name="Stat" value="����">
            <input type="hidden" id="ModDate" name="ModDate" value="2014-9-4 10:07:00">
            <!--����������� end-->
        </div>
        <div class="reg_item_container mt30">
        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
            <div class="yes_icon" style="right:155px;"></div>
            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
            <span>��֤�룺</span>
            <!--��֤���input�� start-->
            <input placeholder="��֤��"class="yzm_input wd50_ ht32 mr22">
            <!--��֤���input�� end-->
            <!--��ȡ��֤���button start-->
            <input type="button" id="yzm_btn"  value="��ȡ��֤��" class="common_btn_on ftwhite ht32 wd40_"/>
            <!--��ȡ��֤���button start-->
            <div class="waring">1111</div>
        </div>
        <div class="reg_item_container mt30">
            <span>���룺</span>
            <div class="small_icon2"></div>
            <div class="yes_icon"></div>
            <!--���������-->
            <input type="password" name="Password" id="reg_password" placeholder="����������" class="password_input  wd100_ ht32">
             <div class="waring">1111</div>
        </div>
        <div class="reg_item_container mt30">
            <span>ȷ�����룺</span>
            <div class="small_icon2"></div>
            <div class="yes_icon"></div>
            <!--ȷ�����������-->
            <input type="password" placeholder="��ȷ������" id="reg_pass_confirm" class="password_input  wd100_ ht32"/>
            <div class="waring">1111</div>
        </div>
        <div id="aaa"></div>
        <div class="reg_item_container mt30">
            <span>��Ȥ��</span>
            <p><input class="input_margin input_checkbox"  type="checkbox"><span class="lh10">���</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">��Ӱ</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">����</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">ʱ��</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">����</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">����</span></p>
            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">��ʳ</span></p>
            <div class="clear-fix"></div>
            <div class="waring mt9">1111</div>
        </div>
        <div class="m0a rel wd1000 tc mt10">
             <input type="submit" class="common_btn_on ftwhite ht32 wd200 " id="reg_btn" value="����ע��"/>
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