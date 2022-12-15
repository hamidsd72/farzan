@extends('layouts.user')
@section('content')
 <style>
  .swiper-slide img {
   display: block;
   width: 100%;
   height: 100%;
   object-fit: cover;
  }

 </style>
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

  .mySlides4 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides5 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides6 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides8 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides9 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides10 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides11 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides12 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides13 {
   display: none;
   width: 400px;
   height: 200px
  }

  .mySlides14 {
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
   .prev, .next, {
    font-size: 11px
   }
  }
 </style>
 <div class="col-12 col-lg-2  d-none d-lg-block d-xl-block" style="margin-bottom: 10%">
  @include('user.layouts.project_sidebar')
 </div>
 <div class="col-12 py-3 col-lg-8" style="position: relative">
  {{-- مزیت های فرزان --}}


  <div class="section project-1 " id="sectionp1">
   <div class="w-70 m-auto ">
    <div class="d-flex justify-content-between projects py-3">
     <a class="projectly-link active" data-id="1" id="pills-pro1-tab" data-toggle="pill" href="#pro1" role="tab"
        aria-controls="pills-pro1" aria-selected="true">
      <div class="projectly"><span style="padding-top: 2px">1</span>
      </div>
     </a>
     <a class="projectly-link" data-id="2" id="pills-pro2-tab" data-toggle="pill" href="#pro2" role="tab"
        aria-controls="pills-pro2" aria-selected="false">
      <div class="projectly"><span style="padding-top: 2px">2</span>
      </div>
     </a>
     <a class="projectly-link" data-id="3" id="pills-pro3-tab" data-toggle="pill" href="#pro3" role="tab"
        aria-controls="pills-pro3" aria-selected="false">
      <div class="projectly"><span style="padding-top: 2px">3</span>
      </div>
     </a>
     <a class="projectly-link" data-id="4" id="pills-pro4-tab" data-toggle="pill" href="#pro4" role="tab"
        aria-controls="pills-pro4" aria-selected="false">
      <div class="projectly"><span style="padding-top: 2px">4</span>
      </div>
     </a>
    </div>
   </div>
   <div class="m-auto py-2 " style="width: 85%">

    <div class="d-flex justify-content-between projects py-3">
     <div class="project-title1 p-t active-title" data-title="1"
          style="padding-inline-start: 20px">@lang('project.project.title1')</div>
     <div class="project-title2 p-t" data-title="2">@lang('project.project.title2')</div>
     <div class="project-title3 p-t" data-title="3">@lang('project.project.title3')</div>
     <div class="project-title4 p-t" data-title="4">@lang('project.project.title4')</div>
    </div>
   </div>
   <div class=" d-flex flex-column justify-content-center py-1 py-lg-1 ">
    <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pro1" role="tabpanel" aria-labelledby="pills-pro1-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item1" role="tab"
            aria-controls="pills-home" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item2" role="tab"
            aria-controls="pills-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item3" role="tab"
            aria-controls="pills-contact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content py-2 " id="pills-tabContent">
        <div class="tab-pane fade show active" id="item1" role="tabpanel" aria-labelledby="pills-home-tab">
         <div class="slideshow-container">
          <div class="mySlides fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane m-auto font-size-12 fade" id="item2" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span
                    class="font-size-10">کارخانه کنسانتره سنگ آهن سنگان</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">150 میلیون متر مكعب در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">خراسان رضوی، سنگان</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade  project-activity-pane m-auto font-size-12" id="item3" role="tabpanel"
             aria-labelledby="pills-contact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="pro2" role="tabpanel" aria-labelledby="pills-pro2-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item4" role="tab"
            aria-controls="pills-home" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item5" role="tab"
            aria-controls="pills-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item6" role="tab"
            aria-controls="pills-contact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content py-2 " id="pills-tabContent">
        <div class="tab-pane fade show active" id="item4" role="tabpanel" aria-labelledby="pills-home-tab">
         <div class="slideshow-container">
          <div class="mySlides2 fade">
           <img src="{{url('includes/asset/uploads/projects/2/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides2 fade">
           <img src="{{url('includes/asset/uploads/projects/2/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides2 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane m-auto font-size-12 fade" id="item5" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کارخانه کنسانتره سنگ آهن جلال‌آباد</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">600 هزار تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">کرمان، جلال آباد</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade  project-activity-pane m-auto font-size-12" id="item6" role="tabpanel"
             aria-labelledby="pills-contact-tab">
         <div class="col-12">
          <strong class="py-1">• تولید مدارک مهندسی بخش برق: </strong>
          <p class="py-1 text-justify">
           تولید مدارک مهندسی واحد اکسیژن‌سازی (ASU) ، سالن ذوب (SMP)، سالن نورد، بخش آب‌رسانی (WTP)، سیستم حمل مواد
          </p>
         </div>
         <div class="col-12 py-1">
          <strong>• تامین تجهیزات برق:</strong>
          <p class="py-1 text-justify">تابلوهای MCC، Switchgear های 6.6 کیلو ولت، تابلوهای MV PFC، تابلوی UPS، دیزل
           ژنراتور، اقلام Bulk شامل تجهیزات MV Termination Kits، کابل، سرکابل، سینی لدر، ابزار دقیق، سیستم ارتینگ،
           تجهیزات روشنایی و گلندها، ترانس‌های توزیع، ترانس‌های قدرت، میزهای اتاق کنترل، Bus Duct، اقلام سیستم حفاظت در
           برابر صاعقه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• ساخت تابلو و تجهیزات برق:</strong>
          <p class="py-1 text-justify">تابلوهای VFD 400 V، پنل‌های سیستم کنترل و تابلوی ACC، Power Socket و JB،،
           تابلوهای روشنایی
          </p>
         </div>

        </div>
       </div>
      </div>

     </div>
     <div class="tab-pane fade" id="pro3" role="tabpanel" aria-labelledby="pills-pro3-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item7" role="tab"
            aria-controls="pills-home" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item8" role="tab"
            aria-controls="pills-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item9" role="tab"
            aria-controls="pills-contact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content py-2 " id="pills-tabContent">
        <div class="tab-pane fade show active" id="item7" role="tabpanel" aria-labelledby="pills-home-tab">
         <div class="slideshow-container">
          <div class="mySlides3 fade">
           <img src="{{url('includes/asset/uploads/projects/3/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides3 fade">
           <img src="{{url('includes/asset/uploads/projects/3/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides3 fade">
           <img src="{{url('includes/asset/uploads/projects/3/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane m-auto font-size-12 fade" id="item8" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کنسانتره سنگ آهن گل‌گهر</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10"> 000,650  تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">کرمان، سیرجان</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade  project-activity-pane m-auto font-size-12" id="item9" role="tabpanel"
             aria-labelledby="pills-contact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق:</strong>
          <p class="py-1 text-justify">
           ساخت 5 مجموعه تابلوی VFD 400 V، شامل 27 دستگاه VFD و 2 مجموعه تابلوی VFD 690 V
           ساخت 2 دستگاه تابلوی ACC، 8 دستگاه تابلوی I/O، 1 دستگاه تابلوی Server، 5 دستگاه تابلوی شبکه، 1 دستگاه تابلوی
           PLC
           ساخت 14 دستگاه تابلوی روشنایی
           ساخت 95 دستگاه LCB و 149 دستگاه JB
          </p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong class="py-1">• تامین تجهیزات برق:</strong>
          <br>
          <p class="py-1">تامین تابلوهای MV-36kV، MV-12kV، 6.3kV-PFC، MCC</p>
          <p class="py-1">تامین ترانس‌های 6.3kV/710V</p>
          <p class="py-1">تامین تجهیزات ابزار دقیق</p>
          <p class="py-1">تامین تجهیزات CCTV، Telecommunication، Fire Alarm و Fire Detection</p>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
        </div>
       </div>
      </div>

     </div>
     <div class="tab-pane fade" id="pro4" role="tabpanel" aria-labelledby="pills-pro4-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#item10" role="tab"
            aria-controls="pills-home" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#item11" role="tab"
            aria-controls="pills-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#item12" role="tab"
            aria-controls="pills-contact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content py-2 " id="pills-tabContent">
        <div class="tab-pane fade show active" id="item10" role="tabpanel" aria-labelledby="pills-home-tab">
         <div class="slideshow-container">
          <div class="mySlides4 fade">
           <img src="{{url('includes/asset/uploads/projects/3/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides4 fade">
           <img src="{{url('includes/asset/uploads/projects/3/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides4 fade">
           <img src="{{url('includes/asset/uploads/projects/3/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane m-auto font-size-12 fade" id="item11" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کارخانه کنسانتره سنگ آهن پایا فولاد</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">یزد، ساغند</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">یزد، ساغند</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade  project-activity-pane m-auto font-size-12" id="item12" role="tabpanel"
             aria-labelledby="pills-contact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق:</strong>
          <p class="py-1 text-justify">
           ساخت 5 مجموعه تابلوی VFD 400 V، شامل 27 دستگاه VFD و 2 مجموعه تابلوی VFD 690 V
           ساخت 2 دستگاه تابلوی ACC، 8 دستگاه تابلوی I/O، 1 دستگاه تابلوی Server، 5 دستگاه تابلوی شبکه، 1 دستگاه تابلوی
           PLC
           ساخت 14 دستگاه تابلوی روشنایی
           ساخت 95 دستگاه LCB و 149 دستگاه JB
          </p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong class="py-1">• تامین تجهیزات برق:</strong>
          <br>
          <p class="py-1">تامین تابلوهای MV-36kV، MV-12kV، 6.3kV-PFC، MCC</p>
          <p class="py-1">تامین ترانس‌های 6.3kV/710V</p>
          <p class="py-1">تامین تجهیزات ابزار دقیق</p>
          <p class="py-1">تامین تجهیزات CCTV، Telecommunication، Fire Alarm و Fire Detection</p>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
        </div>
       </div>
      </div>

     </div>
    </div>
   </div>
  </div>
  <div class="section  project-2 d-none" id="sectionp2">
   <div class="w-70 m-auto ">
    <div class="d-flex justify-content-between projects py-3">
     <a class="projectly-link active" data-id="5" id="pills-pro5-tab" data-toggle="pill" href="#pro5" role="tab"
        aria-controls="pills-pro5" aria-selected="true">
      <div class="projectly"><span style="padding-top: 2px">1</span>
      </div>
     </a>
     <a class="projectly-link" data-id="6" id="pills-pro6-tab" data-toggle="pill" href="#pro6" role="tab"
        aria-controls="pills-pro6" aria-selected="false">
      <div class="projectly"><span style="padding-top: 2px">2</span>
      </div>
     </a>

    </div>
   </div>
   <div class="m-auto py-2 " style="width: 85%">

    <div class="d-flex justify-content-between projects py-3">
     <div class="project-title1 p-t active-title" data-title="5"
          style="padding-inline-start: 20px">@lang('project.Granulation.title1')</div>
     <div class="project-title2 p-t" data-title="6">@lang('project.Granulation.title2')</div>
    </div>
   </div>
   <div class=" d-flex flex-column justify-content-center py-1 py-lg-1 ">
    <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pro5" role="tabpanel" aria-labelledby="pills-pro5-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>

       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
         <div class="slideshow-container">
          <div class="mySlides5 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides5 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides5 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides5 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides5 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کارخانه گندله‌سازی سنگان</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5/2 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">خراسان رضوی، سنگان</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
       {{--                           <div class="tab-content py-2 " id="pills-tabContent">--}}
       {{--                               <div class="tab-pane fade show active" id="item5" role="tabpanel" aria-labelledby="pills-home1-tab">--}}
       {{--                                   <div class="slideshow-container">--}}
       {{--                                       <div class="mySlides5 fade">--}}
       {{--                                           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">--}}
       {{--                                       </div>--}}
       {{--                                       <div class="mySlides5 fade">--}}
       {{--                                           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">--}}
       {{--                                       </div>--}}

       {{--                                       <div class="mySlides5 fade">--}}
       {{--                                           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">--}}
       {{--                                       </div>--}}
       {{--                                       <div class="mySlides5 fade">--}}
       {{--                                           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">--}}
       {{--                                       </div>--}}
       {{--                                       <div class="mySlides5 fade">--}}
       {{--                                           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">--}}
       {{--                                       </div>--}}
       {{--                                       <a class="next" onclick="plusSlides(1)">❮</a>--}}
       {{--                                       <a class="prev" onclick="plusSlides(-1)">❯</a>--}}
       {{--                                   </div>--}}
       {{--                               </div>--}}
       {{--                               <div class="tab-pane m-auto font-size-12 fade" id="item6" role="tabpanel" aria-labelledby="pills-profile1-tab">--}}
       {{--                                   <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">--}}
       {{--                                       <div class="col d-flex flex-column align-items-center justify-content-center">--}}
       {{--                                           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کارخانه کنسانتره سنگ آهن سنگان</span></p>--}}
       {{--                                           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>--}}
       {{--                                       </div>--}}
       {{--                                       <div class="col d-flex flex-column align-items-center justify-content-center">--}}
       {{--                                           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive" />--}}
       {{--                                       </div>--}}
       {{--                                       <div class="col d-flex flex-column align-items-center justify-content-center">--}}
       {{--                                           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">150 میلیون متر مكعب در سال</span></p>--}}
       {{--                                           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">خراسان رضوی، سنگان</span></p>--}}
       {{--                                       </div>--}}
       {{--                                   </div>--}}
       {{--                               </div>--}}
       {{--                               <div class="tab-pane fade  project-activity-pane m-auto font-size-12" id="item7" role="tabpanel" aria-labelledby="pills-contact1-tab">--}}
       {{--                                   <div class="col-12">--}}
       {{--                                       <strong class="py-1">•	ساخت تابلو و تجهیزات برق</strong>--}}
       {{--                                       <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1 دستگاه تابلوی شبکه</p>--}}
       {{--                                   </div>--}}
       {{--                                   <div class="col-12 py-1">--}}
       {{--                                       <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>--}}
       {{--                                   </div>--}}
       {{--                                   <div class="col-12 py-1">--}}
       {{--                                       <strong>•	نصب تجهیزات برق</strong>--}}
       {{--                                   </div>--}}
       {{--                                   <div class="col-12 py-1">--}}
       {{--                                       <strong>•	بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>--}}
       {{--                                   </div>--}}
       {{--                               </div>--}}
       {{--                           </div>--}}
      </div>
     </div>
     <div class="tab-pane fade" id="pro6" role="tabpanel" aria-labelledby="pills-pro6-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-pic-tab" data-toggle="pill" href="#pills-pic" role="tab"
            aria-controls="pills-pic" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-properties-tab" data-toggle="pill" href="#pills-properties" role="tab"
            aria-controls="pills-properties" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-faaliyat-tab" data-toggle="pill" href="#pills-faaliyat" role="tab"
            aria-controls="pills-faaliyat" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>

       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-pic" role="tabpanel" aria-labelledby="pills-pic-tab">
         <div class="slideshow-container">
          <div class="mySlides6 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides6 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides6 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides6 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides6 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-properties" role="tabpanel" aria-labelledby="pills-properties-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span
                    class="font-size-10">کارخانه گندله‌سازی سه‌چاهون</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">یزد، بافق</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-faaliyat" role="tabpanel" aria-labelledby="pills-faaliyat-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>


     </div>
    </div>
   </div>
  </div>
  <div class="section  project-3 d-none" id="sectionp3">
   <div class="w-70 m-auto ">
    <div class="d-flex justify-content-between projects py-3">
     <a class="projectly-link active" data-id="5" id="pills-pro8-tab" data-toggle="pill" href="#pro8" role="tab"
        aria-controls="pills-pro8" aria-selected="true">
      <div class="projectly"><span style="padding-top: 2px">1</span>
      </div>
     </a>
    </div>
   </div>
   <div class="m-auto py-2 " style="width: 85%">

    <div class="d-flex justify-content-between projects py-3">
     <div class="project-title1 p-t active-title" data-title="5"
          style="padding-inline-start: 20px">@lang('project.steel.title1')</div>
    </div>
   </div>
   <div class=" d-flex flex-column justify-content-center py-1 py-lg-1 ">
    <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pro8" role="tabpanel" aria-labelledby="pills-pro8-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-stellhome" role="tab"
            aria-controls="pills-stellhome" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-steel-profile-tab" data-toggle="pill" href="#pills-steel-profile" role="tab"
            aria-controls="pills-steel-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-steelcontact-tab" data-toggle="pill" href="#pills-steelcontact" role="tab"
            aria-controls="pills-steelcontact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-stellhome" role="tabpanel"
             aria-labelledby="pills-stellhome-tab">
         <div class="slideshow-container">
          <div class="mySlides8 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides8 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides8 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides8 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides8 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-steel-profile" role="tabpanel" aria-labelledby="pills-steel-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کارخانه گندله‌سازی سنگان</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5/2 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">خراسان رضوی، سنگان</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-steelcontact" role="tabpanel" aria-labelledby="pills-steelcontact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="pro9" role="tabpanel" aria-labelledby="pills-pro9-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-steel-tab" data-toggle="pill" href="#pills-steel" role="tab"
            aria-controls="pills-steel" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-steelproperties-tab" data-toggle="pill" href="#pills-steelproperties" role="tab"
            aria-controls="pills-steelproperties" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-steelfaaliyat-tab" data-toggle="pill" href="#pills-steelfaaliyat" role="tab"
            aria-controls="pills-steelfaaliyat" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>

       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-steel" role="tabpanel" aria-labelledby="pills-steel-tab">
         <div class="slideshow-container">
          <div class="mySlides7 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides7 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides7 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides7 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides7 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-steelproperties" role="tabpanel"
             aria-labelledby="pills-steelproperties-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span
                    class="font-size-10">کارخانه گندله‌سازی سه‌چاهون</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">یزد، بافق</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-steelfaaliyat" role="tabpanel" aria-labelledby="pills-steelfaaliyat-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>


     </div>
    </div>
   </div>
  </div>
  <div class="section  project-4 d-none" id="sectionp4">
   <div class="w-70 m-auto ">
    <div class="d-flex justify-content-between projects py-3">
     <a class="projectly-link active" data-id="5" id="pills-pro10-tab" data-toggle="pill" href="#pro10" role="tab"
        aria-controls="pills-pro10" aria-selected="true">
      <div class="projectly"><span style="padding-top: 2px">1</span>
      </div>
     </a>
    </div>
   </div>
   <div class="m-auto py-2 " style="width: 85%">

    <div class="d-flex justify-content-between projects py-3">
     <div class="project-title1 p-t active-title" data-title="5"
          style="padding-inline-start: 20px">@lang('project.coppor.title1')</div>
    </div>
   </div>
   <div class=" d-flex flex-column justify-content-center py-1 py-lg-1 ">
    <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pro10" role="tabpanel" aria-labelledby="pills-pro10-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-copporhome" role="tab"
            aria-controls="pills-coppercopporhome" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-coppor-profile-tab" data-toggle="pill" href="#pills-coppor-profile" role="tab"
            aria-controls="pills-coppor-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-copporcontact-tab" data-toggle="pill" href="#pills-copporcontact" role="tab"
            aria-controls="pills-copporcontact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-copporhome" role="tabpanel"
             aria-labelledby="pills-copporhome-tab">
         <div class="slideshow-container">
          <div class="mySlides9 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides9 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides9 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides9 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides9 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-coppor-profile" role="tabpanel" aria-labelledby="pills-coppor-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">کارخانه گندله‌سازی سنگان</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5/2 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">خراسان رضوی، سنگان</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-copporcontact" role="tabpanel" aria-labelledby="pills-copporcontact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="pro9" role="tabpanel" aria-labelledby="pills-pro9-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-coppor-tab" data-toggle="pill" href="#pills-coppor" role="tab"
            aria-controls="pills-coppor" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-copporproperties-tab" data-toggle="pill" href="#pills-copporproperties"
            role="tab" aria-controls="pills-copporproperties" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-copporfaaliyat-tab" data-toggle="pill" href="#pills-copporfaaliyat" role="tab"
            aria-controls="pills-copporfaaliyat" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>

       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-coppor" role="tabpanel" aria-labelledby="pills-coppor-tab">
         <div class="slideshow-container">
          <div class="mySlides13 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides13 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides13 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides13 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides7 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-copporproperties" role="tabpanel"
             aria-labelledby="pills-copporproperties-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span
                    class="font-size-10">کارخانه گندله‌سازی سه‌چاهون</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">یزد، بافق</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-copporfaaliyat" role="tabpanel" aria-labelledby="pills-copporfaaliyat-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>


     </div>
    </div>
   </div>
  </div>
  <div class="section  project-5 d-none" id="sectionp5">
   <div class="w-70 m-auto ">
    <div class="d-flex justify-content-between projects py-3">
     <a class="projectly-link active" data-id="6" id="pills-pro15-tab" data-toggle="pill" href="#pro15" role="tab"
        aria-controls="pills-pro15" aria-selected="true">
      <div class="projectly"><span style="padding-top: 2px">1</span>
      </div>
     </a>
    </div>
   </div>
   <div class="m-auto py-2 " style="width: 85%">

    <div class="d-flex justify-content-between projects py-3">
     <div class="project-title1 p-t active-title" data-title="5"
          style="padding-inline-start: 20px">@lang('project.water.title1')</div>
    </div>
   </div>
   <div class=" d-flex flex-column justify-content-center py-1 py-lg-1 ">
    <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pro15" role="tabpanel" aria-labelledby="pills-pro15-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-waterhome" role="tab"
            aria-controls="pills-copperwaterhome" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-water-profile-tab" data-toggle="pill" href="#pills-water-profile" role="tab"
            aria-controls="pills-water-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-watercontact-tab" data-toggle="pill" href="#pills-watercontact" role="tab"
            aria-controls="pills-watercontact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-waterhome" role="tabpanel"
             aria-labelledby="pills-waterhome-tab">
         <div class="slideshow-container">
          <div class="mySlides11 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides11 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides11 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides11 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-water-profile" role="tabpanel" aria-labelledby="pills-water-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">: خط انتقال آب خلیج فارس به صنایع جنوب شرق کشور</span>
           </p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">150 میلیون متر مكعب در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">بندرعباس تا سیرجان</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-watercontact" role="tabpanel" aria-labelledby="pills-watercontact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="pro9" role="tabpanel" aria-labelledby="pills-pro9-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-water-tab" data-toggle="pill" href="#pills-water" role="tab"
            aria-controls="pills-water" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-waterproperties-tab" data-toggle="pill" href="#pills-waterproperties" role="tab"
            aria-controls="pills-waterproperties" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-waterfaaliyat-tab" data-toggle="pill" href="#pills-waterfaaliyat" role="tab"
            aria-controls="pills-waterfaaliyat" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>

       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-water" role="tabpanel" aria-labelledby="pills-water-tab">
         <div class="slideshow-container">
          <div class="mySlides10 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides10 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides10 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides10 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides10 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-waterproperties" role="tabpanel"
             aria-labelledby="pills-waterproperties-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span
                    class="font-size-10">کارخانه گندله‌سازی سه‌چاهون</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">یزد، بافق</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-waterfaaliyat" role="tabpanel" aria-labelledby="pills-waterfaaliyat-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>


     </div>
    </div>
   </div>
  </div>
  <div class="section  project-6 d-none" id="sectionp6">
   <div class="w-70 m-auto ">
    <div class="d-flex justify-content-between projects py-3">
     <a class="projectly-link active" data-id="6" id="pills-pro17-tab" data-toggle="pill" href="#pro17" role="tab"
        aria-controls="pills-pro17" aria-selected="true">
      <div class="projectly"><span style="padding-top: 2px">1</span>
      </div>
     </a>
    </div>
   </div>
   <div class="m-auto py-2 " style="width: 85%">

    <div class="d-flex justify-content-between projects py-3">
     <div class="project-title1 p-t active-title" data-title="5"
          style="padding-inline-start: 20px">@lang('project.other.title1')</div>
    </div>
   </div>
   <div class=" d-flex flex-column justify-content-center py-1 py-lg-1 ">
    <div class="tab-content" id="pills-tabContent">
     <div class="tab-pane fade show active" id="pro17" role="tabpanel" aria-labelledby="pills-pro17-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-otherhome" role="tab"
            aria-controls="pills-copperotherhome" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-other-profile-tab" data-toggle="pill" href="#pills-other-profile" role="tab"
            aria-controls="pills-other-profile" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-othercontact-tab" data-toggle="pill" href="#pills-othercontact" role="tab"
            aria-controls="pills-othercontact" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>
       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-otherhome" role="tabpanel"
             aria-labelledby="pills-otherhome-tab">
         <div class="slideshow-container">
          <div class="mySlides12 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides12 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides12 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides12 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-other-profile" role="tabpanel" aria-labelledby="pills-other-profile-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span class="font-size-10">مجتمع پتروشیمی مبین</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت ماشین‌سازی ویژه</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">160 میلیون متر مكعب در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">بوشهر، بندر عسلویه</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-othercontact" role="tabpanel" aria-labelledby="pills-othercontact-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="tab-pane fade" id="pro9" role="tabpanel" aria-labelledby="pills-pro9-tab">
      <div class="d-flex flex-column justify-content-center mt-1">
       <ul class="nav nav-pills mb-3 d-flex justify-content-center w-70 m-auto font-size-12 pb-3" id="pills-tab"
           role="tablist">
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link active" id="pills-other-tab" data-toggle="pill" href="#pills-other" role="tab"
            aria-controls="pills-other" aria-selected="true">
          تصاویر پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-otherproperties-tab" data-toggle="pill" href="#pills-otherproperties" role="tab"
            aria-controls="pills-otherproperties" aria-selected="false">
          مشخصات عمومی پروژه
         </a>
        </li>
        <li class="nav-item item-sec" role="presentation">
         <a class="nav-link" id="pills-otherfaaliyat-tab" data-toggle="pill" href="#pills-otherfaaliyat" role="tab"
            aria-controls="pills-otherfaaliyat" aria-selected="false">
          فعالیت های فرزان در این پروژه
         </a>
        </li>
       </ul>

       <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
         <div class="slideshow-container">
          <div class="mySlides14 fade">
           <img src="{{url('includes/asset/uploads/projects/1/1.jpg')}}" style="width:100%; height: 100%">
          </div>
          <div class="mySlides14 fade">
           <img src="{{url('includes/asset/uploads/projects/1/2.jpg')}}" style="width:100%;height: 100%">
          </div>

          <div class="mySlides14 fade">
           <img src="{{url('includes/asset/uploads/projects/1/3.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides14 fade">
           <img src="{{url('includes/asset/uploads/projects/1/4.jpg')}}" style="width:100%;height: 100%">
          </div>
          <div class="mySlides14 fade">
           <img src="{{url('includes/asset/uploads/projects/1/5.jpg')}}" style="width:100%;height: 100%">
          </div>
          <a class="next" onclick="plusSlides(1)">❮</a>
          <a class="prev" onclick="plusSlides(-1)">❯</a>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-otherproperties" role="tabpanel"
             aria-labelledby="pills-otherproperties-tab">
         <div class="d-flex flex-column flex-md-row align-items-center justify-content-center mt-3">
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">عنوان پروژه:</span> <span
                    class="font-size-10">کارخانه گندله‌سازی سه‌چاهون</span></p>
           <p><span class="font-size-13">کارفرما:</span> <span class="font-size-10">شرکت فکور صنعت تهران</span></p>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <img src="{{asset('user/icon/Map.png')}}" class="img-responsive"/>
          </div>
          <div class="col d-flex flex-column align-items-center justify-content-center">
           <p><span class="font-size-13">ظرفیت:</span> <span class="font-size-10">5 میلیون تن در سال</span></p>
           <p><span class="font-size-13">محل اجرا:</span> <span class="font-size-10">یزد، بافق</span></p>
          </div>
         </div>
        </div>
        <div class="tab-pane fade" id="pills-otherfaaliyat" role="tabpanel" aria-labelledby="pills-otherfaaliyat-tab">
         <div class="col-12">
          <strong class="py-1">• ساخت تابلو و تجهیزات برق</strong>
          <p class="py-1 text-justify">ساخت 3 دستگاه تابلوی I/O برای مخازن خط انتقال، 11 دستگاه تابلوی I/O برای
           ایستگاه‌های Midway Valve، 13 دستگاه تابلوی کنترلی برای مجموعه‌ی حفاظت کاتدیک، 11 دستگاه تابلوی Server، 1
           دستگاه تابلوی شبکه</p>
         </div>
         <div class="col-12 py-1">
          <strong>• طراحی، برنامه‌نویسی و پیاده‌سازی سیستم کنترل</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• نصب تجهیزات برق</strong>
         </div>
         <div class="col-12 py-1">
          <strong>• بهره‌برداری خط انتقال آب خلیج فارس - قطعه اول</strong>
         </div>
        </div>
       </div>
      </div>


     </div>
    </div>
   </div>
  </div>
        
 </div>

 <div class="col-12 col-lg-2 d-flex justify-content-end  d-lg-none d-block p-0">
  <div class="position-fixed social" id="social" style="z-index: 3 ; top: 50%">
   <ul id="mobile-social">
    <li class="s-item py-1">
     <div class="d-flex align-items-center justify-content-between">
      <a href=""><i class="fab fa-fw fa-instagram"></i> <span class="d-ltr">@farzanfanandish</span></a>
     </div>
    </li>
    <li class="s-item py-1">
     <div class="d-flex align-items-center justify-content-between">
      <a href=""><i class="fab fa-fw fa-linkedin"></i> <span class="d-ltr">@farzanfanandish</span></a>
     </div>
    </li>
    <li class="s-item py-1">
     <div class="d-flex align-items-center justify-content-between">
      <a href=""><i class="fab fa-fw fa-youtube"></i> <span class="d-ltr">@farzanfanandish</span></a>
     </div>
    </li>
    <li class="s-item py-1">
     <div class="d-flex align-items-center justify-content-between">
      <a href=""><i class="fas fa-fw fa-search"></i> <span class="d-ltr">جست و جو</span></a>
     </div>
    </li>
   </ul>
  </div>
 </div>
 <div class="col-12 col-lg-2 d-none d-lg-block p-0" style="margin-bottom: 10%">
  <div class="w-100" style="position:sticky; top: 50%; ">
   <div class=social1" id="social1" style="z-index: 3 ; top: 50%; overflow: hidden">
    <ul>
     <li class="s-item1 py-1">
      <div class="d-flex align-items-center justify-content-between">
       <a href=""><i class="fab fa-fw fa-instagram"></i> <span class="d-ltr">@farzanfanandish</span></a>
      </div>
     </li>
     <li class="s-item1 py-1">
      <div class="d-flex align-items-center justify-content-between">
       <a href=""><i class="fab fa-fw fa-linkedin"></i> <span class="d-ltr">@farzanfanandish</span></a>
      </div>
     </li>
     <li class="s-item1 py-1">
      <div class="d-flex align-items-center justify-content-between">
       <a href=""><i class="fab fa-fw fa-youtube"></i> <span class="d-ltr">@farzanfanandish</span></a>
      </div>
     </li>
     <li class="s-item1 py-1">
      <div class="d-flex align-items-center justify-content-between">
       <a href=""><i class="fas fa-fw fa-search"></i> <span class="d-ltr">جست و جو</span></a>
      </div>
     </li>
    </ul>
   </div>
  </div>
 </div>
 </div>

@endsection
@section('js')
 <script>
     var swiper = new Swiper(".mySwiper", {
         slidesPerView: 4,
         navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev",
         },
     });
 </script>
 <script>
     $('body').on('click', '.img-slider-list', function () {
         let id = $(this).attr('data-id');
         $('.img-slider-list').removeClass('active');
         var id_menu = 'menu_btn_' + id;
         $('#' + id_menu).addClass("active");
         getSection(id)
     })

     function getSection(id) {
         switch (id) {
             case "0":
                 $('.section').addClass('d-none')
                 $('.section').removeClass('d-block')
                 $('.project-1').addClass('d-block')
                 break;
             case "2":
                 $('.section').addClass('d-none')
                 $('.section').removeClass('d-block')
                 $('.project-2').addClass('d-block')
                 break;
             case "3":
                 $('.section').addClass('d-none')
                 $('.section').removeClass('d-block')
                 $('.project-3').addClass('d-block')
                 break;
             case "4":
                 $('.section').addClass('d-none')
                 $('.section').removeClass('d-block')
                 $('.project-4').addClass('d-block')
                 break;
             case "5":
                 $('.section').addClass('d-none')
                 $('.section').removeClass('d-block')
                 $('.project-5').addClass('d-block')
                 break;
             case "6":
                 $('.section').addClass('d-none')
                 $('.section').removeClass('d-block')
                 $('.project-6').addClass('d-block')
                 break;
         }

     }

     $('body').on('click', '.login-form-toggle', function () {
         $("#headerContainer .login-form").toggleClass('open');
     });

     //

     $('.projectly-link').on('click', function () {
         let item = $(this).attr('data-id');
         console.log(item)

         if ($('.projectly-link').hasClass("active")) {
             $('.projectly-link').removeClass('active');
             if ($('.project-title' + item).hasClass("active-title")) {
                 $('.project-title').removeClass('active-title');
             } else {
                 $('.p-t').removeClass('active-title');

             }
         }
         $('.project-title' + item).addClass('active-title');


     });
 </script>
 <!-- Initialize Swiper -->
 <script>
     let slideIndex = 1;
     showSlides(slideIndex);

     function plusSlides(n) {
         showSlides(slideIndex += n);
     }

     function currentSlide(n) {
         showSlides(slideIndex = n);
     }

     function showSlides(n) {
         let i;
         let slides = document.getElementsByClassName("mySlides");
         let slides2 = document.getElementsByClassName("mySlides2");
         let slides3 = document.getElementsByClassName("mySlides3");
         let slides4 = document.getElementsByClassName("mySlides4");
         let slides5 = document.getElementsByClassName("mySlides5");
         let slides6 = document.getElementsByClassName("mySlides6");
         let slides8 = document.getElementsByClassName("mySlides8");
         let slides9 = document.getElementsByClassName("mySlides9");
         let slides10 = document.getElementsByClassName("mySlides10");
         let slides11 = document.getElementsByClassName("mySlides11");
         let slides12 = document.getElementsByClassName("mySlides12");
         let slides13 = document.getElementsByClassName("mySlides13");
         if (n > slides.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides.length
         }
         for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";
         }
         slides[slideIndex - 1].style.display = "block";

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

         if (n > slides4.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides4.length
         }
         for (i = 0; i < slides4.length; i++) {
             slides4[i].style.display = "none";
         }
         slides4[slideIndex - 1].style.display = "block";

         if (n > slides5.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides5.length
         }
         for (i = 0; i < slides5.length; i++) {
             slides5[i].style.display = "none";
         }
         slides5[slideIndex - 1].style.display = "block";

         if (n > slides6.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides6.length
         }
         for (i = 0; i < slides6.length; i++) {
             slides6[i].style.display = "none";
         }
         slides6[slideIndex - 1].style.display = "block";
         if (n > slides8.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides8.length
         }
         for (i = 0; i < slides8.length; i++) {
             slides8[i].style.display = "none";
         }
         slides8[slideIndex - 1].style.display = "block";

         if (n > slides9.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides9.length
         }
         for (i = 0; i < slides9.length; i++) {
             slides9[i].style.display = "none";
         }
         slides9[slideIndex - 1].style.display = "block";

         slides10[slideIndex - 1].style.display = "block";
         if (n > slides10.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides10.length
         }
         for (i = 0; i < slides10.length; i++) {
             slides10[i].style.display = "none";
         }
         slides11[slideIndex - 1].style.display = "block";
         if (n > slides11.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides11.length
         }
         for (i = 0; i < slides11.length; i++) {
             slides11[i].style.display = "none";
         }
         slides11[slideIndex - 1].style.display = "block";

         slides12[slideIndex - 1].style.display = "block";
         if (n > slides12.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides12.length
         }
         for (i = 0; i < slides12.length; i++) {
             slides12[i].style.display = "none";
         }
         slides12[slideIndex - 1].style.display = "block";

         slides13[slideIndex - 1].style.display = "block";
         if (n > slides13.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides13.length
         }
         for (i = 0; i < slides13.length; i++) {
             slides13[i].style.display = "none";
         }
         slides13[slideIndex - 1].style.display = "block";

         slides14[slideIndex - 1].style.display = "block";
         if (n > slides14.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = slides14.length
         }
         for (i = 0; i < slides14.length; i++) {
             slides14[i].style.display = "none";
         }
         slides14[slideIndex - 1].style.display = "block";


     }
 </script>
 <script>
     $('body').on('click', '.project-num', function () {
         let id = $(this).attr('data-id');
         $('.title-item').removeClass('active-title');
         $('.project-title' + id).addClass('active-title');

     })
 </script>
@endsection
