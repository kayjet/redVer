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
		<!--�޸����� start ��������λ��-->
			<!-- <form> ע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����here-->
			<div>
				<!--����-->
				<div class="titleColor wd120 f16 lh200 ">�޸�����</div>
				<!--���� end-->
			
				    <!--������� start-->  
				        <div class="reg_item_container ml200 mt30">
				            <span>�����룺</span>
				            <div class="small_icon2"></div>
				            <div class="yes_icon"></div>
				            <!--���������-->
				            <input type="password" 
				            name="Password" id="old_pwd" 
				            placeholder="����������" class="password_input  wd100_ ht32">
				             <!--��������� end-->
				             <div class="waring">1111</div>
				        </div>
				    <!--������� end-->   
				    <!--������� start-->   
				        <div class="reg_item_container ml200 mt30">
				            <span>�����룺</span>
				            <div class="small_icon2"></div>
				            <div class="yes_icon"></div>
				            <input type="password" 
				            placeholder="������������" 
				            id="new_pwd" 
				            class="password_input  wd100_ ht32"/>
				            <div class="waring">1111</div>
				        </div>
				    <!--������� end-->
                       <!--ȷ��������� start-->   
				        <div class="reg_item_container ml200 mt30">
				            <span>ȷ�����룺</span>
				            <div class="small_icon2"></div>
				            <div class="yes_icon"></div>
				            <!--ȷ�����������-->
				            <input type="password" 
				            placeholder="��ȷ��������"
				             id="new_pwd_confirm" 
				             class="password_input  wd100_ ht32"/>
				            <div class="waring">1111</div>
				        </div>
				    <!--ȷ��������� end-->    
                    	<!--��������֤���-->
				        <div class="reg_item_container ml200 mt30">
				        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
				            <div class="yes_icon" style="right:155px;"></div>
				            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
				            <span>��֤�룺</span>
				            <!--��֤���input�� start-->
				            <input placeholder="��֤��"  id="sj_yzm" class="yzm_input wd50_ ht32 mr22">
				            <!--��֤���input�� end-->
				            <!--��ȡ��֤���button start-->
				            <input type="button" id="yzm_btn"  value="��ȡ��֤��" class="common_btn_on ftwhite ht32 wd40_"/>
				            <!--��ȡ��֤���button start-->
				            <div class="waring">1111</div>
				        </div>
				    <!--��֤��� end-->     
				    <!--checkox end-->    
				        <div class=" rel wd680 tc mt22">
				             <input type="submit" class="common_btn_on ftwhite ht32 wd200 " id="change_btn" value="ȷ���޸�"/>
				        </div>
			        </div>
				</div>
			</div>
			<!-- </form> ע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����here-->
		<!--�޸����� end-->
		</div>
	</div>
	<div class="clear-fix"></div>
	<script src="js/common.js" type="text/javascript" ></script>
	<script type="text/javascript" src="js/change-pwd-page.js"></script>
<?php
	require('footer.php');
?>