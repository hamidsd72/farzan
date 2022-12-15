<section class="body_box align-items-center py-1 py-lg-1" data-id="2" id="section2">
    <div class="container py-3 py-lg-4 mt-2 ">
        <h4 class="text-center color0"><strong>
            {{-- پروژه‌های شاخص با حضور فرزان --}}
            Top Projects
        </strong></h4>
    </div>
    <div class="w-60 m-auto pb-5 ">

        <div class="d-flex justify-content-between projects py-3 line_box">
            <a class="projectly-link active" data-id="1" id="pills-pro1-tab" data-toggle="pill" href="#pro1" role="tab"
               aria-controls="pills-pro1" aria-selected="true">
                <div class="projectly line_note" data-id="1">
     <span style="padding-top: 2px">
      1
        <span class="title_absolute" data-id="1">
            {{-- خط انتقال آب خلیج فارس --}}
            Water Transmission Pipe Line
        </span>
     </span>
                </div>
            </a>

            <a class="projectly-link" data-id="2" id="pills-pro2-tab" data-toggle="pill" href="#pro2" role="tab"
               aria-controls="pills-pro2" aria-selected="false">
                <div class="projectly line_note" data-id="2"><span style="padding-top: 2px">
      2
        <span class="title_absolute" data-id="2">
            {{-- نورد گرم فولاد سیرجان --}}
            Steel Making
        </span>
     </span>
                </div>
            </a>
            <a class="projectly-link" data-id="3" id="pills-pro3-tab" data-toggle="pill" href="#pro3" role="tab"
               aria-controls="pills-pro3" aria-selected="false">
                <div class="projectly line_note" data-id="3"><span style="padding-top: 2px">
      3
        <span class="title_absolute" data-id="3">
            {{-- کنسانتره سنگ‌آهن گل‌گهر سیرجان --}}
            Iron Ore Concentrate
        </span>
     </span>
                </div>
            </a>
        </div>
    </div>
    {{--<div class="m-auto py-2 " style="width: 85%">--}}

    {{--<div class="d-flex justify-content-between projects py-3">--}}
    {{--<div class="project-title1 p-t active-title" data-title="1" style="padding-inline-start: 20px">خط انتقال آب خلیج--}}
    {{--فارس--}}
    {{--</div>--}}
    {{--<div class="project-title2 p-t" data-title="2">نورد گرم فولاد سیرجان</div>--}}
    {{--<div class="project-title3 p-t" data-title="3">کنسانتره سنگ‌آهن گل‌گهر سیرجان</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    <div class=" d-flex flex-column justify-content-center py-2 py-lg-1 ">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pro1" role="tabpanel" aria-labelledby="pills-pro1-tab">
                <div class="d-flex flex-column justify-content-center mt-1">
                    <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3 py-4"
                        id="pills-tab"
                        role="tablist">
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item1" role="tab"
                               aria-controls="pills-home" aria-selected="true">
                                {{-- تصاویر پروژه --}}
                                Images
                            </a>
                        </li>
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item2" role="tab"
                               aria-controls="pills-profile" aria-selected="false">
                                {{-- مشخصات عمومی پروژه --}}
                                General Information
                            </a>
                        </li>
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item3" role="tab"
                               aria-controls="pills-contact" aria-selected="false">
                                {{-- فعالیت های فرزان در این پروژه --}}
                                Scope of Work
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-2 " id="pills-tabContent">
                        <div class="tab-pane fade show active  " id="item1" role="tabpanel"
                             aria-labelledby="pills-home-tab">

                            <div class="slideshow-container">
                                <div class="mySlides fade">
                                    <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}"
                                         style="width:100%; height: 100%">
                                </div>
                                <div class="mySlides fade">
                                    <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>

                                <div class="mySlides fade">
                                    <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>
                                <div class="mySlides fade">
                                    <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>
                                        <div class="mySlides fade">
                                         <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
                                        </div>
                                <a class="next" onclick="plusSlides1(1)">❯</a>
                                <a class="prev" onclick="plusSlides1(-1)">❮</a>
                            </div>
                        </div>
                        <div class="tab-pane m-auto font-size-12 fade" id="item2" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
                                <div class="col d-flex flex-column align-items-center text-center project_detail ">
                                    <p>
                                        <span>
                                            {{-- عنوان پروژه: --}}
                                            Project Title:
                                        </span>
                                        {{-- خط انتقال آب خلیج فارس به صنایع جنوب شرق کشور --}}
                                        Persian Gulf Water Transmission Pipe Line to Country Southeastern Industries. Phase l
                                    </p>
                                    <p>
                                        <span>
                                            {{-- کارفرما: --}}
                                            Employer:
                                        </span>
                                        {{-- شرکت فکور صنعت تهران --}}
                                        Fakoor Sanat Tehran Engineering Co.
                                    </p>
                                    <p>
                                        <span>
                                            {{-- ظرفیت: --}}
                                            Capacity:
                                        </span>
                                        {{-- 150 میلیون متر مكعب در سال --}}
                                        110 Mm3/A
                                    </p>
                                    <p>
                                        <span>
                                            {{-- محل اجرا: --}}
                                            Place:	
                                        </span>
                                        {{-- بندرعباس تا سیرجان --}}
                                        Bandar Abbas to Sirjan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade w-60 project-activity-pane m-auto project_activities" id="item3"
                             role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <p class="py-1 text-justify">
                                {{-- <strong class="">• ساخت تابلو و تجهیزات برق</strong>
                                ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
                                ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه
                                تابلوی Server، 1 دستگاه
                                تابلوی شبکه
                                <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
                                <strong>• نصب تجهیزات برق</strong>
                                <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong> --}}
                                <strong>• Production & Installation</strong>
                                <strong>• Control System Programming</strong>
                                <strong>• Operation</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pro2" role="tabpanel" aria-labelledby="pills-pro2-tab">
                <div class="d-flex flex-column justify-content-center mt-1">
                    <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3 py-4"
                        id="pills-tab"
                        role="tablist">
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item4" role="tab"
                               aria-controls="pills-home" aria-selected="true">
                                {{-- تصاویر پروژه --}}
                                Images
                            </a>
                        </li>
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item5" role="tab"
                               aria-controls="pills-profile" aria-selected="false">
                                {{-- مشخصات عمومی پروژه --}}
                                General Information
                            </a>
                        </li>
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item6" role="tab"
                               aria-controls="pills-contact" aria-selected="false">
                                {{-- فعالیت های فرزان در این پروژه --}}
                                Scope of Work
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-2 " id="pills-tabContent">
                        <div class="tab-pane fade show active" id="item4" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="slideshow-container">
                                <div class="mySlides2 fade">
                                    <img src="{{url('includes/asset/uploads/projects/2/1.jpg')}}"
                                         style="width:100%; height: 100%">
                                </div>
                                <div class="mySlides2 fade">
                                    <img src="{{url('includes/asset/uploads/projects/2/2.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>

                                <div class="mySlides2 fade">
                                    <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>
                                <a class="next" onclick="plusSlides(1)">❯</a>
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                            </div>
                        </div>
                        <div class="tab-pane m-auto font-size-12 fade" id="item5" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
                                <div class="col d-flex flex-column align-items-center justify-content-center project_detail">
                                    <p>
                                        <span>
                                            {{-- عنوان پروژه: --}}
                                            Project Title:
                                        </span>
                                        {{-- كارخانه فولادسازی و نورد ورق گرم گل‌گهر سیرجان --}}
                                        Steel Making and ESP Plant
                                    </p>
                                    <p>
                                        <span>
                                            {{-- کارفرما: --}}
                                            Employer:
                                        </span>
                                        {{-- شرکت فکور صنعت تهران --}}
                                        Fakoor Sanat Tehran Engineering Co.
                                    </p>

                                    <p>
                                        <span>
                                            {{-- ظرفیت: --}}
                                            Capacity:
                                        </span>
                                        {{-- 3 میلیون تن در سال --}}
                                        3 MTPA
                                    </p>
                                    <p>
                                        <span>
                                            {{-- محل اجرا: --}}
                                            Place:
                                        </span>
                                        {{-- کرمان، سیرجان --}}
                                        Sirjan, Kerman, Iran
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade w-60 project-activity-pane m-auto project_activities" id="item6"
                             role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <p class="py-1 text-justify">
                                {{-- <strong>• تولید مدارک مهندسی بخش برق: </strong>
                                تولید مدارک مهندسی واحد اکسیژن‌سازی (ASU) ، سالن ذوب (SMP)، سالن نورد، بخش آب‌رسانی
                                (WTP)، سیستم حمل مواد
                                <strong>• تامین تجهیزات برق:</strong>
                                تابلوهای MCC، Switchgear های 6.6 کیلو ولت، تابلوهای MV PFC، تابلوی UPS، دیزل
                                ژنراتور، اقلام Bulk شامل تجهیزات MV Termination Kits، کابل، سرکابل، سینی لدر، ابزار
                                دقیق، سیستم ارتینگ، تجهیزات
                                روشنایی و گلندها، ترانس‌های توزیع، ترانس‌های قدرت، میزهای اتاق کنترل، Bus Duct، اقلام
                                سیستم حفاظت در برابر
                                صاعقه
                                <strong>• ساخت تابلو و تجهیزات برق:</strong>
                                JB،، تابلوهای
                                روشنایی --}}
                                <strong>• Engineering design for electrical section</strong>
                                <strong>• Production & Procurement</strong>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pro3" role="tabpanel" aria-labelledby="pills-pro3-tab">
                <div class="d-flex flex-column justify-content-center mt-1">
                    <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3 py-4"
                        id="pills-tab"
                        role="tablist">
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item7" role="tab"
                               aria-controls="pills-home" aria-selected="true">
                                {{-- تصاویر پروژه --}}
                                Images
                            </a>
                        </li>
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item8" role="tab"
                               aria-controls="pills-profile" aria-selected="false">
                                {{-- مشخصات عمومی پروژه --}}
                                General Information
                            </a>
                        </li>
                        <li class="nav-item item-sec" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item9" role="tab"
                               aria-controls="pills-contact" aria-selected="false">
                                {{-- فعالیت های فرزان در این پروژه --}}
                                Scope of Work
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-2 " id="pills-tabContent">
                        <div class="tab-pane fade show active" id="item7" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="slideshow-container">
                                <div class="mySlides3 fade">
                                    <img src="{{url('includes/asset/uploads/projects/3/1.jpg')}}"
                                         style="width:100%; height: 100%">
                                </div>
                                <div class="mySlides3 fade">
                                    <img src="{{url('includes/asset/uploads/projects/3/2.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>

                                <div class="mySlides3 fade">
                                    <img src="{{url('includes/asset/uploads/projects/3/3.jpg')}}"
                                         style="width:100%;height: 100%">
                                </div>
                                <a class="next" onclick="plusSlides(1)">❯</a>
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                            </div>
                        </div>
                        <div class="tab-pane m-auto font-size-12 fade" id="item8" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
                                <div class="col d-flex flex-column align-items-center justify-content-center project_detail">
                                    <p>
                                        <span>
                                            {{-- عنوان پروژه: --}}
                                            Project Title:
                                        </span>
                                        {{-- کارخانه کنسانتره سنگ آهن گل‌گهر سیرجان- خط 4 --}}
                                        Golgohar Iron Ore Concentrate Plant. Line 4
                                    </p>
                                    <p>
                                        <span>
                                            {{-- کارفرما: --}}
                                            Employer:
                                        </span>
                                        {{-- شرکت فکور صنعت تهران --}}
                                        Fakoor Sanat Tehran Engineering Co.
                                    </p>

                                    <p>
                                        <span>
                                            {{-- ظرفیت: --}}
                                            Capacity:
                                        </span>
                                        {{-- 650 هزار تن در سال --}}
                                        2 MTPA
                                    </p>
                                    <p>
                                        <span>
                                            {{-- محل اجرا: --}}
                                            Place:	
                                        </span>
                                        {{-- کرمان، سیرجان --}}
                                        Sirjan, Kerman, Iran
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade w-60 project-activity-pane m-auto project_activities" id="item9"
                             role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <p class="text-justify">
                                {{-- <strong>• ساخت تابلو و تجهیزات برق:</strong>
                                ساخت 5 مجموعه تابلوی VFD 400 V، شامل 27 دستگاه VFD و 2 مجموعه تابلوی VFD 690 V
                                ساخت 2 دستگاه تابلوی ACC، 8 دستگاه تابلوی I/O، 1 دستگاه تابلوی Server، 5 دستگاه تابلوی
                                شبکه، 1 دستگاه تابلوی
                                PLC
                                ساخت 14 دستگاه تابلوی روشنایی
                                ساخت 95 دستگاه LCB و 149 دستگاه JB
                                <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
                                <strong class="">• تامین تجهیزات برق:</strong>
                                تامین تابلوهای MV-36kV، MV-12kV، 6.3kV-PFC، MCC
                                تامین ترانس‌های 6.3kV/710V
                                تامین تجهیزات ابزار دقیق
                                تامین تجهیزات CCTV، Telecommunication، Fire Alarm و Fire Detection
                                <strong>• نصب تجهیزات برق</strong> --}}
                                <strong>• Production, Procurement & Installation</strong>
                                <strong>• Control System Programming</strong>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<style>
    .fade:not(.show) {
        opacity: 1;
    }

    .mySlides {
        display: none;
        width: 400px;
        height: 200px
    }

    .mySlides2 {
        display: none;
        width: 400px;
        height: 200px
    }

    .mySlides3 {
        display: none;
        width: 400px;
        height: 200px
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 500px;
        position: relative;
        margin: auto;
        display: flex;
        justify-content: center;
    }

    /* Next & previous buttons */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: black;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev {
        left: 0;
        border-radius: 3px 0 0 3px;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: 0.4
        }
        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .prev, .next {
            font-size: 11px
        }
    }
