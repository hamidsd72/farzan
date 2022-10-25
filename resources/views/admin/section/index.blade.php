@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            <a href="{{ route('section.create') }}" class="btn btn-success mb-2"><i
                        class="fa fa-plus ml-2"></i>افزودن سکشن</a>
            <table class="table table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-toggle="true">عنوان</th>
                    <th data-toggle="true">تیتر</th>
                    <th data-hide="phone">مکان</th>
                    <th data-toggle="true">ترتیب</th>
                    <th data-hide="phone">وضعیت</th>
                    <th data-hide="phone">تصویر</th>
                    <th data-hide="phone">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->shor_text }}</td>
                        <td>
                            @if ($item->type=="new")
                                تازه ها
                            @elseif($item->type=="working")
                                در حال اجرا
                            @elseif($item->type=="read_more")
                                بیشتر بدانیم
                            @endif
                        </td>
                        <td>{{ $item->sort }}</td>
                        <td>
                            <form action="{{ route('section.update',$item->id) }}" method="POST" >
                                @method('patch')
                                @csrf
                                <input type="hidden" name="title" value="{{$item->title}}">
                                <input type="hidden" name="shor_text" value="{{$item->shor_text}}">
                                <input type="hidden" name="type" value="{{$item->type}}">
                                <input type="hidden" name="sort" value="{{$item->sort}}">
                                <input type="hidden" name="description" value="{{$item->description}}">
                                @if($item->status=='active')
                                    <input type="hidden" name="status" value="deactivate">
                                    <button type="submit" class="btn text-danger" style="background: transparent;">غیرفعال کردن</button>
                                @else
                                    <input type="hidden" name="status" value="active">
                                    <button type="submit" class="btn text-success" style="background: transparent;">فعال کردن کردن</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            @if ( $item->pic)
                                <a class="ml-4" href="{{ url('/').'/'. $item->pic }}" title="نمایش تصویر">نمایش تصویر</a>
                            @endif
                        </td>
                        <td class="table-td-icons"
                            style="display: flex;justify-content: center;align-items: center;min-height: 80px">
                            <a href="{{ route('section.edit', $item->id) }}" title="ویرایش"><i
                                        class="far fa-edit"></i></a>
                            @role('ادمین ارشد')
                                <a href="#" data-toggle="modal" data-target="#myModal{{$item->id}}"><i class="fa fa-trash" style="color: red;"></i></a>
                            @endrole
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ($items as $item)
        <div class="modal mt-5" id="myModal{{$item->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> حذف سکشن {{$item->title}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body h6">
                        این عملیات غیرقابل بازگشت است
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('section.destroy',$item->id) }}" method="POST" >
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
