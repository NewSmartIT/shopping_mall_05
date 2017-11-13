$(function () {
    var url = $('#main-content').data('url');
    datatable = $('#product-table').DataTable({
        serverSide: true,
        searching: false,
        order: [ 2, 'asc' ],
        stateSave: true,
        ajax: {
            url: url,
            data: function (e) {
                e.search.custom = {
                    name: $('input[name = name]').val(),
                };
            }
        },
        columns: [
            {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false},
            {data: 'rownum', name: 'rownum', orderable: false, searchable: false},
            {data: 'name', name: 'name', orderable: true, searchable: true},
            {data: 'brand_id', name: 'brand_id', orderable: false, searchable: false},
            {data: 'price', name: 'price', orderable: false, searchable: false},
            {data: 'special', name: 'special', orderable: false, searchable: false},
            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'action', orderable: false, searchable: false}
        ],
        lengthMenu:  [
            [5, 10, 20, 50, -1],
            ['5','10','20','50','All']
        ],
        language: {
            "lengthMenu": "Hiển thị _MENU_ bản ghi",
            "zeroRecords": "Không có bản ghi nào được tìm thấy",
            "emptyTable": "Không có bản ghi nào được hiển thị",
            "processing": "Đang xử lý",
            "search": "Tìm kiếm",
            "paginate": {
                "first": "Đầu tiên",
                "last": "Cuối cùng",
                "next": "Trang sau",
                "previous": "Trang trước"
            },
            "info": "Trình bày _START_ - _END_ trong số _TOTAL_ mục",
        }
    });
});
