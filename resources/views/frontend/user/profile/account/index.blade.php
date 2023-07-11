@extends('layouts.user.app')
@section('title_page')
@lang('site.profile')
@php
$page='profile';
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
                            <div class="p-2 bg-white-shadow">
                                <!-- Table Head -->
                                <div class="row g-0 py-2 px-3 mb-3 row_header align-items-center">
                                    <div class="col-md-12 d-flex align-items-center px-3 justify-content-between">
                                        <strong class="me-auto">{{ userTagID() }}-{{ auth()->user()->id }} </strong>
                                        <a href="" class="style-btn mt-0" type="button" data-bs-toggle="modal"
                                            data-bs-target="#addWorks">
                                            <i class="fas fa-plus"></i> تعديل </a>
                                        <div class="modal fade" id="addWorks" tabindex="-1"
                                            aria-labelledby="addWorksLabel">
                                            <div
                                                class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> تعديل ملف الشخصى</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <livewire:frontend.profile.edit-profile />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ##END Table Head -->
                                <livewire:frontend.profile.list-data-profile />
                            
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


</main>

@endsection
