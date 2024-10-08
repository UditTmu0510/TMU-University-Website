@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <!-- Write content for right side here  -->

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span> Academic Calendar for </span><span> the
                    Session 2024-25</span></h1>
            <div class="row col-mb-50">
                <div class="col-lg-12 col-md-12 col-sm-12 mt-0">
                    <div class="container my-3 py-2">
                        <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab"
                                    data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1"
                                    aria-selected="true"> Annual
                                    System</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab"
                                    data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2"
                                    aria-selected="false">Semester
                                    System</button>
                            </li>
                        </ul>
                        <div class="tab-content second ps-3 px-md-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="Tab1" role="tabpanel"
                                aria-labelledby="tab1-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center">Events / Particulars</th>
                                                <th class="text-center">Dates</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Course allocation and tagging on ERP</td>
                                                <td class="text-center">July 01 - July 15, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Submission of time table and upload on ERP</td>
                                                <td class="text-center">July 15, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" rowspan='2'>3</td>
                                                <td>Commencement of Classes (for first year)<br><i> Nursing Students including induction programme(01 week) for newly admitted students.</i></td>
                                                <td class="text-center">August 01, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>Commencement of Classes (2nd Year onwards)</td>
                                                <td class="text-center">August 08, 2024</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center" rowspan='3'>4</td>
                                                <td>Registration of semester course and open elective courses and backlogs ( if any) by the students- 1st Year Nursing Programmes</td>
                                                <td class="text-center">August 01-05, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>Registration of semester course and open elective courses and backlogs( if any) by the 1st Year students(rest of the programmes)</td>
                                                <td class="text-center">August 08-30, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>Registration of semester course and open elective courses and backlogs ( if any) by the students- (2nd Year onwards) </i></td>
                                                <td class="text-center">August 08-12, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Sharing of Course Handouts with Students</td>
                                                <td class="text-center">August 30, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td>Upload of e-contents on website</td>
                                                <td class="text-center">Up to July 31,2024</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>CT-I</td>
                                                <td class="text-center">October 14-18 ,2024 </td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>CT-II</td>
                                                <td class="text-center">February 18-22, 2025</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">9</td>
                                                <td>End of classes</td>
                                                <td class="text-center">May 5,2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10</td>
                                                <td>CT-III</td>
                                                <td class="text-center">May 6-May 10,2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11</td>
                                                <td>Preparatory Leave Internal end term</td>
                                                <td class="text-center">May 12-17, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td>Conduct of Examinations</td>
                                                <td class="text-center">May 19 - June 06,2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td>Declaration of Results</td>
                                                <td class="text-center">Within 15 days of conduct of examination</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td>Summer Vacations </td>
                                                <td class="text-center">July 09 -July 31,2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15</td>
                                                <td>Commencement of next academic session</td>
                                                <td class="text-center">August 01,2025</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl. No.</th>
                                                <th class="text-center" colspan='2'>Events /Particulars</th>
                                                <th class="text-center" colspan='2'>Dates</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" colspan='5'><strong>Odd Semester</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">&nbsp;&nbsp;</td>
                                                <th>For 1st Year</th>
                                                <th>For 2nd Year</th>
                                            </tr>

                                            <tr>
                                                <td class="text-center">1</td>
                                                <td colspan="2">Course allocation and tagging on ERP for odd semester</td>
                                                <td class="text-center">July 15,2024 </td>
                                                <td class="text-center">July 015 - 20,2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td colspan="2">Submission of time table and upload on ERP for odd Semester</td>
                                                <td colspan="2" class="text-center">July 25,2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td colspan="2">Upload of e-contents for Odd semester on website (if not available)</td>
                                                <td colspan="2" class="text-center">July 31,2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" rowspan="2">4</td>
                                                <td rowspan="2">Commencement of Classes</td>
                                                <td>Nursing Programmes</td>
                                                <td class="text-center">August 01,2024</td>
                                                <td class="text-center" rowspan="2">August 01,2024</td>
                                            </tr>
                                            <tr>

                                                <td>All other Programmes(Including Student Induction Program for 1-3 weeks,as applicable)</td>
                                                <td class="text-center">August 21,2024</td>

                                            </tr>
                                            <tr>
                                                <td class="text-center" rowspan="2">5</td>
                                                <td rowspan="2">Registration of semester course and open elective courses (if applicable) by the students</td>
                                                <td>Nursing Programmes</td>
                                                <td class="text-center">August 01-05, 2024</td>
                                                <td class="text-center" rowspan="2">August 01-05,2024</td>
                                            </tr>
                                            <tr>

                                                <td>All other Programmes</td>
                                                <td class="text-center">August 21-30, 2024</td>

                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td colspan="2">Sharing of Course Handouts with Students</td>
                                                <td colspan="2" class="text-center">August 30,2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>CT-I</td>
                                                <td>All Programmes and Programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                <td class="text-center">October 14-18, 2024</td>
                                                <td class="text-center">October 14-18, 2024</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>CT-II</td>
                                                <td>All Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                <td class="text-center">October 18-22, 2024</td>
                                                <td class="text-center">October 18-22, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9</td>
                                                <td colspan="2">End of odd semester Classes (For all programmes)</td>
                                                <td class="text-center" colspan="2">December 04,2024</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">10</td>
                                                <td class="text-center">CT-II</td>
                                                <td class="text-center">All Programmes under NEP-2020 admitted in session 2024-25 </td>
                                                <td class="text-center" rowspan="2" colspan="2">December 05-10,2024</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">11</td>
                                                <td class="text-center">CT-III</td>
                                                <td>All Programmes except programmes under NEP-2020 for batches admitted in session 2024-25 </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12</td>
                                                <td colspan="2">Preparatory Leave </td>
                                                <td colspan="2" class="text-center">December 11-15,2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13</td>
                                                <td colspan="2">Conduct of Odd semester Examinations </td>
                                                <td colspan="2" class="text-center">December 16 2024 - January 04, 2024 (As per the Schedule)</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14</td>
                                                <td colspan="2">Declaration of results of Odd semester End Examinations </td>
                                                <td colspan="2" class="text-center">Within 15 days of conduct of Examinations</td>
                                            </tr>



                                            <tr>
                                                <td class="text-center" colspan='5'><strong>Even Semester</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td colspan="2">Course allocation and tagging on ERP for even semester</td>
                                                <td colspan="2">December 20, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td colspan="2">Submission of time table and upload on ERP for even Semester</td>
                                                <td colspan="2">January 10, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td colspan="2">Commencement of Even Semester classes (for all programmes)</td>
                                                <td colspan="2">January 13, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td colspan="2">Registration for semester course and open elective courses (if applicable) by the students</td>
                                                <td colspan="2">January 13-15, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td colspan="2">Upload of e-contents for Even semester on website</td>
                                                <td colspan="2">January 18, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                                <td colspan="2">Sharing of Course Handouts with Students</td>
                                                <td colspan="2">January 20, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7</td>
                                                <td colspan="2">CT-I<sup>*</sup> for all Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                <td colspan="2">February 18-22, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" rowspan="2">8</td>
                                                <td colspan="2">CT-I<sup>*</sup> for Programme under NEP-2020 for batches admitted in session 2024-25</td>
                                                <td class="text-center" rowspan="2" colspan="2">March 24-28, 2025</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">CT-II<sup>*</sup> for all Programmes except programmes under NEP-2020 admitted in session 2024-25</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td colspan="2">End of Even Semester Classes</td>
                                                <td colspan="2">May 05, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" rowspan="2">10</td>
                                                <td colspan="2">CT-III<sup>*</sup> for Programme under NEP-2020 admitted in session 2024-25</td>
                                                <td class="text-center" rowspan="2" colspan="2">May 06-10, 2025</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">CT-III<sup>*</sup> for all Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td colspan="2">Preparatory Leave</td>
                                                <td colspan="2">May 12-17, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td colspan="2">Conduct of Even Semester Examinations</td>
                                                <td colspan="2">May 19 - June 06, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td colspan="2">Declaration of results of Even semester End Examinations</td>
                                                <td colspan="2">Within 15 days of conduct of examinations</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td colspan="2">Summer vacations/Internship (Wherever applicable)</td>
                                                <td colspan="2">June 9 - July 31, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td colspan="2">Commencement of next academic session</td>
                                                <td colspan="2">August 01, 2025</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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