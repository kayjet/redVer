<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/content-page.css">
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css"/>
    <div id="modal">
    	<div id="modal-close-btn"></div>
		<div id="modal-white"></div>
	</div>
<?php
    require ('header.php');
?>
<div class="rel m0a wd1200 htauto" id="singal">
                <!-- ������div-start border:1px red solid;-->
                <div id="content_left" class="mt10">
                    <!--����div�е����� strat-->
                        <div  class="rel mr38a tImage_container">
                            <img  src="./skin/image_bg.png"/>
                        </div>
                        <div class="rel mt10 mr38a">
                            <div class="tabs">��Ʒ����</div>
                            <div class="tabs">���ʷ�����</div>
                            <div class="tabs">ļ����Ҫ</div>
                            <div class="tabs">��Ʒģʽ</div>
                            <div class="clear-fix" style="height:2px; background:#DA2A2C; width:621px;margin-left:97px;"></div>
                            <!-- #DA2A2C -->
                        </div>
                        <!---��Ʒ����ҳ��-->
                        <div class="rel mr38a mt10 htauto">
                              <div class="fr" id="ajax_load"></div>
                        </div>
                        <!---��Ʒ����ҳ��end-->
                    <!--����div�е����� end-->
                </div> 
                <!-- ������div-end-->
                <!-- ��������div-start-->
                  <div id="content_right">
                    <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem">��ļ�����</div>
                        <div class="infor_right_elem">��0</div>
                    </div>
                    <!--�����һС��-->
                    <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem">ļ��Ŀ����</div>
                        <div class="infor_right_elem">��50,000,000</div>
                    </div>
                    <!--�����һС��-->
                    <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem">�������</div>
                        <div class="infor_right_elem">58��</div>
                    </div>
                    <!--�����һС��-->
                     <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem">Ԥ��������</div>
                        <div class="infor_right_elem">������5.3%</div>
                    </div>
                    <!--�����һС��-->
                    <!--�����һС��-->
                    <!--<form action="invest.php" method="get">-->
	                    <div class="information_container">
	                         <div class="infor_left_elem">Ͷ��</div>
	                        <span class="infor_right_elem">Ԫ</span>
	                        <input name="money"  id="money" class="fr ht32 mr10">
	                    </div>
                    
                    <div class="information_container">
                        <button id="goal" type="submit">����Ͷ��</button>
                        <button id="risk" type="submit">������ʾ</button>
                    </div>
                    <!--</form>-->
                    <!--�����һС��-->
                    <!--�����һС��-->
                    <div class="information_container" style="margin-top:116px;">
                        <div class="infor_left_elem smaller">Ͷ����ͽ��</div>
                        <div class="bigger">��2000</div>
                    </div>
                    <!--�����һС��-->
                     <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem ">��Ӫ����</div>
                        <div class="bigger">6����</div>
                    </div>
                    <!--�����һС��-->
                     <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem smaller">������䷽ʽ</div>
                        <div class="bigger">ÿ��</div>
                    </div>
                    <!--�����һС��-->
                     <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem smaller">���������</div>
                        <div class="bigger">����5��</div>
                    </div>
                    <!--�����һС��-->
                     <!--�����һС��-->
                    <div class="information_container">
                        <div class="infor_left_elem smaller">���Ϸ�ʽ</div>
                        <div class="bigger">���ŵ���</div>
                    </div>
                    <!--�����һС��-->
                     <!--�����һС��-->
                     
                    <div class="information_container">
                        <div class="infor_left_elem smaller">��ͳ������</div>
                        <div class="bigger">��1,000,000</div>
                    </div>
                    <!--�����һС��-->
                    <div class="clear-fix"></div>
                    <div id="calculator">
                        <h2 class="f32">���������</h2>
                        <p>д����Ͷ�ʵĽ�Ϊ���������Ͷ�ʽ��Ķ���Ϣ</p>
                        <!--�����һС��-->
                        <div class="information_container no_border" >
                            <div class="infor_left_elem smaller" style="width:8em;"  >Ͷ��(Ԫ)</div>
                            <div class="bigger" style="font-size:1em;line-height:70px;"><input class="ht32 ">Ԫ</div>
                        </div>
                        <!--�����һС��-->
                        <!--�����һС��-->
                        <div class="information_container no_border">
                            <div class="infor_left_elem smaller" style="width:8em;" >Ͷ������(������)</div>
                            <div class="bigger" style="font-size:1em;line-height:70px;"><input class="ht32">%</div>
                        </div>
                        <!--�����һС��-->
                        <!--�����һС��-->
                        <div class="information_container no_border">
                            <div class="infor_left_elem smaller" style="width:8em;" >Ͷ��ʱ��(��)</div>
                            <div class="bigger" style="font-size:1em;line-height:70px;"><input class="ht32">��</div>
                        </div>
                        <!--�����һС��-->
                        <!--�����һС��-->
                        <div class="information_container no_border" style="height: 79px; margin-top: 22px;" >
                           <input type="submit" id="calculate_btn" value="����">
                        </div>
                        <!--�����һС��-->
                    </div>
                </div> 
</div>
<div class="clear-fix"></div>
<!-- <script type="text/javascript" src="./js/jquery.pin.js"></script> -->
<script type="text/javascript" src="./js/content-page.js"></script>
<?php
    require('footer.php');
?>