<div id="brand-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">{{ trans('backend.close_modal') }}</button>
                <h4 class="modal-title">{{ trans('backend.add_brand') }}</h4>
            </div>
            <form id="frmAddBrand" class="form-horizontal" method="POST" data-add-brand-url="{{ route('admin.brand.saveAddBrand') }}">
                {{ csrf_field() }}
                <input type="hidden" id="state" name="state" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">{{ trans('backend.name') }}</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="description">{{ trans('backend.description') }}</label>
                        <div class="col-sm-10">
                            <input type="text" id="description" class="form-control" name="description" placeholder="Enter description">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="save-event">{{ trans('backend.save') }}</button>
                    <button type="button" class="btn btn-default"  data-dismiss="modal">{{ trans('backend.close') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
