@extends('layouts.user.app')
@section('title_page')
    @lang('site.manufactureRequests')
    @php
        $page = 'manufactureRequests';
    @endphp
@endsection
@section('content')
    <main class="bg-gray">
        <div class="page-offers py-5">
            <div class="container">
                <div class="title_pages mb-4">
                    <strong class="h4 d-block"><i class="fa fa-th-list"></i> @lang('site.manufactureRequests') </strong>
                </div>
                <div class="list-reqs">
                    @foreach ($orders as $item)
                        <div class="item bg-white-shadow py-4 px-5 rounded-3 mb-4">
                            <div class="row align-items-center">
                                <div class="col-md-3 mb-lg-0 mb-md-0 mb-4">
                                    <a href="{{ $item->image_path }}" data-fancybox aria-label="gallery">
                                        <img src="{{ $item->image_path }}" class="swiper-lazy img-fluid" alt="">
                                    </a>
                                    <div class="text-center mt-4">
                                        {{-- <a href=" " class="btn_link-primary link-primary"> <i
                                                class="fas fa-download"></i> تحميل جميع المرفقات </a> --}}
                                    </div>
                                </div>
                                <div class="col-md-9 ps-4">
                                    <div class="head-info mb-3 d-flex align-items-center justify-content-between">
                                        <strong> {{ userTagID() . ' ' . $item->id }} </strong>
                                        <span class="qtys_peace"> @lang('site.quantity') {{ $item->quantity }} </span>
                                    </div>
                                    <div class="info">
                                        <strong class="title"> {{ $item->orderTitle }} </strong>
                                        <p> @lang('site.ores') :
                                            {{ $item->material }}
                                        </p>
                                        <strong> طريقة التصنيع </strong>
                                        <p>
                                            @foreach ($item->items as $order_item)
                                                {{ $order_item->product->title ?? '' }} -
                                            @endforeach
                                        </p>
                                        <a href="{{ route('user.makeOffer', ['name' => make_slug($item->orderTitle), 'id' => $item->id]) }}"
                                            class="style-btn mt-0"> قدم عرض سعر </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
