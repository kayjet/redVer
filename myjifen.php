<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/input-style.css">
	<link rel="stylesheet" type="text/css" href="./css/jifen-page.css">
<?php
	require('header.php');
?>
	<div class="rel wd1200 m0a mt22" >
		<!--左边栏-->
		<div class="fl wd332 rel">
			<div class="mh "><a href="mymoney.php" class="f16 lh200">投资信息</a></div>
			<div class="mh "><a href="myjifen.php" class="f16 lh200">玩转积分</a></div>
			<div class="mh "><a href="myinfo.php" class="f16 lh200">完善资料</a></div>
		</div>
		<!--左边栏end-->
		<div class="ml324" >
		<!--我的积分 start-->
			<div>
				<div class="titleColor wd120 f16 lh200 ">我的积分</div>
				<div class="mt22"><span class="f32 ftred mr22 ">500</span><span>积分</span></div>
			</div>
		<!--我的积分 end-->
			<!--积分兑换 start-->
			<div>
				<div class="titleColor wd120 f16 lh200 mt41">兑换合作社</div>
				<div class="mt41">
					<div class="fl wd-auto mr10 tc">
						<img src="./skin/jfbg1.png">
						<br>
						<a href="">鲜果买</a>
					</div>
					<div class="fl wd-auto mr10 tc">
						<img src="./skin/jfbg2.png">
						<br>
						<a href="">乐活良品</a>
					</div>
					<div class="fl wd-auto mr10 tc">
						<img src="./skin/jfbg3.png">
						<br>
						<a href="">绵绵生活</a>
					</div>
					<div class="fl wd-auto mr10 tc">
						<img src="./skin/jfbg4.png">
						<br>
						<a href="">味美七七</a>
					</div>
				</div>
				<div class="clear-fix"></div>
			</div>
			<!--积分兑换 end-->
		<!--积分明细 start-->	
			<div>
				<div class="titleColor wd120 f16 lh200 mt41">兑换明细</div>
				<div class="mt22 lh200  " >
					<div class="fl wd160 ht32 indent_1half">兑换产品</div> 
					<div class="fl wd120 ht32 tc">商户</div> 
					<div class="fl wd120 ht32 tc">状态</div> 
					<div class="fl wd120 ht32 tc">件数</div> 
					<div class="fl wd120 ht32 tc">消费积分</div>
					<div class="fl wd160 ht32 tc">时间</div> 	
					<div class="clear-fix"></div> 	 	 	 	
				</div>
				<!--循环在此 start-->
				<div class=" lh200  " >
					<div class="fl wd160 ht32 indent_1half">高邮咸蛋</div> 
					<div class="fl wd120 ht32 tc">味美七七</div> 
					<div class="fl wd120 ht32 tc">快递中</div> 
					<div class="fl wd120 ht32 tc">1件</div> 
					<div class="fl wd120 ht32 tc">50,000</div>
					<div class="fl wd160 ht32 tc">2014-08-05</div> 	
					<div class="clear-fix"></div> 	 	 	 	
				</div>
				<!--循环在此end-->
			</div>
		<!--积分兑换 end-->	
		</div>
	</div>
	<div class="clear-fix"></div>
<script type="text/javascript" src="./js/transition.js"></script>
<script type="text/javascript" src="./js/collapse.js"></script>
<?php
	require('footer.php');
?>