@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span> Prosthodontics & </span><span>
                            Crown & Bridge </span></h1>
                    <p class="about-p mb-2 text-justify"> <a href="{{ url('/programme/mds-prosthodontics-crown-bridge') }}">The Department of Prosthodontics</a>  is the largest department of the college. The Department has both undergraduate and Postgraduate section. </p>
                </div>
                <div class="image-content text-center p-3">
                    <img src="{{asset('/assets/img/college_departments/dental/pcb/prostho.jpg')}}" alt="">
                </div>
                <div class="container p-3 text-justify">
                    <p class="about-p mb-2">The department provides specialized dental treatment for patients aspiring artificial replacement of teeth and other structures in the head and neck region. It is a very vast department covering various fields like Complete Denture, Removable partial Denture, Fixed Partial Denture, Maxillo-Facial Prosthodontics and Implantology. In addition to these, the subject of Dental Materials is also taught in the department to the BDS students.</p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row mt-lg-5 mb-md-3">
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3" height="600px">
                        <h3 class="tmu-text-primary mb-2"><span>Specialized Equipment and </span><span> Specialized
                                Treatment</span></h3>
                        <p class="mb-2 text-justify">The Department of Prosthodontics is very well equipped with all instruments and machineries to provide complete perfect care to all patients under one roof.
                            Various laboratory procedures are done in respective fields like Dental Plaster lab, Acrylic Lab, Casting lab, Ceramic lab.
                            Most advanced treatments like Implants and Maxillo-facial prosthesis are carried out in the department by highly specialized staff.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Research & </span><span>Academic Activities</span></h3>
                        <p class="mb-2 text-justify">The Department of Prosthodontics has post-graduation(M.D.S) intake of five per each year, which sums up to a total of 15 post graduate students pursuing MDS course at one time.
                            Various in-vitro and in-vivoresearch studies are conducted in the department on various materials, implants, fixed partial dentures etc. Scientific forums are conducted by the department oftenly about innovative studies to enlighten the knowledge of students.
                            Seminars and Journal Clubs are conducted at regular intervals to update the student’s knowledge on research, innovative studies and recent trends.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Scope </span><span></span></h3>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="m-ol-list ps-5 align-middle">
                                    <li>Esthetics& Smile Designing </li>
                                    <li>Complete Denture</li>
                                    <li>Flexible Denture</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="m-ol-list ps-5 align-middle">
                                    <li>Maxillofacial Prosthesis</li>
                                    <li>Cast Partial Denture</li>
                                    <li>Crown & Bridge</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="m-ol-list ps-5 align-middle">
                                    <li>Implants</li>
                                    <li>Full Mouth Rehabilitation</li>
                                    <li>Maxillofacial Prosthesis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="tmu-text-primary tmu-page-heading pt-md-2 mb-md-5"><span>Infrastructure </span></h2>
            <h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
            <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb1.jpg')}}" alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb2.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb3.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb4.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb5.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb6.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb7.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb7.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb8.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb8.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb9.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb9.jpg')}}" alt="Gallery Thumb 5"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pcb/pcb10.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pcb/pcb10.jpg')}}" alt="Gallery Thumb 5"></a>
            </div> -->
            <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb1.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> Department of Prosthodontics & Crown & Bridge </h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb1.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb2.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> PG Section <br/> &nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb2.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb3.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section <br/> &nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb3.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb4.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb4.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb5.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb5.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb6.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb6.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb7.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">UG Section <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb7.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb8.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">UG Section <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb8.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb9.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">Ceramic & Casting Lab <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb9.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pcb/pcb10.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">Ceramic & Casting Lab <br/> &nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pcb/geotag/pcb10.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="tmu-text-primary mt-4"><span>Labs </span><span> Equipments</span></h3>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Sl. No.</th>
                                <th>Name of Equipments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" sdval="1">1</td>
                                <td>Electrical Dental Chairs with shadowless lamp, spittoon, 3 way syringe,
                                    instrument tray and motorized suction,
                                    micromotor and airotor attachment with handpieces.</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Articulators &ndash; semi adjustable/ adjustable with face bow</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Micromotor &ndash; (Lab Type can also be attached (fixed) to wall</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>Ultrasonic scaler</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="5">5</td>
                                <td>Light cures</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="6">6</td>
                                <td>Hot air oven</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="7">7</td>
                                <td>Autoclave (front loading)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="8">8</td>
                                <td>Surveyor</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="9">9</td>
                                <td>Refrigerator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="10">10</td>
                                <td>X-ray viewer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="11">11</td>
                                <td>Pneumatic, Crown bridge remover</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="12">12</td>
                                <td>Needle destroyer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="13">13</td>
                                <td>Intra oral camera</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="14">14</td>
                                <td>Digital SLR camera</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="15">15</td>
                                <td>Computer with internet connection with attached printer and scanner</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="16">16</td>
                                <td>LCD projector</td>
                            </tr>

                            <tr>
                                <td colspan="2" class="text-center"><strong>Chrome &ndash; Cobalt Lab
                                        Equipment</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="1">1</td>
                                <td>Duplicator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Pindex system</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Burn-out furnace</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>Welder</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="5">5</td>
                                <td>Micro and macro Sandblaster</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="6">6</td>
                                <td>Electro &ndash; polisher</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="7">7</td>
                                <td>Model trimmer with carborandum disc</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="8">8</td>
                                <td>Model trimmer with diamond disc</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="9">9</td>
                                <td>Model trimmer with double disc (one Carborandum and one diamond disc)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="10">10</td>
                                <td>Casting machine, motor cast with the safety door closure, gas blow torch with
                                    regulator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="11">11</td>
                                <td>Dewaxing furnace</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Induction casting machine with vacuum pump, capable of casting titanium chrome
                                    cobalt precision metal</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="12">12</td>
                                <td>Spot welder with soldering, attachment of cable</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="13">13</td>
                                <td>Steam cleaner</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="14">14</td>
                                <td>Vacuum mixing machine</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="15">15</td>
                                <td>Spindle grinder 24,000 ROM with vacuum suction</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="16">16</td>
                                <td>Wax heater</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="17">17</td>
                                <td>Wax carvers (Full PKT Set)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="18">18</td>
                                <td>Milling machine</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="19">19</td>
                                <td>Stereo microscope</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="20">20</td>
                                <td>Magnifying work lamp</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="21">21</td>
                                <td>Heavy duty lathe with suction</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="22">22</td>
                                <td>Preheating furnace</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="23">23</td>
                                <td>Dry model trimmer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="24">24</td>
                                <td>Die cutting machine</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="25">25</td>
                                <td>Ultrasonic cleaner</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="26">26</td>
                                <td>Composite curing unit</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Sl. No.</th>
                                <th>Name of Equipments</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center"><strong>Clinical Lab for Prosthetics</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="1">1</td>
                                <td>Plaster dispenser</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Model trimmer with carborandum Disc</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Model trimmer with diamond disc</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>High speed lathe</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="5">5</td>
                                <td>Vibrator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="6">6</td>
                                <td>Acrylizer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="7">7</td>
                                <td>Dewaxing unit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="8">8</td>
                                <td>Hydraulic press</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="9">9</td>
                                <td>Mechanical press</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="10">10</td>
                                <td>Vacuum mixing machine</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="11">11</td>
                                <td>Micro motor lab type</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="12">12</td>
                                <td>Curing pressure pot</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="13">13</td>
                                <td>Pressure molding machine</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center"><strong>Ceramic Lab Equipment</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="1">1</td>
                                <td>Fully programmable porcelain furnace with vacuum pump</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Ceramic kit (instruments)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Ceramic materials (kit)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>Ceramic polishing kit</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Implant Equipment</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="1">1</td>
                                <td>Electrical dental chair and unit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Physio dispenser</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Implant kit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>Implants</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="5">5</td>
                                <td>Prosthetic components</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="6">6</td>
                                <td>Unit mount light cure</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="7">7</td>
                                <td>X-ray viewer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="8">8</td>
                                <td>Needle destroyer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="9">9</td>
                                <td>Ultrasonic cleaner capacity 3.5 lts</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="10">10</td>
                                <td>Autoclave programmable for all recommended cycles</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="11">11</td>
                                <td>X-ray machine with RVG</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="12">12</td>
                                <td>Refrigerator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="13">13</td>
                                <td>Surgical kit/prosthetic kit</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="14">14</td>
                                <td>Educating models</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="15">15</td>
                                <td>Implant removing instruments</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection