// JavaScript Document
$(document).ready(function () {
      //开始项目和结束项目的class对象，0表示开始项,1表示结束项
      var itemz = $('.itemz');
      //TAB按钮
       var tabs = $('.tabs498');
       //使tab按钮的第一项点亮
       tabs.eq(0).css({'background':'#da2a2c','font-weight':'bold'});
	   tabs.eq(1).css('color','#da2a2c');
       //隐藏结束项
       itemz.eq(1).css('display','none');
       //控制tab按钮的动作
       tabs.each(function(i,e){
          $(this).click(function(){
            //字体和颜色重置为默认
            tabs.css({'background':'#e0e0e0 ','font-weight':'nomral'});
            //设置为点亮的样式
            tabs.eq(i).css({'background':'#da2a2c ','font-weight':'bold','color':'white'});
			switch(i){
				case 0:
					tabs.eq(1).css('color','#da2a2c');
				break;
				case 1:
					tabs.eq(0).css('color','#da2a2c');
				break;	
			}
            //控制项目隐藏
            itemz.css('display','none');
            //控制项目显示 
            itemz.eq(i).css('display','block');
          });
       })
    })