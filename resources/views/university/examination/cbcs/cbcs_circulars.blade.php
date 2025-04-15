@extends('layouts.university.departments.cbcs_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <!-- Write content for right side here  -->
        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> TMU CBCS Circulars:  </span><span> Curriculum Updates</span></h1>

            <div class="container">

                <div class="table-responsive">
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15-Apr-2025</td>
                                <td>Circular regarding Suspension of Classes between 12-15 Mar, 2025</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2025/march/Circular_094.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>11-Mar-2025</td>
                                <td>Circular regarding Suspension of Classes between 12-15 Mar, 2025</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2025/march/Circular_094.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>07-Mar-2025</td>
                                <td>Circular regarding Change of Name from Faculty of Engineering to Teerthanker Mahaveer University College of Engineering.</td>
                                <td class="text-center"><a href="{{asset('/assets/pdf/announcement/2025/march/Circular_097.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>28-Feb-2025</td>
                                <td>Circular regarding NPTEL local Chapter & Swayam Registration</td>
                                <td class="text-center"><a href="{{asset('/assets/pdf/announcement/2025/feb/Circular_091.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>22-Feb-2025</td>
                                <td>Circular regarding Re-constitution of Admission Committee </td>
                                <td class="text-center"><a href="{{asset('/assets/pdf/announcement/2025/feb/Circular_051_R.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>20-Feb-2025</td>
                                <td>Mandatory use of Helmets and Seat Belts within the University Premises</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2025/feb/Circular_090.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>18-Feb-2025</td>
                                <td>Circular regarding Re-constitution of ERP Committee.</td>
                                <td class="text-center"><a href="{{asset('/assets/pdf/announcement/2025/feb/TMU_ERP_Committee.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>11-Feb-2025</td>
                                <td>Circular regarding Re-constitution of Standing Committee.</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2025/feb/TMU_Standing_Committee.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>01-Feb-2025</td>
                                <td>Conduction of Internal Audit of Colleges/ Offices/Cells/ Centres/ Infrastructural Facilities from February 22-28, 2025</td>
                                <td class="text-center"><a href="{{asset('/assets/pdf/announcement/2025/feb/Circular_080_R4.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>29-Jan-2025</td>
                                <td>Regarding the last date of tuition fee submission for Even Semester Session 2024-25 (Except Medical & Dental).</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2025/jan/Circular_089.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>25-Jan-2025</td>
                                <td>Subject-Participation of Students in Mahakumbh-2025 "Vayam Program", Prayagraj.</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2025/jan/Circular-087.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>

                            <tr>
                                <td>20-Nov-2024</td>
                                <td>Circular regarding Use of Official Email and Contact number for Communication</td>
                                <td class="text-center"><a href="{{asset('assets/pdf/announcement/2024/Circular_073.pdf')}}" target="_blank"><i class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>02-Mar-2023</td>
                                <td>Committee for the recommending the strategy for increasing the enrolment
                                    of Research Fellows</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_042.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>

                            </tr>
                            <tr>
                                <td>02-Mar-2023</td>
                                <td>Change in Evaluation Scheme of Aptitude courses from Session 2022-23
                                </td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_039.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>02-Mar-2023</td>
                                <td>Antibiotic Policy in TMMCRC</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_037.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>02-Aug-2023</td>
                                <td>Anti Ragging Committee (Reconstituted) 2023-24</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Anti_Ragging_Committee_(Reconstituted)_2023-24_(1).pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>02-Aug-2023</td>
                                <td>Proctorial Board Committee (Reconstituted) 2023-24</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Proctorial_Board_Committee_(Reconstituted)_2023-24_(1).pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>03-Dec-2022</td>
                                <td>Constitution of the Executive Council</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Notifications_EC_028.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>

                            <tr>
                                <td>11-Oct-2022</td>
                                <td>fee submission for the Ist year students of various programmes of the
                                    University</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_031.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>07-Oct-2022</td>
                                <td>Punch corrections of the employees of the University, on ERP, the
                                    University has decided the following</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_027.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>07-Oct-2022</td>
                                <td>students’ attendance shall be marked by the concerned faculty in real
                                    time on ERP</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_028.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>06-Oct-2022</td>
                                <td>class-IV or housekeeping staff of the University is being used by the
                                    concerned Officers/Faculty me</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_029.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>06-Oct-2022</td>
                                <td>It is, hereby, being informed that post submission of teaching workload,
                                    faculty load mapping</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_025.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>06-Oct-2022</td>
                                <td>upcoming Bareilly-Moradabad Graduate Constituency Elections 2022</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_026.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>04-Oct-2022</td>
                                <td>TMU Regulations on Financial Assistance to faculty for promotion of
                                    research</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_024.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>14-Sep-2022</td>
                                <td>20th meeting of Academic Council scheduled on 08 October 2022</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_021.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>10-Sep-2022</td>
                                <td>In view of promotion of research and facilitation of the PhD scholars
                                </td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O_-2022-23_019.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>10-Sep-2022</td>
                                <td>Laptop scheme introduced by the University</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_018.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>10-Sep-2022</td>
                                <td>In view of the upcoming Bareilly-Moradabad Graduate Constituency
                                    Elections 2022</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O_-2022-23_017.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>09-Sep-2022</td>
                                <td>Students with visual impairment including blindness, who wish to pursue
                                    Ph.D. programme</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_016.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
                            </tr>
                            <tr>
                                <td>05-Sep-2022</td>
                                <td>Change in the syllabus of English course</td>
                                <td class="text-center"><a
                                        href="{{asset('assets/pdf/announcement/Circulars_R_O__2022-23_0151.pdf')}}"><i
                                            class="fa-solid fa-file-pdf"></i></a></td>
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