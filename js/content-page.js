    $(document).ready(function (argument) {
        $('#ajax_load').load("./contents/page-one.html");
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
            $('#ajax_load').load("./contents/page-one.html");
        }
        var loadPageTwo = function () {
            $('#ajax_load').load("./contents/page-two.html");
        }
        var loadPageThree = function () {
            $('#ajax_load').load("./contents/page-three.html");
        }
        var loadPageFour = function () {
            $('#ajax_load').load("./contents/page-one.html");
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
    })