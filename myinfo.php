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
		<!--�����-->
		<div class="fl wd332 rel">
			<div class="mh "><a href="mymoney.php" class="f16 lh200">Ͷ����Ϣ</a></div>
			<div class="mh "><a href="myjifen.php" class="f16 lh200">��ת����</a></div>
			<div class="mh "><a href="myinfo.php" class="f16 lh200">��������</a></div>
		</div>
		<!--�����end-->
		<div class="ml324" >
		<!--�޸����� start ��������λ��-->
			<!-- <form> ע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����here-->
			<form action="test.php" method="post"  target="_self" >
			<div>
				<!--����-->
				<div class="titleColor wd120 f16 lh200 ">�޸�����</div>
				<!--���� end-->
				<div class="mt22">
					<div class="wd840 mt22 " style="padding-bottom:30px;">
					<!--���������ֻ���div-->		
				        <div class="reg_item_container ml200 mt30">
				        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
				            <div class="yes_icon"></div>
				            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
				            <span>�ֻ��ţ�</span>
				            <!--�ֻ��ŵ�input�� start-->
				            <input type="text" id="Tel" name="Tel" class="login_input wd100_ ht32" placeholder="�������ֻ���">
				            <!--�ֻ��ŵ�input�� end-->
				            <!--����� start ���������ʾ��ʾ��Ϣ�ģ����111��û�õĲ�����Ϣ-->
				            <div class="waring tc lh250">1111</div>
				            <!--����� end-->
				        </div>
					<!--���ֻ���div end-->
				    <!--�����ǵ�������div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
				            <div class="yes_icon"></div>
				            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
				            <span>�������䣺</span>
				            <!--�ֻ��ŵ�input�� start-->
				            <input type="text" id="email" name="email" class="email_input wd100_ ht32" placeholder="�����������ַ">
				            <!--�ֻ��ŵ�input�� end-->
				            <!--����� start ���������ʾ��ʾ��Ϣ�ģ����111��û�õĲ�����Ϣ-->
				            <div class="waring tc lh250">1111</div>
				            <!--����� end-->
				        </div>
				    <!--��������div end-->
				     <!--������QQ��div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
				            <div class="yes_icon"></div>
				            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
				            <span>QQ�ţ�</span>
				            <!--�ֻ��ŵ�input�� start-->
				            <input type="text"  class="login_input wd100_ ht32 " placeholder="������qq��">
				            <!--�ֻ��ŵ�input�� end-->
				            <!--����� start ���������ʾ��ʾ��Ϣ�ģ����111��û�õĲ�����Ϣ-->
				            <div class="waring tc lh250">1111</div>
				            <!--����� end-->
				        </div>
				    <!--QQ�� div end-->
					 <!--������ʡ�ݣ�div-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
				            <!--<div class="yes_icon"></div>-->
				            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
				            <span>ʡ�ݣ�</span>
				            <!--�ֻ��ŵ�input�� start-->
				            <select class="wd48_ ht32 " id="provinceName">
				            	<!--����ajaxʡ��-->
				            </select >
				            <select class="wd48_ ht32 " id="cityName">
				            	<option>������</option>
				            	<!--����ajax������-->
				            </select>
				            <!--�ֻ��ŵ�input�� end-->
				            <!--����� start ���������ʾ��ʾ��Ϣ�ģ����111��û�õĲ�����Ϣ-->
				            <!--<div class="waring">1111</div>-->
				            <!--����� end-->
				        </div>
				    <!--ʡ�ݣ� div end-->
				     <!--�����ǵ�ַdiv-->
				         <div class="reg_item_container ml200 mt30">
				        	<!--������Ϣ��ȷ�Ժ󵯳����Ĺ� start-->
				            <div class="yes_icon"></div>
				            <!--������Ϣ��ȷ�Ժ󵯳����Ĺ� end-->
				            <span>��ַ��</span>
				            <!--�ֻ��ŵ�input�� start-->
				            <input type="text" id="adress" value="Submit form" name="email" class="adress_input wd100_ ht32 ">
				            <!--�ֻ��ŵ�input�� end-->
				            <!--����� start ���������ʾ��ʾ��Ϣ�ģ����111��û�õĲ�����Ϣ-->
				            <div class="waring tc lh250">1111</div>
				            <!--����� end-->
				        </div>
				    <!--��ַ div end-->
				    <!--checkox start-->
				        <div class="reg_item_container ml200 mt30">
				            <span>��Ȥ��</span>
				            <p><input class="input_margin input_checkbox"  type="checkbox"><span class="lh10">���</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">��Ӱ</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">����</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">ʱ��</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">����</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">����</span></p>
				            <p><input class="input_margin input_checkbox" type="checkbox"><span class="lh10">��ʳ</span></p>
				            <div class="clear-fix"></div>
				            <div class="waring  tc lh250">1111</div>
				        </div>
				    <!--checkox end-->    
				        <div class=" rel wd680 tc mt10">
				             <input type="button" id="submit"  class="common_btn_on ftwhite ht32 wd200 " id="reg_btn" value="ȷ���޸�"/>
				        	<input type="submit" name=""  id="ie"  value="" style="display: none;"/>
				        </div>
			        </div>
				</div>
			</div>
			</form>
			<!-- </form> ע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����hereע��ע�����here-->
		<!--�޸����� end-->
		</div>
	</div>
	<div class="clear-fix"></div>
	<script type="text/javascript" src="./js/common.js"></script>
	<script type="text/javascript" src="./js/myinfo-page.js" charset="UTF-8"></script>
<?php
	require('footer.php');
?>