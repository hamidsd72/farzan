<div class="navbar p-0 navbar-dark navbar-expand-lg d-flex justify-content-between bg-menu custom-navbar" >
    <button id="sidebarToggleBtn" class="navbar-toggler text-white" type="button">
        <i class="fa fa-bars"></i>
    </button>
    <div class="logo"  >
        <a  href="{{route('user.index')}}">
            <img  src="{{asset('uploads/space/logo.png')}}"  alt="{{set_lang($setting,'title',app()->getLocale())}}"  >
            <img src="{{asset('uploads/space/logo-title.png')}}"  alt="{{set_lang($setting,'title',app()->getLocale())}}" style="margin-bottom: 1px" >
        </a>
    </div>
{{--    <div class="d-lg-none mobile-lang">--}}
{{--         <ul>--}}
{{--             <li class="nav-item dropdown text-light-blue">--}}

{{--                 <a class="nav-link dropdown-toggle text-light-blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                     @if(app()->getLocale() == 'en')--}}
{{--                         <strong class="text-light-blue">ENG</strong>--}}
{{--                     @else--}}
{{--                         <strong class="text-light-blue p-0">fa</strong>--}}
{{--                     @endif--}}

{{--                 </a>--}}
{{--                 <div class="dropdown-menu dropdown-menu-start dropdown-w-50" aria-labelledby="navbarDropdown">--}}
{{--                     <a class="dropdown-item" href="{{route('lang_set','fa')}}">fa</a>--}}
{{--                     <a class="dropdown-item" href="{{route('lang_set','en')}}">en</a>--}}
{{--                 </div>--}}
{{--             </li>--}}
{{--         </ul>--}}
{{--    </div>--}}
    <div class="container-fluid d-none d-lg-block content-menu">
        <div class="row">
            <div class="col-12 col-lg-2"></div>
            <div class="col-12 col-lg-8">
                <div class="d-flex justify-content-between flex-direction-row">
                    <ul class="navbar-nav menu-navbar">
                        @foreach ($links->where('position','header-primary') as $link)
                            <li class="nav-item @if($links[0]->title == $link->title) active @endif">
                                <a class="nav-link" href="#">
                                    @if(app()->getLocale() == 'en')
                                        {{$link->en_title}}
                                    @else
                                        {{$link->title}}
                                    @endif
                                    @if($links[0]->title == $link->title) <span class="sr-only">(current)</span> @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    {{-- <ul class="navbar-nav menu-navbar">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">@lang('menu.Home') <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.service')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.projects')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.development')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.partners')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.honor')</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#">چندرسانه&zwnj;ای</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.about')</a>
                        </li>
                    </ul> --}}
                    <ul class="navbar-nav menu-navbar">
                        @foreach ($links->where('position','header-second') as $link)
                            <li class="nav-item @if($links[0]->title == $link->title) active @endif">
                                <a class="nav-link" href="#">
                                    @if(app()->getLocale() == 'en')
                                        {{$link->en_title}}
                                    @else
                                        {{$link->title}}
                                    @endif
                                    @if($links[0]->title == $link->title) <span class="sr-only">(current)</span> @endif
                                </a>
                            </li>
                        @endforeach
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.contactUs')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.jobs')</a>
                        </li> --}}
{{--                    <li class="nav-item dropdown">--}}

{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                            @if(app()->getLocale() == 'en')--}}
{{--                                <strong>ENG</strong>--}}
{{--                            @else--}}
{{--                                <strong>fa</strong>--}}
{{--                            @endif--}}

{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-start dropdown-w-50" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{route('lang_set','fa')}}">fa</a>--}}
{{--                            <a class="dropdown-item" href="{{route('lang_set','en')}}">en</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
                </div>
            </div>
            <div class="col-12 col-lg-2"></div>
        </div>

    </div>
    <div id="sidebarMenu">
        <div class="sidebarMenu-overlay"></div>
        <div class="sidebarMenu-content text-right">
            <ul class="">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> {{__('text.header_down.farzan')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">{{__('text.header_down.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">{{__('text.header_down.product')}}</a>
                </li>
            </ul>
        </div>
    </div>
</div>