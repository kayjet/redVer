// JavaScript Document
$(document).ready(function (argument) {
	// body...
	var checkboxText = $('.lh10');
	//���ð�ť�Ƿ�����flag
	var check = false;
	//�����ٴη���ʱ��
	var timeout = 15;
	//���õ������������Խ�࣬ʱ��Խ��
	var count = 1;
	//��ȡ����div����
	var warnObj = $('.waring');
	//������ȫ������
	warnObj.css('display', 'none');
	//����
	var yesIcon = $('.yes_icon');
	//���ع���
	yesIcon.css('display', 'none');
	//��ȡ���е�checkbox
	var checkbox = $('.input_checkbox');
//	console.log($(".input_checkbox")[0])
//	document.getE
	//��֤�û����Ƿ���ȷ
	isUsernameRight('Tel', warnObj.eq(0), yesIcon.eq(0));
	//��֤����
	isPasswordRight('reg_password', warnObj.eq(2), yesIcon.eq(2));
	//�ж�2�����������Ƿ�һ��
	isPasswordSame('#reg_pass_confirm', '#reg_password', warnObj.eq(3), yesIcon.eq(3));
	//ע��btn�ĵ���¼�
	$('#reg_btn').click(function () {

		for (var i = 0; i < checkbox.length; i++) {
			if (checkbox[i].checked) {
				warnObj.eq(4).css('display', 'none');
				$('#reg_btn').attr('type','submit');
				break;
			}
			warnObj.eq(4).css('display', 'block').text('������ѡ��һ����Ȥ');

		}
	});
	//��֤�����¼�
	$('#yzm_btn').click(function () {
		if (!check) {
			$(this).attr("disabled", true);
			check = true;
			count = count + 1;
			var timer = setInterval(function () {
				if (timeout > 0) {
					timeout = timeout - 1;
					$('#yzm_btn').css('background', 'gray');
					$('#yzm_btn ').attr('value', timeout + '����ط�'); //span
				} else {
					timeout = 15 * count;
					$('#yzm_btn ').attr('value', '��ȡ��֤��'); //span
					$('#yzm_btn').css('background', '#FF9966');
					check = false;
					$('#yzm_btn ').attr("disabled", false);
					clearInterval(timer);
				}
			}, 1000);
		}
	});
	//checkboxText����¼�
	checkboxText.each(function  (i,e) {
		// ����С����ʽ
		$(this).css('cursor','pointer');
		//ѡ���¼�
		$(this).click(function  (argument) {
			// body...
			if (checkbox[i].checked) {
				checkbox[i].checked =false;
			}else{
				checkbox[i].checked=true;
			}
		})
	})
	//�ж��ֻ���֤��kaishi
		$("#sj_yzm").on('keyup',function () {
					$(this).val($(this).val().replace(/\D/g, ''));
					var a = $(this).val();
					if(a.length>6){
						$(this).val('');
					}
					if(false){
						yesIcon.eq(1).css('display','block');
					}else{
						$(this).css('border','1px red solid');
					}
			})
		
})