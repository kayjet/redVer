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
    <!--����Ķ�����-->
        <ul class="fl  wd175 tc ml100   news_list_bar " >
            <li class="f16 lh200 ">
                 <a href="" style="color: white;">��˾����</a>
             </li>
             <li class="f16 lh200">
                 <a href="">��ҵ��̬</a>
             </li>
        </ul>
     <!--����Ķ����� end-->
     <!--������б� start-->
     <div class=" wd840 listcontainer ">
        <!--����-->
         <p class="f16 fb lh200">��˾����</p>
         <div class="btb mt22"></div>
        <!--����-->
        <ul class="mt30 ml18" >
               <!--�б��е�1С��start-->
        <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page2.php">
                <span>�����й���ս�ӵ���������</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--�б��е�1С��end-->
          <!--�б��е�1С��start-->
          <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>�����й���ս�ӵ��������������й���ս�ӵ���������</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--�б��е�1С��end-->
           <!--�б��е�1С��start-->
          <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>�����й���ս�ӵ��������������й���ս�ӵ��������������й���ս�ӵ���������</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--�б��е�1С��end-->
           <!--�б��е�1С��start-->
          <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>�����й���ս�ӵ��������������й���ս�ӵ���������</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--�б��е�1С��end-->
           <!--�б��е�1С��start-->
        <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>�����й���ս�ӵ���������</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--�б��е�1С��end-->
         
           <!--�б��е�1С��start-->
           <li class="news_list_item">
            <!--<div class="round-narrow fl mr10"></div>-->
             <a href="news_page.php">
                <span>�����й���ս�ӵ��������������й���ս�ӵ���������</span>
                <span class="ml40 fr">2014.07.28</span>
            </a>
         </li>
         <!--�б��е�1С��end-->
        </ul>
          <!--��ť-->
        <ul class="mr120 fl mt30 ml100 ">
             <li class="fr "><a href="">βҳ</a></li>
             <li class="fr mr22"><a href="">��һҳ</a></li>
             <li class="fr mr140"><a href="">��һҳ</a></li>
             <li class="fr ml100  mr22"><a href="">��ҳ</a></li>
        </ul>
     <!--��ť-->
     </div>
     <!--������б� end-->
    
  </div>
  <div class="clear-fix"></div>
  <!--�Ѿ�������end-->
 <script type="text/javascript" src="./js/dropdown.js"></script>
  <script type="text/javascript">
    $(document).ready(function  (argument) {
        $(".news_list_bar").find('li').eq(0).css("background","url('./skin/left1.png') center no-repeat");
    })
  </script>
<?php
    require('footer.php');
?>