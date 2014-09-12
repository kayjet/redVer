<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/index-page.css">
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <script type="text/javascript" src="./js/common.js"></script>
<?php
    require('header.php');
?>
    <!--banner start-->
    <div class="rel htauto wd-auto" id="banner" style="overflow:hidden">
        <!--注：原长度为：4932px 而这边这个宽度，看需求而定，如果需要循环4张图片，那宽度就是4张图片的总长度x2，以此类推-->
        <div style="width:9864px;" >
            <!--如果需要填充图片，请在如下img中填充-->
            <img class="fl" src="./skin/visual01.png">
            <img class="fl"  src="./skin/visual01.png">
            <img class="fl"  src="./skin/visual01.png">
            <img class="fl"  src="./skin/visual01.png">
            <!--以下实为克隆的图层，和上一组完全一样，也就是当第一组图片完全滚出时，默认状态下背景就是一片白了-->
            <!--加了这一层图片的作用，是弥补那一大片刺眼的白，从而使人产生图片是在滚动的错觉。-->
            <img class="fl"  src="./skin/visual01.png">
            <img class="fl"  src="./skin/visual01.png">
            <img class="fl"  src="./skin/visual01.png">
            <img class="fl"  src="./skin/visual01.png">
            <!--p.s. 如果图片较多的话，可以用到jquery的clone方法。所谓无缝滚动，就是视差。也就是说，至少有一半的图片是完全一样的。-->
        </div>
    </div>
    <!--banner end-->
    <!--这个div只是定义一个颜色，没有任何实质作用，对布局也不影响-->
    <div class="abs ht32 wd100_" style="top:636px;">
        <div class="fl ht32" style="width:50%;background:black; "></div>
        <div class="fl ht32" style="width:50%;background: #c8c8c8;"></div>
    </div>
    <!--不影响end-->
    <!--滚动新闻start-->
    <div class="rel m0a wd1200 htauto" style="clear:both">
        <div id="news_silder_bar_left" class="fl"><span class="fr ftwhite mr140 f16 fb lh200">新闻动态</span></div>
        <div id="news_silder_bar_right" class="fl">
            <!--新闻填充在这里{ start-->
            <span class="fl  ml100 f16  lh200">新闻一</span>
            <span class="fl  ml100 f16  lh200">新闻二</span>
            <span class="fl  ml100 f16  lh200">新闻三</span>
            <!--end }新闻填充结束-->
        </div>
    </div>
    <!--滚动新闻end-->
   <div class="clear-fix"></div>
    <!--内容-->
    <div class="rel m0a wd1200 htauto">
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
                <div class="rel mt22 ">
                    <script type="text/javascript">
                        $(document).ready(function  (argument) {
                            // body...
                            $('.loading_content').eq(0).css('width','11%').text('11%');
                        })
                    </script>
                    <div class="loading_content">0</div>
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
                    <div class="loading_content" style="width:100%">0</div>
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

        <div class="clear-fix"></div>
        <!--充值按钮-->
        <div class="pay475 rel m0a mt90"></div>
        <!--充值按钮end-->

        <!--底部新闻栏 start-->
        <div id="news" class="rel m0a wd1000 htauto mt90 fls3">
            <!--底部左面新闻栏 { start-->
            <div class="fl mr40 wd460">
                <p class="f24">说明会新闻</p>
                <hr>
                <ul>
                    <li><span>2014.07.28</span><span>上海信於资产管理有限公司公告</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产管理有限公司新闻</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产管理有限公司说明会</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产公司产品说明</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产公司简介</span></li>
                </ul>
            </div>
            <!--end}底部左面新闻栏 -->
            <!--以下是右面-->
            <div >
                <p class="f24">说明会新闻</p>
                <hr>
                <ul>
                    <li><span>2014.07.28</span><span>上海信於资产管理有限公司公告</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产管理有限公司新闻</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产管理有限公司说明会</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产公司产品说明</span></li>
                    <li><span>2014.07.28</span><span>上海信於资产公司简介</span></li>
                </ul>
            </div>
            <!--右面 end-->
        </div>
        <!--底部新闻栏 end-->
    </div>
    <script type="text/javascript" src="./js/index-page.js"></script>
    <!--内容 end-->
    <div class="clear-fix"></div>
<?php
    require('footer.php');
?>