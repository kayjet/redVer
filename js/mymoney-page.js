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
						sj.eq(i).css('background','url("./skin/sanjiao_r.png") 5px no-repeat');
					}else{
						sj.eq(i).css('background','url("./skin/sanjiao.png") 5px no-repeat');
					}
				})
			});
			$("#tz").click(function () {
	        	$("#modal").css("display","block");
	        	$("#modal-white").load("./invest.php",{"money":0});
			})
			 //�ر��¼�
        $("#modal-close-btn").click(function (ev) {
        	$("#modal").css('display','none');
        })
		})