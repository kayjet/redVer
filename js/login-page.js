// JavaScript Document
        $(document).ready(function  (argument) {
            // body...
            var warnObj = $('.waring');
             warnObj.css('display','none');
            var yesIcon = $('.yes_icon');
            isUsernameRight('login_phone',warnObj.eq(0),yesIcon.eq(0));
            isPasswordRight('login_password',warnObj.eq(1),yesIcon.eq(1));
        })
