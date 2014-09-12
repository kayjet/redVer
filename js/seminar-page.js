	$(document).ready(function (argument) {
		var m1 = $('#manager1'),
			m2 = $('#manager2'),
			m3 = $('#manager3'),
			arr = new Array();
		arr.push(m1, m2, m3);
		getIntrudoce(m1, "ajax.js", arr);
		getIntrudoce(m2, "ajax2.js", arr);
		getIntrudoce(m3, "ajax3.js", arr);
		//其实这3个json对象可以合并成一个，就像中国气象网那样。我这样做只是为了图方便……
	})

	/**请求josn返回数据方法*/
	function getIntrudoce(obj, json, arr) {
		obj.click(function () {
			//遍历头像将他们全部变淡
			for (var i = 0; i < arr.length; i++) {
				arr[i].css('opacity', '0.5');
			};
			//点哪个，哪个亮
			obj.css('opacity', '1');
			//获取放置介绍div
			var intrudoce = $('#manager_intrudoce').children(),
				//经理名div
				ajax_name_here = $('#ajax_name_here'),
				//职位div
				pro = $("#professor");
			//ajax
			$.getJSON(json, function (data) {
				//获取json对象
				var name = data.usname, //姓名
					professor = data.professor, //职位
					content = data.content; //个人简历
				ajax_name_here.text(''); //清空名字
				ajax_name_here.text(name); //写入名字字段
				pro.text(''); //清空职位字段
				pro.text(professor); //写入滋味字段
				intrudoce.text(''); //清空个人介绍
				for (var i = 0; i < intrudoce.length; i++) {
					intrudoce.eq(i).text(content[i]); //写入个人简历字段
				};
			});
		})
	}