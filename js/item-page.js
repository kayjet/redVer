// JavaScript Document
$(document).ready(function () {
      //��ʼ��Ŀ�ͽ�����Ŀ��class����0��ʾ��ʼ��,1��ʾ������
      var itemz = $('.itemz');
      //TAB��ť
       var tabs = $('.tabs498');
       //ʹtab��ť�ĵ�һ�����
       tabs.eq(0).css({'background':'#da2a2c','font-weight':'bold'});
	   tabs.eq(1).css('color','#da2a2c');
       //���ؽ�����
       itemz.eq(1).css('display','none');
       //����tab��ť�Ķ���
       tabs.each(function(i,e){
          $(this).click(function(){
            //�������ɫ����ΪĬ��
            tabs.css({'background':'#e0e0e0 ','font-weight':'nomral'});
            //����Ϊ��������ʽ
            tabs.eq(i).css({'background':'#da2a2c ','font-weight':'bold','color':'white'});
			switch(i){
				case 0:
					tabs.eq(1).css('color','#da2a2c');
				break;
				case 1:
					tabs.eq(0).css('color','#da2a2c');
				break;	
			}
            //������Ŀ����
            itemz.css('display','none');
            //������Ŀ��ʾ 
            itemz.eq(i).css('display','block');
          });
       })
    })