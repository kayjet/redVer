/**
 * Created by Junfan.Shi on 2014/6/30.
 */


//�ж�������ַ��Ƿ�Ϊ����

function isPassword(_str) {
    var str = _str;
    if (str.length != 0) {
        reg = /^[a-zA-Z0-9_]{6,20}$/;
        if (!reg.test(str)) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

//�ж������EMAIL��ʽ�Ƿ���ȷ

function isEmail(_str) {
    var str = _str;
    if (str.length != 0) {
        reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        if (!reg.test(str)) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

function isPhone(_str) {
    var str = _str;
    if (str.length != 0) {
        reg = /^(13[0-9]{9})| (18[0-9]{9}) | (14[0-9]{9}) |(15[0-9]{9})$/
        if (reg.test(str) && str.length == 11) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}

function getClientHeight() {
    //�ɼ���
    var clientHeight = document.body.clientHeight; //���������Ĭ��ֵ
    if (navigator.userAgent.indexOf("MSIE 6.0") != -1) {
        clientHeight = document.body.clientHeight;
    } else if (navigator.userAgent.indexOf("MSIE") != -1) {
        //IE7 IE8
        clientHeight = document.documentElement.offsetHeight
    }

    if (navigator.userAgent.indexOf("Chrome") != -1) {
        clientHeight = document.body.clientHeight; //scrollHeight
    }
    return clientHeight;
}

function getClientWidth() {
    //�ɼ����
    var clientWidth = document.body.clientWidth; //���������Ĭ��ֵ
    if (navigator.userAgent.indexOf("MSIE 6.0") != -1) {
        clientWidth = document.body.clientWidth;
    } else if (navigator.userAgent.indexOf("MSIE") != -1) {
        //IE7 IE8
        clientWidth = document.documentElement.offsetWidth
    }

    if (navigator.userAgent.indexOf("Chrome") != -1) {
        clientWidth = document.body.scrollWidth;
    }
    return clientWidth;
}

function getScrollWith() {
    var wrap = setAttributes(document.createElement('div'), {
        style: {
            width: '200px',
            height: '200px',
            overflow: 'auto',
            position: 'absolute',
            visibility: 'hidden'
        }
    })
    var inner = setAttributes(document.createElement('div'), {
        style: {
            width: '100px',
            height: '2000px'
        }
    })
    document.body.appendChild(wrap);
    wrap.appendChild(inner);
    var w = wrap.offsetWidth - wrap.clientWidth;
    document.body.removeChild(wrap);
    wrap = null;
    inner = null;
    return w;
}

function setAttributes(elem, opts) {
    for (var key in opts) {
        if (typeof opts[key] == 'string') {
            elem[key] = opts[key];
        } else {
            if (!elem[key]) {
                elem[key] = {};
            }
            setAttributes(elem[key], opts[key]);
        }
    }
    return elem;
}

function getViewSizeWithoutScrollbar() { //������������
    return {
        width: document.documentElement.clientWidth,
        height: document.documentElement.clientHeight
    }
}

function getViewSizeWithScrollbar() { //����������
    if (window.innerWidth) {
        return {
            width: window.innerWidth,
            height: window.innerHeight
        }
    } else if (document.documentElement.offsetWidth == document.documentElement.clientWidth) {
        return {
            width: document.documentElement.offsetWidth,
            height: document.documentElement.offsetHeight
        }
    } else {
        return {
            width: document.documentElement.clientWidth + getScrollWith(),
            height: document.documentElement.clientHeight + getScrollWith()
        }
    }

}

function isUsernameRight(_id, warnObj, _yesIcon) {
    var id = '#' + _id;
    var username = '';
    var obj = warnObj;
    $(id).on('keyup', function () {
        $(id).val($(id).val().replace(/\D/g, ''));
        if ($(id).val().length > 11 || $(id).val() == '') {
            obj.css('display', 'block').text('�������ֻ���');
            $(id).css({
                'border': '1px red solid',
                'box-shadow': 'none',
                'background-color': '#FFFFCC'
            });
            _yesIcon.css('display', 'none');
            $(id).val('');
        } else {
            username = $(id).val();
            if (isPhone(username)) {
                _yesIcon.css('display', 'block');
                obj.css('display', 'none');
                $(id).css({
                    'border': '1px green solid',
                    'box-shadow': 'none',
                    'background-color': 'none'
                });
            }
        }
    });
}

function isPasswordRight(_id, warnObj, _yesIcon) {
    var id = '#' + _id;
    var obj = warnObj;
    var password = '';
    // var direction = _direction;
    $(id).on('keyup', function () {
        password = $(this).val()
        if (password.length > 12) {
            $(this).val('');
            // $(this).css('border','1px red solid');
        } else {
            if (!isPassword(password || password == null)) {
                obj.css('display', 'block').text('���������12λ֮���Ӣ����ĸ�����ֵ����');
                $(id).css({
                    'border': '1px red solid',
                    'box-shadow': 'none',
                    'background-color': '#FFFFCC'
                });
                _yesIcon.css('display', 'none');
            } else {
                _yesIcon.css('display', 'block');
                obj.css('display', 'none');
                $(id).css({
                    'border': '1px green solid',
                    'box-shadow': 'none',
                    'background-color': 'none'
                });
            }
        }
    });
}

function isPasswordSame(_thistId, _preId, warnObj, _yesIcon) {
    var _confirm = '';
    var sec = '';
    var obj = warnObj;
    // var direction = _direction;
    $(_thistId).on('keyup', function () {
        _confirm = $(_thistId).val();
        sec = $(_preId).val();
        if (_confirm.length > 12) {
            $(this).val('');
        } else {
            if (_confirm != sec || _confirm == '') {
                obj.css('display', 'block').text('�����������벻һ��');
                $(_thistId).css({
                    'border': '1px red solid',
                    'box-shadow': 'none',
                    'background-color': '#FFFFCC'
                });
                _yesIcon.css('display', 'none'); //yes.eq(3)
            } else {
                _yesIcon.css('display', 'block');
                obj.css('display', 'none');
                $(_thistId).css({
                    'border': '1px green solid',
                    'box-shadow': 'none',
                    'background-color': 'none'
                });

            }
        }
    });
}
function isEmailRight(_id, warnObj, _yesIcon) {
    var id = '#' + _id;
    var obj = warnObj;
    var email = '';
    $(id).on('keyup', function () {
        email = $(this).val()
        if (email.length > 26) {
            $(this).val('');
        } else {
            if (!isEmail(email)) {
                obj.css('display', 'block').text('����ȷ���������ַ');
                $(id).css({
                    'border': '1px red solid',
                    'box-shadow': 'none',
                    'background-color': '#FFFFCC'
                });
                _yesIcon.css('display', 'none');
            } else {
                _yesIcon.css('display', 'block');
                obj.css('display', 'none');
                $(id).css({
                    'border': '1px green solid',
                    'box-shadow': 'none',
                    'background-color': 'none'
                });
            }
        }
    });
}

function isYzmRight(_id,_id2, warnObj, _yesIcon) {
    var id = '#' + _id;
	var id2 = '#' + _id2;
    var obj = warnObj;
    var yzm = '';
    $(id).on('keyup', function () {
        yzm = $(this).val().toUpperCase();
        if (yzm.length > 4) {
            $(this).val(yzm.substr(0,4));
        } else {
            if (yzm!=$(id2).attr('value')) {
                obj.css('display', 'block').text('�밴����ʾ������֤��');
                $(id).css({
                    'border': '1px red solid',
                    'box-shadow': 'none',
                    'background-color': '#FFFFCC'
                });
                _yesIcon.css('display', 'none');
            } else {
                _yesIcon.css('display', 'block');
                obj.css('display', 'none');
                $(id).css({
                    'border': '1px green solid',
                    'box-shadow': 'none',
                    'background-color': 'none'
                });
            }
        }
    });
}


//ͨ��time��id����ȡ����ʱ ���ӣ�countDown("2014/9/1 10:11:04","#colockbox-first");2014-9-1������Ҳ����

function countDown(time, id, someFunc) {
    var tt = time.replace(/-/g, "/");
    var day_elem = $(id).find('.day');
    var hour_elem = $(id).find('.hour');
    var minute_elem = $(id).find('.minute');
    var second_elem = $(id).find('.second');
    var end_time = new Date(tt).getTime(), //�·���ʵ���·�-1
        sys_second = (end_time - new Date().getTime()) / 1000;
    var timer = setInterval(function () {
        if (sys_second > 1) {
            sys_second -= 1;
            var day = Math.floor((sys_second / 3600) / 24);
            var hour = Math.floor((sys_second / 3600) % 24);
            var minute = Math.floor((sys_second / 60) % 60);
            var second = Math.floor(sys_second % 60);
            day_elem.text(day); //������
            hour_elem.text(hour < 10 ? "0" + hour : hour); //����Сʱ
            minute_elem.text(minute < 10 ? "0" + minute : minute); //�������
            second_elem.text(second < 10 ? "0" + second : second); //������ɱ
        } else {
            clearInterval(timer);
            a();
        }
    }, 1000);
}


function time_xdif(time,divid,overtips){
    var tt = time.replace(/-/g, "/");
    var end_time = new Date(tt).getTime(), //�·���ʵ���·�-1
        sys_second = (end_time - new Date().getTime()) / 1000;
    var timer = setInterval(function () {
        if (sys_second > 1) {
            sys_second -= 1;
            var day = Math.floor((sys_second / 3600) / 24);
            var hour = Math.floor((sys_second / 3600) % 24);
            var minute = Math.floor((sys_second / 60) % 60);
            var second = Math.floor(sys_second % 60);
			$("#"+divid).text("����"+day+"��"+hour+"Сʱ"+minute+"��"+second+"��");
        } else {
			if (overtips!="" || overtips!=undefined){
				$("#"+divid).text(overtips);
			}else{
				$("#"+divid).text("����Ŀ�ѹ���");
			}
            clearInterval(timer);
        }
    }, 1000);
}
//ͨ��time��id����ȡ����ʱ ���ӣ�time_xdif("2014-9-1 10:11:04","#divid");



function getRandomCode() {
    // body...
    this.code = "";
    var codeLength = 4; //��֤��ĳ���   
    var selectChar = new Array(0, 1, 2, 3,
     4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E',
      'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 
      'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //���к�ѡ�����֤����ַ�����ȻҲ���������ĵ�   
    for (var i = 0; i < codeLength; i++) {
        var charIndex = Math.floor(Math.random() * 36);
        this.code += selectChar[charIndex];
    }
    return this.code;
}
