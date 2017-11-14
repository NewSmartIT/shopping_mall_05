@extends('layouts.backend.master')
@section('title', 'Brand')
@section('content')
    <section id="main-content" data-url="{{ route('admin.brand.json') }}">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('admin-brands.brand_list') }}
                    </div>
                    <div class="row w3-res-tb">
                            <div class="btn-group pull-right">
                                <button  class="btn btn-success" data-toggle="modal" data-target="#brand-modal"><i class="fa fa-plus withe"></i>{{ trans('admin-brands.add') }}</button>
                                <button id="btnDeleteAll" class="btn btn-danger"><i class="fa fa-times withe circular"></i>{{ trans('admin-brands.delete') }}</button>
                            </div>
                        <div class="col-md-8 search-bottom">
                            {!! Form::open(['method' => 'POST', 'url' => route('admin.brand.json'), 'id' => 'search-form', 'class' => 'form-horizontal']) !!}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Brand name']) !!}
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="brand-table" class="table table-striped table-hover b-t b-light">
                            <thead>
                                <tr>
                                    <th class="checkbox-position">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input id="select-all-checkbox" class="select-on-check-all checkbox" type="checkbox"/>
                                            <span></span>
                                        </label>
                                    </th>
                                    <th>{{ trans('admin-brands.#') }}</th>
                                    <th>{{ trans('admin-brands.name') }}</th>
                                    <th>{{ trans('admin-brands.description') }}</th>
                                    <th>{{ trans('admin-brands.action') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        @include('backend.brands.create-modal')
    </section>
@endsection
@section('scripts')
    {{ Html::script('js/backend/brand/brand.js') }}
@endsection
