@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-timeline.css')}}">

<div class="main-content">
    <div class="container">
        <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>College </span><span> Highlights</span></h1>
                </header>
                <div class="timeline ">
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">2008</div>
                            <p>Founded in 2008, the Medical College offers MBBS, MD/MS, M.Sc. Medical, and PhD programmes, shaping future medical professionals.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Programmes Offered</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">MBBS</b></li>
                                <li><b class="fs-14">MD/MS</b></li>
                                <li><b class="fs-14">M.Sc. (Medical)</b></li>
                                <li><b class="fs-14">Ph.D.(Medical)</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Faculty Strength</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">436</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Books & E-Books</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">Books: </b>13,077</li>
                                <li><b class="fs-14">Ebooks: </b>2015</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft mb-0">
                        <div class="timeline-text">
                            <div class="timeline-date">Journals & E-Journals</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">Journals: </b>97 (National and International)</li>
                                <li><b class="fs-14">E - Journals: </b>1733</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="read-more-content">
                    <div class="timeline mt-0">
                        <div class="timeline-item right wow slideInRight">
                            <div class="timeline-text">
                                <div class="timeline-date">Labs</div>
                                <ul class="m-ol-list ps-3 mb-0">
                                    <li><b class="fs-14">Teaching Lab: </b>12</li>
                                    <li><b class="fs-14">Diagnostic Lab: </b>14</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item left wow slideInLeft">
                            <div class="timeline-text">
                                <div class="timeline-date">In-house Research Journal</div>
                                <ul class="m-ol-list ps-3 mb-0">
                                    <li><b class="fs-14"><a href="{{route('tmu.publication')}}">Acta Medica International</a></b>- An Official Peer-reviewed Journal (ISSN 2349-0578)</li>
                                    <li><b class="fs-14"><a href="http://www.actamedicainternational.com/">Online journal: Acta Medica International</a></b>- An Official Peer-reviewed Journal (ISSN: 2349-0896)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-md-5 read-more d-block mx-auto"
                    style="width:fit-content" title="Read More">Read More</a>
            </div>
        </div>
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn">
                    <h2 class="tmu-text-primary"><span>Hospital </span><span> Highlights</span></h2>
                </header>
                <div class="timeline ">
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">2007</div>
                            <p>Established in 2007, the hospital, with more than 800 beds, caters to the medical needs of a vast area, embodying TMU's commitment to healthcare accessibility.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Departments</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">General Medicine</b></li>
                                <li><b class="fs-14">Psychiatry</b></li>
                                <li><b class="fs-14">Dermatology</b></li>
                                <li><b class="fs-14">Pulmonary Medicine</b></li>
                                <li><b class="fs-14">Paediatrics</b></li>
                                <li><b class="fs-14">General Surgery</b></li>
                                <li><b class="fs-14">Orthopaedics</b></li>
                                <li><b class="fs-14">Otorhinolaryngology (ENT)</b></li>
                                <li><b class="fs-14">Ophthalmology</b></li>
                                <li><b class="fs-14">Obstetrics and Gynaecology</b></li>
                                <li><b class="fs-14">Anaesthesia</b></li>
                                <li><b class="fs-14">Radiodiagnosis</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Beds</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">1095</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Operation Theatres</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">Major</b>: 12</li>
                                <li><b class="fs-14">Minor</b>: 5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft mb-0">
                        <div class="timeline-text">
                            <div class="timeline-date">Super Departments</div>
                            <ul class="m-ol-list ps-3 mb-0">
                                <li><b class="fs-14">Paediatric Surgery</b></li>
                                <li><b class="fs-14">Neuro Surgery</b></li>
                                <li><b class="fs-14">Joint Replacement Surgery</b></li>
                                <li><b class="fs-14">GI Surgery</b></li>
                                <li><b class="fs-14">Reconstructive Surgery</b></li>
                                <li><b class="fs-14">Urology</b></li>
                                <li><b class="fs-14">Plastic Surgery</b></li>
                                <li><b class="fs-14">Cancer Detection</b></li>
                                <li><b class="fs-14">IVF (Obstetrics & Gynaecology)</b></li>
                                <li><b class="fs-14">Burn Unit</b></li>
                                <li><b class="fs-14">Cardiology and Cardiac Surgery including Open-Heart Surgery (with invasive and non-invasive procedures)</b></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="read-more-content">
                    <div class="timeline mt-0">
                        <div class="timeline-item right wow slideInRight">
                            <div class="timeline-text">
                                <div class="timeline-date">Teaching Centre</div>
                                <ul class="m-ol-list ps-3 mb-0">
                                    <li><b class="fs-14">Rural Health Centre: </b>3</li>
                                    <li><b class="fs-14">Urban Health Centre: </b>1</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item left wow slideInLeft">
                            <div class="timeline-text">
                                <div class="timeline-date">Major Equipments</div>
                                <ul class="m-ol-list ps-3 mb-0">
                                    <li><b class="fs-14">Sleep Lab</b></li>
                                    <li><b class="fs-14">MRI</b></li>
                                    <li><b class="fs-14">CT Scan</b></li>
                                    <li><b class="fs-14">Mammography</b></li>
                                    <li><b class="fs-14">Cath Lab</b></li>
                                    <li><b class="fs-14">EEG</b></li>
                                    <li><b class="fs-14">EMG</b></li>
                                    <li><b class="fs-14">NCV</b></li>
                                    <li><b class="fs-14">BERA</b></li>
                                    <li><b class="fs-14">TMT</b></li>
                                    <li><b class="fs-14">Digital X-Ray with IITV</b></li>
                                    <li><b class="fs-14">Colour Doppler</b></li>
                                    <li><b class="fs-14">Bronchoscope</b></li>
                                    <li><b class="fs-14">Endoscope</b></li>
                                    <li><b class="fs-14">Audiometer</b></li>
                                    <li><b class="fs-14">Dialysis</b></li>
                                    <li><b class="fs-14">Image Intensifier</b></li>
                                    <li><b class="fs-14">Laparoscopic Sets</b></li>
                                    <li><b class="fs-14">Holmium Laser</b></li>
                                    <li><b class="fs-14">DSA</b></li>
                                    <li><b class="fs-14">Green Laser</b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item right wow slideInRight">
                            <div class="timeline-text">
                                <div class="timeline-date">Average Daily Stats</div>
                                <ul class="m-ol-list ps-3 mb-0">
                                    <li><b class="fs-14">OPD: </b>More than 2200</li>
                                    <li><b class="fs-14">IPD: </b>More than 150</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item left wow slideInLeft">
                            <div class="timeline-text">
                                <div class="timeline-date">Services</div>
                                <ul class="m-ol-list ps-3 mb-0">
                                    <li><b class="fs-14">Emergency Service:</b> 24 X 7</li>
                                    <li><b class="fs-14">Central Lab:</b> 24 X 7</li>
                                    <li><b class="fs-14">Blood Bank:</b> 24 X 7</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-md-5 read-more d-block mx-auto"
                    style="width:fit-content" title="Read More">Read More</a>
            </div>
        </div>
        <!-- Job Experience End -->
    </div>
</div>
</div>
@endsection