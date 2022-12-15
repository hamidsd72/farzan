@extends('layouts.user')
@section('content')
    <style>
        .navy-blue-circle-box p {
            padding-top: 46px;
            font-size: 38px;
        }
        .navy-blue-circle-box .box {
            width: 142px;
            height: 142px;
            background: #455879;
            color: white;
            font-weight: bold;
            text-align: center;
            padding-top: 62px;
            border-radius: 50%;
        }
        p {
            text-align: justify
        }
        .rotateY180 {
            transform: rotateY(180deg);
        }
    </style>

    <div class="container" data-spy="scroll" data-target="#list-example" data-offset="0">
        
        <section class="body_box" data-id="0" id="section0">
            <div class="row" >
                <div class="col-12">
                    <p class="h4 font-weight-bold my-4">
                        Products and Services
                    </p>
                    <p class="m-0">
                        We provide high quality complete and integrated electrical services for industrial projects in fields of Power,
                            Electronics, Control and instruments.
                    </p>
                    <div class="my-4">
                        <div class="row navy-blue-circle-box mx-auto">
                            <div class="col-auto p-0"><div class="box">Engineering</div></div>
                            <div class="col-auto"><p class="px-1">---></p> </div>
                            <div class="col-auto p-0"><div class="box">Procurement</div></div>
                            <div class="col-auto"><p class="px-1">---></p> </div>
                            <div class="col-auto p-0"><div class="box">Installation</div></div>
                            <div class="col-auto"><p class="px-1">---></p> </div>
                            <div class="col-auto p-0"><div class="box">Commissioning</div></div>
                            <div class="col-auto"><p class="px-1">---></p> </div>
                            <div class="col-auto p-0"><div class="box">Operation</div></div>
                        </div>
                    </div>
                    <div class="col-12 pt-4 pb-2">
                        <img src="{{ asset('img/service/7.jpeg') }}" alt="map" class="w-100 rounded">
                    </div>

                </div>
            </div>
        </section>
        
        <section class="body_box pt-5" data-id="1" id="section1">
            <p class="h4 font-weight-bold mt-4 mb-5">
                Our comparative advantages in providing services and products
            </p>
            <div class="row mt-1">
                <div class="col-lg-1 my-auto">
                    <img src="{{ asset('img/service/9.png') }}" alt="map" class="w-100 rounded">
                </div>
                <div class="col-lg">
                    <p class="h6 font-weight-bold">Time Management</p>
                    <p class="py-1">
                        Timely delivery of equipment has always been one of main concerns of Clients in industrial projects.
                            To fix this issue and for time management and expedition of manufacturing process and timely delivery of products,
                            we always purchase and store main items which are used in manufacturing products in excess and in advance,
                            and by this provision the manufacturing time and delivery time of equipment is significantly reduced.
                    </p>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-lg-1 p-2 my-auto">
                    <img src="{{ asset('user/icon/Logo3.png') }}" alt="map" class="w-100 rounded">
                </div>
                <div class="col-lg">
                    <p class="h6 font-weight-bold">Cost Management</p>
                    <p class="py-1">
                        Access to first hand foreign sources for supply of main equipment and parts and thereby disintermediation,
                         and also purchasing in high quantities results in reduction of manufacturing cost of our products,
                          and enables us to consider lower profit margin and hence offer our equipment and services with economic and competitive prices.
                    </p>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-lg-1 my-auto">
                    <img src="{{ asset('img/service/10.png') }}" alt="map" class="w-100 rounded">
                </div>
                <div class="col-lg">
                    <p class="h6 font-weight-bold">Quality Management</p>
                    <p class="py-1">
                        Based on Farzan Company mission for delivering products and services at international standards levels,
                         our activities are distinguished significantly by considering three following factors:
                        <br>
                        • Utilizing electrical industry up-to-date knowledge by employing universities elite graduates in our technical and management teams
                        <br>
                        • Purchase and using original high-quality equipment in manufacturing our products,
                        achieved via our reliable German partner GIPKO company and provision to present authenticity certificate for equipment
                        <br>
                        • Providing complete and integrated all project services from producing of engineering documents in the first step to commissioning and operation as
                        the last step of projects, and thereby eliminating obstacles, interferences and inconsistency in different phases of supply
                    </p>
                </div>
            </div>

            

        </section>

        <section class="body_box" data-id="2" id="section2">
            <p class="h4 font-weight-bold my-4">Engineering Services</p>
            <p class="h6 font-weight-bold">Engineering design for electrical section of projects</p>
            <p class="py-1">
                At the beginning of each project and in the first step, Farzan Company Engineering department produces all project electrical documents based on international
                 standards and Client’s requirements and procedures, so that all technical documents for all equipment including electrical panels, control and Instruments,
                  lighting, earthing, cabling and all other electrical equipment and material from Basic Design to Detail Design are produced.
            </p>
            <img src="{{ asset('img/service/1.jpeg') }}" alt="map" class="w-100 rounded my-5">
            <img src="{{ asset('img/service/2.jpeg') }}" alt="map" class="w-100 rounded my-5">

            <p class="h4 font-weight-bold my-4">Design, programming and execution of control systems</p>
            <p class="py-1">
                One of other important activities of Farzan Company engineering department is design,
                 programming and execution of control system, which is considered as one of our main competitive and creditable activities.
                  This significant service is product of technical knowledge of our control engineering department specialists,
                   and it conforms to international programming standards and based on reputable control systems such as Siemens and ABB.
                    One of Farzan Company achievements in this field of activity is design, programming and execution of control systems for some of country’s
                     industrial plants using special technologies, namely:
                <br>
                • Sangan Iron Ore Concentrate Plant 
                <br>
                • Jalal Abad Iron Ore Concentrate Plant  
                <br>
                • Gol-Gohar Sirjan Iron Ore Concentrate Plant 
                <br>
                • Persian Gulf Water Transmission line section- First Section 
                <br>
                • Sangan Pelletizing Plant 
                <br>
                • Seh-Chahoon Pelletizing Plant 
                <br>
                • Khatoon Abad Copper Processing Plant  
                <br>
                • Mobin Petrochemical Complex
                <div class="row">
                    <div class="col-lg">
                        <img src="{{ asset('img/service/5.jpeg') }}" alt="map" class="w-100 my-5 rounded">
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('img/service/6.jpeg') }}" alt="map" class="w-100 my-5 rounded rotateY180">
                    </div>
                </div>
            </p>
        </section>
        
        <section class="body_box" data-id="3" id="section3">
            <p class="h4 font-weight-bold my-4">Procurement of Electrical and I&C equipment</p>
            <p class="m-0">
                Other Electrical and I&C equipment of industrial projects which are not manufactured in Farzan company and are not in range of our products,
                 are procured by our Supply division after holding tenders and determination of qualified supplier considering high quality and price:
                <br>
                MV Panel
                <br>
                MV PFC Panel
                <br>
                MCC Panel
                <br>
                MV VFD
                <br>
                Instrument
                <br>
                CCTV
                <br>
                Telecommunication
                <br>
                Transformer
                <br>
                Electromotors 
                <br>
                Fire Alarm & Fire Detection
                <br>
                Access to first hand sources and main European suppliers such as ABB and Siemens are one of our capabilities which is
                 achieved through cooperation with our reliable German partner, GIPCO company.
            </p>
            <img src="{{ asset('img/service/3.jpeg') }}" alt="map" class="w-100 rounded my-5">
        </section>

        <section class="body_box" data-id="4" id="section4">
            <p class="h4 font-weight-bold my-4">Installation and Commissioning of electrical and I&C equipment of industrial projects</p>
            <p class="m-0">
                Our experienced installation and executive teams install and commission all electrical and I&C equipment including those manufactured by Farzan,
                 equipment supplied by Farzan , or items procured by Clients. 
            </p>
            <img src="{{ asset('img/service/8.jpeg') }}" alt="map" class="w-100 rounded my-5">
        </section>

        <section class="body_box pb-5" data-id="5" id="section5">
            <p class="h4 font-weight-bold my-4">Operation of industrial projects</p>
            <p class="mb-4">
                Relying on our operational experiences in country’s industrial production lines, we perform operation of industrial plants.
            </p>
            <p>
                We take pride in operation of following industrial plants up to now:
                <br>
                operation of first section of Persian Gulf Water Transmission
                <br>
                Operation of Foolad Paya Kavir Yazd Iron Ore Concentrate Plant Diesel Power Plant
                <br>
                Operation of Sangan Iron Ore Concentrate Plant Transmission line section
            </p>
        </section>

    </div>

@endsection
