$(document).ready(function () {
    $('.btn-ajax').on('click', function () {
        var body = $('.body').val();
        var date = new Date();
        $.ajax({
            type: 'POST',
            url: 'Ajax.php',
            dataType: "json",
            async: true,
            data: {
                body: body,
                date: date
            },
            success: function (data) {
                // $('.results').text(data);
                console.log(data);

            }
        });
    });
});
