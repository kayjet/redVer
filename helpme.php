<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/input-style.css">
    <link rel="stylesheet" type="text/css" href="./css/helpme-page.css">
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
      <ul class="rel m0a wd1000 mt60" id="ul-one">
        <div class="hover-div abs"></div>
          <li class="fl mr22">
            <div class="help-page-btn  rel btn-color-one">
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
      
      <ul class="mt60 rel wd1000 m0a ">
        <li class="fl mr10 ">
          <div class=" ht38 wd150 tabs_off lh250">新手必读</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">产品介绍</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">收益与费用</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">优选理财计划</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">散标投资</div>
        </li>
        <li class="fl ">
          <div class=" ht38 wd150 tabs_off lh250">债权转让</div>
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
        /*获取6个文章内容*/
        var content = $('.content').children();
        /*设置隐藏*/
        content.css('display','none');
        /*设置第一个显示*/
        content.eq(0).css('display','block');
        /* 获取第二个li元素*/
         var liTwo = $('ul').eq(2).find('div');
         /*6个按钮的点击事件 开始*/
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
		/*点击事件结束*/
    	$("#ul-one").find('li').each(function (i,e) {
	    		$(this).hover(function (ev) {
	    			var a = 232*i+20*i;
	    			$('.hover-div').css('left',a+'px');
//					$.to($('.hover-div'),1,{
//						'left':a
//					})
		    	},function (ev) {
		    		
		    	})
    	})
    })
  </script>
<?php
    require('footer.php');
?>