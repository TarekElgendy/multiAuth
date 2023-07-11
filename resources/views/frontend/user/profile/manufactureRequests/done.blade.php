@extends('layouts.app')
@section('title_page')
@lang('site.order now')
@php
$page = 'quote';
@endphp
@endsection
@section('des_seo')
@endsection
@section('key_seo')
@endsection
@section('content')

<main class="bg-gray">

    <div class="page-success py-5">
      <div class="container">

        <div class="bg-white-shadow p-5 text-center">
          <div class="icon_chk mb-4">
            <i class="checkmark"> ✓ </i>
          </div>
          <strong class="h1"> تم تسجيل عرضك بنجاح </strong>
          <p class="m-4 mb-0"> لقد تلقينا العرض الخاص بك
             <br /> جاري المراجعة  
             <br /> سنتواصل معك قريبًا </p>
        </div>

      </div>
    </div>


  </main>

@endsection
