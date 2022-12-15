@extends('layouts.user')

@section('style')
    <style>
      .search-box  .close {
            position: absolute;
            top: 2rem;
            right: 2rem;
            background: none;
            border: 0;
            font-size: 1rem;
            font-weight: 700;
            display: block;
            cursor: pointer;
            color: black;
            padding: 1rem 1.25rem;
            background: white;
            border-radius: 50%;
            outline: none;
        }
      .search-box button.close{
          padding: 0;
          color: black;
          border: 0;
          background: white;
          height: 52px;
          width: 55px;
          font-size: 30px;
      }

      .search-box button.close:hover {
            background: #D62839;
            color:#fff;
        }

        .search-box.search-elem {
            margin: 0;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background: rgba(28, 39, 60, 0.91);
            transition: all 0.3s ease-in-out;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }
        .search-box.search-elem .inner {
            width: 555px;
            margin: 0 auto;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
        .search-box.search-elem label {
            color: white;
            font-weight: 300;
            font-family: "Roboto", "Helvetica Neue", sans-serif;
        }
        .search-box.search-elem button.submit {
            outline: none;
            position: absolute;
            top: 0;
            right: 15px;
            height: 72px;
            padding: 10px 2rem;
            background: #00A896;
            font-family: "Roboto", "Helvetica Neue", sans-serif;
            font-size: 1rem;
            color: white;
        }
        .search-box.search-elem button.submit[disabled] {
            background: #ccc;
            color: #32213A;
            cursor: pointer;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .search-box.search-elem input[type=text] {
            padding: 20px;
            height: 72px;
            font-size: 32px;
            font-family: "Roboto", "Helvetica Neue", sans-serif;
            font-weight: 300;
            border: none;
            border-bottom: solid 2px #999;
            transition: border 0.3s;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        .search-box.search-elem input[type=text]:focus {
            border-bottom: solid 2px #00A896;
            box-shadow: none;
        }
        .search-box.search-elem label.placeholder {
            position: absolute;
            top: 10px;
            left: 2rem;
            font-size: 32px;
            font-weight: 300;
            font-family: "Roboto", "Helvetica Neue", sans-serif;
            color: #999;
            transition: all 0.3s;
        }
        .search-box.search-elem label.placeholder.move-up {
            top: -41px;
            color: white;
            font-size: 1.6rem;
            left: 1rem;
        }

        .search-box.search-elem.search-open {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .search-btn {
            text-transform: uppercase;
            font-family: "Roboto", "Helvetica Neue", sans-serif;
            font-size: 0.875rem;
            padding: 0 10px;
            display: inline-block;
        }
        .search-btn:hover {
            color: #00A896;
        }
    </style>


@endsection
@section('content')
            <div class="col-12 col-lg-2  d-none d-lg-block d-xl-block"  style="margin-bottom: 10%">
                @include('user.layouts.sidebar')
            </div>
            <div class="col-12 col-lg-8" data-spy="scroll" data-target="#list-example" data-offset="0">
                <!-- Slider main container -->

                    <div class="sliderBox d-flex justify-content-center align-items-center " id="sliderBox ">
                        <div class="swiper swiper-center overflow-hidden body_box mt-2" data-id='0' id="clientSwiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper" style="display: flow-root">
                            <!-- Slides -->
                            @if($sliders && count($sliders))
                                @foreach($sliders as $key=> $slider)
                                    <div class="swiper-slide d-flex align-items-center justify-content-center position-relative" data-item="{{$key}}">
                                        <div class="overlay"></div>
                                        <div class="position-absolute slider_title_box ">
                                            <div class="py-4 text-center text-white font-weight-bold title-slider">{{set_lang($slider,'title_slider',app()->getLocale()) }}</div>
                                            <div class="py-3 text-center text-white title-slider-desc">{{set_lang($slider,'description',app()->getLocale())}}</div>
                                            {{-- <div class="py-3 mt-5 text-center"><a class="btn btn-primary" href="{{$slider->url}}">@lang('menu.read_more')</a></div> --}}
                                            <div class="py-3 mt-5 text-center"><a class="btn btn-primary" href="{{ route('user.about.show') }}">@lang('menu.read_more')</a></div>
                                        </div>
                                        <img src="{{url($slider->photo->url)}}" class="d-block w-100"
                                             alt="{{set_lang($slider,'title',app()->getLocale())}}" />
                                    </div>
                                @endforeach

                            @endif

                        </div>
                    </div>
                </div>

                {{-- مزیت های فرزان --}}
                    @include('user.include.benefit')
                {{--پایان مزیت ها--}}

                {{-- جدیدترین پروژه ها --}}
                    @include('user.include.new_projects')
                {{--پایان جدیدترین پروژه ها--}}

                {{-- سکسشن میانی  --}}
                {{--                @include('user.include.middle-section')--}}
                {{--سکسشن میانی--}}

                {{-- تازه ها --}}
                @include('user.include.news')
                {{--پایان تازه ها--}}


                 {{-- بیشتر بدانیم --}}
                    @include('user.include.more')
                {{--پایان بیشتر بدانیم--}}




            </div>

            <div class="col-12 col-lg-2 d-flex justify-content-end  d-lg-none d-block p-0"  >
                <div class="position-fixed social" id="social" style="z-index: 3 ; top: 50%">
                    <ul id="mobile-social">
                        <li class="s-item py-1" >
                            <div class="d-flex align-items-center justify-content-between">
                                <a href=""><i  class="fab fa-fw fa-instagram"></i> <span class="d-ltr">@farzanfanandish</span></a>
                            </div>
                        </li>
                        <li class="s-item py-1" >
                            <div class="d-flex align-items-center justify-content-between">
                                <a href=""><i  class="fab fa-fw fa-linkedin"></i> <span class="d-ltr">@farzanfanandish</span></a>
                            </div>
                        </li>
                        <li class="s-item py-1" >
                            <div class="d-flex align-items-center justify-content-between">
                                <a href=""><i  class="fab fa-fw fa-youtube"></i> <span class="d-ltr">@farzanfanandish</span></a>
                            </div>
                        </li>
                        <li class="s-item py-1" >
                            <div class="d-flex align-items-center justify-content-between">
                                <a href=""><i  class="fas fa-fw fa-search"></i> <span class="d-ltr">جست و جو</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-2 d-none d-lg-block p-0" style="margin-bottom: 10%">
                <div class="w-100" style="position:sticky; top: 50%; ">
                    <div class="social1" id="social1" style="z-index: 3 ; top: 50%; overflow: hidden">
                        <ul>
                          <li class="s-item1 py-1" >
                              <div class="d-flex align-items-center justify-content-between">
                                    <a href=""><i  class="fab fa-fw fa-instagram"></i> <span class="d-ltr">@farzanfanandish</span></a>
                              </div>
                          </li>
                          <li class="s-item1 py-1" >
                              <div class="d-flex align-items-center justify-content-between">
                                    <a href=""><i  class="fab fa-fw fa-linkedin"></i> <span class="d-ltr">@farzanfanandish</span></a>
                              </div>
                          </li>
                          <li class="s-item1 py-1" >
                              <div class="d-flex align-items-center justify-content-between">
                                    <a href=""><i  class="fab fa-fw fa-youtube"></i> <span class="d-ltr">@farzanfanandish</span></a>
                              </div>
                          </li>
                          <li class="s-item1 py-1" id="open-search2" >
                              <div class="d-flex align-items-center justify-content-between ">
                                    <a href="" class="pl-0 search-btn"><i  class="fas fa-fw fa-search"></i> <span class="d-ltr">{{__('content.search')}}</span></a>
                              </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>


            <div class="search-box search-elem">
                <button class="close">x</button>
                <div class="inner row">
                    <div class="small-12 columns">
                        <label class="placeholder" for="search-field">Search</label>
                        <input type="text" id="search-field">
                        <button class="submit" type="submit">Search</button>
                    </div>
                </div>
            </div>

@endsection
@section('js')
{{--script for search modal--}}
    <script>
        (function ($) {

            $.fn.searchBox = function(ev) {

                var $searchEl = $('.search-elem');
                var $placeHolder = $('.placeholder');
                var $sField = $('#search-field');

                if ( ev === "open") {
                    $searchEl.addClass('search-open')
                };

                if ( ev === 'close') {
                    $searchEl.removeClass('search-open'),
                        $placeHolder.removeClass('move-up'),
                        $sField.val('');
                };

                var moveText = function() {
                    $placeHolder.addClass('move-up');
                }

                $sField.focus(moveText);
                $placeHolder.on('click', moveText);

                $('.submit').prop('disabled', true);
                $('#search-field').keyup(function() {
                    if($(this).val() != '') {
                        $('.submit').prop('disabled', false);
                    }
                });
            }

        }(jQuery));

        $('.search-btn , #open-search2').on('click', function(e) {
            $(this).searchBox('open');
            e.preventDefault();
        });

        $('.close').on('click', function() {
            $(this).searchBox('close');
        });
    </script>
    <script>



        $('body').on('click','.login-form-toggle',function (){
            // alert('hi')
            $("#headerContainer .login-form").toggleClass('open');
            var element = document.getElementById('login_form');

           if(element.classList.contains("open") == true) {
               $("#headerContainer .login-form").removeClass('open');
           }else{
               $("#headerContainer .login-form").addClass('open');
           }

        });

        $('.projectly-link').on('click',function() {
            let item = $(this).attr('data-id');
            console.log(item)

            if ($('.projectly-link').hasClass("active")) {
                $('.projectly-link').removeClass('active');
                if ($('.project-title'+item).hasClass("active-title")) {
                    $('.project-title').removeClass('active-title');
                }else{
                    $('.p-t').removeClass('active-title');

                }
            }
            $('.project-title'+item).addClass('active-title');




        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
