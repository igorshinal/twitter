$(document).ready(function () {
    $('.btn-click').on('click', function () {
        var currency = $('.form-inline input').val();
        $.ajax({
            type: 'POST',
            url: '/set',
            async: true,
            cache: false,
            data: {
                currency: currency
            },
            success: function (data) {
                $('.message').html('<p>' + data + '</p>');


            }
        });

    });

});

