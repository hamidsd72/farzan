@component('layouts.admin')
    @section('title') {{ $title }} @endsection
    @section('body')
        <style>
            .select2 {
                border: 1px solid #dcdcdc;
            }
        </style>
        <div class="condition pull-right w-100 mb-2">
            <div class="title">
                <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
            </div>
            <form action="{{ route('admin-product-store') }}" method="POST" enctype="multipart/form-data"
                  class="form-horizontal">
                <fieldset>
                    <span style="color: green">توجه: فیلد های ستاره دار حتما باید تکمیل شوند</span><br>
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
                                            <label for="name" class="form-label"><span style="color: red;">*</span>   نام محصول فارسی :</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                            />
                                            <input type="hidden" class="form-control" id="slug" name="slug"
                                                   value="{{ old('slug') }}" />
                                            @if ($errors->has('name'))
                                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('text_masraf') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="text" class="form-label"><span style="color: red;">*</span>   موارد مصرف محصول فارسی :</label>
                                            <textarea class="textarea ckeditor form-control" id="text_masraf" name="text_masraf" cols="30"
                                                      rows="10">{{ old('text_masraf') }}</textarea>
                                            @if ($errors->has('text_masraf'))
                                                <span class="help-block"><strong>{{ $errors->first('text_masraf') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="text" class="form-label"><span style="color: red;">*</span>   محتوای محصول فارسی :</label>
                                            <textarea class="textarea ckeditor form-control" id="text" name="text" cols="30"
                                                      rows="10">{{ old('text') }}</textarea>
                                            @if ($errors->has('text'))
                                                <span class="help-block"><strong>{{ $errors->first('text') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('short_text') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="text" class="form-label">توضیحات کوتاه فارسی : </label>
                                            <textarea class="form-control" id="text" name="short_text" cols="5"
                                                      rows="10">{{old('short_text')}}</textarea>
                                            @if ($errors->has('short_text'))
                                                <span class="help-block"><strong>{{ $errors->first('short_text') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('pdf_fa') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <label for="pdf_fa" class="form-label"> pdf FA :</label>
                                        <input type="file" class="form-control" id="pdf_fa" name="pdf_fa" accept=".pdf"
                                               value="{{ old('pdf_fa') }}"/>
                                        @if ($errors->has('pdf_fa'))
                                            <span class="help-block"><strong>{{ $errors->first('pdf_fa') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="related" class="form-label">عنوان سئو فارسی</label>
                                            <input type="text" class="form-control" id="titleseo" name="titleseo" value="{{old('titleseo')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="related" class="form-label">توضیحات سئو فارسی</label>
                                            <input type="text" class="form-control" id="descriptionseo" name="descriptionseo" value="{{old('descriptionseo')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="related" class="form-label">کلمات کلیدی سئو فارسی</label>
                                            <input type="text" class="form-control" id="keywordsseo" name="keywordsseo" value="{{old('keywordsseo')}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="english-tab">
                                <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label"><span style="color: red;">*</span>   نام محصول انگلیسی :</label>
                                            <input type="text" class="form-control d-ltr" id="name_en" name="name_en" value="{{ old('name_en') }}"
                                            />
                                            <input type="hidden" class="form-control d-ltr" id="slug_en" name="slug_en"
                                                   value="{{ old('slug_en') }}" />
                                            @if ($errors->has('name'))
                                                <span class="help-block"><strong>{{ $errors->first('name_en') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="form-group{{ $errors->has('zeneric_name_en') ? ' has-error' : '' }}">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <label for="name" class="form-label"><span style="color: red;">*</span>   نام ژنریک انگلیسی :</label>--}}
{{--                                            <input type="text" class="form-control d-ltr" id="zeneric_name_en" name="zeneric_name_en" value="{{ old('zeneric_name_en') }}"--}}
{{--                                            />--}}
{{--                                            @if ($errors->has('zeneric_name_en'))--}}
{{--                                                <span class="help-block"><strong>{{ $errors->first('zeneric_name_en') }}</strong></span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group{{ $errors->has('text_masraf_en') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="text" class="form-label"><span style="color: red;">*</span>   موارد مصرف محصول انگلیسی :</label>
                                            <textarea class="textarea ckeditor form-control" id="text_masraf_en" name="text_masraf_en" cols="30"
                                                      rows="10">{{ old('text_masraf_en') }}</textarea>
                                            @if ($errors->has('text_masraf_en'))
                                                <span class="help-block"><strong>{{ $errors->first('text_masraf_en') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('text_en') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="text" class="form-label"><span style="color: red;">*</span>   محتوای محصول انگلیسی :</label>
                                            <textarea class="textarea ckeditor form-control" id="text_en" name="text_en" cols="30"
                                                      rows="10">{{ old('text_en') }}</textarea>
                                            @if ($errors->has('text_en'))
                                                <span class="help-block"><strong>{{ $errors->first('text_en') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('short_text_en') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="text" class="form-label">توضیحات کوتاه انگلیسی : </label>
                                            <textarea class="form-control d-ltr" id="short_text_en" name="short_text_en" cols="5"
                                                      rows="10">{{old('short_text_en')}}</textarea>
                                            @if ($errors->has('short_text_en'))
                                                <span class="help-block"><strong>{{ $errors->first('short_text_en') }}</strong></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('pdf_en') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                        <label for="pdf_en" class="form-label"> pdf EN :</label>
                                        <input type="file" class="form-control" id="pdf_en" name="pdf_en" accept=".pdf"
                                               value="{{ old('pdf_en') }}"/>
                                        @if ($errors->has('pdf_en'))
                                            <span class="help-block"><strong>{{ $errors->first('pdf_en') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="related" class="form-label">عنوان سئو انگلیسی</label>
                                            <input type="text" class="form-control d-ltr" id="titleseo_en" name="titleseo_en" value="{{old('titleseo_en')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="related" class="form-label">توضیحات سئو انگلیسی</label>
                                            <input type="text" class="form-control d-ltr" id="descriptionseo_en" name="descriptionseo_en" value="{{old('descriptionseo_en')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="related" class="form-label">کلمات کلیدی سئو انگلیسی</label>
                                            <input type="text" class="form-control d-ltr" id="keywordsseo_en" name="keywordsseo_en" value="{{old('keywordsseo_en')}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="form-group{{ $errors->has('zeneric_name') ? ' has-error' : '' }}">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <label for="name" class="form-label"><span style="color: red;">*</span>   نام ژنریک  :</label>--}}
{{--                                <input type="text" class="form-control d-ltr" id="zeneric_name" name="zeneric_name" value="{{ old('zeneric_name') }}"--}}
{{--                                />--}}
{{--                                @if ($errors->has('zeneric_name'))--}}
{{--                                    <span class="help-block"><strong>{{ $errors->first('zeneric_name') }}</strong></span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="category_id" class="form-label"><span style="color: red;">*</span>   نوع محصول :</label>
                                <select name="cat_id" class="select form-control">
                                    @foreach($cats as $cat)
                                        <option value="{{$cat->id}}" {{old('cat_id')==$cat->id?'selected':''}}> {{$cat->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('cat_id'))
                                    <span class="help-block"><strong>{{ $errors->first('cat_id') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="category_id" class="form-label"><span style="color: red;">*</span>   دسته بندی محصول :</label>
                                <select name="category_id" class="select form-control">
                                    @foreach($items as $item)
                                        @if(count($item->children))
                                            @foreach($item->children as $child)
                                                <option value="{{$child->id}}" {{old('category_id')==$child->id?'selected':''}}>{{$item->name}} >  {{$child->name}}</option>
                                            @endforeach
                                        @else
                                            <option value="{{$item->id}}" {{old('category_id')==$item->id?'selected':''}}>{{$item->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="help-block"><strong>{{ $errors->first('category_id') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="type_id" class="form-label"><span style="color: red;">*</span>   شکل داروئی :</label>
                                <select name="type_id" class="select form-control">
                                    @foreach($types as $type)
                                        @if(count($type->children))
                                            @foreach($type->children as $child)
                                                <option value="{{$child->id}}" {{old('type_id')==$child->id?'selected':''}}>{{$type->name}} >  {{$child->name}}</option>
                                            @endforeach
                                        @else
                                            <option value="{{$type->id}}" {{old('type_id')==$type->id?'selected':''}}>{{$type->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('type_id'))
                                    <span class="help-block"><strong>{{ $errors->first('type_id') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('brand_id') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="brand_id" class="form-label"><span style="color: red;">*</span>   برند :</label>
                                <select name="brand_id" class="select form-control">
                                    <option value="0">بدون برند</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" {{old('brand_id')==$brand->id?'selected':''}}> {{$brand->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('brand_id'))
                                    <span class="help-block"><strong>{{ $errors->first('brand_id') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
{{--                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <label for="name" class="form-label"><span style="color: red;">*</span>کد محصول : </label>--}}
{{--                                <input type="text" class="form-control d-ltr" id="code" name="code" value="{{ old('code') }}"/>--}}
{{--                                @if ($errors->has('code'))--}}
{{--                                    <span class="help-block"><strong>{{ $errors->first('code') }}</strong></span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <label for="photo" class="form-label"><span style="color: red;">*</span>   تصویر :</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                                   value="{{ old('photo') }}"/>
                            @if ($errors->has('photo'))
                                <span class="help-block"><strong>{{ $errors->first('photo') }}</strong></span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('libraries') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <label for="libraries" class="form-label">گالری :</label>
                            <input type="file" class="form-control" id="libraries" name="libraries[]" accept="image/*"
                                   value="{{ old('libraries') }}" multiple/>
                            @if ($errors->has('libraries'))
                                <span class="help-block"><strong>{{ $errors->first('libraries') }}</strong></span>
                            @endif
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
                                <button type="reset" class="btn btn-default pull-left"><i
                                            class="fa fa-refresh ml-2"></i>بازنشانی
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
