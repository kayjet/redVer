$(document).ready(function  (argument) {
        var pic_yzm = $('#get_yzm');
        pic_yzm.attr('value',getRandomCode()).click(function  (ev) {
            $(this).attr('value',getRandomCode());
        });
		var waring = $('.waring');
		waring.css('display','none');
		var yes_icon = $('.yes_icon');
		yes_icon.eq(0).css('right',195);
		isEmailRight('find_by_email',waring.eq(0),yes_icon.eq(0));
		isYzmRight('user_input_yzm','get_yzm',waring.eq(1),yes_icon.eq(1));


        $('#to_phone').click(function  (ev) {
            // body...
            window.location.href="findbyphone.php";
        });
    })