
    $(document).ready(function (argument) {
    	var one;
        $.get("./contents/page-one.html",function(data){
        	one=data;
        	$('#ajax_load').empty();
        	$('#ajax_load').append(one);
        });
        // $("#content_right").pin()
        //获取tab按钮
        var tabs = $('.tabs');
        //为tabs添加class
        tabs.addClass('tabs_off');
        //点亮第一个按钮
        tabs.eq(0).removeClass('tabs_off').addClass('common_btn_red ftwhite');
        //new一个数组
        var arr = new Array();
        //4个ajax函数
        var loadPageOne = function () {
				$('#ajax_load').empty();
				$('#ajax_load').append(one);
        }
        var two;
        $.get("./contents/page-two.html",function (data) {
							two=data;	
		})
        var loadPageTwo = function () {
	        	$('#ajax_load').empty();
				$('#ajax_load').append(two);
        }
        var three;
          $.get("./contents/page-three.html",function (data) {
							three=data;
		})
        var loadPageThree = function () {
        		$('#ajax_load').empty();
				$('#ajax_load').append(three);
        }
        var four;
          $.get("./contents/page-four.html",function (data) {
							four=data;
		})
        var loadPageFour = function () {
        	$('#ajax_load').empty();
				$('#ajax_load').append(four);
//          $('#ajax_load').load("./contents/page-one.html");
        }
        //将4个函数push到数组中去
        arr.push(loadPageOne, loadPageTwo, loadPageThree, loadPageFour);
        //循环每个按钮，并执行相应的函数
        tabs.each(function (i, e) {
            $(this).click(function (ev) {
                tabs.addClass('tabs_off').removeClass('common_btn_red ftwhite');
                $(this).removeClass('tabs_off').addClass('common_btn_red ftwhite');
                arr[i](); //加()的原因是，当取值到该函数时，马上执行它。
            })
        })
//       $(id)
         $('#money').on('keyup',function (ev) {
         	$(this).val($(this).val().replace(/\D/g, ''));
         })
        //点击投资按钮之后的事件
        $("#goal").click(function(){
        	if ($('#money').val()!="" && $('#money').val()%1000==0 &&$('#money').val()!=0) {//判断input框是否为空
        		var money = $('#money').val();
	        	$("#modal").css("display","block");
	        	$("#modal-white").load("./invest.php",{"money":money})
	        	$("#money").css('border','2px inset;');
        	} else{
        		alert("请正确填写投资金额(金额只能是1000的整数倍)");
        		$("#money").css('border','1px red solid');
        		$("#money")[0].focus();//[0]是将它转化为dom对象
        	}
        })
        //关闭事件
        $("#modal-close-btn").click(function (ev) {
        	$("#modal").css('display','none');
        })
    })