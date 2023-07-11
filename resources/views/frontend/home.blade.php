@extends('layouts.app')
@section('title_page')
@lang('site.home')
@php
$page = 'home';
@endphp
@endsection
@section('content')
<!-- START => Home Banner -->
<section class="home-banner position-relative">
    <div class="swiper banner-slides h-100">
        <div class="swiper-wrapper">
            @foreach ($sliders as $item)
            <div class="swiper-slide">
                @if ($item->video)
                <video muted autoplay loop class="banner-video">
                    <source src="{{ url('/') }}/frontend/assets/spinning-drill.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                @else
                <div class="img-banner">
                    <img src="{{ $item->image_path }}" class="img-fluid" alt="BannerImage">
                </div>
                @endif
                <div class="banner-content">
                    <div class="container">
                        <h1 data-aos="zoom-in-up"> {{ $item->title }} <strong> {{ $item->short_description }}
                            </strong>
                        </h1>
                        <p> {!! $item->description !!} </p>
                        @if ($item->link)
                        <a href="{{ $item->link }}" class="style-btn">
                            @lang('site.details')
                        </a>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- //END => Home Banner -->

<!-- START => About Us -->
<section class="about-section overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="zoom-in-up">
            <strong class="h1 fw-bold"> {{ $about->title }} </strong>
            <div class="bar-main">
                <div class="bar bar-big"></div>
            </div>
        </div>

        <p class="text-center fw-bold" data-aos="zoom-in-up">
            {!! $about->description !!}
        </p>

        <div class="about-video overflow-hidden" data-aos="zoom-in-up">
            <img src="{{ $aboutVideo->image_path }}" class="img-fluid" alt="">
            <a href="{{ $aboutVideo->video }}" class="link-video" aria-label="link-video" data-fancybox
                data-preload="false">
                <i class="fas fa-play fa-2x text-white z-3"></i>
            </a>
        </div>
    </div>
</section>
<!-- //END => About Us -->


<!-- START => Manufactore Apps -->
<section class="about-manufactore-apps overflow-hidden bg-gray py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="zoom-in-up">
            <strong class="h1 fw-bold"> لماذا صناعة دوت كوم </strong>
            <div class="bar-main">
                <div class="bar bar-big"></div>
            </div>
        </div>

        <div class="items-m-a">
            <div class="row justify-content-center">
                @foreach ($whyUs as $key => $item)
                <div class="col-lg-4 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-duration="{{ $key * 300 + 500 }}">
                    <div class="item_m-a d-flex align-items-center justify-content-between"
                        aria-label="{{ $item->title }}">
                        <div class="col-md-6 img_app"><img src="{{ $item->image_path }}" alt="{{ $item->title }}">
                        </div>
                        <div class="col-md-6 text-start">
                            <strong> {{ $item->title }} </strong>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

    </div>
</section>
<!-- //END => Manufactore Apps -->


<!-- START => Manufactore Apps -->
<section class="about-manufactore-apps overflow-hidden  py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="zoom-in-up">
            <strong class="h1 fw-bold"> تطبيقات التصنيع الدقيقة لكل صناعة </strong>
            <div class="bar-main">
                <div class="bar bar-big"></div>
            </div>
        </div>

        <div class="items-m-a">
            <div class="row justify-content-center">
                @foreach ($appSection as $key => $item)
                <div class="col-lg-4 col-md-4 col-6 mb-4" data-aos="fade-up" data-aos-duration="{{ $key * 300 + 500 }}">
                    <div class="item_m-a d-flex align-items-center justify-content-between"
                        aria-label="{{ $item->title }}">
                        <div class="col-md-6 img_app"><img src="{{ $item->image_path }}" alt="{{ $item->title }}">
                        </div>
                        <div class="col-md-6 text-start">
                            <strong> {{ $item->title }} </strong>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>

    </div>
</section>
<!-- //END => Manufactore Apps -->

<!-- START => How It Works -->
<section class="about-howitworks overflow-hidden bg-gray py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="zoom-in-up">
            <strong class="h1 fw-bold">   كيف تطلب ؟ </strong>
            <div class="bar-main">
                <div class="bar bar-big"></div>
            </div>
        </div>

        <div class="items-howitworks">
            <div class="row gx-5">
                @foreach ($howMakeOrders as $key => $item)
                <div class="col-md-3" data-aos="fade-right" data-aos-duration="{{ $key * 300 + 300 }}"
                    data-aos-easing="ease-in-sine">
                    <div class="howitworks_item">
                        <i class="fas  {{ $item->icon }} fa-4x mb-4"></i>
                        <div class="title">
                            <i>{{ $key + 1 }}</i>
                            <strong class="h4 lines-2 mb-3"> {{ $item->title }} </strong>
                        </div>
                        <p class="lines-4">
                            {{ $item->short_description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
<!-- //END => How It Works -->

<!-- START => Services -->
<section class="about-services overflow-hidden  py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="zoom-in-up" data-aos-duration="1000">
            <strong class="h1 fw-bold"> طلب سعر تصنيع </strong>
            <div class="bar-main">
                <div class="bar bar-big"></div>
            </div>
        </div>

        <div class="items-services">
            <div class="row">
                @foreach ($categories as $item)


                <div class="col-lg-4 col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="item_card card text-center border-0">
                        <div class="img-card">
                            <img src="{{ $item->image_path }}" class="card-img-top" alt="{{ $item->title }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-3"> {{ $item->title }} </h5>
                            <p class="card-text lines-3 mb-0">
                                {{ $item->short_description }}
                            </p>
                            <a href="{{ route('products',['id'=>$item->id,'slug'=>make_slug($item->title)]) }}"
                                class="style-btn px-4 py-2"> @lang('site.details') </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!-- //END => Services -->


<!-- START => Customer Reviews -->
<!-- START => Customer Reviews -->
<section class="about-customers-reviews bg-gray overflow-hidden py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <strong class="h1 fw-bold"> @lang('site.testimonials') </strong>
            <div class="bar-main">
                <div class="bar bar-big"></div>
            </div>
        </div>

        <div class="swiper reviews-slides pt-4">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $item)
                <div class="swiper-slide">
                    <div class="item-review">
                        <h4> {{ $item->title }} </h4>
                        <p class="lines-3">
                            {!! $item->short_description !!}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- //END => Customer Reviews -->
@endsection
