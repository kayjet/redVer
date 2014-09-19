	$(document).ready(function (argument) {
		// body...
		var yes_icon = $('.yes_icon');
		var waring = $('.waring');

		yes_icon.css('display', 'none');
		waring.css('display', 'none');
		var checkboxText = $('.reg_item_container').find('.lh10');
		var checkbox = $('.input_checkbox');
		//checkboxText点击事件
		checkboxText.each(function (i, e) {
			// 设置小手样式
			$(this).css('cursor', 'pointer');
			//选中事件
			$(this).click(function (argument) {
				// body...
				if (checkbox[i].checked) {
					checkbox[i].checked = false;
				} else {
					checkbox[i].checked = true;
				}
			})
		})
		/*判断事件结束*/

		var cityName; //定义城市名
		var data;//定义data
		 $(document).load('./xml/city.xml', function (d) {
		 	data = d;//获取data
		 });
		/**加载省名*/
		$('#provinceName').load('./xml/province.xml', function (data) {
			var provinceNameNode = $(data).children(); //获取节点
			if(provinceNameNode.length==0){
				//兼容ie8 ，我日死，此处省略一万字
				var a = $.parseXML(data);
				provinceNameNode = $(a).children();
			}
			provinceName = provinceNameNode.find('ProvinceName'); //获取省名节点
			for (var i = 0; i < provinceName.length; i++) {
				$('#provinceName').append('<option>' + provinceName.eq(i).text() + '</option>'); //获取省名
			}
			$('#adress').attr("value", $('#provinceName').find("option:selected").text());
		});

		$('#provinceName').click(function (argument) {
			// body...
			cityName = new Array(); //初始化成名
			$('#cityName').empty();
				var pName = $(data).find('ProvinceName'); //获取省名
				if(pName.length==0){
						//兼容ie8 ，我日死，此处省略一万字
					var a = $.parseXML(data);
					pName = $(a).find('ProvinceName');
				}
				var selectedProvinceName = $('#provinceName').find("option:selected").text(); //jquery获取select选择的文本与值，获取省名
				pName.each(function (i, e) { //jquery的each函数
					if (pName.eq(i).text() == selectedProvinceName) { //判断省名处在哪个节点上
						cityName.push(pName.eq(i).prev().prev()); //根据省名找到先前的两个节点
					};
				})
				for (var i = 0; i < cityName.length; i++) {
					//console.log(cityName[i].text());
					//注意，以下遍历的是数组，请不要使用eq()方法
					$('#cityName').append('<option>' + cityName[i].text() + '</option>'); //遍历并输出省名
				}
				var str5 = $('#cityName').find("option:selected").text();
				if (selectedProvinceName!=str5) {
					$('#adress').attr("value", selectedProvinceName+str5);
				}else{
					$('#adress').attr("value", selectedProvinceName);
				}
				
		})

		$('#cityName').click(function (argument) {
			var str3 = $('#cityName').find("option:selected").text();
			var str4 = $('#provinceName').find("option:selected").text();
			if (str3 == str4) {
				$('#adress').attr("value", str3);
			} else {
				$('#adress').attr("value", str4 + str3);
			}

		})
		/*ajax结束*/
		var waring = $('.waring');
		var yes = $('.yes_icon');
		// alert($('form').serialize());
//		 alert(JSON.stringify($('form').serializeArray()))
		isEmailRight("email",waring.eq(1),yes.eq(1));
		isUsernameRight('Tel',waring.eq(0),yes.eq(0));
		//判断checkbox至少选中一项
		$('#submit').click(function () {
				for (var i = 0; i<checkbox.length; i++) {
					if (checkbox[i].checked) {
					waring.eq(4).css('display', 'none');
					try{
						$(this).attr('type','submit');
					}catch(e){
						//此处兼容IE下面不能提交的问题,
						//方法是，当判断正确后自动触发隐藏的btn进行提交
						//因为IE8不支持修改attribute属性
							$("#ie").click();
					}
//					if(yes.css('display')=='block'){
//							$(this).attr('type','submit');
//					}else{
//						yes.each(function (i,e) {
//							if($(this).css('display')=='none'){
//								$(this).css('border','1px red solid')
//							}
//						})
//					}
					
					break;
				}
				waring.eq(4).css('display', 'block').text('请至少选择一项兴趣');
			}

		})
	})