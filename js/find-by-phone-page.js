  $(document).ready(function  (argument) {
        var check = false;
    //�����ٴη���ʱ��
    var timeout = 15;
    //���õ������������Խ�࣬ʱ��Խ��
    var count = 1;
        var get_yzm = $('#sj_yzm');
           //��֤�����¼�
            get_yzm.click(function () {
                if (!check) {
                    $(this).attr("disabled", true);
                    check = true;
                    count = count + 1;
                    var timer = setInterval(function () {
                        if (timeout > 0) {
                            timeout = timeout - 1;
                            get_yzm.css('background', 'gray');
                            get_yzm.attr('value', timeout + '����ط�'); //span
                        } else {
                            timeout = 15 * count;
                            get_yzm.attr('value', '��ȡ��֤��'); //span
                            get_yzm.css('background', '#3498DB');
                            check = false;
                            get_yzm.attr("disabled", false);
                            clearInterval(timer);
                        }
                    }, 1000);
                }
            });
        var waring = $('.waring');
        var yesIcon = $('.yes_icon');
        waring.css('display','none');
        isUsernameRight('find_by_phone', waring.eq(0), yesIcon.eq(0));
         $('#to_email').click(function  (ev) {
            // body...
            window.location.href="findbyemail.php";
        });
        
        	$("#input_yzm").on('keyup',function () {
        		alert(1)
				$(this).val($(this).val().replace(/\D/g, ''));
				var a = $(this).val();
				if(a.length>6){
					$(this).val('');
				}
			})
    })