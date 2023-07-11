@foreach ($orderMaterials as $key=>$material)
<div class="col-md-4">
<div class="chk_title form-check d-flex align-items-center mb-2">
    {{-- <input class="form-check-input" type="checkbox"   id="chkAll_{{$key+1}}"
    onclick="javascript:checkAll(this)"> --}}
    <label class="form-check-label " style="background-color: rgba(0, 140, 255, 0.11)" for="chkAll_{{$key+1}}">
    - {{$material->title}}
    </label>
</div>
@foreach ($material->majors as $major)
<div class="form-check d-flex align-items-center mb-2">
    <input class="form-check-input" name="major_id[]"
    {{ $major->userMajors->where('user_id',authUser()->id)->isNotEmpty() ? 'checked' : '' }}

    type="checkbox" value="{{$major->id}}" id="chk{{$major->id}}">
    <label class="form-check-label mx-2" for="chk{{$major->id}}">
    {{$major->title}}
    </label>
</div>
@endforeach

</div>
@endforeach
