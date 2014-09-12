    $(document).ready(function (argument) {
        //点击页面产品左面的图片，页面跳转
        $('.item_left').click(function (ev) {
            window.location.href = "content.php";
        })
        // banner移动
        // 获取banner子元素对象
        var banner = $('#banner').children('div');
        //定义margin-left的初始值
        var marginLeft = 0;
        //定义速度
        var speed = 10; //值越大速度越慢
        //移动函数
        var move = function (ev) {
            if (marginLeft == -4932) {
                marginLeft = 0;
            }
            marginLeft = marginLeft - 1;
            banner.css('margin-left', marginLeft);
        }
        //设置interval
        var s = setInterval(move, speed);
        //鼠标移动上去时候停止，移动下来时候开始。
        banner.hover(function (ev) {
            clearInterval(s);
        }, function (ev) {
            s = setInterval(move, speed);
        })
        //新闻滚动
        var newsBar = $('#news_silder_bar_right').children('span');
        //设置初始值
        var index = 0;
        //隐藏所有新闻
        newsBar.css('display', 'none');
        //显示最后一个
        newsBar.eq(2).css('display', 'block');
        //设置循环
        setInterval(function () {
            //当index超过2条时，重置index
            if (index > 2) {
                index = 0;
            }
            //将所有显示的新闻清空
            newsBar.css('display', 'none');
            //显示当前index的那条
            newsBar.eq(index).css('display', 'block');
            index = index + 1;
        },2000)
    })