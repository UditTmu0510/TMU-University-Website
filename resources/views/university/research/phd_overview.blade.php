@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('/assets/css/college_overview.css')}}">



<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded d-flex align-items-center justify-content-center" style="height: 16vh; background-color: #001055;">
            <h2 class="text-white m-0" style="text-transform:none;">Ph.D. OVERVIEW</h2>
        </div>

        <section class="about-section mt-4">
            <div class="container">
                <div class="text-content p-3">
                    <h1 class="tmu-text-primary tmu-page-heading" style="text-transform:none;"><span>WELCOME TO TMU </span><span> Ph.D. PROGRAMMES</span></h1>
                    <p class="about-p mb-2 text-justify">Teerthanker Mahaveer University has been established with a mission to pursue excellence in every sphere in the field of education, and to adhere to the highest standards of academic rigour in all its work. The University is fast moving towards attaining leadership position in North India, which speaks volumes about its enduring commitment, outstanding faculty and rich learning environment.</p>
                    <p class="about-p mb-1 text-justify">Teerthanker Mahaveer University’s Ph.D. programme has been designed to impart knowledge through courses, seminars, projects and thesis work. It will help the scholars to consolidate the concepts and intellectual skills, as well as to explore the potential in analyzing the knowledge related to their respective areas of research in a free and objective manner, in order to meet the needs of the society.</p>
                </div>
                <div class="container p-3 pt-0">
                    <p class="about-p mb-2 text-justify">We encourage interaction within and across the subject areas, providing a rich environment for innovative, collaborative and multi-disciplinary research. The Ph.D. programme is designed to produce a new generation of scholar-teacher-practitioners who precisely fit that description. We offer an intellectually demanding doctoral programme for high-potential applicants: men and women who already have a breadth of knowledge in the functional areas of business and who have a strong interest in academic research. If you’re prepared to embark on a challenging, focused, and meaningful experience, we invite you to explore the possibilities in our Ph.D. programme.</p>
                    <p class="about-p mb-2 text-justify">For the current academic year, we are offering the following Doctoral programmes:</p>
                </div>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/cs_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Computer Applications</span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/cs_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/cs_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/cs_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/management_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span>Management</span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/management_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/management_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/management_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/education_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Education </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/education_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/education_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/education_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/dentistry_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Dental Sciences</span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/ds_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/ds_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="#"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/allied_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Medical Sciences</span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/TRAT_Scheme_of_Examination%20_Medical%20Sciences.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/TRAT_Syllabus_Medical_Sciences.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/TRAT_Sample_Paper_Medical_Sciences.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/pharmacy_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Pharmacy </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/pharmacy_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/pharmacy_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/pharmacy_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/engineering_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Engineering </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/engineering_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/engineering_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/engineering_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/nursing_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Nursing </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/nursing_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/nursing_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/nursing_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/law_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span>Law & Legal Studies </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/law_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/law_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/law_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/physical_education_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Physical Education </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/pe_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/pe_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/pe_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/fineart_research.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Fine Arts </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="#"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/fineart_trat_syllabus.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="#"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="	{{asset('/assets/img/banner_overview/phd/jain-ahimsa.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Jain Studies </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/js_trat_scheme.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/TRAT_jainology_syllabus_july_2023.pdf')}}"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="{{asset('/assets/pdf/research/js_trat_model_question.pdf')}}"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/physiotherapy.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Physiotherapy Department </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/Scheme_of_Examination.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="https://drive.google.com/drive/folders/1KHxN_7dBYXXRQE4JM8VvBe15cjtPAt8p?usp=share_link"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="https://drive.google.com/drive/folders/1KHxN_7dBYXXRQE4JM8VvBe15cjtPAt8p?usp=share_link"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <div class="section-box p-3">
                        <img src="{{asset('/assets/img/banner_overview/phd/pmc.jpg')}}" class="img-fluid rounded" alt="...">
                        <div class="course-content">
                            <h3 class="tmu-text-primary mt-3 mb-0"><span> Paramedical Sciences </span></h3>
                            <ul class="m-ol-list ps-5 mt-0">
                                <li><a href="{{asset('/assets/pdf/research/Scheme_of_Examination_Paramedical_Sciences.pdf')}}"><span class="highlight">Examination Scheme of TRAT</span></a></li>
                                <li><a href="https://drive.google.com/drive/folders/17BfjsYj28yPqHlnlGRekw84gkGnHen-H?usp=sharing"><span class="highlight">Syllabus of TRAT</span></a></li>
                                <li><a href="#"><span class="highlight">Sample/Model Question Paper</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection