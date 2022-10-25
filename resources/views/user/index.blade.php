@extends('layouts.user')
@section('style')
<style>

</style>

@endsection
@section('body')
    <div id="headerContainer" class="header-content" >
        <div class="login-form">
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
                                    <input type="text" name="name" class="form-control" placeholder="{{--__('auth.user_name')--}}شماره موبایل" required>
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
        <div id="carouselExampleCaptions"  class="carousel slide slider_index carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @if(count($sliders))
                    @foreach($sliders as $key=> $slider)
                        @if(is_file($slider->video))
                            <div class="video carousel-item {{$key==0?'active':''}}">
                                <video muted autoplay loop>
                                    <source src="{{url($slider->video)}}" type="video/mp4">
                                </video>

                                <div class="carousel-caption d-none d-md-block" style="right: -22%;padding-bottom: 50px">
                                    @if(set_lang($slider,'title',app()->getLocale()) && set_lang($slider,'text1',app()->getLocale()))

                                                        {{--<h4>ما <span  id="typewriter"></span>
                                                         را به <span id="typewriter1"></span>
                                                         تبدیل میکنیم  محصول را به ثروت و ثروت را به شکوفایی 
                                                        </h4>--}}

                                        <div class="slogan_box">
                                            <h4>
                                                {{__('text.home_slider_typo.1')}}
                                                <ul class="content__container__list">
                                                    <li class="content__container__list__item" style="font-weight: bold"> {{__('text.home_slider_typo.2')}} </li>
                                                    <li class="content__container__list__item" style="font-weight: bold"> {{__('text.home_slider_typo.3')}} </li>
                                                    <li class="content__container__list__item" style="font-weight: bold"> {{__('text.home_slider_typo.4')}} </li>
                                                </ul>
                                                {{__('text.home_slider_typo.5')}}
                                                <ul class="content__container__list">
                                                    <li class="content__container__list__item" style="font-weight: bold"> {{__('text.home_slider_typo.6')}} </li>
                                                    <li class="content__container__list__item" style="font-weight: bold"> {{__('text.home_slider_typo.7')}} </li>
                                                    <li class="content__container__list__item" style="font-weight: bold"> {{__('text.home_slider_typo.8')}} </li>

                                                </ul>
                                                {{__('text.home_slider_typo.9')}}
                                            </h4>
                                        </div>

                                    @endif
                                </div>
                            </div>

                        @endif
                    @endforeach
                @else
                    <div class="carousel-item active">
                        <img src="{{asset('user/pic/slider_def.jpg')}}"
                             class="d-block w-100" alt="...">
                    </div>
                @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
    <div class="container-fluid py-3 py-lg-5" >
        <div class="row">
            <div class="col-12 col-lg-2  d-none d-lg-block d-xl-block">
                @include('user.layouts.sidebar')
            </div>
            <div class="col-12 col-lg-8" data-spy="scroll" data-target="#list-example" data-offset="0">
                <!-- Slider main container -->
 
                {{--           <div class="swiper swiper-center  overflow-hidden position-relative body_box" data-id='0' id="clientSwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @if($about->photos && count($about->photos))
                            @foreach($about->photos as $key=> $pic)
                                <div class="swiper-slide">
                                    <img src="{{url($pic->path)}}" class="d-block w-100"
                                        alt="{{set_lang($about,'index_title',app()->getLocale())}}" />
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="{{asset('user/pic/slider_def.jpg')}}"
                                     class="d-block w-100" alt="...">
                            </div>
                        @endif
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>--}}
                <style>
                    .swiper-center{
                        width: 100%;
                        height: 60vh;
                        overflow: hidden;
                    }
                </style>


                <div class="swiper swiper-center  overflow-hidden  body_box" data-id='0' id="clientSwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" style="display: flow-root">
                        <!-- Slides -->
                        @if($about->photos && count($about->photos))
                            @foreach($about->photos as $key=> $pic)
                                <div class="swiper-slide">
                                    <img src="{{url($pic->path)}}" class="d-block w-100"
                                         alt="{{set_lang($about,'index_title',app()->getLocale())}}" />
                                </div>
                            @endforeach
                        {{--@else--}}
                           {{-- <div class="carousel-item active">
                                <img src="{{asset('user/pic/slider_def.jpg')}}"
                                     class="d-block w-100" alt="...">
                            </div>--}}
                        @endif
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>

                <section class="body_box" data-id="1" id="section1">
                    <div class="container py-3 py-lg-5">
                        <h1 class="text-center">@lang('content.news')</h1>
                        <div class="swiper overflow-hidden position-relative" id="containerSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($sections->where('type','new') as $section)
                                    <div class="swiper-slide">
                                        <img src="{{url('/').'/'.$section->pic}}" class="img-responsive" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <section class="body_box" data-id="2" id="section2">
                    <div class="container py-3 py-lg-5">
                        <h1 class="text-center">@lang('content.prossing')</h1>
                        <div class="swiper overflow-hidden position-relative" id="containerSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($sections->where('type','working') as $section)
                                    <div class="swiper-slide">
                                        <img src="{{url('/').'/'.$section->pic}}" class="img-responsive" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <section class="body_box" data-id="3" id="section3">
                    <div class="container py-3 py-lg-5">
                        <h1 class="text-center">@lang('content.more')</h1>
                        <div class="swiper overflow-hidden position-relative" id="containerSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($sections->where('type','read_more') as $section)
                                    <div class="swiper-slide">
                                        <img src="{{url('/').'/'.$section->pic}}" class="img-responsive" />
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                {{-- <section class="body_box" data-id="1" id="section1">
                    <div class="container py-3 py-lg-5">
                        <h1 class="text-center">@lang('content.news')</h1>
                        <div class="swiper overflow-hidden position-relative" id="containerSwiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <section class="body_box" data-id="2"  id="section2">
                    <div class="container py-3 py-lg-5">
                        <h1 class="text-center">@lang('content.prossing')</h1>
                        <div class="swiper overflow-hidden position-relative" id="containerSwiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <section class="body_box" data-id="3"  id="section3">
                    <div class="container py-3 py-lg-5">
                        <h1 class="text-center">@lang('content.more')</h1>
                        <div class="swiper overflow-hidden position-relative" id="containerSwiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('img/bc_cv/C-28b2f9cd5ada25c3347a69aed06b3303.jpg')}}" class="img-responsive" />
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section> --}}
            </div>
            <div class="col-12 col-lg-2 d-flex justify-content-end" style="padding:0px">

                {{--                <div class="social-network">--}}
                {{--                    <ul class="social-group">--}}
                {{--                        <li class="social-item"><a href="" class="item"><i class="fab fa-fw fa-instagram"></i> <span class="social-text mr-2" style="direction: ltr" >@farzanfanandish</span></a></li>--}}
                {{--                        <li class="social-item"><a href="" class="item"><i class="fab fa-fw fa-linkedin"></i> <span class="social-text mr-2" style="direction: ltr" >@farzanfanandish</span> </a></li>--}}
                {{--                        <li class="social-item"><a href="" class="item"><i class="fab fa-fw fa-youtube"></i> <span class="social-text mr-2"  style="direction: ltr">@farzanfanandish</span> </a></li>--}}
                {{--                        <li class="social-item"><a href="" class="item"><i class="fas fa-fw fa-search"></i> <span class="social-text mr-2" >جست و جو</span> </a></li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                <div class="position-fixed" style=" top: 60%">
                    <div class="social-network1">
                        <ul class="social-group1">
                            <li class="social-item1">
                                <a href="{{$contact_info->instagram}}" class="item1">
                                    <span class="social-text mr-2" ></span>
                                    <i class="fab fa-fw fa-instagram"></i>
                                </a>
                            </li>
                            <li class="social-item1"> 
                                <a href="{{$contact_info->telegram}}" class="item1"> 
                                    {{-- از تلگرام استفاده کردم --}}
                                    <span class="social-text mr-2" ></span>
                                    <i class="fab fa-fw fa-linkedin"></i>
                                </a>
                                {{-- ContactInfo --}}
                            </li>
                            <li class="social-item1">
                                <a href="{{$contact_info->facebook}}" class="item1">
                                    {{-- از فیسبوک استفاده کردم --}}
                                    <span class="social-text mr-2" ></span>
                                    <i class="fab fa-fw fa-youtube"></i>
                                </a>
                            </li>
                            <li class="social-item1">
                                <a href="#" class="item1">
                                    <span class="social-text mr-2" >{{__('text.page_name.search')}}</span>
                                    <i class="fas fa-fw fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>



@endsection
@section('js')
    <script>
        $("body").on('click','#sidebarToggleBtn',function () {
            $("#sidebarMenu").addClass('open');
        }).on('click','.sidebarMenu-overlay',function () {
            $("#sidebarMenu").removeClass('open');
        })
    </script>
    <script>
        $('body').on('click','.login-form-toggle',function (){
            $("#headerContainer .login-form").toggleClass('open');
        });
    </script>
@endsection
