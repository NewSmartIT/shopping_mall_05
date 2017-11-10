$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var datatable;

function setup_select2_simple(id,plh) {
    var select =  $('#'+id).select2( {
                    placeholder: plh,
                    allowClear: true
                });
    return select;
}

$(document.body).on('click', '.list-item-delete-btn', function () {
    var url = $(this).data('url');
    bootbox.confirm("You are selecting a delete action, which is likely to affect the system. Are you sure you want to delete?", function (result) {
        if (result) {
            $.get(url, {}, function (resp) {
                if(resp.error == 0) {

                    bootbox.alert(resp.message);
                    datatable.ajax.reload();
                } else {
                    bootbox.alert('An error has occurred, please contact the Administrator');
                }
            }, 'json');
        }
    });
});

$(function() {

    $('#select-all-checkbox').change(function () {
       if($(this).prop('checked')) {
           $('.delete-checkbox').prop('checked',true);
       } else {
           $('.delete-checkbox').prop('checked',false);
       }
    });

    $(document.body).on('change','.delete-checkbox', function () {
        if($(this).prop('checked') == false) {
            $('#select-all-checkbox').prop('checked',false);
        }
    });

    $('#btnDeleteAll').click(function () {
        var arr_id = [];
        $('.delete-checkbox:checkbox:checked').each(function (i, item) {
            arr_id.push($(item).data('item-id'));
        }).promise().done(function () {
            if(arr_id.length) {
                bootbox.confirm("You are selecting a delete action, which is likely to affect the system. Are you sure you want to delete?", function (result) {
                    if (result) {
                        $.ajax({
                            url: location.pathname + '/many-delete',
                            method: 'post',
                            data: {
                                ids: arr_id
                            },
                            success: function (res) {
                                bootbox.alert(res.message)
                                datatable.ajax.reload();
                            }
                        });
                    }
                });

            } else {
                bootbox.alert('Please select at least 1 record.');
            }
        });

    });

});


var submit_search_form;
$('#search-form').find('input').on('keyup change', function () {

    clearTimeout(submit_search_form);

    submit_search_form = setTimeout(function () {
        $('#search-form').submit();
    },300);
});

$('.change-search-select2').on('change', function (evt) {
    clearTimeout(submit_search_form);

    submit_search_form = setTimeout(function () {
        $('#search-form').submit();
    },300);
});

$('#search-form').on('submit', function(e) {
    datatable.draw();
    e.preventDefault();
});


