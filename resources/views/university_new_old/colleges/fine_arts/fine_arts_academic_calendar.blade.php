@extends('layouts.university.colleges.fine_arts_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Academic </span><span> Calendar </span></h1>
            <div class="container">
            <div class="row mb-3">
                <h3 class="tmu-text-primary text-center"><span>Academic Calendar (Session 2022-23)<br> </span><span>BFA &amp; MFA (only 1st Year)</span></h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Activity</td>
                                        <td>Odd Semester</td>
                                        <td>Even Semester</td>
                                    </tr>
                                    <tr>
                                        <td>Course allocation and tagging on ERP for ODD semester</td>
                                        <td>July 1,2022</td>
                                        <td>January 2-10,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Submission of Time Table and upload on ERP for Odd semester</td>
                                        <td>July 5,2022</td>
                                        <td>January 14,2023</td>
                                    </tr>
                                    <tr>
                                        <td>University Sports Council Meeting</td>
                                        <td>July 27, 2022</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Commencement of Classes</td>
                                        <td>September 16, 2022</td>
                                        <td>January 27,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Induction Program (Two Weeks)</td>
                                        <td>September 16- October 01, 2022</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Registration of Semester Courses and Open Elective courses</td>
                                        <td>September 30, 2022</td>
                                        <td>January 27- February 5, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Upload of E-Contents on Website</td>
                                        <td>August 31,2022</td>
                                        <td>January 20, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>TMU Intercollegiate Sports Championship</td>
                                        <td>&nbsp;</td>
                                        <td>February 6-20,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Founders Day</td>
                                        <td>September 14,2022</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&lt;CT-I</td>
                                        <td>October 31- November 05, 2022</td>
                                        <td>March 13-18, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Break for Students (Holidays)</td>
                                        <td>October 24-29, 2022 (Diwali Breaks)</td>
                                        <td>March 6-11,2023 (Holi Breaks)</td>
                                    </tr>
                                    <tr>
                                        <td>CT-II</td>
                                        <td>December 5-10,2022</td>
                                        <td>April 24-29, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>End of Semester</td>
                                        <td>January 5,2023</td>
                                        <td>May 26, 2023&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>CT-III</td>
                                        <td>December 31,2022- January 5,2023</td>
                                        <td>May 22-26, 2023&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Conduct of End Semester Examination</td>
                                        <td>January 7-24 20023</td>
                                        <td>May 27-June 10, 2023&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Declaration of result of End Semester End Examination</td>
                                        <td>within 15 days of conduct of Examination</td>
                                        <td>within 15 days of conduct of Examination</td>
                                    </tr>
                                    <tr>
                                        <td>Vacations/Education Tours/Trainings</td>
                                        <td>&nbsp; </td>
                                        <td>June 11-July 31,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Commencement of Next Academic session</td>
                                        <td> --- </td>
                                        <td>1 Auagust 2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="tmu-text-primary text-center"><span> SCHEDULE FOR MAJOR ACTIVITIES </span><span>IN COLLEGE OF FINE ARTS</span></h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Activity</td>
                                        <td>Odd Semester</td>
                                        <td>Even Semester</td>
                                    </tr>
                                    <tr>
                                        <td>Workshops</td>
                                        <td>14-15 October. 2022</td>
                                        <td>24-25 March. 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Seminar</td>
                                        <td>18-19 November, 2022</td>
                                        <td>21-22 April. 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Guest Lecture</td>
                                        <td>22 October. 2022</td>
                                        <td>25 February, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Annual Art Exhibition</td>
                                        <td>14-17 September, 2022</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="tmu-text-primary text-center"><span> Academic Calendar (Session 2022-23)</span><span><br>For ALL SEMESTER Of BFA &amp; MFA (Excepts 1st Year)</span></h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Activity</td>
                                        <td>Odd Semester</td>
                                        <td>Even Semester</td>
                                    </tr>
                                    <tr>
                                        <td>Course allocation and tagging on ERP for ODD semester</td>
                                        <td>July 1,2022</td>
                                        <td>December 12,2022</td>
                                    </tr>
                                    <tr>
                                        <td>Submission of Time Table and upload on ERP for Odd semester</td>
                                        <td>July 5,2022</td>
                                        <td>December 24,2022</td>
                                    </tr>
                                    <tr>
                                        <td>University Sports Council Meeting</td>
                                        <td>July 27, 2022</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Commencement of Classes</td>
                                        <td>August 1, 2022</td>
                                        <td>January 09,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Induction Program (Two Weeks)</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Registration of Semester Courses and Open Elective courses</td>
                                        <td>August 20, 2022</td>
                                        <td>January 21, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Upload of E-Contents on Website</td>
                                        <td>August 20,2022</td>
                                        <td>January 21, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>TMU Intercollegiate Sports Championship</td>
                                        <td>&nbsp;</td>
                                        <td>February 6-20,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Founders Day</td>
                                        <td>September 14,2022</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&lt;CT-I</td>
                                        <td>spetember 26-29, 2022</td>
                                        <td>Februray 27 - march 1, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Break for Students (Holidays)</td>
                                        <td>October 24-29, 2022 (Diwali Breaks)</td>
                                        <td>March 6-11,2023 (Holi Breaks)</td>
                                    </tr>
                                    <tr>
                                        <td>CT-II</td>
                                        <td>November 10-12,2022</td>
                                        <td>April 10-12, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>End of Semester</td>
                                        <td>December 3,2022</td>
                                        <td>May 6, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>CT-III</td>
                                        <td>December 5-7,2022</td>
                                        <td>May 8-10, 2023&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Conduct of End Semester Examination</td>
                                        <td>December 8-27,2022</td>
                                        <td>May 11-30, 2023&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Declaration of result of End Semester End Examination</td>
                                        <td>within 15 days of conduct of Examination</td>
                                        <td>within 15 days of conduct of Examination</td>
                                    </tr>
                                    <tr>
                                        <td>Vacations/Education Tours/Trainings</td>
                                        <td>&nbsp; </td>
                                        <td>June 1-July 29,2023</td>
                                    </tr>
                                    <tr>
                                        <td>Commencement of Next Academic session</td>
                                        <td> --- </td>
                                        <td>1 Auagust 2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="tmu-text-primary text-center"><span> SCHEDULE FOR MAJOR ACTIVITIES </span><span>IN COLLEGE OF FINE ARTS</span></h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Activity</td>
                                        <td>Odd Semester</td>
                                        <td>Even Semester</td>
                                    </tr>
                                    <tr>
                                        <td>Workshops</td>
                                        <td>14-15 October. 2022</td>
                                        <td>24-25 March. 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Seminar</td>
                                        <td>18-19 November, 2022</td>
                                        <td>21-22 April. 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Guest Lecture</td>
                                        <td>22 October. 2022</td>
                                        <td>25 February, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Annual Art Exhibition</td>
                                        <td>14-17 September, 2022</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
</div>
@endsection