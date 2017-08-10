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
                    $('#body').val('Текстовое поле не может быть пустым.');
                } else {
                    var jsonParser = JSON.parse(data);
                    $.each(jsonParser, function (key, value) {
                        $('.result').append('<div class=' + value['id'] + '><p data-id=' + value['id'] + '>' + value['body'] + '</p><p>' + value['data'] + '</p><span><input class="btn-edit" type="submit" data-id=' + value['id'] + ' value="Edit"></span><span><input class="btn-delete" data-id=' + value['id'] + ' type="submit" value="Delete"></span></div>');
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
        parentDiv.html('<p><textarea class="area-edit" rows="5" cols="45" name="text">' + valBody + '</textarea></p><span><input class="btn-save" type="submit" value="Save"></span>');
    });

    $('body').on('click', '.btn-save', function () {
        var area_2 = $('.area-edit').val();
        $.ajax({
            type: 'POST',
            url: '/edit',
            async: true,
            cache: false,
            data: {
                id: valHid,
                body: area_2,
            },
            success: function (data) {
                if (data == 1) {
                    $('.' + valHid + '.area-edit').val('Текстовое поле не может быть пустым.');
                } else {
                    var jsonParser_2 = JSON.parse(data);
                    $.each(jsonParser_2, function (key, value) {
                        $('.' + valHid).html('<div class=' + valHid + '><p class="od" data-id=' + value['id'] + '>' + value['body'] + '</p><p>' + value['data'] + '</p><span><input class="btn-edit" type="submit" data-id=' + value['id'] + ' value="Edit"></span><span><input class="btn-delete" data-id=' + value['id'] + ' type="submit" value="Delete"></span></div>');
                    });

                }
            }
        });
    });

    $('body').on('click', '.btn-delete', function () {
        var btn_del_id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: '/delete',
            async: true,
            cache: false,
            data: {
                id: btn_del_id,
            },
            success: function (data) {
                $('.' + btn_del_id).hide();
            }
        });
    });




    });

