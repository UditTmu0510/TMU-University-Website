@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')
<style>
    table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border: 1px solid #ddd;
}

@media screen and (max-width: 600px) {
  table, thead, tbody, th, td, tr {
    display: block;
    text-align:center;
  }

  th, td {
    box-sizing: border-box;
    display: block;
    width: 100%;
  }

  th, td:before {
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
                        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Corporate </span><span>Advsiory Board </span></h1>
                    </div>
                    <div class="container">
                        <p class="text-justify mb-2">For any professional institution the interaction with academic and corporate world is of
                                great importance. College has Corporate Advisory Board including Principal (as Chair Person),
                                Head Training & Placement and members from the industries. The Board members provides advice and
                                guidance on academic program to the college as a whole or to individual academic departments. This helps
                                ensure our curricula remain relevant and rigorous. Corporate Advisory Board members also interact with
                                faculty & Students (SPCC members) as mentors and as guest speakers in classes, and provide internship and
                                job opportunities to our students.</p>
                                <h3 class="tmu-text-primary mb-3 mt-3"><span>Key Objectives of </span><span> Corporate Advisory Board</span></h3>
                                <ul class="m-ol-list ps-4 mt-0 text-justify">   
                                   <li>Helps in revising the curriculum and teaching methodology as per corporate need.</li>
                                    <li>Participate in our Employability Enhancement Training Programs available with us.</li>
                                    <li>Conducting faculty development projects with well designed timelines.</li>
                                    <li>Support in conducting various national level Seminars / Conferences / Workshops. </li>
                                    <li>Advising us on value added courses as per the growing needs of the industry. </li>
                                    <li>Developing entrepreneurial abilities, by providing projects that engage students  in ‘design to delivery solution’ to improve the quality.</li>
                                    <li>Setting up ‘labs’ within institute to get research and innovation.</li>
                                    <li>Advising and helping us on better placements and internships.</li>
                                </ul>
                               
                                <h3 class="tmu-text-primary"><span>Committee Members of </span><span> Training & Placement Cell  </span></h3>
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
                                                <td>Prof. Vipin Jain<br>(Principal)</td>
                                                <td >Secretary</td>
                                                <td >+91-9917200216</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    principal.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Mr. Akash Bhatnagar<br>(Asst. Director. Corporate Relations)</td>
                                                <td >Convener</td>
                                                <td >+91-9927670666</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    placementcell@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Mr. Pankaj Kumar<br>(Office Executive T&amp;P)</td>
                                                <td >Member</td>
                                                <td >+91-8449574444</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    pankaj10s@gmail.com
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Dr. Manoj Agarwal<br>(HOD-Management)</td>
                                                <td >Member</td>
                                                <td >+91-7417606465</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    manoj.mgmt@tmu.ac.in
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Dr. Ankit Kumar<br>(Associate Professor)</td>
                                                <td >Member</td>
                                                <td >+91-7891325606</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    ankit.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Dr. Vibhor Jain<br>(Associate Professor)</td>
                                                <td >Member</td>
                                                <td >+91-7906004675</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    vibhor.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>Mr. Anand Joshi<br>(Asst. Professor)</td>
                                                <td >Member</td>
                                                <td >+91-9548467527</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    anand.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>Dr. Mohit Rastogi<br>(Asst. Professor)</td>
                                                <td >Member</td>
                                                <td >+91-7906212508</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    mohit.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><b>Note:</b> All course coordinators are the default
                                                    members of this
                                                    committee.</td>
                                            </tr>
                                </tbody>
                            </table>
                        </div>
                                
                                <h3 class="tmu-text-primary"><span>Committee Members of </span><span> Industry Linkages</span></h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <th class="text-center">Sl. No.</th>
                                            <th>Contact Person</th>
                                            <th>Designation</th>
                                            <th>Contact No.</th>
                                            <th>Email ID</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Mr. Akash Bhatnagar</td>
                                                <td>Secretary</td>
                                                <td>+91-9927670666</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    placementcell@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Dr Manoj Agarwal</td>
                                                <td >Member</td>
                                                <td >+91-7417606465</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    manoj.mgmt@tmu.ac.in
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  class="text-center">3</td>
                                                <td>Dr. Amit Kansal</td>
                                                <td >Member</td>
                                                <td >+91-8899366366</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    amitk.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Mrs. Anshu Chauhan</td>
                                                <td >Member</td>
                                                <td >+91-9720008334</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    anshu.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Dr Mohit Rastogi</td>
                                                <td >Member</td>
                                                <td >+91-7906212508</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    mohit.management@tmu.ac.in</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Dr. Rachit Agarwal</td>
                                                <td >External Member</td>
                                                <td >+91-9837018121</td>
                                                <td><i class="fa-solid fa-envelope" style="color:#FF7900;"></i>
                                                    rachit@urservices.org</td>
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