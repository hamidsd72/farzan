@component('layouts.admin')
@section('title') {{ $title }} @endsection
@section('body')
    <div class="condition pull-right w-100 mb-2">
        <div class="title">
            <h5><i class="fa fa-trello text-size-large ml-2"></i>{{ $title }}</h5>
        </div>
        <div class="p-3">
            <a href="{{ route('admin-menu-create') }}" class="btn btn-success mb-2"><i
                        class="fa fa-plus ml-2"></i>افزودن صفحه</a>
            <table class="table table-bordered pull-right w-100">
                <thead>
                <tr>
                    <th data-toggle="true">عنوان صفحه</th>
                    <th data-hide="phone">مکان</th>
                    <th data-hide="phone">آدرس url</th>
                    <th data-hide="phone">مرتب سازی</th>
                    <th data-toggle="true">نمایش/عدم نمایش</th>
                    <th data-toggle="true">نمایش/عدم نمایش(زیر اسلایدر)</th>
{{--                    <th data-toggle="true">زیر منو درباره ما</th>--}}
                    <th data-toggle="true">نمایش/عدم نمایش(فوتر)</th>
                    <th data-hide="phone">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)

                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->place=='left'?'چپ(در زبان انگلیسی راست)':'راست(در زبان انگلیسی چپ)' }}</td>
                        @if(app()->getLocale()=='fa')
                        <td class="d-ltr"><a href="{{route('user.page.show',$item->slug)}}" target="_blank">{{urldecode(route('user.page.show',$item->slug))}}</a> </td>
                        @else
                        <td class="d-ltr"><a href="{{route('user.page.show',$item->slug_en)}}" target="_blank">{{route('user.page.show',$item->slug_en)}}</a> </td>
                        @endif
                        <td>
                            <form method="post" action="{{route('admin-menu-sort',$item->id)}}">
                                @csrf
                                <input style="width: 100px" class="text-center" name="sort_id" type="number" min="0" value="{{$item->sort_id}}" onchange="return this.form.submit()">
                            </form>
                        </td>


                        <td>
                            @if($item->status=='active') <span class="text-success">نمایش</span> @else <span
                                    class="text-danger">عدم نمایش</span> @endif
                            @if($item->status == 'pending')
                                <a href="{{route('admin-menu-active',['status',$item->id])}}" title="نمایش در سایت"
                                   style="margin-right: 10px"><i class="fa fa-check"
                                                                 style="color: darkgreen;"></i></a>
                            @endif
                            @if($item->status == 'active')
                                <a href="{{route('admin-menu-active',['status',$item->id])}}"
                                   title="عدم نمایش در سایت" style="margin-right: 10px"><i class="fa fa-close"
                                                                                           style="color: red;"></i></a>
                            @endif
                        </td>
                        <td>
                            @if($item->slider_down=='active') <span class="text-success">نمایش</span> @else <span
                                    class="text-danger">عدم نمایش</span> @endif
                            @if($item->slider_down == 'pending')
                                <a href="{{route('admin-menu-active',['slider_down',$item->id])}}" title="نمایش "
                                   style="margin-right: 10px"><i class="fa fa-check"
                                                                 style="color: darkgreen;"></i></a>
                            @endif
                            @if($item->slider_down == 'active')
                                <a href="{{route('admin-menu-active',['slider_down',$item->id])}}"
                                   title="عدم نمایش" style="margin-right: 10px"><i class="fa fa-close"
                                                                                           style="color: red;"></i></a>
                            @endif
                        </td>
{{--                        <td>--}}
{{--                            @if($item->status_menu=='active') <span class="text-success">نمایش</span> @else <span--}}
{{--                                    class="text-danger">عدم نمایش</span> @endif--}}
{{--                            @if($item->status_menu == 'pending')--}}
{{--                                <a href="{{route('admin-menu-active',['status_menu',$item->id])}}" title="نمایش"--}}
{{--                                   style="margin-right: 10px"><i class="fa fa-check"--}}
{{--                                                                 style="color: darkgreen;"></i></a>--}}
{{--                            @endif--}}
{{--                            @if($item->status_menu == 'active')--}}
{{--                                <a href="{{route('admin-menu-active',['status_menu',$item->id])}}"--}}
{{--                                   title="عدم نمایش" style="margin-right: 10px"><i class="fa fa-close"--}}
{{--                                                                                           style="color: red;"></i></a>--}}
{{--                            @endif--}}
{{--                        </td>--}}
                        <td>
                            @if($item->status_footer=='active') <span class="text-success">نمایش</span> @else <span
                                    class="text-danger">عدم نمایش</span> @endif
                            @if($item->status_footer == 'pending')
                                <a href="{{route('admin-menu-active',['status_footer',$item->id])}}" title="نمایش "
                                   style="margin-right: 10px"><i class="fa fa-check"
                                                                 style="color: darkgreen;"></i></a>
                            @endif
                            @if($item->status_footer == 'active')
                                <a href="{{route('admin-menu-active',['status_footer',$item->id])}}"
                                   title="عدم نمایش" style="margin-right: 10px"><i class="fa fa-close"
                                                                                           style="color: red;"></i></a>
                            @endif
                        </td>
                        <td class="table-td-icons"
                            style="display: flex;justify-content: center;align-items: center;min-height: 80px">
                            <a href="{{ route('admin-menu-edit', $item->id) }}" title="ویرایش"><i
                                        class="far fa-edit"></i></a>
                            @role('ادمین ارشد')
                            <a href="{{route('admin-menu-destroy',$item->id)}}" title="حذف"><i
                                        class="fa fa-trash" style="color: red;"></i></a>
                            @endrole
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
