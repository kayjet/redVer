<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/input-style.css">
	<link rel="stylesheet" type="text/css" href="./css/jifen-page.css">
<?php
	require('header.php');
?>
	<div class="rel wd1200 m0a mt22" >
		<!--左边栏-->
		<div class="fl wd332 rel">
			<div class="mh "><a href="mymoney.php" class="f16 lh200">投资信息</a></div>
			<div class="mh "><a href="myjifen.php" class="f16 lh200">玩转积分</a></div>
			<div class="mh "><a href="myinfo.php" class="f16 lh200">完善资料</a></div>
		</div>
		<!--左边栏end-->
		<div class="ml324" >
			<div class="rel fgray">
				<!--标题-->
				<div class="titleColor wd120 f16 lh200">我的资产</div>
				<!--标题-->
				<div class="fl one_elem mt30 mr40" style="border-right:1px solid #cbcbcb">
				<!--投资信息-->
					<p >总资产</p>
					<p class="f32 lh200" >1,000,000</p>
				</div>
				<div class="fl one_elem mt30 mr40" style="border-right:1px solid #cbcbcb">
					<p>本金</p>
					<p class="f32 lh200 ">1,000,000</p>
				</div>
				<div class="fl one_elem mt30">
					<p>收益</p>
					<p class="f32 lh200 fblue">5386.54</p>
				</div>
				<!--投资信息-->
				<div class="clear-fix"></div>
                <!--第一个进度条 start-->
				<div class="rel process_bar  mt30">
                	<!--百分比-->
					<div class="percent ftwhite">0</div>
                    <!--百分比 end-->
					<div class="process_bar_inner"></div>
				</div>
                <!--第一个进度条 end-->
				<a href="" class="fr mr140 mt10" >可支配金额比例</a>
			</div>
			<div>
				<div class="titleColor wd120 f16 lh200 mt41">资产明细</div>
				<!--伸缩列表的标题-->
				<div class="mt22 lh200 border wd760" id="accordion">
					<div class="fl wd120 ht32 indent_1half">产品名称</div> 
					<div class="fl wd100 ht32 tc">本金</div> 
					<div class="fl wd120 ht32 tc">收益</div> 
					<div class="fl wd120 ht32 tc">收益率</div> 
					<div class="fl wd120 ht32 tc">期限</div>
					<div class="fl wd100 ht32 tc">投资日期</div> 	
					<div class="clear-fix"></div> 	 	 	 	
				</div>
				<!--伸缩列表的标题end-->
				<!--第一项 start-->
				<div class="list_item1 lh200 wd760 boder-no-tb border-b" >
					<!--个人资产明细的item名字填充 start-->
					<div class="list_title"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						<div class="fl wd120 ht32 indent_1half sj">票据包001</div> 
						<div class="fl wd100 ht32 tc">20,000,000</div> 
						<div class="fl wd120 ht32 tc fblue">2644.54</div> 
						<div class="fl wd120 ht32 tc">10.6%</div> 
						<div class="fl wd120 ht32 tc">24个月</div>
						<div class="fl wd100 ht32 tc">2014-05-08</div> 	
					</div>
					<!--个人资产明细的item名字填充 end-->
					<div class="clear-fix"></div>
					<!--详细还款信息开始-->
					<div class="list_item_content collapse " id="collapseOne">
						<!--这一个div应该是固定不变的吧？-->
						<div class="item_tilte">
							<div class="fl wd120 ht32 indent_1half">还款时间</div> 
							<div class="fl wd100 ht32 tc">月份</div> 
							<div class="fl wd120 ht32 tc">月还款</div> 
							<div class="fl wd120 ht32 tc">月返还利息</div> 
							<div class="fl wd120 ht32 tc">月返还本金</div>
							<div class="fl wd100 ht32 tc">还款状态</div> 	
							<div class="clear-fix"></div>
						</div>
						<!--不变 end-->
						<!--个人资产明细的详细遍历在此-->
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						<!--个人资产明细的详细遍历在此 end-->
					</div>
					<!--详细还款信息end-->
				</div>
				<div class="clear-fix"></div>
				<!--第一项 end 遍历时，请务必把以上div一同遍历-->
				<!--第二项 start-->
				<div class="list_item2 lh200 wd760 boder-no-tb border-b" >
					<!--个人资产明细的item名字填充 start-->
					<div class="list_title"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						<div class="fl wd120 ht32 indent_1half sj">票据包001</div> 
						<div class="fl wd100 ht32 tc">20,000,000</div> 
						<div class="fl wd120 ht32 tc fblue">2644.54</div> 
						<div class="fl wd120 ht32 tc">10.6%</div> 
						<div class="fl wd120 ht32 tc">24个月</div>
						<div class="fl wd100 ht32 tc">2014-05-08</div> 	
						<div class="clear-fix"></div>
					</div>
					<!--个人资产明细的item名字填充 end-->
					
					<!--详细还款信息开始-->
					<div class="list_item_content collapse " id="collapseTwo">
						<!--这一个div应该是固定不变的吧？-->
						<div class="item_tilte">
							<div class="fl wd120 ht32 indent_1half">还款时间</div> 
							<div class="fl wd100 ht32 tc">月份</div> 
							<div class="fl wd120 ht32 tc">月还款</div> 
							<div class="fl wd120 ht32 tc">月返还利息</div> 
							<div class="fl wd120 ht32 tc">月返还本金</div>
							<div class="fl wd100 ht32 tc">还款状态</div> 	
							<div class="clear-fix"></div>
						</div>
						<!--不变 end-->
						
						<!--个人资产明细的详细遍历在此-->
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div>
							<div class="clear-fix"></div> 	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc yes_no_flag"><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						
						<div class="item_for_reach">
							<div class="fl wd120 ht32 indent_1half">2014年9月</div> 
							<div class="fl wd100 ht32 tc">第一月</div> 
							<div class="fl wd120 ht32 tc fblue">2644.54</div> 
							<div class="fl wd120 ht32 tc">10.6%</div> 
							<div class="fl wd120 ht32 tc">2500</div>
							<div class="fl wd100 ht32 tc "><img class="no_flag" src="./skin/x.png"><img class="yes_flag"src="./skin/yes.png"></div> 
							<div class="clear-fix"></div>	
						</div>
						<!--个人资产明细的详细遍历在此 end-->
					</div>
					
					<!--第二项 end-->
					<!--详细还款信息end-->
				</div>
			</div>
			<!--以下是新品推荐 start-->
			<div>
				<div class="titleColor wd120 f16 lh200 mt41">资产明细</div>
				<div class="rel  border mt22" id="money_page_item">
					<div class="mt10"><span class="f16 fb fgray mr22">票据包36号</span><span>[剩余时间:14天19时22分]</span></div>
					<div class="mt22">
						<div class="rel process_bar wd250 fl mt10">
							<div class="process_bar_inner"></div>
						</div>
						<div class="fl mt10 ml40 fgray">融资进度</div>
						<div class="fr common_btn_on wd200 ht32 mr40 lh200 f16 ftwhite fb">我要投资</div>
						<div class="clear-fix"></div>
					</div>
					<div class="mt22">
						<span>借款金额：</span><span>￥1.1万元</span>
						<span>年化收益：</span><span>11%</span>
						<span>融资期限</span><span>6个月</span>
						<span>发布日期</span><span>2014-08-04</span>
					</div>
				</div>
			</div>
			<!--以下是新品推荐 end-->
		</div>
	</div>
	<div class="clear-fix"></div>
	<script type="text/javascript">
		$(document).ready(function  (argument) {
			//设置进度条宽度 @width 是控制进度条的走向 @eq(0)是表示第一个进度条 第二个进度条可以用 eq(1)
			$('.process_bar_inner').eq(0).css('width','100%');
			//设置进度条中间的字 @left决定的是箭头的位置，有1%的偏差; @text()是传值，表示百分比
			$('.percent').css({'left':'99%','color':'#4475f6','text-align':'center','font-size':'12px'}).text('100%');
			//获取yes_flag对象
			var yes_flag =$('.yes_flag');
			//将所有的yes_flag隐藏
			yes_flag.css('display','none');
			//获取三角图标对象
			var sj = $('.sj');
			//获取子列表的标题
			var list_title =$('.list_title');
			//获取列表内容1和2对象
			var item1 = $('#collapseOne');
			var item2 = $('#collapseTwo')
			//new一个数组
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