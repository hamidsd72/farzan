@extends('layouts.user')
@section('content')
<style>
    .table td, .table th {
        border-top: none;
    }
    .border-b {
        border-bottom:1px solid lightseagreen;
        border-left:1px solid lightseagreen;
    }
    .border-r {
        border-right:1px solid lightseagreen;
        border-left:none;
    }
    .mx-w-33vh {
        max-width: 33vh !important;
    }
    .mx-h-11 {
        max-height: 120px;
    }
</style>
    <div class="col-lg-8 mx-auto">
        {{-- <p class="my-4 h4 {{app()->getLocale()=='en'?'':'text-right'}}">
            {{ app()->getLocale()=='en' ? $item->name_en : $item->name }}
        </p> --}}

        <table class="table mb-0">
            <tbody>
                @foreach($items->chunk(3) as $key => $partners)
                    <tr>
                        @foreach ($partners as $index => $item)
                            @if ($key<6)
                                @unless ($key==1 && $index==4)
                                    <td class="text-center {{$key<6?'border-b':''}} {{$index%3==0?'border-r':''}}" @if($index==1) rowspan="2" style="cursor: pointer" @endif onclick="lorem('{{$index}}')">
                                        <img src="{{url($item->photo)}}" class="mx-w-33vh {{$index==1?'p-2':''}} {{$key>1?'mx-h-11':''}} {{$index==5?'mt-3':''}} {{$index==8?'mt-2':''}}"
                                         alt="{{ app()->getLocale()=='en' ? $item->name_en : $item->name }}">
                                    </td>
                                @endunless
                            @else
                                <td class="text-center m-auto {{$index%3==0?'border-r':''}}"></td>
                                <td class="text-center m-auto {{$index%3==0?'border-r':''}}">
                                    <img src="{{url($item->photo)}}" class="w-100 mx-w-33vh p-3" alt="{{ app()->getLocale()=='en' ? $item->name_en : $item->name }}">
                                </td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- <div class="row">
            @foreach ($items as $item)
                @if ($item->photo)
                    <div class="col-lg-{{$item->flexbox?$item->flexbox:'6'}} my-auto text-center">
                        <img src="{{url($item->photo)}}" class="w-100 p-1 my-lg-2" alt="{{ app()->getLocale()=='en' ? $item->name_en : $item->name }}">
                    </div>
                @endif
            @endforeach
        </div> --}}

    </div>

    <script>
        function lorem($id) {
            if ($id==1) {
                window.location.href = 'https://fstco.com';
            }
        }
    </script>

@endsection

