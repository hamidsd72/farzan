@extends('layouts.user')
@section('content')
<style>p { text-align: justify }</style>
    <div class="col-12 col-lg-2  d-none d-lg-block d-xl-block"  style="margin-bottom: 10%">
        <div id="sideBarNavigation" class="sticky-top" style="position: sticky;top:50%" id="list-example">

            <div id="sectionMenu">
                <ul class="section-nav section2" >
                    <li class=" img-slider-list title-section   menu-set" data-id="1" id="menu_btn_1" >
                        <a class="section-link" data-section="section1" href="#section1">
                            <span class=" title-item "  >About US</span>
                        </a>
                    </li>
                    <li class=" img-slider-list title-section menu-set" data-id="2" id="menu_btn_2"  >
                        <a class="section-link" data-section="section2" href="#section2">
                            <span class=" title-item ">Farzan mission statement</span>
                        </a>
                    </li>
                    <li class="img-slider-list title-section menu-set" data-id="3" id="menu_btn_3" >
                        <a class="section-link" data-section="section3" href="#section3">
                            <span class=" title-item ">Organizational Chart</span>
                        </a>
                    </li>
                    <li class="img-slider-list title-section menu-set" data-id="4" id="menu_btn_4" >
                        <a class="section-link" data-section="section4" href="#section4">
                            <span class=" title-item ">Employees’ Educational Degrees</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8" data-spy="scroll" data-target="#list-example" data-offset="0">

        <section class="body_box d-flex align-items-center pb-5" data-id="1" id="section1">
            <div class="ml-lg-5">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            About US
                        </p>
                        <p class="m-0">
                            “Behandishi & Fanararie Farda” company (BAFCO) has provided engineering and procurement services for different industrial projects since 2002,
                             and in 2016 the company decided to concentrate its knowledge-based activities on electrical section of industrial projects,
                              and continued its activity in a sepearate company “Farzan Fanandish Farda”.At the beginning, “Farzan Fanandish Farda”
                                Company was based in Amir Kabir University Development Center , to be able to keep continuous relations with universities
                                 and take advantage of university professors and graduates’ knowledge . The aim was to maintain effective link between technology
                                  and industry, and using university professors and graduates’` knowledge and expertise for technical support of Farzan  services and products.
                                   Company field of activity is providing complete and integrated electrical services for industrial projects and encompasses all engineering services,
                                    design and manufacturing products, installation and commissioning of equipment and operation of industrial plants. “Farzan Fanandish Farda”
                                     company has up to now had the opportunity to contribute in many industrial and mineral and Iron Ore Concentrate Plant projects,
                                      in particular has had a very active and significant presence in first section of Mega project “Pipeline for transfer of Persian Gulf water
                                       for industries located in south-east of Iran”. Currently, Farzan Company is engaged in large scale  projects in other industries including Steel,
                                        refinery and petrochemical plants.
                        </p>
                        <div class="col-lg-8 col-10 mx-auto mt-5">
                            <img src="{{ asset('img/about1.jpeg') }}" alt="map" class="w-100">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="body_box d-flex align-items-center pb-5" data-id="2" id="section2">
            <div class="ml-lg-5">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            Farzan mission statement
                        </p>
                        <p class="m-0">
                            “Farzan Fanandish Farda” company is a developing, instructive and value-based organization and presents integrated services and products in electrical field
                             (power, electronics, control and instrumentation) at national and international level.We, as a knowledge-based company, provide our customers’ growing
                              needs with integrated solutions and up to date products at international standards by continuous innovation and improvement. With our dedicated services
                               and technological products, we guarantee excellent quality of services and satisfaction for our customers. We emphasize on balance in interests of all
                                engaged parties, and based on our core values, ensure customers’ satisfaction by our strict organizational values and considering fair profit .
                                 By establishing a dynamic environment and entrepreneurship platform , Farzan Company has proved to consider its human capital resources as major basis
                                  for development and as its most important strategic asset and partner. Farzan Company is always keen on respecting personnel rights and interests,
                                   the flourishing of their talents and strengthening of mutual trust between the company and employees. Taking advantage of the effective service
                                    compensation system, Farzan Company strives to respect and satisfy the employees. “Farzan Fananadish Farda” Company has built a network of suppliers,
                                     and considers them as partners in its success and achievements. Farzan Company assists them to develop and considers honesty and fair cooperation
                                      with them.“Farzan Fananadish Farda” Company is  an arena of hope for prosperity ,committed  to environment protection  and a strong and reliable
                                       partner and  collaborator for customers.
                        </p>
                        <div class="col-lg-8 col-10 mx-auto mt-5">
                            <img src="{{ asset('img/about2.jpeg') }}" alt="map" class="w-100">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="body_box d-flex align-items-center pb-5" data-id="3" id="section3">
            <div class="ml-lg-4">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            Organizational Chart
                        </p>
                        <div class="col-lg-12 mx-auto">
                            <img src="{{ asset('img/about3.jpg') }}" alt="map" class="w-100">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="body_box d-flex align-items-center pb-4" data-id="4" id="section4">
            <div class="ml-lg-4">
                <div class="row" >
                    <div class="col-12">
                        <p class="h4 font-weight-bold my-4">
                            Employees’ Educational Degrees
                        </p>
                        <p class="my-0 mb-4">
                            Our main capital and strategic partner is our human resources.Consequently, we are proud of cooperation with committed graduates having
                              academic degrees in our management and technical teams.
                        </p>
                        <div class="col-lg-12 mx-auto">
                            <img src="{{ asset('img/about4.jpg') }}" alt="map" class="w-100">
                        </div>
                        <p class="h5 font-weight-bold my-2">
                            Farzan consultants
                        </p>
                        <p class="m-0">
                            Consultants for Engineering, Projects , Human resourses, Legal and insurance affairs : 12 person
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

