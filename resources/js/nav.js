// ナビゲーションの動作
$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.nav-content').addClass('active');
        } else {
            $('.nav-content').removeClass('active');
        }
    });
});