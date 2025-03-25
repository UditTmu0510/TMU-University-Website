@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span> Department of Conservative </span><span>
                            Dentistry & Endodontics </span></h1>
                    <p class="about-p mb-4 text-justify"> <a href="{{ url('/programme/mds-conservation-dentistry-programme') }}">The Department of Conservative Dentistry and Endodontics</a> The Department of Conservative Dentistry and Endodontics at Teerthanker Mahaveer Dental College & Research Centre was established in 2005 and Post Graduation (MDS) was started in the year 2010. It is the largest outpatient department of the college rendering both Conservative and Endodontic treatments to the patients. The Department provides quality education to all undergraduate students, with emphasis on Concept Building and Holistic development of students. The Academic excellence starts from the very first year as the subject of Dental Materials is being taught in the department to the <a href="{{url ('/programme/BDS-course-details')}}">BDS</a> First year students.
                        The students are well groomed in the subject with dummy work for preclinical education before they enter into the clinical work in third year of BDS. Specialized phantom head laboratory is available for BDS Second year students for pre-clinical work. The department has dedicated teaching and non-teaching faculties.</p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('/assets/img/college_departments/dental/cde/cons-endo.jpg')}}" alt="">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4 text-justify">The Department has various facilities to provide quality services to the patients. Specialized dental treatment are being provided which includes amalgam restorations, Glass Ionomer Cement Restorations, Composite Restorations(Tooth Colored Esthetic Restorations), Vital Pulp Therapy, Root Canal Treatment (Single and Multi Visit), Post and Cores (Metal and Fibre), Crowns (Metal, PFM and Zirconia), Endodontic Surgeries & Micro-Endodontics, and the most modern esthetic make-up of the teeth for Smile Designing and Smile Makeovers (Diastema Closure) with procedures like Veneers and Direct Composites. Bleaching (Teeth Whitening) is also done for both Vital and Non Vital teeth. </p>
                    <p class="about-p mb-4 text-justify">For the Post Graduates (MDS) obtaining training in the department the emphasis is given on Microscopic Restorative as well as Surgical Training. Root Canal Treatment is being done by using Electronic Apex Locators, RVG, CBCT, Sonic and Ultrasonic Activators along with Backfill Obturation instruments and techniques. Procedures like Retreatment are also taught to students of MDS. Students are promoted to carry out research activities and present their researches in various national and international conferences.</p>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row mt-lg-5 mb-md-5">

                <h3 class="mb-2 pb-0 fw-bold tmu-text-primary"><span>Key</span><span> Features </span> </h3>
                <ol class="m-ol-list ps-5">
                    <li>A built-up clinical area with separate undergraduate and post graduate clinics.</li>
                    <li>Pre-clinical wing comprising of 50 phantom heads for undergraduate training.</li>
                    <li>Dental operating Microscopes.</li>
                    <li>Department library.</li>
                    <li>State of the art ceramic laboratory.</li>
                    <li>In department Radiology section</li>
                    <li>Seminar room with the LEDs Installed.</li>
                    <li>Presence of the latest equipments like apex locators, endo motors, instrument retrieval kits, endosonic equipments,Thermoplastic Gutta Percha equipments and various other instruments.</li>
                    <li>Fully electronic dental chairs for greater ease and comfort.</li>
                    <li>Left-hand operator chair for left handed students.</li>

                </ol>


            </div>

        </div>

        <div class="container">
            <div class="row mt-lg-5 mb-md-5">
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Specialized Equipment and </span><span> Specialized
                                Treatment</span></h3>
                        <p class="about-p mb-2 text-justify">The Department of conservative dentistry and endodontics is very well equipped with all instruments and machineries to provide complete perfect care to all patients under one roof.</p>
                        <p class="about-p mb-2 text-justify">The department has latest materials to provide quality services to the patients at very nominal prices. Most of the Amalgam restorations, GIC fillings are done by undergraduate students.
                            Composite restorations are specifically done by interns, postgraduates as well as staffs. Advanced stage treatments are done by post-graduates and staffs like root canal treatment, post and core, endodontic surgeries etc.
                            The department is equipped with highly specialized staff to guide undergraduates as well as post-graduates.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Research & </span><span>Academic Activities</span></h3>
                        <p class="about-p mb-2 text-justify">The Department of conservative dentistry and endodontics has post-graduation (M.D.S), having an intake of five each year, which sums up to a total of 15 post graduate students pursuing MDS course at one time.</p>
                        <p class="about-p mb-2 text-justify">Various in-vitro and in-vivo research studies are conducted in the department on various materials like root-end filling materials including MTA, Biodentine etc. Scientific forums are conducted by the department very often about innovative studies to enlighten the students.</p>
                        <p class="about-p mb-2 text-justify">Seminars and Journal Clubs are conducted at regular intervals to update the student’s knowledge on research, innovative studies and recent trends.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="tmu-text-primary tmu-page-heading pt-md-2 mb-md-5"><span>Infrastructure </span></h2>
            <h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
            <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/cde/cde1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/cde/cde1.jpg')}}" alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/cde/cde2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/cde/cde2.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/cde/cde3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/cde/cde3.jpg')}}" alt="Gallery Thumb 3"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/cde/cde4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/cde/cde4.jpg')}}" alt="Gallery Thumb 5"></a>
            </div> -->
            <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/cde/cde1.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">Department of Conservative Dentistry & Endodontics</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/cde/geotag/cde1.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/cde/cde2.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">UG Section</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/cde/geotag/cde2.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/cde/cde3.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/cde/geotag/cde3.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/cde/cde4.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">Preclinical Lab</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/cde/geotag/cde4.jpg')}}" download>
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
                                <td class="text-center">Electrically operated Dental Chairs with shadowless lamp, spittoon, 3 way syringe, instrument tray and motorized
                                    suction, micromotor, airotor attachment with hand pieces</td>
                            </tr>

                            <tr>
                                <td class="text-center">1</td>
                                <td>Electrically operated Dental Chairs with shadowless lamp, spittoon, 3 way syringe, instrument tray and motorized suction, micromotor, airrotor attachment with hand pieces</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>ENDOSONIC HANDPIECES - Micro endosonic Tips, retro treatment</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Mechanised rotary instruments including hand pieces (speed and torque control) and hand instruments various systems</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Rubber dam kit</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Autoclaves for bulk instrument sterilization vacuum (Front loading)</td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Autoclaves for hand piece sterilization</td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Apex locators one for every two chairs</td>
                            </tr>
                            <tr>
                                <td class="text-center">8</td>
                                <td>Pulp tester</td>
                            </tr>
                            <tr>
                                <td class="text-center">9</td>
                                <td>Equipments for injectable thermoplasticized gutta percha</td>
                            </tr>
                            <tr>
                                <td class="text-center">10</td>
                                <td>Operating microscopes 3 step or 5 step magnification</td>
                            </tr>
                            <tr>
                                <td class="text-center">11</td>
                                <td>Surgical endo kits (Microsurgery)</td>
                            </tr>
                            <tr>
                                <td class="text-center">12</td>
                                <td>Set of hand instruments (specifications required)</td>
                            </tr>
                            <tr>
                                <td class="text-center">13</td>
                                <td>Sterilizer trays for autoclave</td>
                            </tr>
                            <tr>
                                <td class="text-center">14</td>
                                <td>Ultrasonic cleaner capacity 3.5 lts</td>
                            </tr>
                            <tr>
                                <td class="text-center">15</td>
                                <td>Variable Intensity polymerization equipments - VLC units</td>
                            </tr>
                            <tr>
                                <td class="text-center">16</td>
                                <td>Conventional VLC units one for every two chairs</td>
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
                                <td class="text-center">17</td>
                                <td>Needle destroyer</td>
                            </tr>

                            <tr>
                                <td class="text-center">18</td>
                                <td>Magnifying loupes one for students and one for faculty</td>
                            </tr>
                            <tr>
                                <td class="text-center">19</td>
                                <td>LCD projector</td>
                            </tr>
                            <tr>
                                <td class="text-center">20</td>
                                <td>Composite kits with different shades and polishing kits</td>
                            </tr>
                            <tr>
                                <td class="text-center">21</td>
                                <td>Ceramic finishing kits, metal finishing kits</td>
                            </tr>
                            <tr>
                                <td class="text-center">22</td>
                                <td>Amalgam finishing kits</td>
                            </tr>
                            <tr>
                                <td class="text-center">23</td>
                                <td>RVG with x-ray machine developing kit</td>
                            </tr>
                            <tr>
                                <td class="text-center">24</td>
                                <td>Chair side micro abrasion</td>
                            </tr>
                            <tr>
                                <td class="text-center">25</td>
                                <td>Bleaching unit</td>
                            </tr>
                            <tr>
                                <td class="text-center">26</td>
                                <td>Instrument retrieval kits</td>
                            </tr>
                            <tr>
                                <td class="text-center">27</td>
                                <td>Computer with internet connection with attached printer and scanner</td>
                            </tr>
                            <tr>
                                <td class="text-center">28</td>
                                <td>Refrigerator</td>
                            </tr>
                            <tr>
                                <td class="text-center">29</td>
                                <td>Equipments for casting procedures</td>
                            </tr>
                            <tr>
                                <td class="text-center">30</td>
                                <td>Equipments for ceramics including induction casting machines/ burnout preheat furnaces/ wax elimination furnaces</td>
                            </tr>
                            <tr>
                                <td class="text-center">31</td>
                                <td>Lab micro motor/ metal grinders / sand blasters/ polishing lathes/ duplicator equipment/ vacuum investment equipments</td>
                            </tr>
                            <tr>
                                <td class="text-center">32</td>
                                <td>Laser (preferably hard tissue)</td>
                            </tr>
                            <tr>
                                <td class="text-center">33</td>
                                <td>Face bow with semi adjustable articulator</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection