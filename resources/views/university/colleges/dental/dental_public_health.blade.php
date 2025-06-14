@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/college_overview.css')}}">


<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span> Department of Public </span><span>
                            health Dentistry </span></h1>
                    <p class="about-p mb-4"> <a href="{{ url('/programme/MDS-Public-Health-Dentistry') }}">Public health dentistry</a>  is an area of dentistry concerned with the evaluation of dental health needs and how the practice of dental healthcare meets those needs. Department of Public Health Dentistry is that part of dentistry providing leadership and expertise in population-based dentistry, oral health surveillance, policy development, community-based disease prevention and health promotion, and the maintenance of the dental safety net.
                    </p>
                </div>
                <div class="image-content text-center p-3">
                    <img src="{{asset('/assets/img/college_departments/dental/phd/publichealt.jpg')}}" alt="" style="height:auto;" >
                </div>
                <div class="container p-3">
                    <p class="about-p mb-2">Our department provides accessible and affordable oral health care to people. It is committed to train and calibrate the undergraduate as well as postgraduate students in Public Health Dentistry by providing dental health education, screening and treatment camps on oral diseases for the outreach population tailored specifically on the basis of research on needs of the community.</p>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row mt-lg-5 mb-md-3">
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3">
                        <h3 class="tmu-text-primary mb-2"><span>Vision & </span><span> Mission </span></h3>
                        <ul class="m-ol-list ps-5">
                            <li>To promote oral health and provide resources towards the same.</li>
                            <li>To be a trusted resource for oral health information in the community.</li>
                            <li>To conduct research and identify effective strategies for improvement of oral health.</li>
                            <li>To influence public policy and legislation in a positive manner.</li>
                            <li>To practice and promote evidence- based dentistry.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Dental </span><span> Camps</span></h3>
                        <p class="mb-2">These community based dental public health programmes are not only constricted to the boundaries of our department but also provides a first-hand exposure to the students on the rural as well as urban settings of the country and methods to treat them via motivation and proving dental services at their doorsteps through a well-equipped mobile dental van. Dental camps are regular activities of the department.
                            The whole idea is to make health care available, accessible, appropriate and acceptable. Students are exposed to different kinds of learning environment which makes learning more experiential, interesting and challenging to the students.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Satelite </span><span> Centre</span></h3>
                        <p class="mb-2">The department maintains rural satellite centres located at Amroha and Haryana to cover the wider area of population for the purpose of awareness, preventive measures as well as for treatment. These centres provide a complete spectrum of treatment from diagnosis to complete rehabilitation with speciality treatment provided free of cost.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Departmental </span><span> Programmes</span></h3>
                        <p class="mb-2">The Department also conducts street plays, health talks to address problems like personal hygiene, water conservation air pollution etc.</p>
                        <p class="mb-2">Apart from regular lectures, practical and clinical teaching session, the department also conducts CDE programmes, seminars and general discussions, case based learning session, problem and project based learning sessions.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Core </span><span> Competencies</span></h3>
                        <p class="mb-2">The department maintains rural satellite centres located at Amroha and Haryana to cover the wider area of population for the purpose of awareness, preventive measures as well as for treatment. These centres provide a complete spectrum of treatment from diagnosis to complete rehabilitation with speciality treatment provided free of cost.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Faculty </span><span> </span></h3>
                        <p class="mb-2">Faculty members in the department are highly educated and have many achievements to their credit. They participate in the various seminars, continuing dental education programs, national and international conference to keep their skills and knowledge updated.</p>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="section-box p-3 ">
                        <h3 class="tmu-text-primary mb-2"><span>Teaching & </span><span> Learning</span></h3>
                        <p class="mb-2">These community based dental public health programmes are not only constricted to the boundaries of our department but also provides a first-hand exposure to the students on the rural as well as urban settings of the country and methods to treat them via motivation and proving dental services at their doorsteps through a well-equipped mobile dental van. Dental camps are regular activities of the department.
                            The whole idea is to make health care available, accessible, appropriate and acceptable. Students are exposed to different kinds of learning environment which makes learning more experiential, interesting and challenging to the students.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="tmu-text-primary tmu-page-heading pt-md-2 mb-md-5"><span>Infrastructure </span></h2>
            <h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
            <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/phd/phd1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/phd/phd1.jpg')}}" alt="Gallery Thumb 1"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/phd/phd2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/phd/phd2.jpg')}}" alt="Gallery Thumb 2"></a>
                <a class="grid-item" href="{{asset('/assets/img/college_departments/dental/phd/phd3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/phd/phd3.jpg')}}" alt="Gallery Thumb 3"></a>
            </div> -->
            <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/phd/phd1.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> Department of Public Health Dentistry </h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/phd/geotag/phd1.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/phd/phd2.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> PG Section<br/>&nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/phd/geotag/phd2.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/phd/phd3.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">UG Section <br/>&nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/phd/geotag/phd3.jpg')}}" download>
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
                                <td>Dental Chairs and Units</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="2">2</td>
                                <td>Autoclaves</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="3">3</td>
                                <td>Ultrasonic Cleaner</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="4">4</td>
                                <td>Needle Burner with Syringe Cutter</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="5">5</td>
                                <td>MOBILE CLINIC</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="6">6</td>
                                <td>Mobile dental van</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="7">7</td>
                                <td>Autoclave</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="8">8</td>
                                <td>Intraoral X-Ray</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="9">9</td>
                                <td>Glass bead sterilizers</td>
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
                                <td class="text-center" sdval="10">10</td>
                                <td>Compressor</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="11">11</td>
                                <td>Metal Cabinet</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="12">12</td>
                                <td>Portable Dental Chair</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="13">13</td>
                                <td>Stabilizer</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="14">14</td>
                                <td>Generator</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="16">15</td>
                                <td>Oxygen Cylinder</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="17">16</td>
                                <td>Public Address System</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="18">17</td>
                                <td>TV and Video Cassette player (pendrive)</td>
                            </tr>
                            <tr>
                                <td class="text-center" sdval="19">18</td>
                                <td>Demonstration models (minimum)</td>
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