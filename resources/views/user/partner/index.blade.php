@extends('layouts.user')
@section('content')
<style>p { text-align: justify }</style>

    <div class="col-lg-8 mx-auto p-3" >
        <p class="my-4 h4 {{app()->getLocale()=='en'?'':'text-right'}}">
            {{ app()->getLocale()=='en' ? $item->name_en : $item->name }}
        </p>

        <div class="row">
            @foreach ($items as $item)
                @if ($item->photo)
                    <div class="col-lg-{{$item->flexbox?$item->flexbox:'6'}} my-auto">
                        <img src="{{url($item->photo)}}" class="w-100 p-1 my-lg-2" alt="{{ app()->getLocale()=='en' ? $item->name_en : $item->name }}">
                    </div>
                @endif
            @endforeach
        </div>

    </div>

@endsection
