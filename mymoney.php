<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/input-style.css">
	<link rel="stylesheet" type="text/css" href="./css/jifen-page.css">
<?php
	require('header.php');
?>
	<div class="rel wd1200 m0a mt22" >
		<!--�����-->
		<div class="fl wd332 rel">
			<div class="mh "><a href="mymoney.php" class="f16 lh200">Ͷ����Ϣ</a></div>
			<div class="mh "><a href="myjifen.php" class="f16 lh200">��ת����</a></div>
			<div class="mh "><a href="myinfo.php" class="f16 lh200">��������</a></div>
		</div>
		<!--�����end-->
		<div class="ml324" >
			<div class="rel fgray">
				<!--����-->
				<div class="titleColor wd120 f16 lh200">�ҵ��ʲ�</div>
				<!--����-->
				<div class="fl one_elem mt30 mr40" style="border-right:1px solid #cbcbcb">
				<!--Ͷ����Ϣ-->
					<p >���ʲ�</p>
					<p class="f32 lh200" >1,000,000</p>
				</div>
				<div class="fl one_elem mt30 mr40" style="border-right:1px solid #cbcbcb">
					<p>����</p>
					<p class="f32 lh200 ">1,000,000</p>
				</div>
				<div class="fl one_elem mt30">
					<p>����</p>
					<p class="f32 lh200 fblue">5386.54</p>
				</div>
				<!--Ͷ����Ϣ-->
				<div class="clear-fix"></div>
                <!--��һ�������� start-->
				<div class="rel process_bar  mt30">
                	<!--�ٷֱ�-->
					<div class="percent ftwhite">0</div>
                    <!--�ٷֱ� end-->
					<div class="process_bar_inner"></div>
				</div>
                <!--��һ�������� end-->
				<a href="" class="fr mr140 mt10" >��֧�������</a>
			</div>
			<div>
				<div class="titleColor wd120 f16 lh200 mt41">�ʲ���ϸ</div>
				<!--�����б�ı���-->
				<div class="mt22 lh200 border wd760" id="accordion">
					<div class="fl wd120 ht32 indent_1half">��Ʒ����</div> 
					<div class="fl wd100 ht32 tc">����</div> 
					<div class="fl wd120 ht32 tc">����</div> 
					<div class="fl wd120 ht32 tc">������</div> 
					<div class="fl wd120 ht32 tc">����</div>
					<div class="fl wd100 ht32 tc">Ͷ������</div> 	
					<div class="clear-fix"></div> 	 	 	 	
				</div>
				<!--�����б�ı���end-->
				<!--��һ�� start-->
				<div class="list_item1 lh200 wd760 boder-no-tb border-b" >
					<!--�����ʲ���ϸ��item������� start-->
					<div class="list_title"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						<div class="fl wd120 ht32 indent_1half sj">Ʊ�ݰ�001</div> 
						<div class="fl wd100 ht32 tc">20,000,000</div> 
						<div class="fl wd120 ht32 tc fblue">2644.54</div> 
						<div class="fl wd120 ht32 tc">10.6%</div> 
						<div class="fl wd120 ht32 tc">24����</div>
						<div class="fl wd100 ht32 tc">2014-05-08</div> 	
					</div>
					<!--�����ʲ���ϸ��item������� end-->
					<div class="clear-fix"></div>
					<!--��ϸ������Ϣ��ʼ-->
					<div class="list_item_content collapse " id="collapseOne">
						<!--��һ��divӦ���ǹ̶�����İɣ�-->
						<div class="item_tilte">
							<div class="fl wd120 ht32 indent_1half">����ʱ��</div> 
							<div class="fl wd100 ht32 tc">�·�</div> 
							<div class="fl wd120 ht32 tc">�»���</div> 
							<div class="fl wd120 ht32 tc">�·�����Ϣ</div> 
							<div class="fl wd120 ht32 tc">�·�������</div>
							<div class="fl wd100 ht32 tc">����״̬</div> 	
							<div class="clear-fix"></div>
						</div>
						<!--���� end-->
						<!--�����ʲ���ϸ����ϸ�����ڴ�-->
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						<!--�����ʲ���ϸ����ϸ�����ڴ� end-->
					</div>
					<!--��ϸ������Ϣend-->
				</div>
				<div class="clear-fix"></div>
				<!--��һ�� end ����ʱ������ذ�����divһͬ����-->
				<!--�ڶ��� start-->
				<div class="list_item2 lh200 wd760 boder-no-tb border-b" >
					<!--�����ʲ���ϸ��item������� start-->
					<div class="list_title"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						<div class="fl wd120 ht32 indent_1half sj">Ʊ�ݰ�001</div> 
						<div class="fl wd100 ht32 tc">20,000,000</div> 
						<div class="fl wd120 ht32 tc fblue">2644.54</div> 
						<div class="fl wd120 ht32 tc">10.6%</div> 
						<div class="fl wd120 ht32 tc">24����</div>
						<div class="fl wd100 ht32 tc">2014-05-08</div> 	
						<div class="clear-fix"></div>
					</div>
					<!--�����ʲ���ϸ��item������� end-->
					
					<!--��ϸ������Ϣ��ʼ-->
					<div class="list_item_content collapse " id="collapseTwo">
						<!--��һ��divӦ���ǹ̶�����İɣ�-->
						<div class="item_tilte">
							<div class="fl wd120 ht32 indent_1half">����ʱ��</div> 
							<div class="fl wd100 ht32 tc">�·�</div> 
							<div class="fl wd120 ht32 tc">�»���</div> 
							<div class="fl wd120 ht32 tc">�·�����Ϣ</div> 
							<div class="fl wd120 ht32 tc">�·�������</div>
							<div class="fl wd100 ht32 tc">����״̬</div> 	
							<div class="clear-fix"></div>
						</div>
						<!--���� end-->
						
						<!--�����ʲ���ϸ����ϸ�����ڴ�-->
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014��9��</div> 
							<div class="fl wd100 ht32 tc">��һ��</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc "><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						<!--�����ʲ���ϸ����ϸ�����ڴ� end-->
					</div>
					
					<!--�ڶ��� end-->
					<!--��ϸ������Ϣend-->
				</div>
			</div>
			<!--��������Ʒ�Ƽ� start-->
			<div>
				<div class="titleColor wd120 f16 lh200 mt41">�ʲ���ϸ</div>
				<div class="rel  border mt22" id="money_page_item">
					<div class="mt10"><span class="f16 fb fgray mr22">Ʊ�ݰ�36��</span><span>[ʣ��ʱ��:14��19ʱ22��]</span></div>
					<div class="mt22">
						<div class="rel process_bar wd250 fl mt10">
							<div class="process_bar_inner"></div>
						</div>
						<div class="fl mt10 ml40 fgray">���ʽ���</div>
						<div class="fr common_btn_on wd200 ht32 mr40 lh200 f16 ftwhite fb">��ҪͶ��</div>
						<div class="clear-fix"></div>
					</div>
					<div class="mt22">
						<span>����</span><span>��1.1��Ԫ</span>
						<span>�껯���棺</span><span>11%</span>
						<span>��������</span><span>6����</span>
						<span>��������</span><span>2014-08-04</span>
					</div>
				</div>
			</div>
			<!--��������Ʒ�Ƽ� end-->
		</div>
	</div>
	<div class="clear-fix"></div>
	<script type="text/javascript">
		$(document).ready(function  (argument) {
			//���ý�������� @width �ǿ��ƽ����������� @eq(0)�Ǳ�ʾ��һ�������� �ڶ��������������� eq(1)
			$('.process_bar_inner').eq(0).css('width','100%');
			//���ý������м���� @left�������Ǽ�ͷ��λ�ã���1%��ƫ��; @text()�Ǵ�ֵ����ʾ�ٷֱ�
			$('.percent').css({'left':'99%','color':'#4475f6','text-align':'center','font-size':'12px'}).text('100%');
			//��ȡyes_flag����
			var yes_flag =$('.yes_flag');
			//�����е�yes_flag����
			yes_flag.css('display','none');
			//��ȡ����ͼ�����
			var sj = $('.sj');
			//��ȡ���б�ı���
			var list_title =$('.list_title');
			//��ȡ�б�����1��2����
			var item1 = $('#collapseOne');
			var item2 = $('#collapseTwo')
			//newһ������
			var arr = new Array();
			arr.push(item1,item2);
			list_title.each(function  (i,e) {
				// body...
				$(this).click(function  (ev) {
					// body...
					if(arr[i].css('display')!='none'){
						sj.eq(i).css('background','url("./skin/sanjiao_r.png") 5px no-repeat;');
					}else{
						sj.eq(i).css('background','url("./skin/sanjiao.png") 5px no-repeat');
					}
				})
			});
			
		})
	</script>
<script type="text/javascript" src="./js/transition.js"></script>
<script type="text/javascript" src="./js/collapse.js"></script>
<?php
	require('footer.php');
?>