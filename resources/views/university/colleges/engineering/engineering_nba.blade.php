@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row mx-0">
                <h1 class="tmu-text-primary tmu-page-heading"><span>NBA</span></h1>

                <div class="container my-2 py-2">
                    <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1"
                                type="button" role="tab" aria-controls="Tab1" aria-selected="true">Institution Level
                                (Click Here)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2"
                                type="button" role="tab" aria-controls="Tab2" aria-selected="false"> Computer
                                Science & Engineering (Click here)</button>
                        </li>
                    </ul>
                    <div class="tab-content second ps-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="ps-4 fw-bold" style="list-style-type:decimal">
                                        <li>Accreditation Status</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            <li>NAAC & NBA</li>
                                            <a href="{{ asset('assets/pdf/coe/nba/accreditation_status_compressed.pdf') }}"
                                                target="_blank">View
                                                More!</a>
                                        </ol>
                                        <li>Video Tour of central facilities</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            <li>Institute Level Video Tour <br> Link:- <a
                                                    href="https://youtu.be/vXqgeWroXHU" target="_blank">View More!</a></li>
                                        </ol>
                                        <li>Institutional Presentation (PPT)</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            <li>Institute Presentation Link- <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/ppt/institute_level.pptx') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                        </ol>
                                        <li>Lab Manuals</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            
                                            <li>Basic Electronics Engineering Lab <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/lab_mannuals/basic_electronics_engineering_lab_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Engineering Physics Lab <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/lab_mannuals/engineering_physics_lab_mannual_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Engineering Chemistry Lab <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/lab_mannuals/lab_mannual_engineering_chemistry_lab_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Workshop Practice Lab <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/lab_mannuals/workshop_practice_lab_mannual_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                        </ol>
                                        <li>Academic Council Minutes</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            <li>April 2021 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/academic_council_minutes/april_2021_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>July 2020 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/academic_council_minutes/july_2020_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>September 2019 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/academic_council_minutes/september_2019_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>May 2019 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/academic_council_minutes/may_2019_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>December 2018 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/academic_council_minutes/december_2018_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>March 2018 <br>Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/academic_council_minutes/march_2018_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                        </ol>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ps-4 fw-bold" style="list-style-type:decimal">
                                        <li>Course Files</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            <li>EME162 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/course_files/EME162_course_file_with_attainments_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>EEE217 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/course_files/EEE217_course_file_with_attainments_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>EAS112 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/course_files/EAS112_course_file_with_attainments_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>EAS263 <br> Link:-<a
                                                    href="{{ asset('assets/pdf/coe/nba/course_files/EAS263_course_file_with_attainments_compressed.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                        </ol>
                                        <li>First Year Faculty List</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">

                                            <li>2018-19 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/First_Year_Faculty_List_2018-19.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>2019-20 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/First_Year_Faculty_List_2019-20.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>2020-21 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/First_Year_Faculty_List_2020-21.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>2021-22 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/First_Year_Faculty_List_2021-22.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>2022-23 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/faculty_list/First_Year_Faculty_List_2022-23.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>2023-24 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/faculty_list/First_Year_Faculty_List_2023-24.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>2024-25 <br> Link:- <a
                                                    href="{{ asset('assets/pdf/coe/nba/faculty_list/First_Year_Faculty_List_2024-25.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>

                                        </ol>
                                        <li>Complete Faculty List</li>
                                        <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                            <li><a href="{{ asset('assets/pdf/coe/faculty_details_finalized.pdf') }}"
                                                    target="_blank">Faculty List Link</a></li>
                                        </ol>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="row">
                                <div class="col-md-6">

                                    <ul class="ps-4 fw-bold" style="list-style-type:decimal;">
                                        <li>Accreditation Status
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal fs-14 fw-normal">
                                                <li>NAAC & NBA<br> Link: <a
                                                        href="{{ asset('assets/pdf/coe/nba/accreditation_status_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>


                                        <li>Virtual Tour
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Virtual Tour of the Faculty of Engineering<br />Link-<a
                                                        href="https://www.youtube.com/watch?v=nApimTU5UZU"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>Departmental Presentation (PPT)
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>CSE Presentation Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/ppt/department_ppt_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>SAR
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>NBA SAR Faculty of Engineering<br />Link-<a
                                                        href="{{ asset('/assets/pdf/coe/nba/SAR.pdf') }}"
                                                        target="_blank">View More!</a></li>
                                            </ol>
                                        </li>


                                        <li>Faculty List</b>
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Faculty List 2024-25<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/faculty_list/CS_Faculty_List_2024-25.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Faculty List 2023-24<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/faculty_list/CSE_Faculty_List_2023-24.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Faculty List 2022-23<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/faculty_list/CSE_Faculty_List_2022-23.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Faculty List 2021-22<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/Departmental-Faculty-2021-22.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Faculty List 2020-21<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/Departmental-Faculty-2020-21.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Faculty List 2019-20<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/Departmental-Faculty-2019-20.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Faculty List 2018-19<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/Departmental-Faculty-2018-19.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>Vision,Mission,PSO,PEO & PO
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Link-<a
                                                        href="{{ asset('/assets/pdf/coe/nba/vission_mission_peo_po_pso_of_FOE.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>Syllabus
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Syllabus of different programmes of the Faculty of
                                                    Engineering<br />Link-<a href="{{ route('engineering.syllabus') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>Placement data for the following academic years
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>2017-18,2018-19,2019-20,2020-21<br /></li>
                                            </ol>
                                        </li>



                                        <li>Academic Audit Reports
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>January-June 2016-17<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_even_sem_Jan_Jun_2016_17.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>July-December 2016-17<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_odd_sem_jul_dec_2016_17.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>January-June 2017-18<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_even_sem_jan_jun_2017_18.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>July-December 2017-18<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_odd_sem_jul_dec_2017_18.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>January-June 2018-19<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_even_sem_jan_jun_2018_19.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>July-December 2018-19<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_odd_sem_jul_dec_2018_19.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>January-June 2020<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_even_sem_jan_jun_2020.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>January-June 2021<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/academic_audit_even_sem_jan_jun_2021.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>List of Research Papers
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>2018-19,2019-20 & 2020-21<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/list_of_research_papers_2018_19_2019_20_and_2020_21.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>Project Reports
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li> B.Tech. CSE Program (fuss Music) 2018-19<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/project_reports/project_report_2018_19_fuss_music_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. CSE Program (E-Commerce Web App) 2019-20<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/project_reports/project_report_2019_20_e_commerce_web_app_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. CSE Program (Online Tour Guide Portal) 2020-21<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/project_reports/project_report_2020_21_travello_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>Sponsored Research Projects & Consultancy Approval Letters
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Sponsored Research Projects & Consultancy Approval Letters<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/sponsored_research_projects_and_consultancy_approvals_letters_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ps-4 fw-bold" style="list-style-type:decimal">

                                        <li>Lab Manuals
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Artificial Intelligence Lab (ECS-651) VI Semester <br> Link:-<a
                                                    href="{{ asset('/assets/pdf/coe/nba/lab_mannuals/ECS_651_Artificial_Intelligence.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Java Programming Lab (ECS-456) IV Semester <br> Link:-<a
                                                    href="{{ asset('/assets/pdf/coe/nba/lab_mannuals/ECS_456_Java_Programming.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Database Management System Lab (ECS-356) III Semester <br> Link:-<a
                                                    href="{{ asset('/assets/pdf/coe/nba/lab_mannuals/ECS_356_DBMS_Lab.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Data Structure Lab (ECS355) III Semester <br> Link:-<a
                                                    href="{{ asset('/assets/pdf/coe/nba/lab_mannuals/ECS_355_Data_Structure_Using.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                            <li>Computer Basic & C Programming Lab (ECS-251) II Semester <br> Link:-<a
                                                    href="{{ asset('/assets/pdf/coe/nba/lab_mannuals/ECS_251_C_Programming.pdf') }}"
                                                    target="_blank">View
                                                    More!</a></li>
                                                <li>Basic Electronics Engineering Lab<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/lab_mannuals/basic_electronics_engineering_lab_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Btech Computer Science & Engineering (II<sup>nd</sup>&nbsp;,
                                                    III<sup>rd</sup> and IV <sup> th</sup> year.)<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/lab_mannuals/btech_cse_2_3_4_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Engineering Physics Lab<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/lab_mannuals/engineering_physics_lab_mannual_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Engineering Chemistry Lab<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/lab_mannuals/lab_mannual_engineering_chemistry_lab_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Workshop Practice Lab<br /><a
                                                        href="{{ asset('assets/pdf/coe/nba/lab_mannuals/workshop_practice_lab_mannual_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>Results with Backlog
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>2015-19<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/results/with_back/2015_19_result_with_backlog.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>2016-20<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/results/with_back/2016_20_result_with_backlog.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>2017-21<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/results/with_back/2017_21_result_with_backlog.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>Results without Backlog
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>2015-19<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/results/without_back/2015_19_result_without_backlog.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>2016-20<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/results/without_back/2016_20_result_without_backlog.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>2017-21<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/results/without_back/2017_21_result_without_backlog.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>


                                        <li>Time Tables
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>B.Tech. Computer Science & Engineering (2024-25)<br />Odd Semester
                                                    Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/ODD_SEM_(SESSION_2024_25).pdf') }}"
                                                        target="_blank">View More!</a><br />
                                                    Even Semester Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/EVEN_SEM_(SESSION_2024_25).pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. Computer Science & Engineering (2023-24)<br />Odd Semester
                                                    Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/ODD_SEM_(SESSION_2023_24).pdf') }}"
                                                        target="_blank">View More!</a><br />
                                                    Even Semester Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/EVEN_SEM_(SESSION_2023_24).pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. Computer Science & Engineering (2022-23)<br />Odd Semester
                                                    Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/ODD_SEM_(SESSION_2022_23).pdf') }}"
                                                        target="_blank">View More!</a><br />
                                                    Even Semester Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/EVEN_SEM_(SESSION_2022_23).pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. Computer Science & Engineering (2021-22)<br />Odd Semester
                                                    Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/btech_cse_odd_sem_2021-22_compressed.pdf') }}"
                                                        target="_blank">View More!</a><br />
                                                    Even Semester Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/btech_cse_even_sem_2021-22_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. Computer Science & Engineering (2020-21)<br />Odd Semester
                                                    Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/btech_cse_odd_sem_2020_21_compressed.pdf') }}"
                                                        target="_blank">View More!</a><br />
                                                    Even Semester Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/btech_cse_even_sem_2020_21_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. Computer Science & Engineering (2019-20)<br />Odd Semester
                                                    Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/btech_cse_odd_sem_2019-20_compressed.pdf') }}"
                                                        target="_blank">View More!</a><br />
                                                    Even Semester Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/btech_cse_even_sem_2019-20_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>B.Tech. Computer Science & Engineering (2018-19)<br />Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/time_tables/academic_year_2018_19_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>Course Files
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>ECS 355<br />Link- <a
                                                        href="{{ asset('assets/pdf/coe/nba/course_files/ECS355_course_file_with_attainments_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>ECS601<br />Link- <a
                                                        href="{{ asset('assets/pdf/coe/nba/course_files/ECS601_course_file_with_attainments_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>ECS703<br />Link- <a
                                                        href="{{ asset('assets/pdf/coe/nba/course_files/ECS703_course_file_with_attainments_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>ECS704<br />Link- <a
                                                        href="{{ asset('assets/pdf/coe/nba/course_files/ECS704_course_file_with_attainments_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>ECS851<br />Link- <a
                                                        href="{{ asset('assets/pdf/coe/nba/course_files/ECS851_course_file_with_attainments_compressed.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>

                                        <li>
                                            Google Scholar Link & Email Id of Faculty Members of The Computer Science
                                            & Engineering Department
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/google_scholar_link_of_faculty_memebrs.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            List of Patents by faculty members of The B.Tech. CSE Program in Academic
                                            Year 2018-19,2019-20 & 2020-21
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Link-<a
                                                        href="{{ asset('assets/pdf/coe/nba/list_of_patents_of_2019_2020_2021.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            Annexures
                                            <ol class="m-ol-list ps-4 mb-3 fs-14 fw-normal">
                                                <li>Annexure-I (NBA SAR)<a
                                                        href="{{ asset('assets/pdf/coe/nba/annexure-I.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                                <li>Annexure-II (Pre-qualifier)<a
                                                        href="{{ asset('assets/pdf/coe/nba/annexure-II.pdf') }}"
                                                        target="_blank">View More!</a>
                                                </li>
                                            </ol>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container ends -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
