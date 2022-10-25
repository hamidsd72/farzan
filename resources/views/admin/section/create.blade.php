@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <fieldset>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                                <label for="title" class="form-label">* عنوان :</label>
                                <input type="text" class="form-control d-ltr" id="title" name="title"
                                        value="{{ old('title') }}" required/>
                                @if ($errors->has('title'))
                                    <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                @endif
                        </div>‍‍
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="type" class="form-label">* مکان :</label>
                            <select name="type" class="form-control">
                                <option value="new" selected‍>تازه ها</option>
                                <option value="working">در حال اجرا</option>
                                <option value="read_more">بیشتر بدانیم</option>
                            </select>
                        </div>‍‍
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                                <label for="shor_text" class="form-label">* تیتر :</label>
                                <input type="text" class="form-control d-ltr" id="shor_text" name="shor_text"
                                        value="{{ old('shor_text') }}" required/>
                                @if ($errors->has('shor_text'))
                                    <span class="help-block"><strong>{{ $errors->first('shor_text') }}</strong></span>
                                @endif
                        </div>‍‍
                    </div>
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
                            <label for="status" class="form-label">وضیعت لینک
                                :</label>
                            <select name="status" class="form-control">
                                <option value="‍‍active" selected‍>فعال باشد</option>
                                <option value="deactivate"‍ > غیر فعال باشد</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group{{ $errors->has('pic') ? ' has-error' : '' }}">
                            <label for="photo" class="form-label">* تصویر
                                :</label>
                            <input type="file" class="form-control" id="photo" name="pic" accept="image/*"
                                value="{{ old('pic') }}"/>
                            @if ($errors->has('pic'))
                                <span class="help-block"><strong>{{ $errors->first('pic') }}</strong></span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="form-label"> * توضیحات :</label>
                        <input type="text" class="form-control d-ltr" id="description" name="description" value="{{ old('description') }}"/>
                        @if ($errors->has('description'))
                            <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
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
