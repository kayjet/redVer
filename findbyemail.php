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
<form action="regcheck.ghtml" method="post" target="_self"><!--����������������������������������������������������������������-->
<div class="rel m0a wd1000 mt22">
	<!--logo��ת start-->
    <div class="login_title_bg " onClick="window.open('/index.ghtml','_self')"></div>
    <!--logo��ת end-->
    <div class="rel wd1000 m0a mt22 border">
    	<!-- <div class="titleColor">�һ�����</div> -->
        <div>
            <div class="tabs498 fl  tabs_off lh200" style="margin-right:4px;"  id="to_phone" >�ֻ��һ�</div>
            <div class="tabs498 fl titleColor">�����һ�</div>
        </div>
       <!--  <div class="wd680 m0a tc rel">
          <div  class="common_btn_on wd100 ht32  ftwhite fl ml180 email_btn_off " ><a href="findbyphone.php">�ֻ��һ�</a></div>
          <div class="common_btn_on wd100 ht32  ftwhite fl ml40 email_btn_on " >�����һ�</div>
        </div> -->
        <div class="clear-fix"></div>
        <!--����div-->
        <div class="wd680 m0a tc rel">  	
            <span>���䣺&nbsp;&nbsp;&nbsp;</span>
            <input class="email_input ht32 wd250 mt30" id="find_by_email"><!--<==============�ڴ˻����������-->
            <div class="yes_icon"></div>
            <div class="waring wd325 m0a">1111</div>
        </div>
         <!--����end-->
         <!--��̬��֤�� div-->
        <div class="wd680 m0a tc rel">
        	<span>��֤�룺</span>
        	&nbsp;&nbsp;<input class=" yzm_input ht32 mt30" id="user_input_yzm"><!--<==============�ڴ˻����������-->
            <input type="button" class="tabs_off wd100 ht32 " style="background:#efefef;"id="get_yzm" value="��ȡ��֤��"><!--��ť-->
            <div class="yes_icon"></div>
            <div class="waring wd325 m0a">1111</div>
        </div>
         <!--��̬��֤�� div-->
         <!--2����ť-->
        <div class="wd680 m0a tc">
        	 <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite" value="ȷ��">
              <input type="button" class="common_btn_on wd160 ht32 mt30 ftwhite " value="ȡ��">&ensp;
        </div>
        <!--2����ť end-->
    </div>
</div>
</form><!--���������������������������������������������������������������� end-->
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