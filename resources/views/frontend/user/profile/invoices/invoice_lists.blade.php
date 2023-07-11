@extends('layouts.app')
@section('title_page')
@lang('site.invoices')
@php
$profile_bar='invoices';
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
                <li><a href="">@lang('site.orders')</a></li>
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
                        <strong class="h5 d-block">@lang('site.invoices') </strong>
                    </div>
                    <div class="box-bg">
                        <div class="title">
                            <strong>(@lang('site.invoices'))</strong>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('site.invoice_number')</th>
                                        <th>@lang('site.Purchases')</th>
                                        <th>@lang('site.payment_type')</th>
                                        <th>@lang('site.invoice_date')</th>
                                        <th>@lang('site.due_date')</th>
                                        <th>@lang('site.total')</th>
                                        <th>@lang('site.payment_method')</th>
                                        <th>@lang('site.status')</th>
                                        <th>@lang('site.action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $index=>$order)
                                    <tr
                                        style="background-color:{{ $order->status=="pending" ? '#f1d4d4' :'#04fb0938' }}">
                                        <td>{{ $index + 1 }}</td>
                                        <td> {{ $order->invoice_number }} </td>
                                        <td>
                                            @if ($order->package_id!=null)
                                            {{$order->package->title}}
                                            @endif
                                            @if ($order->service_id!=null)
                                            {{$order->service->title}}
                                            @endif
                                            @if ($order->product_id!=null)
                                            {{$order->product->title}}
                                            @endif
                                        </td>
                                        <td>{{ __('site.'. $order->payment_type)}}</td>
                                        <td> {{ $order->invoice_date }} </td>
                                        <td> {{ $order->due_date }} </td>
                                        <td> {{ $order->total() }}
                                           {{ $order->customer_country=="usd"? __('site.currency_dollar'): __('site.currency_egy')}}

                                        </td>
                                        <td
                                            style="background: {{ $order->payment_status=='completed'?'#a9ff02' :'#fa5068' }}">
                                            {{ $order->payment_method }} <br>
                                            {{ $order->payment_status }}
                                        </td>
                                    </td>
                                    <td> {{ __('site.'.$order->status) }}</td>

                                    <td>  <a href="{{route('customer.invoices.detials',([$order->id]))}}">{{ __('site.details') }}</a>


                                    </td>


                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> {{-- end box-bg --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //END => Profile Page -->
@endsection
