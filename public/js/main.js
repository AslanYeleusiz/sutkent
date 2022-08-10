$('.mb_bg').on('click', () => {
    $('.mb_bg').fadeOut(300);
    $('.mb_menu_block').slideUp(300);
});
$('.exitBtn').on('click', () => {
    $('.mb_bg').fadeOut(300);
    $('.mb_menu_block').slideUp(300);
    $('.loginer').fadeOut(300);
    $('.popup').fadeOut(300);
});
$('.menuBtn').on('click', () => {
    $('.mb_bg').fadeIn(300);
    $('.mb_menu_block').slideDown(300);
});
$('.phone_musk').mask("+7(799) 999 99-99");

$('.phone_musk').on('focus', () => {
    if ($('.phone_musk').val() === '') $('.phone_musk').val('+7(7');
});
$('.phone_musk').on('focusout', () => {
    if ($('.phone_musk').val() === '+7(7') $('.phone_musk').val('');
});
$('.loginer .head .login').on('click', () => {
    $('.loginer .head .login').addClass('active');
    $('.loginer .head .register').removeClass('active');
    $('.loginer .body .login').addClass('active');
    $('.loginer .body .register').removeClass('active');

});
$('.loginer .head .register').on('click', () => {
    $('.loginer .head .register').addClass('active');
    $('.loginer .head .login').removeClass('active');
    $('.loginer .body .login').removeClass('active');
    $('.loginer .body .register').addClass('active');
});
$('body').on('click', '.eye', (e) => {
    e.preventDefault();

    var obj = $(e.target).closest(".secret").find('input');
    console.log(obj[0]);
    if (obj[0].type === 'password') {
        obj[0].type = 'text';
        $(e.target).addClass('active');
    } else {
        obj[0].type = 'password';
        $(e.target).removeClass('active');
    }
});
$('.loginBtn').on('click', () => {
    $('.loginer').fadeIn(300);
});

$('.suret').on('click', function () {
    $('.carousel-item').removeClass('active');
    $('.carousel-item').eq($(this).index()).addClass('active');
    $('.popup').fadeIn(300);
});
$('body').on('click','.popup',function (e) { // событие клика по веб-документу
    var div = $("#popup"); // тут указываем ID элемента
    if (!div.is(e.target) // если клик был не по нашему блоку
        &&
        div.has(e.target).length === 0) { // и не по его дочерним элементам
        $('.popup').fadeOut(300);
    }
});
