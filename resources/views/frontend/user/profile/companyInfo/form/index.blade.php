

<form method="post" enctype="multipart/form-data"
action="{{ route('user.updateCompanyInfo') }}">
{{ csrf_field() }}
{{ method_field('post') }}
<div class="row">
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compName"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compName')"
                value="{{ old('compName',$profile->compName) }}">
            <label for="floatingInput">
                @lang('site.compName') </label>
            @error('compName') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compLegalName"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compLegalName')"
                value="{{ old('compLegalName', $profile->compLegalName) }}">
            <label for="floatingInput">
                @lang('site.compLegalName')
            </label>
            @error('compLegalName') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compemail"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compemail')"
                value="{{ old('compemail', $profile->compemail) }}">
            <label for="floatingInput">
                @lang('site.compemail') </label>
            @error('compemail') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compPhone"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compPhone')"
                value="{{ old('compPhone', $profile->compPhone) }}">
            <label for="floatingInput">
                @lang('site.compPhone') </label>
            @error('compPhone') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compWebsite"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compWebsite')"
                value="{{ old('compWebsite', $profile->compWebsite) }}">
            <label for="floatingInput">
                @lang('site.compWebsite')
            </label>
            @error('compWebsite') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compAddress"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compAddress')"
                value="{{ old('compAddress', $profile->compAddress) }}">
            <label for="floatingInput">
                @lang('site.compAddress')
            </label>
            @error('compAddress') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-12 mb-4">
        <label class="form-label">
            @lang('site.compLogo')
        </label>
        <div class="input-group">
            <input type="file" name="compLogo"
                class="form-control"
                id="inputGroupFile02">
            <label class="input-group-text"
                for="inputGroupFile02">@lang('site.logo')
            </label>
        </div>
        <span class="hint-input d-block">
            يجب ان لا يحتوي اللوجو عن اي معلومات
            تواصل
            مثل رقم الهاتف او ويب سايت
        </span>
        <img src="{{ $profile->compLogo_path}}"
            style="width: 50px"
            class="img-thumbnail ">
        @error('compLogo') <span class="error">{{
            $message }}</span> @enderror
    </div>
    <div class="col-12 mb-3">
        <strong>@lang('site.LegalInformation')</strong>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text"
                name="compCommercialRecord"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compCommercialRecord')"
                value="{{ old('compCommercialRecord', $profile->compCommercialRecord) }}">
            <label for="floatingInput">
                @lang('site.compCommercialRecord')
            </label>
            @error('compCommercialRecord') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compTaxNumber"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compTaxNumber')"
                value="{{ old('compTaxNumber', $profile->compTaxNumber) }}">
            <label for="floatingInput">
                @lang('site.compTaxNumber')
            </label>
            @error('compTaxNumber') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text"
                name="compTaxValueNumber"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compTaxValueNumber')"
                value="{{ old('compTaxValueNumber', $profile->compTaxValueNumber) }}">
            <label for="floatingInput">
                @lang('site.compTaxValueNumber')
            </label>
            @error('compTaxValueNumber') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text"
                name="compIndustryRegistry"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compIndustryRegistry')"
                value="{{ old('compIndustryRegistry', $profile->compIndustryRegistry) }}">
            <label for="floatingInput">
                @lang('site.compIndustryRegistry')
            </label>
            @error('compIndustryRegistry') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>

    <div class="col-12 mb-3">
        <strong> @lang('site.bankAccount')
        </strong>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text"
                name="compBankAccount"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compBankAccount')"
                value="{{ old('compBankAccount', $profile->compBankAccount) }}">
            <label for="floatingInput">
                @lang('site.compBankAccount')
            </label>
            @error('compBankAccount') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compBankSwift"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compBankSwift')"
                value="{{ old('compBankSwift', $profile->compBankSwift) }}">
            <label for="floatingInput">
                @lang('site.compBankSwift')
            </label>
            @error('compBankSwift') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text" name="compBankCity"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compBankCity')"
                value="{{ old('compBankCity', $profile->compBankCity) }}">
            <label for="floatingInput">
                @lang('site.compBankCity')
            </label>
            @error('compBankCity') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text"
                name="compBankStockholder"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compBankStockholder')"
                value="{{ old('compBankStockholder', $profile->compBankStockholder) }}">
            <label for="floatingInput">
                @lang('site.compBankStockholder')
            </label>
            @error('compBankStockholder') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>


    <div class="col-12 mb-3">
        <strong> @lang('site.shippingAddress')
        </strong>
    </div>
    <div class="col-md-6 mb-4">
        <div class="form-floating">
            <input type="text"
                name="compShippingAddress"
                class="form-control"
                id="floatingInput"
                placeholder="@lang('site.compShippingAddress')"
                value="{{ old('compShippingAddress', $profile->compShippingAddress) }}">
            <label for="floatingInput">
                @lang('site.compShippingAddress')
            </label>
            @error('compShippingAddress') <span
                class="error">{{ $message
                }}</span>
            @enderror
        </div>
    </div>
    <div class="col-12 mb-3">
        <strong> رفع الاوراق القانونية </strong>
        <span class="hint-input d-block">
            (يجب رفع صور اوpdf للاوراق القانونية
            مثل
            سجل
            التجاري والصناعي والقيمة المضافة
            ويمكنك
            تحميل عدة ملفات)
        </span>
    </div>
    <div class="col-12 mb-4">
        <div class="files-upload w-100">
            <div class="file-upload">
                <input type="file" id="file" multiple name="user_attachments[]"
                    onchange="javascript:updateList()" />
                <div id="fileList">
                    <ul id="list__files"></ul>
                </div>
                <i
                    class="fas fa-4x mb-3 fa-cloud-upload-alt"></i>
                <strong> قم بإختيارالملف </strong>
                <p> يمكنك تحميل عدة ملفات دفعة واحدة
                </p>

                <span class="sicrit_p"> جميع التجميلات
                    أمنة وسرية </span>
            </div>
        </div>
    </div>



</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary"
        data-bs-dismiss="modal"> خروج </button>
    <button type="submit" class="btn btn-primary">
        حفظ التعديلات
    </button>
</div>
</form>

<table>
    <tr>
        <td>#</td>
        <td>@lang('site.documents')</td>
        <td>@lang('site.action')</td>
    </tr>

    @forelse($attachments as $key=>$item)
    <tr>
        <td>{{$key+1}}</td>
        <td> <a href="{{$item->file_path}}" target="_blank"> {{$item->file}}</a></td>
        <td>
            <form action="{{route('user.deleteDocCompanyInfo',['id'=>$item->id])}}" method="post"
                style="display: inline-block">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit"
                    class="btn btn-danger delete btn-sm "><i
                        class="fa fa-trash"></i> </button>
            </form><!-- end of form -->
    </tr>

    @empty
    <tr>
        <td> </td>
        <td>   <label for="" class="alert alert-danger col-xs-12 text-center">@lang('site.no_data_found')</label>
        </td>
        <td> </td>
    </tr>

    @endforelse



</table>
