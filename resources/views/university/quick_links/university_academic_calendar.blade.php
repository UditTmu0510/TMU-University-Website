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
                                                <td class="text-center">1.</td>
                                                <td>Course allocation and tagging on ERP</td>
                                                <td>July 01- July 15, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2.</td>
                                                <td>Submission of time table and upload on ERP</td>
                                                <td>July 15, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td>Commencement of Classes 1st year Nursing Students including induction programme (01 week) for newly admitted students.
                                                    Commencement of Classes (2nd Year onwards)</td>
                                                <td>August 01, 2024
                                                    August 08, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4.</td>
                                                <td>Registration of semester courses and open elective courses and backlogs (if any) by the students- 1st Year Nursing Programmes
                                                    Registration of semester courses and open elective courses and backlogs (if any) by the 1st Year students (rest of the programmes)</td>
                                                <td>August 01-05, 2024
                                                    August 08-30, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5.</td>
                                                <td>Sharing of Course Handouts with Students</td>
                                                <td>August 30, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6.</td>
                                                <td>Upload of e-contents on the website</td>
                                                <td>Up to July 31, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">7.</td>
                                                <td>CT-I*</td>
                                                <td>October 14-18, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">8.</td>
                                                <td>CT-II*</td>
                                                <td>February 18-22, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">9.</td>
                                                <td>End of classes</td>
                                                <td>May 05, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">10.</td>
                                                <td>CT-III*</td>
                                                <td>May 06-10, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">11.</td>
                                                <td>Preparatory Leave</td>
                                                <td>May 12-17, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">12.</td>
                                                <td>Conduct of Examinations</td>
                                                <td>May 19-June 06, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">13.</td>
                                                <td>Declaration of Results</td>
                                                <td>Within 15 days of conduct of examination</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">14.</td>
                                                <td>Summer Vacations</td>
                                                <td>June 09-July 31, 2025</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">15.</td>
                                                <td>Commencement of next academic session</td>
                                                <td>August 01, 2025</td>
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
                                                <td colspan="2">&nbsp;&nbsp;</td>
                                                <th>For 1st Year</th>
                                                <th>For 2nd Year</th>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>Course allocation and tagging on ERP for odd semester</td>
                                                <td>July 15, 2024</td>
                                                <td>July 15-20, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Submission of time table and upload on ERP for odd Semester</td>
                                                <td colspan="2">July 25, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Upload of e-contents for odd semester on website</td>
                                                <td colspan="2">Up to July 31, 2024</td>
                                            </tr>
                                            <tr>
                                            <tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td rowspan="2">Commencement of classes</td>
                                                            <td>Nursing Programmes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>All other Programmes<br>(Including Student Induction Program for 1-3 weeks, as applicable)</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td>August 01, 2024</td>
                                                        </tr>
                                                        <tr>
                                                            <td>August 21, 2024</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>August 01, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td rowspan="2">Registration of semester course and open elective courses (if applicable) by the students</td>
                                                            <td>Nursing Programmes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>All other Programmes</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td>August 01-05, 2024</td>
                                                        </tr>
                                                        <tr>
                                                            <td>August 21-30, 2024</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>August 01-05, 2024</td>
                                            </tr>
                                            <td>6</td>
                                            <td>Sharing of Course Handouts with Students</td>
                                            <td colspan="2">August 30, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td rowspan="2">CT-I*</td>
                                                            <td>All Programmes and Programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>October 14-18, 2024</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>October 14-18, 2024</td>
                                                <td>October 14-18, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td rowspan="2">CT-II*</td>
                                                            <td>All Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>November 18-22, 2024</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>November 18-22, 2024</td>
                                                <td>November 18-22, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>End of odd semester Classes (For all programmes)</td>
                                                <td colspan="2">December 04, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td rowspan="2">CT-II*</td>
                                                            <td>All Programmes under NEP-2020 admitted in session 2024-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>December 05-10, 2024</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>December 05-10, 2024</td>
                                                <td>December 05-10, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>
                                                    <table border="1" style="margin: auto; width: 100%; text-align: center;">
                                                        <tr>
                                                            <td rowspan="2">CT-III*</td>
                                                            <td>All Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>December 05-10, 2024</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>December 05-10, 2024</td>
                                                <td>December 05-10, 2024</td>
                                            </tr>

                                            <tr>
                                                <td>12</td>
                                                <td>Preparatory Leave</td>
                                                <td colspan="2">December 11-15, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Doubt Clearing Sessions</td>
                                                <td colspan="2">December 16-24, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Conduct of Odd semester Practical Examinations</td>
                                                <td colspan="2">December 26-31, 2024 (As per the Schedule)</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Conduct of Odd semester Theory Examinations</td>
                                                <td colspan="2">2nd January 2025 onwards (As per the Schedule)</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Declaration of results of odd semester End Examinations</td>
                                                <td colspan="2">Within 15 days of conduct of Examinations</td>
                                            </tr>

                                            <tr>
                                                <td class="text-center" colspan='5'><strong>Even Semester</strong></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Course allocation and tagging on ERP for even semester</td>
                                                <td colspan="2">January 10, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Submission of time table and upload on ERP for even Semester</td>
                                                <td colspan="2">January 20, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Commencement of Even Semester classes (for all programmes)</td>
                                                <td colspan="2">January 27, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Registration for semester course and open elective courses (if applicable) by the students</td>
                                                <td colspan="2">January 27-30, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Upload of e-contents for Even semester on website</td>
                                                <td colspan="2">February 03, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Sharing of Course Handouts with Students</td>
                                                <td colspan="2">February 03, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>CT-I* for all Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                <td colspan="2">March 04-08, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>CT-I* for Programme under NEP-2020 for batches admitted in session 2024-25
                                                    CT-II* for all Programmes except programmes under NEP-2020 admitted in session 2024-25.</td>
                                                <td colspan="2">April 08-12,2025</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>End of Even Semester Classes</td>
                                                <td colspan="2">May 10, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>CT-II* Programme under NEP-2020 admitted in session 2024-25
                                                    CT-III* for all Programmes except programmes under NEP-2020 for batches admitted in session 2024-25</td>
                                                <td colspan="2">May 12-15, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Preparatory Leave</td>
                                                <td colspan="2">May 16-19, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Conduct of Even Semester Examinations</td>
                                                <td colspan="2">May 20 -June 10, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Declaration of results of Even semester End Examinations</td>
                                                <td colspan="2">Within 15 days of conduct of examinations</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Summer vacations/Internship (Wherever applicable)</td>
                                                <td colspan="2">June 11- July 31, 2025</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Commencement of next academic session</td>
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