
    $(document).ready(function (argument) {
    	var one;
        $.get("./contents/page-one.html",function(data){
        	one=data;
        	$('#ajax_load').empty();
        	$('#ajax_load').append(one);
        });
        // $("#content_right").pin()
        //��ȡtab��ť
        var tabs = $('.tabs');
        //Ϊtabs���class
        tabs.addClass('tabs_off');
        //������һ����ť
        tabs.eq(0).removeClass('tabs_off').addClass('common_btn_red ftwhite');
        //newһ������
        var arr = new Array();
        //4��ajax����
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
        //��4������push��������ȥ
        arr.push(loadPageOne, loadPageTwo, loadPageThree, loadPageFour);
        //ѭ��ÿ����ť����ִ����Ӧ�ĺ���
        tabs.each(function (i, e) {
            $(this).click(function (ev) {
                tabs.addClass('tabs_off').removeClass('common_btn_red ftwhite');
                $(this).removeClass('tabs_off').addClass('common_btn_red ftwhite');
                arr[i](); //��()��ԭ���ǣ���ȡֵ���ú���ʱ������ִ������
            })
        })
//       $(id)
         $('#money').on('keyup',function (ev) {
         	$(this).val($(this).val().replace(/\D/g, ''));
         })
        //���Ͷ�ʰ�ť֮����¼�
        $("#goal").click(function(){
        	if ($('#money').val()!="" && $('#money').val()%1000==0 &&$('#money').val()!=0) {//�ж�input���Ƿ�Ϊ��
        		var money = $('#money').val();
	        	$("#modal").css("display","block");
	        	$("#modal-white").load("./invest.php",{"money":money})
	        	$("#money").css('border','2px inset;');
        	} else{
        		alert("����ȷ��дͶ�ʽ��(���ֻ����1000��������)");
        		$("#money").css('border','1px red solid');
        		$("#money")[0].focus();//[0]�ǽ���ת��Ϊdom����
        	}
        })
        //�ر��¼�
        $("#modal-close-btn").click(function (ev) {
        	$("#modal").css('display','none');
        })
    })