</style>
<!-- Link Swiper's CSS -->
{{--<link--}}
{{--        rel="stylesheet"--}}
{{--        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"--}}
{{--/>--}}

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>

    let slideIndex = 1;

    showSlides(slideIndex);

    function plusSlides1(n) {
        showSlides1(slideIndex += n);
    }
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }


    function showSlides1(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");

        console.log(slideIndex, slides.length , slideIndex ==   slides.length);


        if (slideIndex == 0) {
            slideIndex = 1;
        }
        if (n > slides.length) {
            console.log(n + ' > ' + slides.length);
            slideIndex = 1;

        }

        if (n < 1) {
            console.log(n + ' < 1 ');
            slideIndex = slides.length
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";

        // if (slideIndex == slides.length && n == 0) {
        //     n = 0;
        //     slideIndex = 0;
        // }

        console.log('n is : '+ n,'slider length : ' + slides.length,'slider index : '+ slideIndex,slides);
        console.log( ' -------------------- ======================= ');



    }


    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let slides2 = document.getElementsByClassName("mySlides2");
        let slides3 = document.getElementsByClassName("mySlides3");


        console.log(slideIndex, slides.length , slideIndex ==   slides.length);
        if (slideIndex == slides.length) {
            console.log(slideIndex + ' == ' + slides.length);
            slideIndex = slides.length
        }


        if (n > slides.length) {
            console.log(n + ' > ' + slides.length);
            slideIndex = 1;
        }


        if (n < 1) {
            console.log(n + ' < 1 ');
            slideIndex = slides.length
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";

        // if (slideIndex == slides.length && n == 0) {
        //     n = 0;
        //     slideIndex = 0;
        // }

        console.log('n is : '+ n,'slider length : ' + slides.length,'slider index : '+ slideIndex,slides);
        console.log( ' -------------------- ======================= ');

        if (n > slides2.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides2.length
        }
        for (i = 0; i < slides2.length; i++) {
            slides2[i].style.display = "none";
        }
        slides2[slideIndex - 1].style.display = "block";

        if (n > slides3.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides3.length
        }
        for (i = 0; i < slides3.length; i++) {
            slides3[i].style.display = "none";
        }
        slides3[slideIndex - 1].style.display = "block";


    }
</script>