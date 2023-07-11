@extends('layouts.app')
@section('title_page')
@lang('site.orders apps')
@php
$profile_bar='apps';
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
                <li><a href="">@lang('site.orders apps')</a></li>
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
                        <strong class="h5 d-block">@lang('site.orders apps') </strong>
                    </div>
                    <div class="box-bg">
                        <div class="title">
                            <strong>(@lang('site.orders apps'))</strong>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('site.order_number')</th>
                                        <th>@lang('site.Purchases')</th>
                                        <th>@lang('site.payment_type')</th>
                                        <th>@lang('site.invoice_date')</th>
                                        <th>@lang('site.due_date')</th>
                                        <th>@lang('site.total')</th>
                                        <th>@lang('site.payment_method')</th>
                                        <th>@lang('site.status')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $index=>$invoice)
                                    <tr
                                        style="background-color:{{ $invoice->status=="pending" ? '#f1d4d4' :'#04fb0938' }}">
                                        <td>{{ $index + 1 }}</td>
                                        <td> {{ $invoice->id }} </td>
                                        <td>
                                            @if ($invoice->package_id!=null)
                                            {{$invoice->package->title}}
                                            @endif
                                            @if ($invoice->service_id!=null)
                                            {{$invoice->service->title}}
                                            @endif
                                            @if ($invoice->product_id!=null)
                                            {{$invoice->product->title}}
                                            @endif
                                        </td>
                                        <td>{{ __('site.'. $invoice->payment_type)}}</td>
                                        <td> {{ $invoice->invoice_date }} </td>
                                        <td> {{ $invoice->due_date }} </td>
                                        <td> {{ $invoice->total() }}

                                {{ $invoice->customer_country=="usd"? __('site.currency_dollar'): __('site.currency_egy')}}



                                        </td>
                                        <td
                                            style="background: {{ $invoice->payment_status=='completed'?'#a9ff02' :'#fa5068' }}">
                                            {{ $invoice->payment_method }} <br>
                                            {{ $invoice->payment_status }}
                                        </td>
                                        <td> {{ __('site.'.$invoice->status) }}</td>
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
