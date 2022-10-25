<div id="sideBarNavigation" class="sticky-top" id="list-example">
    <ul class="section-nav mb-4" >
        @foreach($about->photos as $key => $pic)
            <li data-section="clientSwiper" data-slide="{{$key}}" class="d-flex align-items-center {{$key == 0 ? 'active' : ''}} pb-1 section-link slider-link img-slider-list" >
                <img class="img-list" data-img-src="{{url($pic->path)}}" src="{{ url($pic->path)}}" style="width: 50px; height: 50px" />
                <span class="margin-inline-start-1" >{{set_lang($pic,'index_title',app()->getLocale()) ?: __('content.image').$key}}</span>
            </li>
        @endforeach
    </ul>
    <div id="sectionMenu">
        <ul class="section-nav mt-4">
            {{-- @foreach ($sections as $key => $section)
                <li class=" img-slider-list py-2 menu-set" data-id="{{($key+1)}}" id="menu_btn_{{($key+1)}}" >
                    <a class="d-flex align-items-center  section-link" data-section="section{{($key+1)}}" href="#section1">
                        <img class="img-list img-responsive" src="{{asset('user/pic/icon'.($key+1).'.svg')}}"  />
                        <span class=" title-item margin-inline-start-1" >
                            @if(app()->getLocale() == 'en')
                                {{$section->section_name}}
                            @else
                                {{$section->section_name}}
                            @endif
                        </span>
                    </a>
                </li>
            @endforeach --}}
            <li class=" img-slider-list py-2 menu-set" data-id="1" id="menu_btn_1" >
                <a class="d-flex align-items-center  section-link" data-section="section1" href="#section1">
                    <img class="img-list img-responsive" src="{{asset('user/pic/icon1.svg')}}"  />
                    <span class=" title-item margin-inline-start-1" >  @lang('content.news')</span>
                </a>
            </li>
            <li class=" img-slider-list py-2 menu-set" data-id="2" id="menu_btn_2" >
                <a class="d-flex align-items-center   section-link" data-section="section2" href="#section1">
                    <img class="img-list img-responsive" src="{{asset('user/pic/icon2.svg')}}"  />
                    <span class=" title-item margin-inline-start-1"> @lang('content.prossing')</span>
                </a>
            </li>
            <li class="img-slider-list py-2 menu-set" data-id="3" id="menu_btn_3">
                <a class="d-flex align-items-center   section-link" data-section="section3" href="#section1">
                    <img class="img-list img-responsive" src="{{asset('user/pic/icon3.svg')}}"  />
                    <span class=" title-item margin-inline-start-1">  @lang('content.more')</span>

                </a>

            </li>
        </ul>
    </div>
</div>