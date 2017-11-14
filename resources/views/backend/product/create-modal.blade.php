<div id="product-modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">{{ trans('admin-products.close_modal') }}</button>
                <h4 class="modal-title">{{ trans('admin-products.add_brand') }}</h4>
            </div>
                {!! Form::open(['url' => '', 'method' => 'POST', 'id' => 'frmAddProduct', 'class' => 'form-horizontal bucket-form', 'data-add-product-url' => '']) !!}
                    <input type="hidden" id="state" name="state" value="">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.name') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.brand') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::select('brand', $brands, null, ['id' => 'brandId', 'class' => 'form-control select2-simple', 'placeholder' => '']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.images') }}</label>
                                            <img src="{{ Url('images/backend/2.png') }}" class="img-thumbnail" width="100" height="100">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.date') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::text('date', null, ['class' => 'form-control round-input']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.price') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::text('price', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.special') }}</label>
                                            <div class="col-sm-3">
                                                {{ Form::radio('special', 'yes', true) }} {{ trans('admin-products.is_special') }}
                                                {{ Form::radio('special', 'no') }} {{ trans('admin-products.un_special') }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" col-sm-3 control-label">{{ trans('admin-products.description') }}</label>
                                            <div class="col-lg-6">
                                                {!! Form::textarea('description', null, ['form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.status') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::text('status', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.guarantee') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::text('guarantee', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">{{ trans('admin-products.promotion') }}</label>
                                            <div class="col-sm-6">
                                                {!! Form::text('promotion', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="save-event">{{ trans('admin-products.save') }}</button>
                        <button type="button" class="btn btn-default"  data-dismiss="modal">{{ trans('admin-products.close') }}</button>
                    </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
