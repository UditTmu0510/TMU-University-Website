@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Pharamacology </span></h1>
                    <p class="about-p mb-2">TMMC&RC's Department of Pharmacology is firmly devoted to providing our excellent teaching, research, and service program. We are committed to developing leadership, innovation, and scholarly excellence.</p>
                    <div class="image-content text-center p-2">
                        <img src="{{asset('/assets/img/college_departments/medical/pharmacology/11.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The translation of fundamental knowledge in the basic sciences to medically relevant problems is the major goal of the department. We can provide the individualized attention and training necessary for the development of the medical scientist of the future.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.pathology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row mb-3">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-8 p-3">
                            <div class="card-body">
                                <h3 class="tmu-text-primary mt-2 mb-0 "><span>Learning </span><span> Objectives </span></h3>
                                <ul class="m-ol-list ps-5 fs-14">
                                    <li>Recognize the important figures, events, and resources in the development of pharmacology through the ages</li>
                                    <li>Know what is meant by pharmacology</li>
                                    <li>Define drugs, identify their sources and understand how they work</li>
                                    <li>Be familiar with the federal laws that regulate drugs and the agencies that administer them</li>
                                    <li>Be familiar with the procedure for getting a new drug to market</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center p-3">
                            <img src="https://www.tmu.ac.in/img/medical/Pharmacology.jpg" alt="" class="img-fluid"
                                style="max-height: 230px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body">
                                <h3 class="tmu-text-primary mt-2 mb-0 "><span>Teaching </span><span> Methodologies </span></h3>
                                <p class="ps-3 mt-2"><b>Theory (Lectures & Tutorials)</b></p>
                                <ul class="m-ol-list ps-5 fs-14 mb-0">
                                    <li>Power presentation</li>
                                    <li>Students can download lectures from the department website</li>
                                    <li>More emphasis on understanding and applied part</li>
                                    <li>After completing a lecture, 10 minutes are given to students for queries</li>
                                </ul>
                                <p class="ps-3 mt-2"><b>Practical</b></p>
                                <ul class="m-ol-list ps-5 fs-14">
                                    <li>Most of the applied part is covered (As per the new CBME Curriculum)</li>
                                    <li>Problem Based Learning</li>
                                    <li>Practical Manual</li>
                                    <li>Case discussion</li>
                                    <li>Role-Play</li>
                                    <li>Seminars & Group Discussions</li>
                                    <li><b class="fs-14">Self Directed Learning</b>
                                        <ul class="m-ol-list ps-3 fs-14">
                                            <li>Case-Based Project Submission</li>
                                            <li>Drug Biography</li>
                                            <li>History of Medicine</li>
                                            <li>Concept of General Pharmacology via Animation/Comical Strip</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body">
                                <h3 class="tmu-text-primary mt-2 mb-0 "><span>Best </span><span> Practices </span></h3>
                                <ul class="m-ol-list ps-5 fs-14">
                                    <li>Lectures are taken with appropriate use of media and animation videos are added to the lecture so as to have better understanding of the topic.</li>
                                    <li>Computer-assisted learning and Computer simulated animal experiments are conducted in the department, giving each student an appropriate time to understand and perform the experiment.</li>
                                    <li>Emphasis is given to therapeutics so as to equip the students with better knowledge to handle certain emergency later in there posting.</li>
                                    <li>The World Wide Web is used to help them know about certain relevant concepts that are hard to understand but are essential basic concepts. (www.icp.org.nz)</li>
                                    <li>Inculcating in them a habit of research by involving students in research (ICMR-STS projects)</li>
                                    <li>We are giving training on reporting ADRs with the help of clinical vignettes and also collecting Adverse Drug Reactions from the patients during a clinical posting in the respective department.</li>
                                    <li>Newer techniques like Cross Word Puzzle as a part of the assessment, Quiz of Pharmacology (PharmaBiz) an annual event, Drug Biography, History of Medicine, Poster Competition, Case-Based Learning, Animation, and Comical Strip and Role-play.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h3 class="tmu-text-primary mt-2 mb-0 "><span>Activities of the </span><span> Department </span></h3>
                                <ul class="m-ol-list ps-5 fs-14">
                                    <li>The Department is registered with IPC under PvPI as AMC (Adverse Drug Reaction Monitoring Center) center.</li>
                                    <li>The Department is registered with IPC under MvPI as MDMC (Medical Devices Monitoring Center) Center.</li>
                                    <li>The Department trains the undergraduate students on the basic principles of Pharmacovigilance to inculcate the habit of Adverse drug Reaction reporting in the medical professionals.</li>
                                    <li>The Department is using computer-assisted learning for the students giving them projects using animation and comical strips for various concepts in Pharmacology.</li>
                                    <li>The Department uses computer simulation models as a replacement for animal experiments for undergraduate students and postgraduate students. The department uses various innovative methods to teach students like seminars by students, small group teaching, assignment completion, etc.</li>
                                    <li>The Department is using role-play to simplify the process of learning.</li>
                                    <li>The Department is actively involved in research with Postgraduate students conducting research, and faculty is also involved actively in research.</li>
                                    <li>The Department is conducting one crossword puzzle competition for each batch for one of the units.</li>
                                    <li>The Department is conducting an annual quiz for students under the aegis of ISRPT.</li>
                                    <li>The Department is also taking up AETCOM Model for Teaching students.</li>
                                    <li>The Department has a dedicated Skill lab for the training of students.</li>
                                    <li>The students are given a variety of Projects to increase self-directed learning.</li>
                                    <li>Series of On-line Session/Webinar is taken with National and International Faculty to increase the exposure for students.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection