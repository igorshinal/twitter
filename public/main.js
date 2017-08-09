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
                } else {
                    var jsonParser = JSON.parse(data);
                    $.each(jsonParser, function (key, value) {
                        $('.result').append('<div class="twit"><p class="od" data-id=' + value['id'] + '>' + value['body'] + '</p><p>' + value['data'] + '</p><span><input class="btn-edit" type="submit" data-id=' + value['id'] + ' value="Edit"></span><span><input class="btn-delete" type="submit" value="Delete"></span></div>');
                        $('#body').val('');
                    });

                }
            }
        });

    });

    /*
     * Достал по клику на эдит атрибуты парент элемента и чайлд.
     * */

    $('body').on('click', '.btn-edit', function () {
        valHid = $(this).data('id');
        var parent = $(this).parent();
        var parentDiv = parent.parent();
        var divChild = parentDiv.children();
        var valBody = divChild.html();
        var elDate = new Date();
        parentDiv.html('<p><textarea class="area-edit" rows="5" cols="45" name="text">' + valBody + '</textarea></p><span><input class="btn-save" type="submit" value="Save"></span><span><input class="btn-close" type="submit" value="Close"></span>');
        $('body').on('click', '.btn-close', function () {
            parentDiv.html('<div class="twit"><p class="od" data-id=' + valHid + '>' + valBody + '</p><p>'+elDate+'</p><span><input class="btn-edit" type="submit" data-id=' + valHid   + ' value="Edit"></span><span><input class="btn-delete" type="submit" value="Delete"></span></div>');
        });
    });

    $('body').on('click', '.btn-save', function () {
        $.ajax({
            type: 'POST',
            url: '/edit',
            async: true,
            cache: false,
            data: {
                id: valHid,
                body: 'ooooo',
            },
            success: function (data) {
                console.log(data);
                if (data == 1) {
                    alert('Текстовое поле не может быть пустым.');
                } else {
                    var jsonParser_2 = JSON.parse(data);
                    $.each(jsonParser_2, function (key, value) {
                        $('.result').append('<div class="twit"><p class="od" data-id=' + value['id'] + '>' + value['body'] + '</p><p>' + value['data'] + '</p><span><input class="btn-edit" type="submit" data-id=' + value['id'] + ' value="Edit"></span><span><input class="btn-delete" type="submit" value="Delete"></span></div>');
                    });

                }
            }
        });
    });


    });

