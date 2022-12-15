<div class="navbar p-0 navbar-dark navbar-expand-lg d-flex justify-content-between bg-menu custom-navbar" >
    <button id="sidebarToggleBtn" class="navbar-toggler text-white" type="button">
        <i class="fa fa-bars"></i>
    </button>
    <div class="logo"  >
        <a  href="{{route('user.index')}}">
            <div class="logo-img">
                <img  src="{{asset('user/icon/new_logo_farzan.png')}}"  alt="{{set_lang($setting,'title',app()->getLocale())}}"  >
            </div>
            <div class="logo-title">
                <img src="{{asset('uploads/space/logo-title.png')}}"  alt="{{set_lang($setting,'title',app()->getLocale())}}" style="margin-bottom: 1px" >
            </div>
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
                        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('user.index')}}">@lang('menu.Home') <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('user.service')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.service') }}">@lang('menu.service')</a>
                        </li>
                         <li class="nav-item {{ (request()->routeIs('user.product')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.product') }}">@lang('menu.products')</a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('user.projects')) ? 'active' : '' }}">
                            <a class="nav-link" href="#">@lang('menu.projects')</a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('research-and-development.index')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('research-and-development.index')}}">@lang('menu.development')</a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('user.partner')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.partner') }}">@lang('menu.partners')</a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('user.certificate')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.certificate') }}">@lang('menu.certificates')</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.multimedia')</a>
                        </li>
                        <li class="nav-item {{ (request()->routeIs('user.about.show')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('user.about.show') }}">@lang('menu.about')</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav menu-navbar">

                         <li class="nav-item {{ (request()->routeIs('user.contact.show')) ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('user.contact.show')}}">@lang('menu.contactUs')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.employerPanel')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('menu.joinUs')</a>
                        </li>
{{--                    <li class="nav-item dropdown font-size-14">--}}
{{--                            @if(app()->getLocale() == 'en')--}}
{{--                                <a class="nav-link" href="{{route('lang_set','fa')}}">فارسی</a>--}}
{{--                            @else--}}
{{--                                <a class="nav-link" href="{{route('lang_set','en')}}">ENG</a>--}}
{{--                            @endif--}}
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

