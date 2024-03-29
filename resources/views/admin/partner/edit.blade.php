@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <form action="{{ route('admin-partner-update', $item->id) }}" method="POST"
              enctype="multipart/form-data" class="form-horizontal">
            <fieldset>
                <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                    <div class="col-md-12 ">
                        <label for="photo" class="form-label">تصویر(در صورت انتخاب تصویر جدید جایگزین می شود) :</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                               value="{{ old('photo') }}"/>
                        @if ($errors->has('photo'))
                            <span class="help-block"><strong>{{ $errors->first('photo') }}</strong></span>
                        @endif
                    </div>
                    @if($item->photo)
                        <div class="col-sm-2 mt-3">
                            <img src="{{url($item->photo)}}" alt="">
                        </div>
                    @endif
                </div>
                <div class="col-sm-12 tab_box my-3 py-3 px-0">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="fa-tab" data-toggle="tab" href="#fa" role="tab"
                               aria-controls="farsi" aria-selected="true"> فارسی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="en-tab" data-toggle="tab" href="#en" role="tab"
                               aria-controls="english" aria-selected="false"> انگلیسی</a>
                        </li>
                    </ul>
                    <div class="tab-content py-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="fa" role="tabpanel" aria-labelledby="farsi-tab">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">* نام :</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{ $item->name }}"
                                               required/>
                                        @if ($errors->has('name'))
                                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="english-tab">
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">* نام :</label>
                                        <input type="text" class="form-control d-ltr" id="name_en" name="name_en"
                                               value="{{$item->name_en}}"
                                               {{-- value="{{set_lang($item,'name','en')}}" --}}
                                               required/>
                                        @if ($errors->has('name_en'))
                                            <span class="help-block"><strong>{{ $errors->first('name_en') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
{{-- 
                    <div class="col-lg">
                        <label for="flexbox" class="form-label">* اندازه عرض محتوا  :</label>
                        <select name="flexbox" id="flexbox" class="form-control">
                            <option value="3" {{$item->flexbox=='3'?'selected':''}}>۱/۴ عرض صفحه</option>
                            <option value="4" {{$item->flexbox=='4'?'selected':''}}>۱/۳ عرض صفحه</option>
                            <option value="6" {{$item->flexbox=='6'?'selected':''}}>۱/۲ عرض صفحه</option>
                            <option value="8" {{$item->flexbox=='8'?'selected':''}}>۲/۳ عرض صفحه</option>
                        </select>
                    </div> --}}

                    <div class="col-lg">
                        <label for="status" class="form-label">* وضعیت  :</label>
                        <select name="status" id="status" class="form-control">
                            <option value="active" {{$item->status=='active'?'selected':''}}>نمایش</option>
                            <option value="deactive" {{$item->status=='deactive'?'selected':''}}>عدم نمایش</option>
                        </select>
                    </div>
                
                </div>

                <hr/>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success pull-left mr-2"><i
                                        class="fa fa-check ml-2"></i>ثبت شود
                            </button>
                            <button type="reset" class="btn btn-default pull-left"><i class="fa fa-refresh ml-2"></i>بازنشانی
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
@endcomponent
