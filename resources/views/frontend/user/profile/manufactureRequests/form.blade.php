@include('partials._errors')
<form action="{{route('user.manufactureCreateOffer')}}" enctype="multipart/form-data"  method="post" >
  {{ csrf_field() }}
  {{ method_field('post') }}
  <input type="hidden" value="{{$order->id}}" name="order_id">
  <div class="row">
    <div class="col-lg-4 col-12 mb-4">
      <div class="row">
        <div class="col-md-6 mb-4">
          <label for="" class="form-label"> من </label>
          <div class="input-group">
            <input type="number" required="required"  min="1" class="form-control" name="dateFrom" placeholder=" من " aria-label=" اكتب "
              aria-describedby="basic-addon1"
              value="{{old('dateFrom')}}"
              >
            <span class="input-group-text" id="basic-addon1"> أيام </span>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <label for="" class="form-label"> الى </label>
          <div class="input-group">
              <input type="number"  required="required"  min="1" class="form-control" name="dateTo" placeholder=" الى " aria-label=" اكتب "
              aria-describedby="basic-addon1"
              value="{{old('dateTo')}}"
              >
             <span class="input-group-text" id="basic-addon1"> أيام </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-12 mb-4">
      <div class="row">
        <div class="col-md-4 mb-4">
          <label for="" class="form-label"> سعر القطعة الواحدة </label>
          <div class="input-group">
            <input type="number"  required="required" class="form-control" name="priceUnit" placeholder="  " aria-label=" اكتب "
              aria-describedby="basic-addon1"
              value="{{old('priceUnit')}}"
              >
            <span class="input-group-text" id="basic-addon1"> ج.م </span>

          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="" class="form-label"> العربون </label>
          <div class="input-group">
              <input type="number"  required="required" class="form-control" name="priceDeposit" placeholder="  " aria-label=" اكتب "
              aria-describedby="basic-addon1"
              value="{{old('priceDeposit')}}"
              >

            <span class="input-group-text" id="basic-addon1"> ج.م </span>
            <div class="hint-input"> (اقل مبلغ تحتاجه لبدء عملية التصنيع) </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="" class="form-label"> الاجمالى </label>
          <div class="input-group">
              <input type="number"  required="required" class="form-control" name="priceTotal" placeholder="  " aria-label=" اكتب "
              aria-describedby="basic-addon1"
              value="{{old('priceTotal')}}"
              >


            <span class="input-group-text" id="basic-addon1"> ج.م </span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <fieldset class="row">
        <legend class="col-form-label col-sm-4 pt-0"> هل يمكن تقديم عينة </legend>
        <div class="col-sm-8 d-flex">
          <div class="form-check me-4">
            <input class="form-check-input"  required="required" type="radio" name="provideSample" id="yes1" value="yes">
            <label class="form-check-label" for="yes">
              نعم
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input"  required="required"  type="radio" name="provideSample" id="no1" value="no">
            <label class="form-check-label" for="no">
              لايوجد
            </label>
          </div>
        </div>
      </fieldset>
      <div class="hint-input"> (بعض المنتجات لا يمكن تقديم عينة بها مثل الاسطمبات لذلك لا
        بأس ان اخترت لا) </div>
    </div>

    <div class="col-md-3 mb-4 has_peaces_image1">
      <label for="" class="form-label"> سعر العينة </label>
      <div class="input-group">
          <input type="number" class="form-control" name="priceSample" placeholder="  " aria-label=" اكتب "
          aria-describedby="basic-addon1"
          value="{{old('priceSample')}}"
          >

        <span class="input-group-text" id="basic-addon1"> ج.م </span>
      </div>
    </div>

    <div class="col-md-12 mb-4">
      <label for="" class="form-label"> طريقة التصنيع </label>
      <textarea class="form-control"  required="required" name="manufacturingMethod" placeholder=" طريقة التصنيع ">{{old('manufacturingMethod')}}</textarea>
      <div class="hint-input"> ( قم بادخال خطوات التصنيع بطريقة مبسطة ومختصرة في
        مجموعة نقاط 1- 2- 3الخ) </div>
    </div>

    <div class="col-md-12 mb-4">
      <fieldset class="row">
        <legend class="col-form-label col-sm-6 pt-0"> هل قمت بتصنيع نفس القطعة تماما او قطعة مشابهه ولديك
          صورة قم برفعها </legend>
        <div class="col-sm-6 d-flex">
          <div class="form-check me-4">
            <input class="form-check-input"  required="required" type="radio" name="madeSameSample" id="yes" value="yes">
            <label class="form-check-label" for="yes">
              نعم
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input"  required="required" type="radio" name="madeSameSample" id="no" value="no">
            <label class="form-check-label" for="no">
              لا
            </label>
          </div>
        </div>
      </fieldset>
    </div>

    <div class="col-md-6 has_peaces_image">
      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupFile01"> رفع الصورة </label>
        <input type="file" name="file" class="form-control" id="inputGroupFile01">
      </div>
    </div>

    <div class="col-md-12 mb-4">
      <label for="" class="form-label"> ملاحظات </label>
      <textarea class="form-control"  required="required" name="notes" placeholder=" اكتب الملاحظات ">{{old('notes')}}</textarea>
      <div class="hint-input"> ( اكتب اي معلومات او مميزات لديك او اي شئ
        تريده) </div>
    </div>

    <div class="col-md-12 mb-4 text-center">
      <button class="style-btn"> قدم عرض سعر </button>
    </div>

  </div>
</form>
