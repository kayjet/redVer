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
<form action="regcheck.ghtml"  method="post" target="_self"  class="rel m0a wd1200"><!--����������������������������������������������������������������-->
<div class="rel m0a wd1000 mt22">
	<!--logo��ת start-->
    <div class="login_title_bg " onClick="window.open('/index.ghtml','_self')"></div>
    <!--logo��ת end-->
    <div class="rel wd1000 m0a mt22 border">
    	<!-- <div class="titleColor">�һ�����</div> -->
        <div>
            <div class="tabs498 fl titleColor " style="margin-right:4px;" >�ֻ��һ�</div>
            <div class="tabs498 fl tabs_off lh200" id="to_email">�����һ�</div>
        </div>
        <!-- <div class="wd680 m0a tc"> -->
     	  <!--�������л�2ҳ�ĳ�����-->
          <!-- <div  class="common_btn_on wd100 ht32  ftwhite fl ml180 email_btn_on" >�ֻ��һ�</div> -->
          <!-- <div type="button" class="common_btn_on wd100 ht32  ftwhite fl ml40 email_btn_off" ><a href="findbyemail.php">�����һ�</a></div> -->
          <!--�������л�2ҳ�ĳ����� end-->
        <!-- </div> -->
        <div class="clear-fix"></div>
        <!--�ֻ���div-->
        <div class="wd680 m0a tc rel">
            <span>�ֻ��ţ�</span>
            <input class="login_input ht32 mt30" id="find_by_phone"><!--<==============�ڴ˻����������-->
            <!--�������div��û���õģ�ֻ�������������-->
                <input type="button" class="common_btn_on wd100 " style="opacity:0;">
            <!--�������div��û���õģ�ֻ������������� end-->
            <div class="yes_icon"></div>
            <div class="waring wd325 m0a ">1111</div>    
        </div>
        <!--�ֻ���div end-->
        <!--������֤��-->
        <div class="wd680 m0a tc rel">
        	<span>��֤�룺</span>
        	<input class=" yzm_input ht32 mt30" i d="input_yzm" ><!--<==============�ڴ˻����������-->
            <input type="button" class="common_btn_on wd100 ht32 ftwhite "  id="sj_yzm" value="��ȡ��֤��"><!--��ť-->
            <div class="yes_icon"></div>
            <div class="waring  wd325 m0a">1111</div>   
        </div>
        <!--������֤�� end-->
        <!--2����ť-->
        <div class="wd680 m0a tc">
        	 <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite" value="ȷ��">
              <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite " value="ȡ��">&ensp;
        </div>
        <!--2����ť end-->
    </div>
</div>
</form><!--����������������������������������������������������������������-->
    <div class="clear-fix"></div>
<script type="text/javascript" src="js/find-by-phone-page.js"></script>
<?php
    require('footer.php');
?>