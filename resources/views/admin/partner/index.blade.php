@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            <div class="d-flex mb-2">
                ویرایش عنوان صفحه
            </div>
            <form action="{{route('admin-partner-update', $partner->id)}}" method="post">
                {{ csrf_field() }}
                <p class="m-1">
                    <label for="name" class="text-success">عنوان فارسی</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $partner->name }}">
                </p>
                <p class="m-1 text-left">
                    <label for="name" class="text-success">english title</label>
                    <input type="text" class="form-control text-left" id="name_en" name="name_en" value="{{ $partner->name_en }}">
                </p>
                <button type="submit" id="form-{{$partner->id}}" class="d-none">submit</button>
                {{-- <input type="text" id="sort_id" name="sort_id" value="{{$partner->sort_id}}" /> --}}
                <input type="hidden" name="flexbox" value="{{ $partner->flexbox }}"/>
                {{-- <input type="hidden" name="status" value="{{ $partner->status }}"/> --}}
            </form>
            <hr>
            <a href="{{ route('admin-partner-create') }}" class="btn btn-success mb-2"><i class="fa fa-plus ml-2"></i>افزودن {{ $title }}</a>
            <table class="table  table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-toggle="true">نام</th>
                    <th data-toggle="true">تصویر</th>
                    <th data-hide="phone">ترتیب</th>
                    <th data-hide="phone">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="text-{{$item->status=='active'?'success':'danger'}}">{{ $item->name }}</td>
                        <td><img src="{{$item->photo?url($item->photo):''}}" style="height: 60px"></td>
                        <td>
                            <form action="{{route('admin-partner-update', $item->id)}}" method="post">
                                {{ csrf_field() }}
                                <input type="text" id="sort_id" name="sort_id" value="{{$item->sort_id}}" />
                                <input type="hidden" name="name" value="{{ $item->name }}"/>
                                <input type="hidden" name="name_en" value="{{ $item->name_en }}"/>
                                <input type="hidden" name="flexbox" value="{{ $item->flexbox }}"/>
                                <input type="hidden" name="status" value="{{ $item->status }}"/>
                                <button type="submit" id="form-{{$item->id}}" class="d-none">submit</button>
                            </form>
                        </td>
                        <td class="table-td-icons text-center" style="min-height: 80px">
                            <a href="{{ route('admin-partner-edit', $item->id) }}" title="ویرایش"><i class="fa fa-edit"></i></a>
                            <a href="{{route('admin-partner-destroy',$item->id)}}" title="حذف"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endcomponent
