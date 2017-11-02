@extends('layouts.backend.master')
@section('title', 'Admin')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>{{ trans('backend.visitors') }}</h4>
                        <h3>{{ trans('backend.number_visitor') }}</h3>
                        <p>{{-- Other hand, we denounce --}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>{{ trans('backend.users') }}</h4>
                        <h3>{{ trans('backend.number_user') }}</h3>
                        <p>{{-- Other hand, we denounce --}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>{{ trans('backend.sales') }}</h4>
                        <h3>{{ trans('backend.number_sale') }}</h3>
                        <p>{{-- Other hand, we denounce --}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>{{ trans('backend.orders') }}</h4>
                        <h3>{{ trans('backend.number_order') }}</h3>
                        <p>{{-- Other hand, we denounce --}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agil-info-calendar">
            <div class="col-md-6 w3agile-notifications">
                <div class="notifications">
                    <header class="panel-heading">
                        {{ trans('backend.notification') }}
                    </header>
                    <div class="notify-w3ls">
                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                            <div class="notification-info">
                                <ul class="clearfix notification-meta">
                                    <li class="pull-left notification-sender">
                                        <span><a href="#">{{-- Jonathan Smith --}}</a></span> {{-- send you a mail --}}
                                    </li>
                                    <li class="pull-right notification-time">{{-- 1 min ago --}}</li>
                                </ul>
                                <p>
                                    {{-- Urgent meeting for next proposal --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </section>
</section>
@endsection
