@extends('layouts.user.app')
@section('title_page')
    @lang('site.myOrders')
    @php
        $page = 'myOrders';
    @endphp
@endsection
@section('content')
    <main class="bg-gray">
        <div class="request-design-page py-5">
            <div class="container">
                <div class="title_pages mb-4">
                    <strong class="h4 d-block"> {{ $order->orderTitle }} </strong>
                </div>
                <!-- تفاصيل العمل -->
                <div class="bg-white-shadow mb-3 rounded-3">
                    <div class="card border-0">
                        <div class="card-header bg-transparent fw-bold">
                            تفاصيل العمل
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 mb-lg-0 mb-md-0 mb-3">
                                    <p class="card-text">
                                        {{ $order->note }}
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ $order->image_path }}" data-fancybox aria-label="gallery">
                                        <img src="{{ $order->image_path }}" class="swiper-lazy img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- المرفقات -->
                <div class="bg-white-shadow mb-3 rounded-3">
                    <div class="card border-0">
                        <div class="card-header bg-transparent fw-bold">
                            @lang('site.documents')
                        </div>
                        <div class="card-body">
                            <div class="files_download">
                                @foreach ($order->files as $item)
                                    <a href="{{ $item->file_path }}" target="_blank"
                                        class="mb-lg-0 mb-md-0 mb-2 d-inline-block"> {{ $item->file }} </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- المهارات المطلوبة -->
                <div class="bg-white-shadow mb-3 rounded-3">
                    <div class="card border-0">
                        <div class="card-header bg-transparent fw-bold">
                            @lang('site.material')
                        </div>
                        <div class="card-body">
                            <div class="skills">
                                @foreach ($order->items as $key => $item)
                                    <span class="mb-lg-0 mb-md-0 mb-2 d-inline-block">
                                        {{ $item->productItem->title ?? '' }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- تقديم عرض السعر -->
                @if ($order->user_id != authUser()->id && $offerCount <= 0)
                    <div class="bg-white-shadow mb-3 rounded-3">
                        <div class="card border-0">
                            <div class="card-header bg-transparent fw-bold">
                                تقديم عرض السعر
                            </div>
                            <div class="card-body px-lg-5 px-md-5 px-3">
                                    @include('frontend.user.profile.manufactureRequests.form')
                            </div>
                        </div>
                    </div>
                @endif
                <div class="bg-white-shadow mb-3 rounded-3">
                    <div class="card border-0">
                        <div class="card-header bg-transparent fw-bold">
                            العروض المقدمة
                        </div>

                        {{-- @if($offerCount>0)
                          @include('partials._restrictionToAddAgain')
                        @endif --}}

                        <div class="card-body">
                            @forelse ($offers as $offer)
                                <div class="item-rating-requests">
                                    <div class="item_rating mb-3 bg-white-shadow rounded-3 p-5">
                                        <div class="head-title d-flex align-items-start justify-content-between">
                                            <div class="info d-flex align-items-center mb-3">
                                                <img src="{{ $offer->user->image_path }}" class="img-fluid w-25"
                                                    alt="">
                                                <div class="ms-3">
                                                    <strong class="d-block h5"> {{ $offer->user->name }} </strong>
                                                    <div>
                                                        <span class="b_left pe-3"> {{ $offer->user->profile->compName }}
                                                        </span>
                                                        <span class="ms-3"> {{ $offer->created_at }} </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($order->user_id == authUser()->id)
                                                <a href="{{ route('user.manufactureRequests.offers.accept', ['id' => $offer->id]) }}"
                                                    class="style-btn mt-0"> قبول العرض </a>
                                            @endif
                                        </div>
                                        <div class="request-info my-4">
                                            <div class="row">
                                                <div class="col-md-5 text-center b_left">
                                                    <strong class="title d-block"> السعر </strong>
                                                    <hr>
                                                    <div class="row">
                                                        <div
                                                            class="col-md-4 col-md-4 col-sm-4 col-4 text-center b_left px-2">
                                                            <strong class="d-block"> القطعة </strong>
                                                            <strong class="d-block"> {{ $offer->priceUnit }} ج.م </strong>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-md-4 col-sm-4 col-4 text-center b_left px-2">
                                                            <strong class="d-block"> عربون </strong>
                                                            <strong class="d-block"> {{ $offer->priceDeposit }} ج.م
                                                            </strong>
                                                        </div>
                                                        <div class="col-md-4 col-md-4 col-sm-4 col-4 text-center px-2">
                                                            <strong class="d-block"> إجمالى </strong>
                                                            <strong class="d-block"> {{ $offer->priceTotal }} ج.م </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-center b_left">
                                                    <strong class="title d-block"> مدة التنفيذ </strong>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col b_left">
                                                            <strong> من </strong>
                                                            <strong class="d-block"> {{ $offer->dateFrom }} أيام </strong>
                                                        </div>
                                                        <div class="col">
                                                            <strong> إلى </strong>
                                                            <strong class="d-block"> {{ $offer->dateTo }} أيام </strong>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <div class="row">
                                                        <div class="col b_left">
                                                            <strong class="title d-block"> سعر العينة </strong>
                                                            <hr>
                                                            @if ($offer->provideSample == 'yes')
                                                                {{ $offer->priceSample }} ج.م
                                                            @else
                                                                <strong class="d-block"> لايوجد </strong>
                                                            @endif
                                                        </div>
                                                        <div class="col">
                                                            <strong class="title d-block"> أعمال سابقة </strong>
                                                            <hr>
                                                            @if ($offer->madeSameSample == 'yes')
                                                                <a href="{{ $offer->file_path }}" target="_blank"
                                                                    class="btn_link-primary link-primary" download> <i
                                                                        class="fas fa-download"></i>
                                                                    تحميل </a>
                                                            @else
                                                                <strong class="d-block"> لايوجد </strong>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <strong class="d-block mb-3"> طريقة التصنيع </strong>
                                            <p>
                                                {{ $offer->manufacturingMethod }}
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="txt">
                                            <strong class="d-block mb-3"> ملاحظات </strong>
                                            <p>
                                                {{ $offer->notes }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @if($offerCount>0)
                            @include('partials._yourRequestUnderRevision')


                            @else
                            @include('partials._noData')
                            @endif
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
