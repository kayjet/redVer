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
    <p class="mt90  f60b  lh32 ">��������</p><br>
            <p class="fb f16 lh32">Q&A</p>
            <p class="f32">�����뵽������</p>
            <p class="f32">��������õ������Ľ��</p>
    <br><br><br><br><br><br> <br> <br>
  </div>
  <div class="rel wd1200 htauto m0a " style="border-top:black 1px solid;">
      <ul class="rel m0a wd1000 mt60" id="ul-one">
        <div class="hover-div abs"></div>
          <li class="fl mr22">
            <div class="help-page-btn  rel btn-color-one">
              <div class="f24 ftwhite abs btn-text">��Ҫ���</div>
            </div>
          </li>
          <li class="fl mr22">
            <div class="help-page-btn btn-color-two tc rel">
              <div class="f24 ftwhite abs btn-text">�˻�����</div>
            </div>
          </li>
          <li class="fl mr22">
            <div class="help-page-btn btn-color-three tc rel">
               <div class="f24 ftwhite abs btn-text">��ȫ����</div>
            </div>
          </li>
          <li class="fl ">
            <div class="help-page-btn btn-color-four tc rel">
              <div class="f24 ftwhite abs btn-text">�˻�����</div>
            </div>
          </li>
          <div class="clear-fix"></div>
      </ul>
      
      <ul class="mt60 rel wd1000 m0a ">
        <li class="fl mr10 ">
          <div class=" ht38 wd150 tabs_off lh250">���ֱض�</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">��Ʒ����</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">���������</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">��ѡ��Ƽƻ�</div>
        </li>
        <li class="fl mr10">
          <div class=" ht38 wd150 tabs_off lh250">ɢ��Ͷ��</div>
        </li>
        <li class="fl ">
          <div class=" ht38 wd150 tabs_off lh250">ծȨת��</div>
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
        /*��ȡ6����������*/
        var content = $('.content').children();
        /*��������*/
        content.css('display','none');
        /*���õ�һ����ʾ*/
        content.eq(0).css('display','block');
        /* ��ȡ�ڶ���liԪ��*/
         var liTwo = $('ul').eq(2).find('div');
         /*6����ť�ĵ���¼� ��ʼ*/
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
		/*����¼�����*/
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