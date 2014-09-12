<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/index-page.css">
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="./css/index-page.css">
    <style type="text/css">
      .ml2{
        margin-left: 2px;
      }
    </style>
<?php
    require('header.php');
?>
  <div class="rel wd1200 m0a mt90  tc">
        <br> <br> <br>
        <p class="f60b  lh32">理财专区</p>
        <br>
        <p class="fb f16 lh32">ITEM</p>
        <p class="f32 lh32">现有投资项目和历史投资项目一览</p>
        <br> <br> <br>
  </div>
  <!--tabs切换按钮start-->
  <div class="rel wd1200 m0a mt90 tc ">
    <div class="fl tabs498 ml100 pt12 f16 ftwhite">正在进行的的投资项目</div>
    <div class="fl tabs498 ml2 pt12 f16 ftwhite">已经结束的投资项目</div>
  </div>
  <!--tabs切换按钮end-->
  <div class="clear-fix"></div>
  <!---正在进行的投标start-->
  <div  class="wd1000 rel m0a mt22 itemz" >
        <!--item-->
        <div class="item_container">
            <div class="item_left fl" style="background:url(images/f940ef38ac9309d1f91a1805241b381c.gif)">
                <!--倒计时div开始-->
                <div class="time_olock_b">
                	中小企业支援型理财产品1号<br/>3个月，预期收益8%<br/>
                	<span id="test1"></span>
                     <script type="text/javascript">
                    	time_xdif("2014/10/1","test1");
                    </script>
                </div>
                <!--倒计时div结束-->
            </div>
            
            <div class="item_right">
                <div class="mt22">
                      <!--填充各种保障方式{ start-->
                    <span >票程总汇</span> 
                    <span class="fr item_span_bg mr22">保障方式</span>
                    <span class="fr item_span_bg ">银行承诺</span>
                     <!-- end }填充各种保障方式-->
                </div>
                <div class="mt22">
                    <!--填充产品名称{ start-->
                    <p class="f24 fls3">中小企业支援型理财产品1号</p>
                    <p class="f24 fls3">(3个月)</p>
                    <!--end }填充产品名称-->
                </div>
                <div class="mt22">
                    <p >
                        <!--填充年化收益率{ start-->
                        <span class="f12">年化收益率</span>
                        <span class="ml100 f12">产品期限</span>
                        <span class="fr f12 mr120">产品总额</span>
                        <!--end }填充年化收益率-->
                    </p>
                    <p >
                        <span class="bp">8%</span>
                        <span class="bp ml100 mr40">12个月</span>
                        <span class="bp  fr wd200">￥500,000,000</span>
                    </p>
                </div>
                <!--以下是进度条-->
                <div class="rel mt22 " >
                    <script type="text/javascript">
                        $(document).ready(function  (argument) {
                            // body...
                            $('.loading_content').eq(0).css('width','11%').text('11%');
                        })
                    </script>
                    <div class="loading_content" style="">0</div>
                </div>
                <!--进度条end-->
                <!--填充解释{ start-->
                <div class="mt22 mr40 pb22">
                    <p>这是一个很好的理财产品<br>发家致富就靠他了</p>
                </div>
                <!--end }填充解释-->
            </div>
        </div>
        <!--item end-->
        <!--item-->
        <div class="item_container">
            <div class="item_left fl" style="background:url(images/20081210105627994_2.gif)">
                <!--倒计时div开始-->
                <div class="time_olock_b">
                	中小企业支援型理财产品1号<br/>3个月，预期收益8%<br/>
                	<span id="test2"></span>
                     <script type="text/javascript">
                    	time_xdif("2014/10/1","test2");
                    </script>
                </div>
                <!--倒计时div结束-->
            </div>
            <div class="item_right">
                <div class="mt22">
                    <span >票程总汇</span> 
                    <span class="fr item_span_bg mr22" style="border-radius:5px">保障方式</span>
                    <span class="fr item_span_bg " style="border-radius:5px">银行承诺</span>
                </div>

                <div class="mt22">
                    <p class="f24 fls3">中小企业支援型租赁宝1号</p>
                    <p class="f24 fls3">(3个月)</p>
                </div>
                <div class="mt22">
                    <p >
                        <span class="f12">年化收益率</span>
                        <span class="ml100 f12">产品期限</span>
                        <span class="fr f12 mr120">产品总额</span>
                    </p>
                    <p >
                        <span class="bp mr10">8%</span>
                        <span class="bp ml100 mr40">3个月</span>
                        <span class="bp fr wd200">￥50,000</span>
                    </p>
                </div>
                <!--以下是进度条-->
                
                <div class="rel mt22 ">
                <div style=" padding:3px; border:1px #E1E1E1 solid;border-radius:5px">
                    <div class="loading_content">0</div>
                </div>
                </div>
                
                <script type="text/javascript">
					$(document).ready(function  (argument) {
						// body...
						$('.loading_content').eq(1).css('width','100%').text('100%');
					})
				</script>
                <!--进度条end-->
                <div class="mt22 mr40 pb22">
                    <p>安全、可靠、灵活、高收益<br/>散户理财的不二选择，普大喜奔吧！</p>
                </div>
            </div>
        </div>
        <!--item end-->
  </div>
  <!---正在进行的投标end-->
  <!--已经结束的start-->
  <div  class="wd1000 rel m0a mt22 itemz" >
     	<!--item-->
        <div class="item_container">
            <div class="item_left fl" style="background:url(images/20081210105627994_2.gif)">
                <!--倒计时div开始-->
                <div class="time_olock_b">
                	中小企业支援型理财产品1号<br/>3个月，预期收益8%<br/>
                	<span id="test2"></span>
                     <script type="text/javascript">
                    	time_xdif("2014/10/1","test2");
                    </script>
                </div>
                <!--倒计时div结束-->
            </div>
            <div class="item_right">
                <div class="mt22">
                    <span >票程总汇</span> 
                    <span class="fr item_span_bg mr22" style="border-radius:5px">保障方式</span>
                    <span class="fr item_span_bg " style="border-radius:5px">银行承诺</span>
                </div>

                <div class="mt22">
                    <p class="f24 fls3">中小企业支援型租赁宝1号</p>
                    <p class="f24 fls3">(3个月)</p>
                </div>
                <div class="mt22">
                    <p >
                        <span class="f12">年化收益率</span>
                        <span class="ml100 f12">产品期限</span>
                        <span class="fr f12 mr120">产品总额</span>
                    </p>
                    <p >
                        <span class="bp mr10">8%</span>
                        <span class="bp ml100 mr40">3个月</span>
                        <span class="bp fr wd200">￥50,000</span>
                    </p>
                </div>
                <!--以下是进度条-->
                
                <div class="rel mt22 ">
                <div style=" padding:3px; border:1px #E1E1E1 solid;border-radius:5px">
                    <div class="loading_content" style="width:100%">0</div>
                </div>
                </div>
                
                <script type="text/javascript">
					$(document).ready(function  (argument) {
						// body...
						$('.loading_content').eq(2).css('width','81%').text('81%');
					})
				</script>
                <!--进度条end-->
                <div class="mt22 mr40 pb22">
                    <p>安全、可靠、灵活、高收益<br/>散户理财的不二选择，普大喜奔吧！</p>
                </div>
            </div>
        </div>
        <!--item end-->
  </div>
  <!--已经结束的end-->
  <script type="text/javascript" src="./js/item-page.js"></script>
<?php
    require('footer.php');
?>