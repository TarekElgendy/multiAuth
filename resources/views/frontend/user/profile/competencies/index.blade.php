@extends('layouts.user.app')
@section('title_page')
    @lang('site.profile')
    @php
        $page = 'competencies';
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
                                <div class="tab-content p-2 bg-white-shadow" id="myTabContent">
                                    <div class="tab-pane show active" id="competencies" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <div class="table_style">
                                            <!-- Table Head -->
                                            <div class="row g-0 row_header text-end align-items-center">
                                                <div class="col-md-12">
                                                    <a href="" type="button" class="style-btn mt-0"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                                            class="fas fa-user-edit"></i>
                                                        تعديل </a>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel">
                                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                            <form action="{{ route('user.createUserMajors') }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"> تحرير الكفاءات الخاصة بي
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @include('frontend.user.profile.competencies.modelmajorCategories')
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal"> خروج </button>
                                                                        <button type="submit" class="btn btn-primary"> حفظ
                                                                            التعديلات </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Table ROW -->
                                            <!-- ##END Table Head -->
                                            @foreach ($majorCategories as $majorCategory)
                                                <!-- Table ROW -->
                                                <div class="row g-0 row_content">
                                                    <div class="col-md-2 b_left"> <strong class="title_th">
                                                            {{ $majorCategory->title }}
                                                        </strong> </div>
                                                    <div class="col-md-10 px-4">
                                                        @if ($majorCategory->id == 7)
                                                            @foreach ($materials as $material)
                                                                @php
                                                                    $selectedCategoryId = $material->id;
                                                                    $userMaterialMajors = App\Models\UserMajor::whereHas('major', function ($query) use ($selectedCategoryId) {
                                                                        $query->whereHas('majorCategory', function ($query) use ($selectedCategoryId) {
                                                                            $query->where('id', $selectedCategoryId);
                                                                        });
                                                                    })->get();
                                                                @endphp
                                                                @foreach ($userMaterialMajors as $userMaterialMajor)
                                                                    <span
                                                                        class="b-gray">{{ $userMaterialMajor->major->title }}</span>
                                                                @endforeach
                                                            @endforeach
                                                        @else
                                                            @php
                                                                $selectedCategoryId = $majorCategory->id;
                                                                $userMajors = App\Models\UserMajor::whereHas('major', function ($query) use ($selectedCategoryId) {
                                                                    $query->whereHas('majorCategory', function ($query) use ($selectedCategoryId) {
                                                                        $query->where('id', $selectedCategoryId);
                                                                    });
                                                                })->get();
                                                            @endphp
                                                            @foreach ($userMajors as $userMajor)
                                                                <span class="b-gray">{{ $userMajor->major->title }}</span>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- ##END Table ROW -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
