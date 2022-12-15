@extends('layouts.user')
@section('content')
<style>p { text-align: justify }</style>

    <div class="col-12 col-lg-2  d-none d-lg-block d-xl-block">
        @include('user.layouts.product_sidebar')
    </div>
    <div class="col-12 col-lg-8" data-spy="scroll" data-target="#list-example" data-offset="0">
        <section class="body_box" data-id="0" id="section0">
                <p class="my-4 h2 font-weight-bold">Design and Manufacturing of Equipment & Products</p>
                <p class="m-0">
                    Located in Amir Kabir Technical University Science & Technology Park, Farzan factory designs and manufactures different types of Drive panels,
                     Control panels and Lighting panels.<br>“Farzan Fananadish Farda” factory was established and commissioned in one workshop in Shariar district near Tehran.
                    <br>Later and following growth of company activities and need to increase production capacity,
                     two more workshops were built and the production area was increased by 250%.<br>Currently, Farzan factory is located in an area of about 2200 m2,
                      and a team of 50 engineers and technicians are working in the factory for manufacturing electrical panels and equipment.<br>Meanwhile,
                       engineering activities required for manufacturing is performed in factory administration building with an area of 1000 m2.
                </p>
                <img src="{{ asset('img/product/1.JPG') }}" alt="map" class="w-100 rounded mt-4">
                <img src="{{ asset('img/product/2.JPG') }}" alt="map" class="w-100 rounded my-4">
                <p class="m-0">
                    We endeavor to manufacture high quality competitive products with high quality and competitive price and as per Clients’
                     required time schedule.
                </p>
        </section>

        <section class="body_box py-5" data-id="1" id="section1">
            <div class="row">
                <div class="col-lg-3">
                <p class="my-4 h2 font-weight-bold">Drive Panels</p>
                <p class="mb-2 h6">• VFD-400V</p>
                <p class="mb-2 h6">• VFD-690V</p>
            </div>
            <div class="col">
                <img src="{{ asset('img/product/3.JPG') }}" alt="map" class="w-100 rounded mt-4">
            </div>
        </section>

        <section class="body_box py-5" data-id="2" id="section2">
            <div class="row">
                <div class="col-lg-3">
                <p class="my-4 h2 font-weight-bold">Control Panels</p>
                <p class="mb-2 h6">• Remote I/O-Panel</p>
                <p class="mb-2 h6">• ACC Panel</p>
                <p class="mb-2 h6">• PLC Panel</p>
                <p class="mb-2 h6">• PC Panel</p>
                <p class="mb-2 h6">• Server Panel</p>
                <p class="mb-2 h6">• Network Panel</p>
                <p class="mb-2 h6">• Local Control Box</p>
                <p class="mb-2 h6">• Junction Box</p>
            </div>
            <div class="col">
                <img src="{{ asset('img/product/4.JPG') }}" alt="map" class="w-100 rounded mt-4">
            </div>
        </section>

        <section class="body_box py-5" data-id="3" id="section3">
            <div class="row">
                <div class="col-lg-3">
                <p class="my-4 h2 font-weight-bold">Lighting Panels</p>
                <p class="mb-2 h6">• Lighting Panel</p>
                <p class="mb-2 h6">• Power Socket</p>
            </div>
            <div class="col">
                <img src="{{ asset('img/product/5.JPG') }}" alt="map" class="w-100 rounded mt-4">
            </div>
        </section>

        <section class="body_box" data-id="4" id="section4">
            <div class="row">
                <div class="col-lg-3">
                <p class="my-4 h2 font-weight-bold">Other Panel types</p>
                <p class="mb-2 h6">• MCC Panel-Fix</p>
                <p class="mb-2 h6">• HPGR Control Panel</p>
                <p class="mb-2 h6">• Diesel Control Panel</p>
                <p class="mb-2 h6">• WHIMS Rectifier Panel</p>
                <p class="mb-2 h6">• Distribution Panel</p>
            </div>
        </section>

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
            <div class= social1" id="social1" style="z-index: 3 ; top: 50%; overflow: hidden">
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
                    <li class="s-item1 py-1" >
                        <div class="d-flex align-items-center justify-content-between">
                            <a href=""><i  class="fas fa-fw fa-search"></i> <span class="d-ltr">جست و جو</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script>
        $('body').on('click','.login-form-toggle',function (){
            $("#headerContainer .login-form").toggleClass('open');
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
        // window.onload = (event) => {
        //     $('#menu_btn_1').addClass("active");
        //
        // };
        // window.onscroll = function() {
        //     $('#menu_btn_1').removeClass("active");
        // }
    </script>
@endsection
