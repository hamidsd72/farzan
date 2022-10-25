
<footer class="footer footer-bg">
    <div class="container">
        <div  class="row py-5">
            <div class="col-12 col-lg-3">
                <div class="footer-icon">
                    <img src="{{asset('uploads/space/location.png')}}" style="width: 85%"  />
                </div>
                <div>
                    <ul class="footer-list-group">
                        <li class="text-dark-blue  px-4 py-2 " >
                            <strong>{{__('content.centralOffice')}}</strong>
                            <p>
                                @if(set_lang($contact_info,'address',app()->getLocale()))

                                    {{set_lang($contact_info,'address',app()->getLocale())}}

                                @endif
                            </p>

                        </li>
                        <li class="text-dark-blue  px-4 py-2 " >
                            <strong>{{__('content.engineerOffice')}}</strong>
                            <p>
                                @if(set_lang($contact_info,'address2',app()->getLocale()))

                                    {{set_lang($contact_info,'address2',app()->getLocale())}}

                                @endif
                            </p>

                        </li> 
                        <li class="text-dark-blue  px-4 py-2 " >
                            <strong>{{__('content.factory')}}</strong>
                            <p>
                                @if(set_lang($contact_info,'address3',app()->getLocale()))

                                    {{set_lang($contact_info,'address3',app()->getLocale())}}

                                @endif
                            </p>

                        </li>




                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="footer-icon">
                    <img src="{{asset('uploads/space/mail.png')}}"  />
                </div>
                <div>
                    <ul class="footer-list-group">
                        <li class="text-dark-blue  px-4 py-2 " >
                            <strong>{{__('content.email')}}</strong>
                            <p >
                                 @if(set_lang($contact_info,'email1',app()->getLocale()))
                                    <a href="mailto:{{set_lang($contact_info,'email1',app()->getLocale())}}" class="text-dark-blue title-item ">
                                        {{set_lang($contact_info,'email1',app()->getLocale())}}
                                    </a>
                                @endif
                            </p>
                        </li>
                        <li class="text-dark-blue  px-4 py-2" >
                            <strong>{{__('content.phone2')}}</strong>
                            <p >
                                @if(set_lang($contact_info,'phone2',app()->getLocale()))
                                    <a  class="text-dark-blue title-item ">
                                        {{set_lang($contact_info,'phone2',app()->getLocale())}}
                                    </a>
                                @endif
                            </p>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="footer-icon" >
                    <img src="{{asset('uploads/space/phone.png')}}"   />
                </div>
                <div>
                    <ul class="footer-list-group">
                        <li class="text-dark-blue  px-4 py-2" >
                            <strong>{{__('content.phone2')}}</strong>
                            <p >
                                @if(set_lang($contact_info,'phone2',app()->getLocale()))
                                    <a  class="text-dark-blue title-item ">
                                        {{set_lang($contact_info,'phone2',app()->getLocale())}}
                                    </a>
                                @endif
                            </p>
                        </li>
                        <li class="text-dark-blue  px-4 py-2" >
                            <strong>{{__('content.phone2')}}</strong>
                            <p >
                                @if(set_lang($contact_info,'phone2',app()->getLocale()))
                                    <a  class="text-dark-blue title-item ">
                                        {{set_lang($contact_info,'phone2',app()->getLocale())}}
                                    </a>
                                @endif
                            </p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <p class=" text-justify text-dark-blue ">
                    @if(set_lang($contact_info,'description',app()->getLocale()))
                        <a  class="text-dark-blue title-item ">
                            {{set_lang($contact_info,'description',app()->getLocale())}}
                        </a>
                    @endif
                </p>
                <p class=" text-justify text-dark-blue">
                    @if(set_lang($contact_info,'description2',app()->getLocale()))
                        <a  class="text-dark-blue title-item ">
                            {{set_lang($contact_info,'description2',app()->getLocale())}}
                        </a>
                    @endif
                <p class=" text-justify text-dark-blue">
                    @if(set_lang($contact_info,'description3',app()->getLocale()))
                        <a  class="text-dark-blue title-item ">
                            {{set_lang($contact_info,'description3',app()->getLocale())}}
                        </a>
                    @endif
                </p>
            </div>
        </div>
    </div>
</footer>

