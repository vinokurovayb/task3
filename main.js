$(document).ready(function() {
    $('[type="text"]').focusin(function () {
        // меняем позициу у нужного элемента
        $('.place').css('top', '1px')
        ;
    });
    $('[type="text"]').focusout(function () {
            // 1. Введено ли значение в input?
            // на основании проверки:
            // - если ввел, ничего не делать
            // - если не ввел, то вернуть все как было
        //  newVal == ""
        var newVal=$('[type="text"]')
        newVal == " " 
        if (newVal) {
            $('.place').css('top', '10px');
        } else {
            $('.place').css('top', '1px');
        }
    });
    // $('[type="password"]').attr('type', 'text');
    $('.pas img').click(function () {
        $('[type="password"]').val();
        if ('type', 'password') {
            $('[type="password"]').attr('type', 'text');
        } else {
            $('[type]').attr('type', 'password');
        }
    });
     // работа с меню
    var menu=$('nav')
    $('.menu_btn').click(function () {
        menu.slideToggle(300);
    })

});