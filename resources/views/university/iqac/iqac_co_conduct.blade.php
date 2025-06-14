@extends('layouts.university.departments.institutional_values_with_sidebar')
@section('content')


<div class="main-content">
  <div class="container">
    <div class="row mx-0">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> Code of Conduct </span><span> for Employee</span></h1>
      <hr class="horizontal-line">
      <button class="careers-accordion"> COMMITTEE<span class="icon">+</span></button>
      <div class="panel active">
        <table class="table table-bordered table-striped">
          <thead>
            <th>#</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Role</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Sh. Manoj Jain</td>
              <td>Director-HR</td>
              <td>Chairperson</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Prof. M.P Singh</td>
              <td>Dean Students’ Welfare</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Dr. Vishwanayak</td>
              <td>Medical Superintendent, TMU Hospital</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Dr. Prithpal Singh Materja</td>
              <td>Medical College & Research Centre</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Dr. Ankita Jain</td>
              <td>Dental College & Research Centre</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Prof. Jasline .M</td>
              <td>TM College of Nursing</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Prof. Sheuli Sen</td>
              <td>TP College of Nursing</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Prof. Mukesh Sikarwar</td>
              <td>College of Pharmacy</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Mr. Rakesh Yadav</td>
              <td>College of Paramedical Sciences</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>10</td>
              <td>Dr. Harsish Sharma</td>
              <td>Department of Physiotherapy</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>11</td>
              <td>Prof. Manoj Agarwal</td>
              <td>TMIMT College of Management</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>12</td>
              <td>Prof. Sushil Kumar</td>
              <td>College of Law & Legal Studies</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>13</td>
              <td>Dr. Ashendra Saxena</td>
              <td>College of Computing Sciences & IT</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>14</td>
              <td>Dr. Alok Gahlot</td>
              <td>Faculty of Engineering</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>15</td>
              <td>Dr. Farha Deeba</td>
              <td>College of Fine Arts</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>16</td>
              <td>Dr. Vinod Jain</td>
              <td>Faculty of Education</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>17</td>
              <td>Dr. Manu Mishra</td>
              <td>TMIMT College of Physical Education</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>18</td>
              <td>Prof. Mahesh Singh</td>
              <td>College of Agricultural Sciences</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>19</td>
              <td>Mr. Anil Gupta</td>
              <td>Manager Administration, TMU Hospital</td>
              <td>Member</td>
            </tr>
            <tr>
              <td>20</td>
              <td>Dr. Prashant Kumar</td>
              <td>Dy. Registrar HR</td>
              <td>Member Secretary</td>
            </tr>
          </tbody>
        </table>
      </div>

      <hr class="horizontal-line">
      <button class="careers-accordion"> POLICY <span class="icon">+</span></button>
      <div class="panel">
        <table class="table table-bordered table-striped">
          <thead>
            <th>S.NO.</th>
            <th>Description</th>
            <th class="text-center">View More</th>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Code of Conduct for Employees of the University</td>
              <td class="centered-icon text-center"><a href="{{asset('assets/pdf/employee_code_of_conduct.pdf')}}"><i class="fa-solid fa-file-pdf"></i></a></td>
            </tr>
        </table>
      </div>
      <hr class="horizontal-line">
      <button class="careers-accordion"> Code of Conduct for Student <span class="icon">+</span></button>
      <div class="panel">
        <ol class="ps-4 m-ol-list text-justify">
          <li>Students are expected to maintain decorum in their behavior and habits, at all times, befitting the prestige of the College and the University. Students are also expected to dress decently in all public places.</li>
          <li style="margin-top:10px;">Students are advised to attend all classes and to ensure that they maintain the attendance criteria as laid down in the university ordinance governing the same. A minimum of 75% attendance (except in cases where the concerned regulatory council has stipulated a higher percentage) in lectures, presentations and practical classes individually in each course/subject is mandatory to appear in end/final term examinations. In case of deviation, university is empowered to detain the student from appearing from end semester/year examinations. For details, students are advised to read the <a href="{{route('exam.ordinance')}}">university ordinance</a> carefully.</li>
          <li style="margin-top:10px;">Participation of students in academic activities such as seminar/workshop, industrial visits is compulsory. Non participation without prior permission, may adversely affect the student’s internal assessment performance.</li>
          <li style="margin-top:10px;">If a student absents himself/herself from the classes for seven consecutive working days without prior permission his/her name may be struck off the rolls.</li>
          <li style="margin-top:10px;">During teaching hours students are not allowed to leave the college campus without written permission from class coordinator.</li>
          <li style="margin-top:10px;">Students are prohibited from engaging in acts of intimidation, violence or abuse against any of the students, employees, staff and faculty members of the university. Students are expected to show sincere, decent and cordial attitude towards their classmates, students of other programs, staff, faculty and other employees of the university.</li>
          <li style="margin-top:10px;">Students’ loitering in the campus is prohibited.</li>
          <li style="margin-top:10px;">Ragging is an inhuman act and is banned both inside and outside the campus of the University. The Honorable Supreme Court of India has taken serious cognizance of the offence of ragging and has issued strict directives to ensure its elimination. Students shall not directly or indirectly indulge in, aid or abet any activity that might be construed as ragging. Violators will face necessary disciplinary and legal action includes lodging of a criminal case, against the student at the Police Station. (For details, refer to Anti-ragging policy of the university.)</li>
          <li style="margin-top:10px;">Use of cell phone is strictly prohibited in university teaching areas. The cell phone will be confiscated, if found being used in prohibited area.</li>
          <li style="margin-top:10px;">Smoking, chewing pan, pan-masala, gutka, gambling, consumption of alcoholic drinks and use of hallucinogenic drugs and other illegal substances, or the possession of such substances, anywhere in the University campus, is strictly forbidden.</li>
          <li style="margin-top:10px;">Carrying any explosive/fire arm, and/or weapon inside the campus is strictly prohibited.</li>
          <li style="margin-top:10px;">Non-vegetarian food is strictly prohibited on the campus.</li>
          <li style="margin-top:10px;">Students are advised not to indulge in any prohibited, illegal and unethical, immoral activities inside and/or outside the College/University campus, or else, they will be liable for punishment as per University rules.</li>
          <li style="margin-top:10px;">Safety of all personal valuables/belongings will be the responsibility of the student.</li>
          <li style="margin-top:10px;">If the student is found involved in activities resulting in direct or indirect loss/damage to the College/ University, the same shall be borne by the student. He/ She will be asked to compensate the university for the same.</li>
          <li style="margin-top:10px;">Adherence to dress code is compulsory for academic and allied activities in the campus.</li>
          <li style="margin-top:10px;">Each student will be issued an Identity card which is non-transferable. The student is expected to keep the ID card on his/her person while in the university campus and especially when appearing in tests and examinations, etc. and also when going out of the campus.</li>
          <li style="margin-top:10px;">College/University would not be liable for any compensation/claim whatsoever under any circumstances, in case of any casualty/injury or otherwise to any student during his/her academic course inside or outside the College/ University campus.</li>
          <li style="margin-top:10px;">In case of any dispute on any matter, the decision of the university would be final and binding.</li>
          <li style="margin-top:10px;">Competent authority of the university possesses the right to modify the aforesaid rules and/or insert/delete from time to time in future and the same shall be binding upon the students.</li>
        </ol>
      </div>
      <hr class="horizontal-line">
    </div>
  </div>
</div>
</div>




@endsection