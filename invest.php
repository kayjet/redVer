<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css/invest-page.css">
	
	</head>
	<body>
		<div class="rel wd1200 m0a ht40 "></div>
		<!--标题-->
		<div class="rel wd1200 m0a  titleColor " style="border: 3px solid #d50e1c;">where</div>
		<!--标题end-->
		<form action="test.php" method="post"  target="_self">
		<div class="rel wd1200 m0a mt10 htauto pt22 pb22 " style="border: 3px solid #d50e1c;">
		  <!--投资产品-->	
			<div class="mt22 htauto rel wd840 m0a">
				<div class="wd160 fl">投资产品:</div>
				<div class="wd-auto htauto">聚宝盆001</div>
			</div>
		  <!--投资产品end-->
		  <!--银行卡-->
			<div class="mt22 htauto rel wd840 m0a">
				<div id="108" class="wd160 fl htauto">银行卡:</div>
				<div class="wd-auto htauto flag">
					<!--在这里添加和删除银行卡-->
					<img class="invest-img" src="./skin/banks.png">
					<img  class="invest-img"  src="./skin/banks.png">
					<img class="invest-img"  src="./skin/banks.png">
					<img class="invest-img"  src="./skin/banks.png">
					<img class="invest-img"  src="./skin/banks.png">
					<img class="invest-img"  src="./skin/banks.png">
					<img class="invest-img"  src="./skin/banks.png">
					<img class="invest-img"  src="./skin/banks.png">
				</div>
			</div>
		  <!--银行卡end-->
		  <!--手机号-->
			<div class="mt22 htauto rel wd840 m0a">
				<div class="wd160 fl">手机号:</div>
				<div class="wd-auto htauto">1580*******</div>
			</div>
		 <!--手机号end-->
		 <!--投资资金-->	
			<div class="mt22 htauto rel wd840 m0a">
				
				<div class="wd160 fl">投资金额:</div>
				<div class="wd-auto htauto">	
					<input class="ipt130 mr22"  id="tz_money" value="<?php  echo  $_POST["money"]; ?>">
					<span>元&nbsp;&nbsp;&nbsp;&nbsp;预期收益&nbsp;&nbsp;
						<span class="ftred" id="lixi">
							<?php  $a =  $_POST["money"];  
							echo $a*0.08/12*24 ?>
							</span>&nbsp;&nbsp;元</span>
							 <div class="waring wd120 ml100">1111</div>
				</div>
			</div>
		 <!--投资资金end-->
		 <!--短信验证码-->	
			<div class="mt22 htauto rel wd840 m0a">
				<div class="wd160 fl">短信验证码:</div>
				<div class="wd-auto htauto">
					<input class="ipt130 mr22"  id="sj_yzm">
					<input type="button" class="common_btn_on wd100 ht32 ftwhite" value="获取验证码">
				</div>
			</div>
		 <!--短信验证码end-->	
			<div class="mt22 htauto rel wd840 m0a">
				<div class="wd160 fl" >&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="wd-auto htauto">
					<input type="checkbox" class="ipt-cbx mr10">
					<a href=""><span>我已经阅读了什么什么确认文件</span></a>
				</div>
			</div>
		
			<div class="mt22 htauto rel wd840 m0a pb22">
				<div class="wd160 fl">&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="wd-autohtauto ">
                	<input type="button"  id="next" class="common_btn_on wd150 ht32 ftwhite" value="下一步">
                	<input type="submit" name="" id="ie_two" value="" style="display: none;"/>
				</div>
			</div>
		</div>
		<!---->
		</form>	
	</body>
	    <script type="text/javascript" src="js/invest-page.js" charset="UTF-8"></script>
</html>