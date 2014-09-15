  $(document).ready(function (argument) {
    // body...
    // var a = $('.black a');
    // //当鼠标移动到a上，切换图片。其实是一整张图片，通过调整background-postion。
    // a.each(function (index, element) {
    //   a.eq(index).hover(function (e) {
    //     var f = index * -144;
    //     a.eq(index).css('background', 'url("./skin/color.png") ' + f + 'px' + ' 12px no-repeat');
    //   }, function (e) {
    //     a.eq(index).css('background', '')
    //   })
    // });
    //返回顶部按钮的事件监听
    $(window).on("scroll", function () {
      var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
      if (scrollBottom == 0 || scrollBottom==1 ) {//当屏幕大小为80%时,不知为何会有1像素的偏差。
        $('#go_top').show('slow');
      } else {
        $('#go_top').hide('slow');
      }
    });
    //返回顶部按钮的点击行为
    $('#go_top').click(function (e) {
      TweenLite.to($('body,html'), 1.5, {
        scrollTop: 0
      });
    });
    //微博和微信的二维码
    var wx = $('#wx');
    var wb = $('#wb');
      wx.hover(function (ev3) {
        $(this).css('margin-top', '70px');
        $(this).append('<div style="background:url(./skin/weixin.jpg) center no-repeat;' +
            'width:140px;height:139px; position:absolute;z-index:1000;top:25px;left:-120px;"></div>');
        TweenLite.to($(this).children(), 1, {
            'display': 'block',
            // 'left': '-100px',
            'top':'10px',
            'opacity': '1'
          });
      }, function (ev4) {
          // body...
          $(this).css('margin-top', '68px');
          $(this).empty();
      });
      wb.hover(function (ev3) {
          $(this).css('margin-top', '70px');
          $(this).append('<div style="background:url(./skin/weixin.jpg) center no-repeat;' +
            'width:140px;height:139px; position:absolute;z-index:1000;top:25px;left:-120px;"></div>');
          TweenLite.to($(this).children(), 1, {
              'display': 'block',
              'left': '-100px',
              'opacity': '1'
            });
        }, function (ev4) {
            // body...
            $(this).css('margin-top', '68px');
            $(this).empty();

        });
  });