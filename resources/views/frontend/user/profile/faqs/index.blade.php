@extends('layouts.user.app')
@section('title_page')
@lang('site.instructions')
@php
$page='instructions';
@endphp
@endsection
@section('content')
<main class="bg-gray">
    <!-- START => Breadcrumb -->
    <div class="breadcrumb-page bg-white-shadow mb-0 py-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> @lang('site.home') </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> @lang('site.instructions')
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- //END => Breadcrumb -->

    <div class="container py-4">
        <div class="bg-white-shadow p-lg-5 p-md-5 p-2 rounded-3">

            <div class="accordion accordion-flush" id="accordion-">
                <strong class="h5 d-block mb-2"> @lang('site.instructions')
                </strong>
                <hr>
                @foreach ($faqs as $item)


                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-{{ $item->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#tab-1{{ $item->id }}" aria-expanded="false" aria-controls="tab-1{{ $item->id }}">
                            {{ $item->title }}
                        </button>
                    </h2>
                    <div id="tab-1{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="flush-{{ $item->id }}"
                        data-bs-parent="#accordion-{{ $item->id }}" style="">
                        <div class="accordion-body">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

</main>

@endsection
