// メインデザイン
$(function() {
        $(window).on('load', function() {
            $('.main-layer-green').addClass('is-active').delay(500).queue(function() {
                $('.main-layer-yellow').addClass('is-active').dequeue();
            });
        });
    });