@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title"><h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5></div>
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="p-1">
            <fieldset>
                <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                    <div class="row">

                        <div class="col-md col-lg">
                            <label for="cat_id" class="form-label">* دسته بندی را انتخاب کنید :</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="active">نمایش</option>
                                @foreach ($items as $key => $item)
                                    @if ($item->name)
                                        @if ($id??'')
                                            <option value="{{$item->id}}" {{$item->id==$id?'selected':''}}>{{$item->name}}</option>
                                        @else
                                            <option value="{{$item->id}}" {{$key==0?'selected':''}}>{{$item->name}}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md col-lg-4">
                            <label for="photo" class="form-label">* گالری تصاویر :</label>
                            <input type="file" class="form-control" id="photo" name="photo[]" accept="image/*" multiple required/>
                            @if ($errors->has('photo'))<span class="help-block"><strong>{{ $errors->first('photo') }}</strong></span>@endif
                        </div>
    
                        <div class="col-md col-lg-2">
                            <label for="status" class="form-label">* وضعیت  :</label>
                            <select name="status" id="status" class="form-control">
                                <option value="active">نمایش</option>
                                <option value="deactive">عدم نمایش</option>
                            </select>
                        </div>

                    </div>
                </div>
                
                {{-- <div class="col-sm-12 tab_box my-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="fa-tab" data-toggle="tab" href="#fa" role="tab" aria-controls="farsi" aria-selected="true"> فارسی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="en-tab" data-toggle="tab" href="#en" role="tab" aria-controls="english" aria-selected="false"> انگلیسی</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        
                        <div class="tab-pane fade show active" id="fa" role="tabpanel" aria-labelledby="farsi-tab">
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="form-label">* عنوان  :</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required/>
                                @if ($errors->has('title'))<span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('employer') ? ' has-error' : '' }}">
                                <label for="employer" class="form-label">* کارفرما  :</label>
                                <input type="text" class="form-control" id="employer" name="employer" value="{{ old('employer') }}" required/>
                                @if ($errors->has('employer'))<span class="help-block"><strong>{{ $errors->first('employer') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('capacity') ? ' has-error' : '' }}">
                                <label for="capacity" class="form-label">* ظرفیت  :</label>
                                <input type="text" class="form-control" id="capacity" name="capacity" value="{{ old('capacity') }}" required/>
                                @if ($errors->has('capacity'))<span class="help-block"><strong>{{ $errors->first('capacity') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                                <label for="place" class="form-label">* محل اجرا  :</label>
                                <input type="text" class="form-control" id="place" name="place" value="{{ old('place') }}" required/>
                                @if ($errors->has('place'))<span class="help-block"><strong>{{ $errors->first('place') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                <label for="text" class="form-label">* text  :</label>
                                <input type="text" class="form-control" id="text" name="text" value="{{ old('text') }}" required/>
                                @if ($errors->has('text'))<span class="help-block"><strong>{{ $errors->first('text') }}</strong></span>@endif
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="english-tab">
                            <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                <label for="title_en" class="form-label">* عنوان  :</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en') }}" required/>
                                @if ($errors->has('title_en'))<span class="help-block"><strong>{{ $errors->first('title_en') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('employer_en') ? ' has-error' : '' }}">
                                <label for="employer_en" class="form-label">* کارفرما  :</label>
                                <input type="text" class="form-control" id="employer_en" name="employer_en" value="{{ old('employer_en') }}" required/>
                                @if ($errors->has('employer_en'))<span class="help-block"><strong>{{ $errors->first('employer_en') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('capacity_en') ? ' has-error' : '' }}">
                                <label for="capacity_en" class="form-label">* ظرفیت  :</label>
                                <input type="text" class="form-control" id="capacity_en" name="capacity_en" value="{{ old('capacity_en') }}" required/>
                                @if ($errors->has('capacity_en'))<span class="help-block"><strong>{{ $errors->first('capacity_en') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('place_en') ? ' has-error' : '' }}">
                                <label for="place_en" class="form-label">* محل اجرا  :</label>
                                <input type="text" class="form-control" id="place_en" name="place_en" value="{{ old('place_en') }}" required/>
                                @if ($errors->has('place_en'))<span class="help-block"><strong>{{ $errors->first('place_en') }}</strong></span>@endif
                            </div>
                            <div class="form-group{{ $errors->has('text_en') ? ' has-error' : '' }}">
                                <label for="text_en" class="form-label">* text  :</label>
                                <input type="text_en" class="form-control" id="text_en" name="text_en" value="{{ old('text_en') }}" required/>
                                @if ($errors->has('text_en'))<span class="help-block"><strong>{{ $errors->first('text_en') }}</strong></span>@endif
                            </div>

                        </div>
                    </div>
                </div>
                 --}}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success pull-left mx-3"><i class="fa fa-check ml-2"></i>ثبت شود</button>
                <button type="reset" class="btn btn-default pull-left"><i class="fa fa-refresh ml-2"></i>بازنشانی</button>
            </fieldset>
        </form>
    </div>
@endsection
@endcomponent
