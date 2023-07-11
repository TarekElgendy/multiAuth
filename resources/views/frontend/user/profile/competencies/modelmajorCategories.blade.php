
@foreach ($majorCategories as $majorCategory)
@php

@endphp

    <div class="accordion accordion-flush" id="accordion-{{ $majorCategory->id }}">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading{{ $majorCategory->id }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#tab-{{ $majorCategory->id }}" aria-expanded="false"
                    aria-controls="tab-{{ $majorCategory->id }}">
                    {{ $majorCategory->title }}
                </button>
            </h2>
            <div id="tab-{{ $majorCategory->id }}" class="accordion-collapse collapse show"
                aria-labelledby="flush-headingOne" data-bs-parent="#accordion-{{ $majorCategory->id }}">
                <div class="accordion-body">
                    <div class="row">
                        @if ($majorCategory->id==7)
                        @include('frontend.user.profile.competencies.modelorderMaterials')
                        @else
                         @foreach ($majorCategory->majors as $major)

                            <div class="col-md-4">
                                <div class="form-check d-flex align-items-center mb-2">
                                    <input class="form-check-input" type="checkbox" name="major_id[]"
                                        value="{{ $major->id }}"

                                        {{ $major->userMajors->where('user_id',authUser()->id)->isNotEmpty() ? 'checked' : '' }}
                                        id="item{{ $major->id }}">
                                    <label class="form-check-label mx-2" for="item{{ $major->id }}">
                                        {{ $major->title }}
                                        <!--{{ $major->id }}-->
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
