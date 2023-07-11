@extends('layouts.app')
@section('title_page')
@lang('site.orders website')
@php
$profile_bar=  $breadcurmb;
@endphp
@endsection
@section('content')
<!-- START => Breadcrumb -->
<div class="head-pages">
    <div class="breadcrumb-bg"></div>
    <div class="container-fluid">
        <div class="breadcrumb-title">
            <strong>@lang('site.We keep pace with development to create an easier life')</strong>
        </div>
        <div class="breadcrumb-pages">
            <ul class="d-flex align-items-center">
                <li><a href="{{route('home')}}">@lang('site.home')</a></li>
                <li class="mx-2"> <i class="fa fa-chevron-right fa-sm"></i> </li>
                <li><a href="{{route('customer.profile.index')}}">@lang('site.profile')</a></li>
                <li class="mx-2"> <i class="fa fa-chevron-right fa-sm"></i> </li>
                <li><a href="">  {{__('site.'.$profile_bar)}}</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //END => Breadcrumb -->
<!-- START => Profile Page -->
<section class="page-profile py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('partials._profile_bar')
            </div>
<div class="col-md-9">

          <div class="profile-content">

            <div class="title-profile px-2">
              <strong class="h5 d-block">@lang('site.orders')</strong>

            </div>
            <div class="box-bg box-invoice-print">
                     <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
                <address>
                    <b> @lang('site.name') </b>: {{ $order->customer->full_name }} <br>
                    <b> @lang('site.email') </b>: {{ $order->customer->email }} <br>
                    <b> @lang('site.phone') </b>: {{ $order->customer->phone }} <br>
                    <b> @lang('site.status') </b>: {{ $order->status }}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                <address>
                    <b> @lang('site.total') </b>: {{ $order->total() }}
 
                    {{ $order->customer_country=="usd"? __('site.currency_dollar'): __('site.currency_egy')}}

                    <del>
                        {{ $order->old_price()==0?'':$order->old_price() }}</del><br>
                    <b> @lang('site.coupon') </b>: <code>{{$order->coupon_code}}</code> <br>
                    <b> @lang('site.discount') </b>:
                    <code>{{$order->old_price()==0?'':$order->old_price()-$order->total()}}</code> <br>
                    <b> @lang('site.payment_method') </b>: {{ $order->payment_method }} <br>
                    <b> @lang('site.payment_status') </b>: {{ $order->payment_status }} <br>
                    <b> @lang('site.fees') </b>: {{ $order->fees }} <br>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                <b> @lang('site.order_number') </b>: {{ $order->id }} <br>
                <b> @lang('site.date') : </b>{{ $order->invoice_date }} <br>
                <b> @lang('site.due_date') :</b> {{ $order->due_date }} <br>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                <img src="{{$setting->image_logo}}" class="" width="80" height="80" alt="">
            </div>
            <!-- /.col -->
        </div>

              <hr>
              <div class="table-responsive">
                  <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.Purchases')</th>
                                <th>@lang('site.payment_type')</th>
                                <th>@lang('site.item_price')</th>
                                <th>@lang('site.status')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    @if ($order->package_id!=null)

                                       {{$order->package->title}} <br>
                                    @endif
                                    @if ($order->service_id!=null)

                                       {{$order->service->title}} <br>
                                    @endif
                                    @if ($order->product_id!=null)

                                       {{$order->product->title}} <br>
                                    @endif
                                </td>
                                <td>{{__('site.'.$order->payment_type)}}</td>
                                <td>{{$order->item_price}}</td>
                                <td>{{ __('site.'.$order->status) }} </td>
                            </tr>
                        </tbody>
                    </table>
              </div>
              <hr>
              <div class="overflow-hidden">
                <button class="mt-4 btn btn-secondary float-right" onclick="window.print()"><i class="fas fa-print"></i> @lang('site.print')</button>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
</section>
<!-- //END => Profile Page -->
@endsection
