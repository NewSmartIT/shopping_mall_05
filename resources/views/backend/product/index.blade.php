@extends('layouts.backend.master')
@section('title', 'Product')
@section('content')
    <section id="main-content" data-url="{{ route('admin.product.json') }}">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('admin-products.product_list') }}
                    </div>
                    <div class="row w3-res-tb">
                            <div class="btn-group pull-right">
                                <button  class="btn btn-success" data-toggle="modal" data-target="#product-modal"><i class="fa fa-plus withe"></i>{{ trans('admin-products.add') }}</button>
                                <button id="btnDeleteAll" class="btn btn-danger"><i class="fa fa-times withe circular"></i>{{ trans('admin-products.delete') }}</button>
                            </div>
                        <div class="col-md-8 search-bottom">
                            {!! Form::open(['method' => 'POST', 'url' => route('admin.product.json'), 'id' => 'search-form', 'class' => 'form-horizontal']) !!}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Product name']) !!}
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="product-table" class="table table-striped table-hover b-t b-light">
                            <thead>
                                <tr>
                                    <th class="checkbox-position">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input id="select-all-checkbox" class="select-on-check-all checkbox" type="checkbox"/>
                                            <span></span>
                                        </label>
                                    </th>
                                    <th>{{ trans('admin-products.#') }}</th>
                                    <th>{{ trans('admin-products.name') }}</th>
                                    <th>{{ trans('admin-products.brand') }}</th>
                                    <th>{{ trans('admin-products.price') }}</th>
                                    <th>{{ trans('admin-products.special') }}</th>
                                    <th>{{ trans('admin-products.status') }}</th>
                                    <th>{{ trans('admin-products.action') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
    @include('backend.product.create-modal')
@endsection
@section('scripts')
    {{ Html::script('js/backend/product/product.js') }}
@endsection
