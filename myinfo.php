<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/input-style.css">
	<link rel="stylesheet" type="text/css" href="./css/jifen-page.css">
	<link rel="stylesheet" type="text/css" href="./css/regsiter-page.css">

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
		<!--修改资料 start 表单在以下位置-->
			<!-- <form> 注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here-->
			<form action="test.php" method="post"  target="_self" >
			<div>
				<!--标题-->
				<div class="titleColor wd120 f16 lh200 ">修改资料</div>
				<!--标题 end-->
				<div class="mt22">
					<div class="wd840 mt22 " style="padding-bottom:30px;">
					<!--以下是新手机号div-->		
				        <div class="reg_item_container ml200 mt30">
				        	<!--输入信息正确以后弹出来的钩 start-->
				            <div class="yes_icon"></div>
				            <!--输入信息正确以后弹出来的钩 end-->
				            <span>手机号：</span>
				            <!--手机号的input框 start-->
				            <input type="text" id="Tel" name="Tel" class="login_input wd100_ ht32" placeholder="请输入手机号">
				            <!--手机号的input框 end-->
				            <!--警告框 start 这里就是显示提示信息的，这个111是没用的测试信息-->
				            <div class="waring tc lh250">1111</div>
				            <!--警告框 end-->
				        </div>
					<!--新手机号div end-->
				    <!--以下是电子邮箱div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--输入信息正确以后弹出来的钩 start-->
				            <div class="yes_icon"></div>
				            <!--输入信息正确以后弹出来的钩 end-->
				            <span>电子邮箱：</span>
				            <!--手机号的input框 start-->
				            <input type="text" id="email" name="email" class="email_input wd100_ ht32" placeholder="请输入邮箱地址">
				            <!--手机号的input框 end-->
				            <!--警告框 start 这里就是显示提示信息的，这个111是没用的测试信息-->
				            <div class="waring tc lh250">1111</div>
				            <!--警告框 end-->
				        </div>
				    <!--电子邮箱div end-->
				     <!--以下是QQ号div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--输入信息正确以后弹出来的钩 start-->
				            <div class="yes_icon"></div>
				            <!--输入信息正确以后弹出来的钩 end-->
				            <span>QQ号：</span>
				            <!--手机号的input框 start-->
				            <input type="text"  class="login_input wd100_ ht32 " placeholder="请输入qq号">
				            <!--手机号的input框 end-->
				            <!--警告框 start 这里就是显示提示信息的，这个111是没用的测试信息-->
				            <div class="waring tc lh250">1111</div>
				            <!--警告框 end-->
				        </div>
				    <!--QQ号 div end-->
					 <!--以下是省份：div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--输入信息正确以后弹出来的钩 start-->
				            <!--<div class="yes_icon"></div>-->
				            <!--输入信息正确以后弹出来的钩 end-->
				            <span>省份：</span>
				            <!--手机号的input框 start-->
				            <select class="wd48_ ht32 " id="provinceName">
				            	<!--这里ajax省名-->
				            </select >
				            <select class="wd48_ ht32 " id="cityName">
				            	<option>北京市</option>
				            	<!--这里ajax城市名-->
				            </select>
				            <!--手机号的input框 end-->
				            <!--警告框 start 这里就是显示提示信息的，这个111是没用的测试信息-->
				            <!--<div class="waring">1111</div>-->
				            <!--警告框 end-->
				        </div>
				    <!--省份： div end-->
				     <!--以下是地址div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--输入信息正确以后弹出来的钩 start-->
				            <div class="yes_icon"></div>
				            <!--输入信息正确以后弹出来的钩 end-->
				            <span>地址：</span>
				            <!--手机号的input框 start-->
				            <input type="text" id="adress" value="Submit form" name="email" class="adress_input wd100_ ht32 ">
				            <!--手机号的input框 end-->
				            <!--警告框 start 这里就是显示提示信息的，这个111是没用的测试信息-->
				            <div class="waring tc lh250">1111</div>
				            <!--警告框 end-->
				        </div>
				    <!--地址 div end-->
				    <!--checkox start-->
				        <div class="reg_item_container ml200 mt30">
				            <span>兴趣：</span>
				            <p><input class="input_margin input_checkbox"  type="checkbox"><span class="lh10">理财</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">电影</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">旅游</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">时尚</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">便民</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">数码</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">饮食</span></p>
				            <div class="clear-fix"></div>
				            <div class="waring  tc lh250">1111</div>
				        </div>
				    <!--checkox end-->    
				        <div class=" rel wd680 tc mt10">
				             <input type="button" id="submit"  class="common_btn_on ftwhite ht32 wd200 " id="reg_btn" value="确认修改"/>
				        	<input type="submit" name=""  id="ie"  value="" style="display: none;"/>
				        </div>
			        </div>
				</div>
			</div>
			</form>
			<!-- </form> 注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here-->
		<!--修改资料 end-->
		</div>
	</div>
	<div class="clear-fix"></div>
	<script type="text/javascript" src="./js/common.js"></script>
	<script type="text/javascript" src="./js/myinfo-page.js" charset="UTF-8"></script>
<?php
	require('footer.php');
?>