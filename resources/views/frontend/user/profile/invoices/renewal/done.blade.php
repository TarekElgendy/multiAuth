@extends('layouts.app')
@section('title_page')
@lang('site.congratulations')

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
                <li><a href="">@lang('site.congratulations')</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //END => Breadcrumb -->
<section class="page-checkout-success mt-4">
    <div class="container container-bg mb-5">
      <div class="box-chooseings text-center py-5">
        <img src="{{url('/')}}/frontend/assets/imgs/success.png" class="img-fluid d-block mx-auto mb-4" alt="">
        <strong class="h2 mb-4 d-block">@lang('site.CongratulationsBillRenewed').</strong>


       </div>
    </div>
  </section>
@endsection
