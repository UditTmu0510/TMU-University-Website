@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }

    @media screen and (max-width: 600px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
            text-align: center;
        }

        th,
        td {
            box-sizing: border-box;
            display: block;
            width: 100%;
        }

        th,
        td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
        }

        tr {
            margin-bottom: 1em;
        }
    }
</style>

<div class="main-content">
        <div class="container">
            <section class="">
                <div class="container">
                    <div class="text-content">
                        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Corporate </span><span>Advisory Board </span></h1>
                    </div>
                    <div class="container">
                        <p class="text-justify mb-2">For any professional institution the interaction with academic and corporate world is of great importance. College has Corporate Advisory Board including Principal (as Chair Person), Head Training & Placement and members from the industries.
                            The Board members provides advice and guidance on academic program to the college as a whole or to individual academic departments. This helps ensure our curriculum remain relevant and rigorous.
                            Corporate Advisory Board members also interact with faculty & Students (SPCC members) as mentors and as guest speakers in classes, and provide internship and job opportunities to our students.</p>
                        <h3 class="tmu-text-primary mb-3 mt-3"><span>Key Objectives of </span><span> Corporate Advisory Board</span></h3>
                        <ul class="m-ol-list ps-4 mt-0 text-justify">
                            <li>Helps in revising the curriculum and teaching methodology as per corporate need.
                            </li>
                            <li>Participate in our Employability Enhancement Training Programs available with us.</li>
                            <li>Conducting faculty development projects with well designed timelines.</li>
                            <li>Support in conducting various national level Seminars / Conferences / Workshops.
                            </li>
                            <li>Advising us on value added courses as per the growing needs of the industry.
                            </li>
                            <li>Developing entrepreneurial abilities, by providing projects that engage students in ‘design to delivery solution’ to improve the quality.</li>
                            <li>Setting up ‘labs’ within institute to get research and innovation.</li>
                            <li>Advising and helping us on better placements and internships.</li>
                        </ul>

                        <h3 class="tmu-text-primary"><span>Committee Members of </span><span> Training & Placement Cell </span></h3>
                        <div class="table-responsive mb-2 mt-3">
                            <table class="table table-bordered table-striped ">
                                <tr>
                                    <th class="text-center">Sl.No.</th>
                                    <th>Contact Person</th>
                                    <th>Designation</th>
                                    <th>Contact No.</th>
                                    <th>Email ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Prof. Rakesh Kr. Dwivedi<br>(Principal)</td>
                                        <td>Secretary</td>
                                        <td>+91-9917200216</td>
                                        <td><i class="fa fa-envelope"></i> principal.computer@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Mr. Vikram Raina<br>(Asst. Director. Training &amp; Placement)</td>
                                        <td>Convener</td>
                                        <td>+91-8800092306</td>
                                        <td><i class="fa fa-envelope"></i> vikram.computer@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Dr. S.P Pandey<br>(Professor)</td>
                                        <td>Member</td>
                                        <td>+91-8527838064</td>
                                        <td><i class="fa fa-envelope"></i> drsppandey.engineering@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Mr. Raghvendra Kumar Singh<br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-6395924153</td>
                                        <td><i class="fa fa-envelope"></i> raghvendraeee.engineering@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Dr. Navneet Kumar <br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-9997945770</td>
                                        <td><i class="fa fa-envelope"></i> drnavneet.engineering@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>Mr. Anurag Srivastava<br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-9795304111</td>
                                        <td><i class="fa fa-envelope"></i> anurag.engineering@tmu.ac.in </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>Mr. Rahul Vishnoi<br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-9719004461</td>
                                        <td><i class="fa fa-envelope"></i> rahulv.engineering@tmu.ac.in </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>Dr. Alok K Gahlot<br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-9897514806</td>
                                        <td><i class="fa fa-envelope"></i> dralok.engineering@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>Mr. Ankit Kumar Sharma<br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-9410047488</td>
                                        <td><i class="fa fa-envelope"></i> ankitk.engineering@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>Ms. Gulista Khan <br>(Assistant Professor)</td>
                                        <td>Member</td>
                                        <td>+91-8430149550</td>
                                        <td><i class="fa fa-envelope"></i> gulista.engineering@tmu.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><b>Note:</b> Programme Coordinators are the default
                                            Members of this committee.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection