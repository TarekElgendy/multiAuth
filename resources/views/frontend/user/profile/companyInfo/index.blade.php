@extends('layouts.user.app')
@section('title_page')
@lang('site.companyInfo')
@php
$page='companyInfo';
@endphp
@endsection
@section('content')
<main class="bg-gray">
    <div class="dashboard-page py-5">
        <div class="container">


            <div class="row">

                @include('partials._profile_top_bar')


                <div class="col-lg-12 order-lg-3 order-md-3 order-2 mb-4">

                    <div class="table_style">
                        <div class="bg-white-shadow">
                            @include('partials._profile_bar')

                            <div class="tab-pane ">
                                <div class="table_style">
                                    <!-- Table Head -->
                                    <div class="row g-0 row_header align-items-center">
                                        <div class="col-md-12 d-flex align-items-center px-3 justify-content-between">
                                            <strong class="me-auto">{{ userTagID() }}-{{ auth()->user()->id }} </strong>
                                            <a href="" type="button" class="style-btn mt-2 mb-2" data-bs-toggle="modal"
                                                data-bs-target="#modalEditInfo"> <i class="fas fa-user-edit"></i> @lang('site.edit')
                                            </a>
                                            <div class="modal fade" id="modalEditInfo" tabindex="-1"
                                                aria-labelledby="modalEditInfoLabel">
                                                <div
                                                    class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"> @lang('site.companyInfo') </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div>
                                                                @include('frontend.user.profile.companyInfo.form.index')
                                                        
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ##END Table Head -->

                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compName') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compName }} </span>
                                        </div>
                                    </div>
                                    <!-- ##END Table ROW -->
                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compemail') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compemail }} </span>
                                        </div>
                                    </div>
                                    <!-- ##END Table ROW -->
                                    <!-- Table ROW -->

                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compWebsite') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compWebsite }} </span>
                                        </div>
                                    </div>
                                    <!-- ##END Table ROW -->
                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compLegalName') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compLegalName }} </span>
                                        </div>
                                    </div>

                                    <!-- ##END Table ROW -->
                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compLegalName') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compLegalName }} </span>
                                        </div>
                                    </div>

                                    <!-- ##END Table ROW -->



                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compTaxNumber') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compTaxNumber }} </span>
                                        </div>
                                    </div>
                                    <!-- ##END Table ROW -->
                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compAddress') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compAddress }} </span>
                                        </div>
                                    </div>
                                    <!-- ##END Table ROW -->

                                    <!-- Table ROW -->
                                    <div class="row g-0 row_content">
                                        <div class="col-md-2 b_left"> <strong class="title_th">
                                                @lang('site.compShippingAddress') </strong>
                                        </div>
                                        <div class="col-md-10 px-4">
                                            <span> {{ $profile->compShippingAddress }} </span>
                                        </div>
                                    </div>
                                    <!-- ##END Table ROW -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


</main>

@endsection