<button class="btn btn-xs btn-primary edit-item-click" data-url="{{ @$edit }}">
    <i class="fa fa-pencil-square-o"></i>{{ trans('backend.edit') }}
</button>
<button class="btn btn-xs btn-danger list-item-delete-btn" data-url="{{ @$destroy }}">
    <i class="fa fa-trash-o"></i>{{ trans('backend.delete') }}
</button>
