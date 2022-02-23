
$(document).ready(function () {

    $('.config-icon').click(function () {
        $('.submenu').hide();
        $('.nav-menu').slideToggle('fast');
        $('.tabs-bar .config-icon img').toggleClass('config-active-topbr');
        // $('.nav-menu .ul-main .li-item').removeClass('li-active-br');
        $('.nav-menu .ul-main .li-item').show().removeClass('li-active-br');;
    });

    $('.nav-menu .ul-main .li-item').click(function () {
        $('.li-item').find('svg path, svg ellipse, svg .st2, svg circle').attr('fill', 'white');
        $(this).find('svg .st2, svg circle, svg ellipse, svg path').css('stroke', '#ebb608');
        $(this).find('svg .st2, svg circle, svg ellipse, svg path').attr('fill', '#ebb608');
        $(this).toggleClass('li-active-br');

        $(".submenu").hide();
        $('.li-item').toggle();
        $(this).show();
        $($(this).attr('data-tab')).show();
    });

    // $('.dail-01').click(function () {
    //     $('.li-item').toggle();
    //     $(this).show();
    //     $('.dail-menu').toggle();
    // });

    $('.bezel-clr').click(function () {
        $('.color-menu').show();
    });

    $('.back-icon').click(function () {
        $('.color-menu').hide();
    });

    $('.color-box').click(function () {
        $('.color-box').removeClass('color-active');
        $(this).addClass('color-active');
    });



});