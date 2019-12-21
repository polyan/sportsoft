var inPass = false;

$('#loginform-password').click(function () {
    plushkaAnimateShow('#plushka');
    plushkaAnimateShow('#plushka-2');
});

$('#loginform-password').focusout(function () {
    if (inPass) {
        plushkaAnimateHide('#plushka', 95);
        plushkaAnimateHide('#plushka-2', 122);
    }
});

function plushkaAnimateShow(name) {
    $(name).css('display', 'block');
    inPass = true;
}

function plushkaAnimateHide(name, top) {
    $(name).animate({
        top: '210px',
        opacity: '0'
    }, 200, function () {
        $(name).css('display', 'none');
        $(name).css('top', top + 'px');
        $(name).css('opacity', '.9');
        inPass = false;
    });
}

$('#loginform-username').on('input', function () {
    $('#login-len').html($(this).val());
    $('#plushka-login').css('left', (23 + ($('#login-len').width() / 210) * 10) + "px");
    $('#plushka-login-2').css('left', (111 + ($('#login-len').width() / 210) * 12) + "px");
});
