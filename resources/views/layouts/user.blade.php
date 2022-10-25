<!DOCTYPE html>
<head>

    @yield('seo')
    @if (trim($__env->yieldContent('title')))
        @yield('title')
    @else
        <title>
            {{$titleSeo}}
        </title>
    @endif
    @if (trim($__env->yieldContent('meta')))
        @yield('meta')
    @else
        <meta name="description" content="{{$descriptionSeo}}"/>
        <meta http-equiv="keyword" name="keyword" content="{{ $keywordsSeo }}"/>
        <meta property="og:title" content="{{$titleSeo}}"/>
        <meta property="og:description" content="{{$descriptionSeo}}"/>
    @endif
    <meta property="og:url" content="{{$urlPage}}"/>
    <meta property="og:site_name" content="{{set_lang($setting,'title',app()->getLocale())}}"/>
    <meta property="og:image" content="{{url($setting->icon)}}"/>
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <link rel="canonical" href="{{$urlPage}}"/>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="icon" type="image/png" sizes="32x32" href="{{url($setting->icon)}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.3/swiper-bundle.css" integrity="sha512-A2XlrIz+6ozKVA/ySfcVrioNpqK0UchJNW7/df1rmjgv7kfncmEq4rhCaTwWC/ebfWYl1R2szvOGB66bzNa6hg==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}"/>
    @if(app()->getLocale()=='en')
        <link rel="stylesheet" type="text/css" href="{{asset('user/css/css_ltr.css')}}"/>
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/responsive.css')}}"/>
    @yield('style')
</head>
<body class="{{app()->getLocale()=='fa'?'d-rtl':'d-ltr'}}" data-spy="scroll" data-target="#list-example">



@yield('body')




@include('user.layouts.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="{{asset('user/js/theme.js')}}"></script>
<script src="{{asset('user/js/core.js')}}"></script>

<script src="{{asset('user/js/script.js')}}"></script>

@yield('js')
</body>
</html>
