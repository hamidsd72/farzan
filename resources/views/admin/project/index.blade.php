@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            @if ($id??'')
                <a href="{{ route('project.custom.create',$id) }}" class="btn btn-success mb-2"><i class="fa fa-plus ml-2"></i>افزودن پروژه به این دسته</a>
            @else
                <a href="{{ route('project.create') }}" class="btn btn-success mb-2"><i class="fa fa-plus ml-2"></i>افزودن پروژه</a>
            @endif
            <table class="table  table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-toggle="true">نام</th>
                    <th data-toggle="true">تصویر</th>
                    <th data-hide="phone">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="text-{{$item->cat()?$item->cat()->status=='active'?'success':'danger':'secondary'}}">
                            {{ $item->cat()?$item->cat()->name:'________' }}</td>
                        <td class="text-{{$item->status=='active'?'success':'danger'}}">{{ $item->title }}</td>
                        <td><img src="{{$item->photo?url($item->photo):''}}" style="height: 60px"></td>
                        <td>
                            <form action="{{route('project.update', $item->id)}}" method="post">
                                @method('PATCH')
                                @csrf
                                <input type="text" id="sort_id" name="sort_id" value="{{$item->sort_id}}" />
                                <input type="hidden" name="title" value="{{ $item->title }}"/>
                                <input type="hidden" name="title_en" value="{{ $item->title_en }}"/>
                                <input type="hidden" name="employer" value="{{ $item->employer }}"/>
                                <input type="hidden" name="employer_en" value="{{ $item->employer_en }}"/>
                                <input type="hidden" name="capacity" value="{{ $item->capacity }}"/>
                                <input type="hidden" name="capacity_en" value="{{ $item->capacity_en }}"/>
                                <input type="hidden" name="place" value="{{ $item->place }}"/>
                                <input type="hidden" name="place_en" value="{{ $item->place_en }}"/>
                                <input type="hidden" name="text" value="{{ $item->text }}"/>
                                <input type="hidden" name="text_en" value="{{ $item->text_en }}"/>
                                <input type="hidden" name="status" value="{{ $item->status }}"/>
                                <button type="submit" id="form-{{$item->id}}" class="d-none">submit</button>
                            </form>
                        </td>
                        <td class="table-td-icons text-center" style="min-height: 80px">
                            <a href="{{ route('project.edit', $item->id) }}" title="ویرایش"><i class="fa fa-edit"></i></a>
                            <a href="{{route('project.delete',$item->id)}}" title="حذف"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
