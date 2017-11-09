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


