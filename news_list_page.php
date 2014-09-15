<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="./css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="./css/news-page.css">
    <style type="text/css">
        .bg_gray{
            background-color: #ececec;
            border-top: 1px solid #c0c0c0;
            border-bottom: 1px solid #c0c0c0;
        }
        .wd840{
            margin-left: 320px;
        }
        .news_list_item{
            /**/
            margin-top: 10px;
        }
        .border{
            border: 1px #b0b0b0 solid;
        }
        .btb{
            border-bottom: 2px solid  white;
        }
        .round-narrow{
            border: 1px solid #da2a2c;
            margin-top: 2px;
            border-radius: 12px;
            width: 12px;
            height: 12px;
        }
        .listcontainer{
            padding-top: 0px !important;
            padding: 12px;
        }
       
    </style>
<?php
    require('header.php');
?>
  <div class="rel wd1200 m0a mt22  " >
    <!--左面的动作条-->
        <ul class="fl bg_gray wd200 tc ml100 list-left">
            <li class="f16 lh200 btb">
                 <!-- <div>2014年</div> -->
                 <a href="">公司新闻</a>
             </li>
             <li class="f16 lh200">
                 <!-- <div>2014年</div> -->
                 <a href="">行业动态</a>
             </li>
        </ul>
     <!--左面的动作条 end-->
     <!--右面的列表 start-->
     <div class=" wd840 listcontainer bg_gray">
        <!--标题-->
         <p class="f32">公司新闻</p>
        <!--标题-->
        <ul >
               <!--列表中的1小项start-->
        <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
          <!--列表中的1小项start-->
          <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
          <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
          <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
        <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
        <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
           <!--列表中的1小项start-->
           <li class="news_list_item">
            <div class="round-narrow fl mr10"></div>
             <a href="news_page.php">
                <span>关于中国特战队的暂行条例关于中国特战队的暂行条例</span>
                <span class="ml40">2014.07.28</span>
            </a>
         </li>
         <!--列表中的1小项end-->
        </ul>
          <!--按钮-->
        <ul class="mr120 fl mt22">
             <li class="fr"><a href="">尾页</a></li>
             <li class="fr"><a href="">下一页</a></li>
             <li class="fr"><a href="">上一页</a></li>
             <li class="fr"><a href="">首页</a></li>
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
        // 设置默认情况下，下拉菜单为隐藏
        // var menu = $('.dropdown-toggle');
        // menu.dropdown('hide');
       
    })
  </script>
<?php
    require('footer.php');
?>