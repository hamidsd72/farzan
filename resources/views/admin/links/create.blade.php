@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <form action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <fieldset>
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
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">* عنوان لینک :</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               value="{{ old('title') }}" required/>
                                        {{-- <input type="hidden" class="form-control" id="slug" name="slug"
                                               value="{{ old('slug') }}" required/> --}}
                                        @if ($errors->has('title'))
                                            <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="url" class="form-label">* (url) مسیر لینک :</label>
                                        <input type="text" class="form-control" id="url" name="url"
                                               value="{{ old('url') }}" required/>
                                        {{-- <input type="hidden" class="form-control" id="slug" name="slug"
                                               value="{{ old('slug') }}" required/> --}}
                                        @if ($errors->has('url'))
                                            <span class="help-block"><strong>{{ $errors->first('url') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="english-tab">
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="en_title" class="form-label">* عنوان لینک انگلیسی :</label>
                                        <input type="text" class="form-control d-ltr" id="en_title" name="en_title"
                                               value="{{ old('en_title') }}" required/>
                                        {{-- <input type="hidden" class="form-control d-ltr" id="slug_en" name="slug_en"
                                               value="{{ old('slug_en') }}" required/> --}}
                                        @if ($errors->has('en_title'))
                                            <span class="help-block"><strong>{{ $errors->first('en_title') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="textarea-container form-group{{ $errors->has('page_content_en') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="page_content" class="form-label">* محتوای صفحه انگلیسی :</label>
                                        <textarea class="textarea ckeditor form-control" id="page_content_en"
                                                  name="page_content_en">{{ old('page_content_en') }}</textarea>
                                        @if ($errors->has('page_content_en'))
                                            <span class="help-block"><strong>{{ $errors->first('page_content_en') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <div class="col-md-12">
                        <label for="photo" class="form-label">محل قرارگیری در فوتر
                            :</label>
                        <select name="place" class="form-control">
                            <option value="right" {{old('place')=='right'?'selected':''}}>راست(در زبان انگلیسی چپ)</option>
                            <option value="left" {{old('place')=='left'?'selected':''}}>چپ(در زبان انگلیسی راست)</option>
                        </select>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                                <label for="sort" class="form-label">* ترتیب :</label>
                                <input type="number" class="form-control d-ltr" id="sort" name="sort"
                                        value="{{ old('sort') }}" required/>
                                @if ($errors->has('sort'))
                                    <span class="help-block"><strong>{{ $errors->first('sort') }}</strong></span>
                                @endif
                        </div>‍‍
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            {{-- <label for="status" class="form-label">وضیعت محل قرارگیری لینک --}}
                            <label for="position" class="form-label">محل نمایش لینک
                                :</label>
                            <select name="position" class="form-control">
                                <option value="header-primary" selected‍>سمت راست هدر</option>
                                {{-- <option value="primary" selected‍>لینک اصلی</option> --}}
                                {{-- <option value="sub_link"‍ >زیر منو معرفی یک لینک</option> --}}
                                <option value="header-second"‍ >سمت چپ هدر</option>
                                <option value="footer"‍ >فوتر</option>
                            </select>
                        </div>‍‍
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            {{-- <label for="status" class="form-label">وضیعت محل قرارگیری لینک --}}
                            <label for="status" class="form-label">وضیعت لینک
                                :</label>
                            <select name="status" class="form-control">
                                <option value="primary" selected‍>فعال باشد</option>
                                {{-- <option value="primary" selected‍>لینک اصلی</option> --}}
                                {{-- <option value="sub_link"‍ >زیر منو معرفی یک لینک</option> --}}
                                <option value="hide"‍ > غیر فعال باشد</option>
                            </select>
                        </div>‍‍
                    </div>
                </div>

                {{-- <div class="form-group">
                    <div class="col-md-12">
                        <label for="link_id" class="form-label">اگر این لینک زیرمنو لینک دیک نام لینک اصلی را انتخاب کنید
                            :</label>
                        <select name="link_id" class="form-control">
                            <option value=0 selected‍>لینک اصلی</option>
                            @foreach ($items  as $item)
                                <option value="{{$item->id}}" selected‍>{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>‍‍
                </div>‍‍ --}}
                {{-- <div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <label for="photo" class="form-label">تصویر
                            :</label>
                        <input type="file" class="form-control" id="photo" name="pic" accept="image/*"
                               value="{{ old('pic') }}"/>
                        @if ($errors->has('pic'))
                            <span class="help-block"><strong>{{ $errors->first('pic') }}</strong></span>
                        @endif
                    </div>
                </div> --}}


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
@push('scripts')
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        $(".textarea").ckeditor({
            filebrowserImageBrowseUrl: "{{ url('laravel-filemanager?type=Images') }}",
            filebrowserImageUploadUrl: "{{ url('laravel-filemanager/upload?type=Images&_token=') }}",
            filebrowserBrowseUrl: "{{ url('laravel-filemanager?type=Files') }}",
            filebrowserUploadUrl: "{{ url('laravel-filemanager/upload?type=Files&_token=') }}"
        });
    </script>
@endpush
@endcomponent
