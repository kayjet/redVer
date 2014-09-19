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
		<div class="ml324" >
		<!--修改资料 start 表单在以下位置-->
			<!-- <form> 注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here-->
			<div>
				<!--标题-->
				<div class="titleColor wd120 f16 lh200 ">修改密码</div>
				<!--标题 end-->
			
				    <!--旧密码框 start-->  
				        <div class="reg_item_container ml200 mt30">
				            <span>旧密码：</span>
				            <div class="small_icon2"></div>
				            <div class="yes_icon"></div>
				            <!--输入密码框-->
				            <input type="password" 
				            name="Password" id="old_pwd" 
				            placeholder="请输入密码" class="password_input  wd100_ ht32">
				             <!--输入密码框 end-->
				             <div class="waring">1111</div>
				        </div>
				    <!--旧密码框 end-->   
				    <!--新密码框 start-->   
				        <div class="reg_item_container ml200 mt30">
				            <span>新密码：</span>
				            <div class="small_icon2"></div>
				            <div class="yes_icon"></div>
				            <input type="password" 
				            placeholder="请输入新密码" 
				            id="new_pwd" 
				            class="password_input  wd100_ ht32"/>
				            <div class="waring">1111</div>
				        </div>
				    <!--新密码框 end-->
                       <!--确认新密码框 start-->   
				        <div class="reg_item_container ml200 mt30">
				            <span>确认密码：</span>
				            <div class="small_icon2"></div>
				            <div class="yes_icon"></div>
				            <!--确认密码密码框-->
				            <input type="password" 
				            placeholder="请确认新密码"
				             id="new_pwd_confirm" 
				             class="password_input  wd100_ ht32"/>
				            <div class="waring">1111</div>
				        </div>
				    <!--确认新密码框 end-->    
                    	<!--以下是验证码框-->
				        <div class="reg_item_container ml200 mt30">
				        	<!--输入信息正确以后弹出来的钩 start-->
				            <div class="yes_icon" style="right:155px;"></div>
				            <!--输入信息正确以后弹出来的钩 end-->
				            <span>验证码：</span>
				            <!--验证码的input框 start-->
				            <input placeholder="验证码"  id="sj_yzm" class="yzm_input wd50_ ht32 mr22">
				            <!--验证码的input框 end-->
				            <!--获取验证码的button start-->
				            <input type="button" id="yzm_btn"  value="获取验证码" class="common_btn_on ftwhite ht32 wd40_"/>
				            <!--获取验证码的button start-->
				            <div class="waring">1111</div>
				        </div>
				    <!--验证码框 end-->     
				    <!--checkox end-->    
				        <div class=" rel wd680 tc mt22">
				             <input type="submit" class="common_btn_on ftwhite ht32 wd200 " id="change_btn" value="确认修改"/>
				        </div>
			        </div>
				</div>
			</div>
			<!-- </form> 注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here注意注意表单表单here-->
		<!--修改资料 end-->
		</div>
	</div>
	<div class="clear-fix"></div>
	<script src="js/common.js" type="text/javascript" ></script>
	<script type="text/javascript" src="js/change-pwd-page.js"></script>
<?php
	require('footer.php');
?>