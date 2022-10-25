@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <style>
        .section-photo {
            width: 100%;
            height: 150px;
        }
        .abs {
            position: absolute;
            width: 100%;
            top: 12px;
            right: 28px;
        }
    </style>

    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            <table class="table table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-toggle="true">صفحه سکشن</th>
                    <th data-toggle="true">عنوان سکشن</th>
                    <th data-hide="phone">مکان</th>
                    <th data-toggle="true">ترتیب</th>
                    <th data-hide="phone">وضعیت</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $item->page_name }}</td>
                        <td>{{ $item->section_name }}</td>
                        <td>
                            @if ($item->position=="right")
                                سمت راست
                            @elseif($item->position=="left")
                                سمت چپ
                            @elseif($item->position=="center")
                                وسط
                            @elseif($item->position=="header")
                                هدر
                            @elseif($item->position=="footer")
                                فوتر
                            @endif
                        </td>
                        <td>{{ $item->sort }}</td>
                        <td>
                            @if($item->status=='show')
                                <button type="submit" class="btn text-success" style="background: transparent;">فعال هست</button>
                            @else
                                <button type="submit" class="btn text-danger" style="background: transparent;">غیرفعال هست</button>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <form action="{{ route('section-photo.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    {{ csrf_field() }}
                    <input type="hidden" id="item_id" name="item_id" value="{{ $item->id }}"/>
                    <div class="col-md-12">
                        
                        <button type="submit" class="btn btn-success">افزودن تصویر به سکشن {{$item->section_name}}</button>

                        <label for="image" class="form-label mr-3">لطفا تصویر را وارد کنید :</label>
                        <input type="file" id="image" name="image" accept="image/*" value="{{ old('image') }}" required/>
                        @if ($errors->has('image'))
                            <span class="help-block"><strong>{{ $errors->first('image') }}</strong></span>
                        @endif
                    </div>
                </div>
            </form>

            <div class="row mt-5">
                @foreach ($photos as $photo)
                    <div class="col-lg-3 col-md-6">
                        <img src="{{url('/').'/'.$photo->path}}" alt="{{$item->section_name}}" class="section-photo">
                        <div class="abs">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$photo->id}}">
                                &times;
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    @foreach ($photos as $photo)
        <div class="modal mt-5" id="myModal{{$photo->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">حذف تصویر</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body h6">
                        این عملیات غیرقابل بازگشت است
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('section-photo.destroy',$photo->id) }}" method="POST" >
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                            <button type="submit" class="btn btn-danger mx-3" >حذف شود</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
@push('scripts')
    <script>
        $(".modal_btn").click(function () {
            var id = $(this).attr("id");
            $(".id").val(id);
        })
    </script>
@endpush
@endcomponent
