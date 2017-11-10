@extends('layouts.backend.master')
@section('title', 'Brand')
@section('content')
    <section id="main-content" data-url="{{ route('admin.brand.json') }}">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('backend.brand_list') }}
                    </div>
                    <div class="row w3-res-tb">
                            <div class="btn-group pull-right">
                                <a class="btn btn-success" href=""><i class="fa fa-plus withe"></i>{{ trans('backend.add') }}</a>
                                <button id="btnDeleteAll" class="btn btn-danger"><i class="fa fa-times withe circular"></i>{{ trans('backend.delete') }}</button>
                            </div>
                        <div class="col-md-8" style="margin-bottom: 15px;">
                            {!! Form::open(['method'=>'POST', 'url'=>route('admin.brand.json'), 'id'=>'search-form', 'class'=>'form-horizontal']) !!}
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
                                    <th style="text-align: center;width: 15px">
                                        <label class="mt-checkbox mt-checkbox-outline">
                                            <input id="select-all-checkbox" class="select-on-check-all checkbox" type="checkbox"/>
                                            <span></span>
                                        </label>
                                    </th>
                                    <th>{{ trans('backend.#') }}</th>
                                    <th>{{ trans('backend.name') }}</th>
                                    <th>{{ trans('backend.description') }}</th>
                                    <th>{{ trans('backend.action') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
@section('scripts')
    {{ Html::script('js/backend/brand/brand.js') }}
@endsection
