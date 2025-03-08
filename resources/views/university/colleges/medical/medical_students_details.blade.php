@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Student</span><span> Details</span></h1>
            <h3 class="tmu-text-primary text-center mt-3 pt-md-5"><span>Details of Students Admitted</span><span> in UG Programme</span></h3>

            <div class="container my-2 py-2">
                <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
                            role="tab" aria-controls="Tab1" aria-selected="true"> 2024-25</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                            role="tab" aria-controls="Tab2" aria-selected="false"> 2023-24</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
                            role="tab" aria-controls="Tab3" aria-selected="false">2022-23</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                            role="tab" aria-controls="Tab4" aria-selected="false"> 2021-22</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#Tab5" type="button"
                            role="tab" aria-controls="Tab5" aria-selected="false"> 2020-21</button>
                    </li>
                </ul>
                <div class="tab-content second ps-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/ug/MBBS_students_Batch_2024_25.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2024-25</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_students_Batch_2024_25.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/ug/UG_MBBS_2023_24_batch.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2023-24</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/ug/UG_MBBS_2023_24_batch.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/ug/MBBS_2022_23.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2022-23</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2022_23.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/ug/MBBS_2021_22.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2021-22</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2021_22.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/ug/MBBS_2020_21.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2020-21</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/ug/MBBS_2020_21.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="tmu-text-primary text-center mt-3 pt-md-5"><span>Details of Students Admitted</span><span> in PG Programme</span></h3>
            <div class="container my-2 py-2">
                <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                   
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#Tab6" type="button"
                            role="tab" aria-controls="Tab6" aria-selected="false">2023-24</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#Tab7" type="button"
                            role="tab" aria-controls="Tab7" aria-selected="false">2022-23</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#Tab8" type="button"
                            role="tab" aria-controls="Tab8" aria-selected="false">2021-22</button>
                    </li>
                </ul>
                <div class="tab-content second ps-3" id="myTabContent">

                    <div class="tab-pane fade show active" id="Tab6" role="tabpanel" aria-labelledby="tab6-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/pg/8_MD_MS_Batch_2023-24.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2023-24</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/pg/8_MD_MS_Batch_2023-24.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Tab7" role="tabpanel" aria-labelledby="tab7-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/pg/7_MD_MS_Batch_2022-23.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2022-23</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/pg/7_MD_MS_Batch_2022-23.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="tab-pane fade" id="Tab8" role="tabpanel" aria-labelledby="tab8-tab">
                        <!-- Desktop/Tablets -->
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('/assets/pdf/medical/pg/6_MD_MS_Batch_2021-22.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>

                        <!-- Mobile View as Card -->
                        <div class="container d-block d-sm-none mb-3">
                            <div class="iqac-container">
                                <div class="iqac-card">
                                    <div class="card-pdf">
                                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                                        <p class="description">2021-22</p>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                                            href="{{asset('/assets/pdf/medical/pg/6_MD_MS_Batch_2021-22.pdf')}}" download>Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- container ends -->
        </div>
    </div>
</div>
</div>

@endsection