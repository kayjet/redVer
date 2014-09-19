<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="./css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="./css/news-page.css">
	<link rel="stylesheet" type="text/css" href="css/news-list.css"/>
<?php
    require('header.php');
?>
  <div class="rel wd1200 m0a mt22  " >
  	<div style="position: absolute;right: 0px; width: 15px; height: 15px;background: red;"
  	onclick="a()"></div>
  	<script type="text/javascript">
  		function a(){
  				$('body').css('background','none');

  		}
  	</script>
    <!--左面的动作条-->
        <ul class="fl  wd175 tc ml100   news_list_bar " >
            <li class="f16 lh200 ">
                 <a href="" style="color: white;">公司新闻</a>
             </li>
             <li class="f16 lh200">
                 <a href="">行业动态</a>
             </li>
        </ul>
     <!--左面的动作条 end-->
     <!--右面的列表 start-->
     <div class=" wd840 listcontainer ">
        <!--标题-->
         <p class="f16 fb lh200">公司新闻</p>
         <div class="btb mt22"></div>
        <!--标题-->
        <ul class="mt30 ml18" >
               <!--列表中的1小项start-->
        <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page2.php">
                <span>关于中国特战队的暂行条例</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
          <!--列表中的1小项start-->
          <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
          <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
          <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
        <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
         
           <!--列表中的1小项start-->
           <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
        </ul>
          <!--按钮-->
        <ul class="mr120 fl mt30 ml100 ">
             <li class="fr "><a href="">尾页</a></li>
             <li class="fr mr22"><a href="">下一页</a></li>
             <li class="fr mr140"><a href="">上一页</a></li>
             <li class="fr ml100  mr22"><a href="">首页</a></li>
        </ul>
     <!--按钮-->
     </div>
     <!--右面的列表 end-->
    
  </div>
  <div class="clear-fix"></div>
  <!--已经结束的end-->
 <script type="text/javascript" src="./js/dropdown.js"></script>
  <script type="text/javascript">
    $(document).ready(function  (argument) {
        $(".news_list_bar").find('li').eq(0).css("background","url('./skin/left1.png') center no-repeat");
    })
  </script>
<?php
    require('footer.php');
?>