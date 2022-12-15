<!DOCTYPE html>
<head>

{{--    @yield('seo')--}}
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
{{--        <meta name="description" content="{{$descriptionSeo}}"/>--}}
{{--        <meta http-equiv="keyword" name="keyword" content="{{ $keywordsSeo }}"/>--}}
{{--        <meta property="og:title" content="{{$titleSeo}}"/>--}}
{{--        <meta property="og:description" content="{{$descriptionSeo}}"/>--}}
    @endif
{{--    <meta property="og:url" content="{{$urlPage}}"/>--}}
{{--    <meta property="og:site_name" content="{{set_lang($setting,'title',app()->getLocale())}}"/>--}}
{{--    <meta property="og:image" content="{{url($setting->icon)}}"/>--}}
{{--    <meta property="og:locale" content="fa_IR"/>--}}
{{--    <meta property="og:type" content="website"/>--}}
{{--    <link rel="canonical" href="{{$urlPage}}"/>--}}

    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="icon" type="image/png" sizes="32x32" href="{{url($setting->icon)}}" />
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />--}}
    <link rel="stylesheet" href="{{asset('user/css/all.min.css')}}"  crossorigin="anonymous" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.3/swiper-bundle.css" integrity="sha512-A2XlrIz+6ozKVA/ySfcVrioNpqK0UchJNW7/df1rmjgv7kfncmEq4rhCaTwWC/ebfWYl1R2szvOGB66bzNa6hg==" crossorigin="anonymous" />--}}
    <link rel="stylesheet" href="{{asset('user/css/swiper-bundle.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}"/>
{{--    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>--}}
    <script src="{{asset('user/js/core.js')}}"></script>
@if(app()->getLocale() == 'en')
        <link rel="stylesheet" type="text/css" href="{{asset('user/css/ltr/ltr.css')}}"/>
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/responsive.css')}}"/>
    @yield('style')
    <style>

    </style>

</head>
<body class="{{app()->getLocale()=='fa'?'d-rtl':'d-ltr'}}"  data-spy="scroll" data-target="#list-example">

<div id="headerContainer" class="header-content" >
    <div class="login-form"  id="login_form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <form action="{{ route('custom_login') }}" method="POST" >
                        {{ csrf_field() }}
                        <div class="text-center py-2 col-12">
                            <strong class="text-dark-blue">{{__('text.index.access_staff_panel')}}</strong>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" name="name" class="form-control" placeholder="{{__('auth.user_name')}} " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 ">
                                <input type="password" name="password" class="form-control" placeholder="{{__('auth.password')}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-primary btn-login w-100 mb-2" style="border: none">{{__('auth.login')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-8"></div>
            </div>
        </div>
        <span class="login-form-toggle">
            <i class="fa fa-chevron-down arrow-icon" aria-hidden="true" ></i>
        </span>
    </div>

    <div id="carouselExampleCaptions"  class="position-relative carousel slide slider_index carousel-fade sub_header" data-ride="carousel">
        <div class="carousel-inner">
            <div class="d-none d-md-block" >
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        @if(app()->getLocale()=='fa')
                            <div style="margin-top: 57px;">
                                <h4>
                                    <p id="slider_title" class="text-white" > @lang('text.farzan')  </p>
                                    <div id="slider" class="text-white"></div>
                                </h4>
                            </div>
                        @endif
                        @if(app()->getLocale()=='en')
                            <div style="margin-top: 57px;">
                                <h4>
                                    <p id="slider_title" class="text-white" > @lang('text.farzan') ؛ </p>
                                    <div id="sliderEn" class="text-white"></div>
                                </h4>
                            </div>
                        @endif
                    </div>
                    <div class="col-2"></div>
                </div>

            </div>
        </div>
    </div>
    @include('user.layouts.menu')
</div>
@if ($error ?? '')

@endif
@if (session('status'))
    <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
        <h6 class="text-center mt-2">{{ session('message') }}</h6>
    </div>
    <script>
        setTimeout(function() {
            $(".alert").alert('close')
        }, 5000);
    </script>
@endif

<div class="container-fluid " >
    <div class="row">
            @yield('content')
    </div>
</div>



@include('user.layouts.footer')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>--}}
<script src="{{asset('user/js/jquery.min.js')}}"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>--}}
<script src="{{asset('user/js/bootstrap.min.js')}}" ></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>--}}
<script src="{{asset('user/js/all.min.js')}}"></script>
{{--<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>--}}
<script src="{{asset('user/js/swiper-bundle.min.js')}}"></script>
<!-- Swiper JS -->
{{--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>--}}

<script src="{{asset('user/js/theme.js')}}"></script>
{{--<script src="{{asset('user/js/core.js')}}"></script>--}}

<script src="{{asset('user/js/script.js')}}"></script>

@yield('js')
<script>
    var app = document.getElementById('slider');
    var appEn = document.getElementById('sliderEn');
    var typewriter = new Typewriter(app, {
        loop: true
    });
    var typewriterEn = new Typewriter(appEn, {
        loop: true
    });

    typewriter
        .typeString('ارائه دهنده خدمات و محصولات برق قدرت ، الکترونیک ، کنترل و ابزار دقیق')
        .pauseFor(2500)
        .deleteAll()
        .start();

    typewriterEn
        // .typeString('Provider of electrical services and products, power, electronics, control and instrumentation')
        .typeString('Provider of electrical services for industrial projects in fields of Power, Electronics, Control and instruments.')
        .pauseFor(2500)
        .deleteAll()
        .start();
</script>
</body>
</html>
