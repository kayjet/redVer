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
                <!-- 左面大的div-start border:1px red solid;-->
                <div id="content_left" class="mt10">
                    <!--左面div中的容器 strat-->
                        <div  class="rel mr38a tImage_container">
                            <img  src="./skin/image_bg.png"/>
                        </div>
                        <div class="rel mt10 mr38a">
                            <div class="tabs">产品理念</div>
                            <div class="tabs">融资方介绍</div>
                            <div class="tabs">募集概要</div>
                            <div class="tabs">产品模式</div>
                            <div class="clear-fix" style="height:2px; background:#DA2A2C; width:621px;margin-left:97px;"></div>
                            <!-- #DA2A2C -->
                        </div>
                        <!---产品内容页面-->
                        <div class="rel mr38a mt10 htauto">
                              <div class="fr" id="ajax_load"></div>
                        </div>
                        <!---产品内容页面end-->
                    <!--左面div中的容器 end-->
                </div> 
                <!-- 左面大的div-end-->
                <!-- 右面面大的div-start-->
                  <div id="content_right">
                    <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem">已募集金额</div>
                        <div class="infor_right_elem">￥0</div>
                    </div>
                    <!--里面的一小项-->
                    <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem">募集目标金额</div>
                        <div class="infor_right_elem">￥50,000,000</div>
                    </div>
                    <!--里面的一小项-->
                    <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem">申请件数</div>
                        <div class="infor_right_elem">58件</div>
                    </div>
                    <!--里面的一小项-->
                     <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem">预期收益率</div>
                        <div class="infor_right_elem">年利率5.3%</div>
                    </div>
                    <!--里面的一小项-->
                    <!--里面的一小项-->
                    <!--<form action="invest.php" method="get">-->
	                    <div class="information_container">
	                         <div class="infor_left_elem">投资</div>
	                        <span class="infor_right_elem">元</span>
	                        <input name="money"  id="money" class="fr ht32 mr10">
	                    </div>
                    
                    <div class="information_container">
                        <button id="goal" type="submit">马上投资</button>
                        <button id="risk" type="submit">风险提示</button>
                    </div>
                    <!--</form>-->
                    <!--里面的一小项-->
                    <!--里面的一小项-->
                    <div class="information_container" style="margin-top:116px;">
                        <div class="infor_left_elem smaller">投资最低金额</div>
                        <div class="bigger">￥2000</div>
                    </div>
                    <!--里面的一小项-->
                     <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem ">运营期限</div>
                        <div class="bigger">6个月</div>
                    </div>
                    <!--里面的一小项-->
                     <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem smaller">收益分配方式</div>
                        <div class="bigger">每月</div>
                    </div>
                    <!--里面的一小项-->
                     <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem smaller">收益分配日</div>
                        <div class="bigger">次月5日</div>
                    </div>
                    <!--里面的一小项-->
                     <!--里面的一小项-->
                    <div class="information_container">
                        <div class="infor_left_elem smaller">保障方式</div>
                        <div class="bigger">融信担保</div>
                    </div>
                    <!--里面的一小项-->
                     <!--里面的一小项-->
                     
                    <div class="information_container">
                        <div class="infor_left_elem smaller">最低成立金额</div>
                        <div class="bigger">￥1,000,000</div>
                    </div>
                    <!--里面的一小项-->
                    <div class="clear-fix"></div>
                    <div id="calculator">
                        <h2 class="f32">收益计算器</h2>
                        <p>写入您投资的金额，为您算出本次投资金额的额利息</p>
                        <!--里面的一小项-->
                        <div class="information_container no_border" >
                            <div class="infor_left_elem smaller" style="width:8em;"  >投资(元)</div>
                            <div class="bigger" style="font-size:1em;line-height:70px;"><input class="ht32 ">元</div>
                        </div>
                        <!--里面的一小项-->
                        <!--里面的一小项-->
                        <div class="information_container no_border">
                            <div class="infor_left_elem smaller" style="width:8em;" >投资利率(年利率)</div>
                            <div class="bigger" style="font-size:1em;line-height:70px;"><input class="ht32">%</div>
                        </div>
                        <!--里面的一小项-->
                        <!--里面的一小项-->
                        <div class="information_container no_border">
                            <div class="infor_left_elem smaller" style="width:8em;" >投资时间(月)</div>
                            <div class="bigger" style="font-size:1em;line-height:70px;"><input class="ht32">月</div>
                        </div>
                        <!--里面的一小项-->
                        <!--里面的一小项-->
                        <div class="information_container no_border" style="height: 79px; margin-top: 22px;" >
                           <input type="submit" id="calculate_btn" value="计算">
                        </div>
                        <!--里面的一小项-->
                    </div>
                </div> 
</div>
<div class="clear-fix"></div>
<!-- <script type="text/javascript" src="./js/jquery.pin.js"></script> -->
<script type="text/javascript" src="./js/content-page.js"></script>
<?php
    require('footer.php');
?>