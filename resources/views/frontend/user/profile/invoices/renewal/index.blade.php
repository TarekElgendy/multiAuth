@extends('layouts.app')
@section('title_page')
@lang('site.checkout')
@endsection
@section('content')
 <!-- START => Breadcrumb -->
<div class="head-pages">
    <div class="breadcrumb-bg"></div>
    <div class="container-fluid">
        <div class="breadcrumb-title">
            <strong>@lang('site.We keep pace with development to create an easier life')</strong>
        </div>
    </div>
</div>
<!-- //END => Breadcrumb -->
<section class="page-checkout mt-4">
    <div class="container container-bg mb__10rem">
        <div class="row">
            <div class="col-md-5">
                <div class="box-buy-prices">
                    <strong class="d-block m-0 title">@lang('site.ReviewTheOrderRenewal')</strong>
                    @php
                    if($invoice->package_id!=null){
                    $title=$invoice->package->title ??"";
                    $page_id=$invoice->package->id;
                    $image=$invoice->package->image_path;
                    }
                    if($invoice->service_id!=null){
                    $title=$invoice->service->title ??"";
                    $page_id=$invoice->service->id;
                    $image=$invoice->service->image_path;
                    }
                    if($invoice->product_id!=null){
                    $title=$invoice->product->title ??"";
                    $page_id=$invoice->product->id;
                    $image=$invoice->product->image_path;
                    }
                    @endphp
                    <div class="product-order-item d-flex py-2 px-3">
                        <div class="img">
                            <img src="{{$image}}" class="img-fluid" alt="">
                        </div>
                        <div class="txt">
                            <strong class="title-name d-block">{{$title}}</strong>
                            <p> @lang('site.Package of') {{__('site.'.$invoice->payment_type)}}</p>
                            <strong class="h4 d-block">{{$invoice->item_price}}
                                {{__('site.'. $invoice->customer_country)}}</strong>
                        </div>
                    </div>
                    <div class="details-prices">
                        <ul>
                            <li><span> @lang('site.Package of') {{__('site.'.$invoice->payment_type)}}</span>
                                <span class="price float-right">{{$invoice->item_price}}
                                    {{__('site.'. $invoice->customer_country)}}</span></li>
                            <li>
                                <span class="price float-right"> {{$invoice->invoice_date}}</span>
                                @lang('site.invoice_date')
                            </li>
                            <li>
                                <span class="price float-right"> {{$invoice->due_date}}</span>
                                @lang('site.due_date')
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-7">
                <div class="box-buy-prices">
                    <strong class="d-block m-0 title">@lang('site.choose payment method')</strong>
                </div>
                <div class="box-chooseings">
                    <form action="{{route('customer.order.renew.payment')}}" method="post">
                        @csrf
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" checked type="radio" name="payment_method"
                                            id="payment method 1" value="visa" checked>
                                        <label class="form-check-label" for="payment method 1">
                                            &nbsp; &nbsp; &nbsp; @lang('site.by visa')
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 " style="">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method"
                                            id="payment method 2" value="paypal">
                                        <label class="form-check-label" for="payment method 2">
                                            &nbsp; &nbsp; &nbsp; @lang('site.by paypal')
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <button type="submit"
                                        class="btn-started position-static float-right">@lang('site.paynow')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
