@extends('layouts.user')
@section('content')

    <div class="col-12 col-lg-2  d-none d-lg-block d-xl-block"  style="margin-bottom: 10%">
        <div id="sideBarNavigation" class="sticky-top" style="position: sticky;top:50%" id="list-example">

            <div id="sectionMenu">
                <ul class="section-nav section2" >
                    <li class=" img-slider-list title-section   menu-set" data-id="1" id="menu_btn_1" >
                        <a class="section-link" data-section="section1" href="#section1">
                            {{-- <span class=" title-item "  >{{__('text.sidebar.Advantage')}}</span> --}}
                            <span class=" title-item "  >Central Office</span>
                        </a>
                    </li>
                    <li class=" img-slider-list title-section menu-set" data-id="2" id="menu_btn_2"  >
                        <a class="section-link" data-section="section2" href="#section2">
                            {{-- <span class=" title-item "> {{__('text.sidebar.Top Projects')}}</span> --}}
                            <span class=" title-item ">Engineering office</span>
                        </a>
                    </li>
                    <li class="img-slider-list title-section menu-set" data-id="3" id="menu_btn_3" >
                        <a class="section-link" data-section="section3" href="#section3">
                            {{-- <span class=" title-item "> {{__('text.sidebar.Farzan News')}}</span> --}}
                            <span class=" title-item ">Factory</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8" data-spy="scroll" data-target="#list-example" data-offset="0">

        <section class="body_box d-flex align-items-center p-0" data-id="1" id="section1">
            <div class="ml-lg-4">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            Central Office
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Address
                        </p>
                        <p class="my-0 mb-4">
                            No.02, 11 alley, Sanaie street, karimkhan boulevard, TEHRAN, IRAN
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-4 my-auto">
                        <p class="h6 font-weight-bold my-2">
                            Tel.
                        </p>
                        <p class="my-0 mb-4">
                            +98 21 6617 7741 (108)
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Email
                        </p>
                        <p class="my-0 mb-1">
                            info@ffaf.ir
                        </p>
                        <p class="my-0 mb-4">
                            sales@ffaf.ir
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Postal Code
                        </p>
                        <p class="my-0 mb-4">
                            1585744613
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d572.633219865537!2d51.419550690719106!3d35.71877428401918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0162fe98ad81%3A0xf03fa79396a36372!2z2LTYsdqp2Kog2YHYsdiy2KfZhiDZgdmGINin2YbYr9uM2LQg2YHYsdiv2Kc!5e0!3m2!1sfa!2s!4v1670751529814!5m2!1sfa!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </section>

        <section class="body_box d-flex align-items-center p-0" data-id="2" id="section2">
            <div class="ml-lg-4">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            Engineering office
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Address
                        </p>
                        <p class="my-0 mb-4">
                            No.100, Mashahir street ,Ghaem magham street, haft tir square, TEHRAN, IRAN
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-4 my-auto">
                        <p class="h6 font-weight-bold my-2">
                            Tel.
                        </p>
                        <p class="my-0 mb-4">
                            +98 21 6617 7741 (107)
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Postal Code
                        </p>
                        <p class="my-0 mb-4">
                            1588735641
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d963.0345208081934!2d51.4255832392703!3d35.72009168190425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfa!2s!4v1670751995780!5m2!1sfa!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="body_box d-flex align-items-center p-0" data-id="3" id="section3">
            <div class="ml-lg-4">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            Factory
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Address
                        </p>
                        <p class="my-0 mb-4">
                            Amir kabir Science and Technology Park, Yabark crossroad, Valiasr boulevard, Shahriyar, TEHRAN, IRAN
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-4 my-auto">
                        <p class="h6 font-weight-bold my-2">
                            Tel.
                        </p>
                        <p class="my-0 mb-4">
                            +98 21 6617 7741 (503)
                        </p>
                        <p class="h6 font-weight-bold my-2">
                            Postal Code
                        </p>
                        <p class="my-0 mb-4">
                            3355132589
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3243.54920439765!2d51.004027!3d35.614185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8d8cd713b29605%3A0xfddeaaa668acf761!2z2b7Ysdiv2YrYsyDYr9in2YbYtNqv2KfZhyDYp9mF2YrYsdmD2KjZitix!5e0!3m2!1sfa!2s!4v1670753298712!5m2!1sfa!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection
