$(document).ready(function () {
    $('.btn-ajax').on('click', function () {
        var body = $('#body').val();
        $.ajax({
            type: 'POST',
            url: '/article',
            async: true,
            cache: false,
            data: {
                body: body,
            },
            success: function (data) {
                if (data == 1) {
                    alert('Текстовое поле не может быть пустым.');
                }else {
                    $('.err').hide();
                    var jsonParser = JSON.parse(data);
                    console.log(jsonParser);
                    $.each(jsonParser, function( key, value ) {
                        $('.result').append('<div class="twit"><p>'+value['body']+'</p><p>'+value['data']+'</p><input type="hidden" value='+value['id']+'></div>');
                        $('#body').val('');
                    });
                }
            }
        });

    });



});

