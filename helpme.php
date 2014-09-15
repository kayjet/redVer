<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
   <style type="text/css">
      .help-page-btn{
        width: 230px;
        height: 225px;
        border-radius: 15px;

      }
      .btn-color-two{
        background: url('./skin/帮助中心_03.png')  65px 30px no-repeat;
          background-color: #69c36b;
      }
      .btn-color-three{
          background: url('./skin/帮助中心_06.png')  75px 38px no-repeat;
          background-color: #6cc7d5;
      }
      .btn-color-four{
          background-color: #cdb16e;
      }
      .btn-text{
        bottom: 24px;
        left: 68px;
      }
      
   </style>
<?php
    require('header.php');
?>
  <div class="rel wd1200  m0a htauto fgray tc ">
    <br> <br> <br>
    <p class="mt90  f60b  lh32 ">帮助中心</p><br>
            <p class="fb f16 lh32">Q&A</p>
            <p class="f32">您能想到的问题</p>
            <p class="f32">都能在这得到完美的解答</p>
    <br><br><br><br><br><br> <br> <br>
  </div>
  <div class="rel wd1200 htauto m0a " style="border-top:black 1px solid;">
      <ul class="rel m0a wd1000 mt30">
          <li class="fl mr22">
            <div class="help-page-btn tabs_off rel">
              <div class="f24 ftwhite abs btn-text">我要理财</div>
            </div>
          </li>
          <li class="fl mr22">
            <div class="help-page-btn btn-color-two tc rel">
              <div class="f24 ftwhite abs btn-text">账户管理</div>
            </div>
          </li>
          <li class="fl mr22">
            <div class="help-page-btn btn-color-three tc rel">
               <div class="f24 ftwhite abs btn-text">安全保障</div>
            </div>
          </li>
          <li class="fl ">
            <div class="help-page-btn btn-color-four tc rel">
              <div class="f24 ftwhite abs btn-text">账户管理</div>
            </div>
          </li>
          <div class="clear-fix"></div>
      </ul>
      
      <ul class="mt30 rel wd1000 m0a ">
        <li class="fl mr10 ">
          <div class=" ht32 wd150 tabs_off lh200">新手必读</div>
        </li>
        <li class="fl mr10">
          <div class=" ht32 wd150 tabs_off lh200">产品介绍</div>
        </li>
        <li class="fl mr10">
          <div class=" ht32 wd150 tabs_off lh200">收益与费用</div>
        </li>
        <li class="fl mr10">
          <div class=" ht32 wd150 tabs_off lh200">优选理财计划</div>
        </li>
        <li class="fl mr10">
          <div class=" ht32 wd150 tabs_off lh200">散标投资</div>
        </li>
        <li class="fl ">
          <div class=" ht32 wd150 tabs_off lh200">债权转让</div>
        </li>
         <div class="clear-fix"></div>
      </ul>

      <div class="mt30 rel wd1000 m0a content">
        <div>11111111111111111111</div>
        <div>222222222222222</div>
        <div>33333333333333333333</div>
        <div>44444444444444444444444444</div>
        <div>5555555555555555</div>
        <div>6666666666666666666666666</div>
      </div>
  </div>
  <script type="text/javascript">
      $(document).ready(function  (argument) {
        // body...
        var content = $('.content').children();
        content.css('display','none');
        content.eq(0).css('display','block');
          var liTwo = $('ul').eq(2).find('div');
        liTwo.eq(0).addClass('common_btn_red ftwhite').removeClass('tabs_off');
          liTwo.each(function  (i,e) {
            // body...
              $(this).click(function  (ev) {
                // body...
                 content.css('display','none');
                  liTwo.removeClass('common_btn_red ftwhite').addClass('tabs_off');
                  liTwo.eq(i).addClass('common_btn_red ftwhite').removeClass('tabs_off');
                  content.eq(i).css('display','block');
              })
          })

      })
  </script>
<?php
    require('footer.php');
?>