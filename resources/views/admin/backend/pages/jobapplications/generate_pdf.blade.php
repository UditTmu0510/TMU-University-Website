<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <style>
        /* Basic Styling for the PDF layout */
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: auto; /* Allow dynamic column width */
        }

        /* th, td {
          
            padding: 8px;
            text-align: left;
            word-wrap: break-word; /* Ensure words wrap */
            white-space: pre-wrap; /* Preserve whitespace but allow wrapping */
        }
        */
        .other-tables-td-th {
        
          text-align: left;
          word-wrap: break-word; /* Ensure words wrap */
          white-space: pre-wrap; /* Preserve whitespace but allow wrapping */
          font-size:12px;
      }

      .other-tables-td-th-border {
        border:1px solid black;
        text-align: center;
        word-wrap: break-word; /* Ensure words wrap */
        white-space: pre-wrap; /* Preserve whitespace but allow wrapping */
        background-color:white;
        font-size:12px;
    }
        th {
            background-color: #f2f2f2;
        }

        /* Handle long text content */
        td {
            font-size: 12px; /* Adjust font size to fit content */
        } */

        /* Limit the max width of the columns if necessary */
        .name-column {
            max-width: 200px; /* Adjust max width for name column */
        }

        .email-column {
            max-width: 250px; /* Adjust max width for email column */
        }

        /* Ensure overflow words break rather than overflow outside the cell */
        .word-break {
            word-break: break-all; /* Force break long words */
        }

        /* Optional: Ensure padding is included in the element's width */
        * {
            box-sizing: border-box;
        }

        #job_form_heading{
            background-color:black;
            color: white;
            font-size:20px;
            text-align: center;
            margin-top:10px;
            margin-bottom:10px;
        }

    </style>
</head>
<body>

    {{-- <div class="header">
        <div class="logo">
            <img src="{{public_path('assets/img/logo_job_form.png')}}" alt="TMU Logo" />
        </div>
        <div class="headings">
            <h1>Teerthanker Mahaveer University</h1>
        </div>
    </div> --}}

    <table border="0">
<tr  border="0">
<td width = "30%"  border="0">
    <img src="{{public_path('assets/img/logo_job_form.png')}}" alt="TMU Logo" width="150px" />
</td>
<td width = "70%" border="0">
    <p style="text-align:center;"><span style="font-size:30px;">Teerthanker Mahaveer University </span><br/>(Established under Govt of U.P Act No. 30,2008 )<br/>Delhi Road,(146 Kms from Delhi on N.H.24) Moradabad (U.P.),India<br/>Tel: +0591-2360222,2360777, HR: 0591-2476840.<br/> <b>Email:</b> university@tmu.ac.in; <b>Website:</b> www.tmu.ac.in</p>

</td>
</tr>

    </table>

<div id="job_form_heading">
    INTERVIEWEE DETAILS FORM
</div>
<h5>Personal Details:</h5>
    <table>

        <tbody>
            <tr>
                <td class="name-column">College</td>
                <td class="word-break">        
                    @if (!empty($jobapplication['college_name']['cd_name']))
                    {{$jobapplication['college_name']['cd_name']}}
                  @else
                    University Administration
                  @endif
                </td>
                <td class="email-column">Department</td>
                <td class="word-break">  @if (!empty($jobapplication['department_name']['department_name'])) <!-- Check if colleges relationship is not null -->
                    {{$jobapplication['department_name']['department_name']}}
                  @endif</td>
            
            </tr>
            <tr>
                <td class="email-column">Designation</td>
                <td class="word-break">     
                    @if (!empty($jobapplication['designation_name']['designation_name'])) <!-- Check if colleges relationship is not null -->
                    {{$jobapplication['designation_name']['designation_name']}}
                  @endif
                </td>
                <td class="name-column">Name</td>
                <td class="word-break">{{ $jobapplication->name }}</td>
       
            </tr>

            <tr>
                <td class="email-column">DOB</td>
                <td class="word-break">{{ $jobapplication->dob}}</td>

                <td class="email-column">Mobile No</td>
                <td class="word-break">{{ $jobapplication->mobile_no}}</td>

            </tr>

            <tr>
                <td class="email-column">Email</td>
                <td class="word-break">{{ $jobapplication->email}}</td>

                <td class="email-column">PAN</td>
                <td class="word-break">{{ $jobapplication->pan}}</td>

            </tr>

            <tr>
                <td class="email-column">Adhaar</td>
                <td class="word-break">{{ $jobapplication->aadhar}}</td>

                <td class="email-column">Religion</td>
                <td class="word-break">{{ $jobapplication->religion}}</td>

            </tr>
            <tr>
                <td class="email-column">Category</td>
                <td class="word-break">{{ $jobapplication->category}}</td>

                <td class="email-column">Marital Status</td>
                <td class="word-break">{{ $jobapplication->marital_status}}</td>

            </tr>
            <tr>
                <td class="email-column">Present Address</td>
                <td class="word-break other-tables-td-th ">{{ $jobapplication->present_address}}</td>

                <td class="email-column">Permanent Address</td>
                <td class="word-break other-tables-td-th ">{{ $jobapplication->permanent_address}}</td>

            </tr>
        </tbody>
    </table>
<h5>Qualifications: </h5>
<table>
<tr>
<th class="word-break other-tables-td-th-border">
Mode type
</th>
<th class="word-break other-tables-td-th-border">
Exam/Degree
</th>
<th class="word-break other-tables-td-th-border">
Board/University Name
</th>
<th class="word-break other-tables-td-th-border">
  Specialization  
</th>
<th class="word-break other-tables-td-th-border">
    Year of Passing
</th>

<th class="word-break other-tables-td-th-border">
    Percentage/CGPA
</th>
</tr>

@foreach ($job_qualifications as $job_qualification)
<tr>
<td class="word-break other-tables-td-th-border">
    {{$job_qualification->mode_type}}
</td>
<td class="word-break other-tables-td-th-border">
    {{$job_qualification->exam_degree}}
</td>'
<td class="word-break other-tables-td-th-border">
    {{$job_qualification->board_university}}
</td>
<td class="word-break other-tables-td-th-border">
    {{$job_qualification->qualification_specialization}}
</td>
<td class="word-break other-tables-td-th-border">
    {{$job_qualification->year_of_passing}}
</td>
<td class="word-break other-tables-td-th-border">
    {{$job_qualification->percentage}}
</td>'
</tr>
@endforeach
</table>


<h5>Exams Qualified: </h5>
<table>
<tr>
<th class="word-break other-tables-td-th-border">
Exam Qualified
</th>
<th class="word-break other-tables-td-th-border">
Passing Year
</th>
<th class="word-break other-tables-td-th-border">
Subject
</th>
</tr>

@foreach ($exams_qualified  as $exam_qualified)
<tr>
<td class="word-break other-tables-td-th-border">
    {{$exam_qualified->exam_qualified_name}}
</td>
<td class="word-break other-tables-td-th-border">
    {{$exam_qualified->exam_qualified_passing_year}}
</td>'
<td class="word-break other-tables-td-th-border">
    {{$exam_qualified->exam_qualified_subject}}
</td>
</tr>
@endforeach
</table>

<h5>CURRENT / LAST EMPLOYMENT</h5>
<table>
    <tr>
        <th class="word-break other-tables-td-th-border">
        University/Institute/Company Name
        </th>
        <th class="word-break other-tables-td-th-border">
        Work category
        </th>
        <th class="word-break other-tables-td-th-border">
        Type of Appointment
        </th>
        <th class="word-break other-tables-td-th-border">
            Designation
        </th>
        <th class="word-break other-tables-td-th-border">
            Date of Joining
        </th>
        @if($jobapplication->currently_employed == 'Y')
        <th class="word-break other-tables-td-th-border">
            Date of Leaving
        </th>
      
        @endif
    @if($jobapplication->currently_employed != 'Y')
        <th class="word-break other-tables-td-th-border">
            Date of Leaving
        </th>
        <th class="word-break other-tables-td-th-border">
            Reason
        </th>
        @endif

        </tr>
        <tr>
        <td class="word-break other-tables-td-th-border">
           {{$jobapplication->curent_comp_name}}
            </td>
            <td class="word-break other-tables-td-th-border">
                {{$jobapplication->current_comp_category}}
            </td>
            <td class="word-break other-tables-td-th-border">
                {{$jobapplication->current_comp_appointment}}
            </td>
            <td class="word-break other-tables-td-th-border">
                {{$jobapplication->current_comp_designation}}
            </td>
            <td class="word-break other-tables-td-th-border">
                {{$jobapplication->current_comp_date_of_joining}}
            </td>
    
            @if($jobapplication->currently_employed == 'Y')
            <td class="word-break other-tables-td-th-border">
            Currently Employed
            </td>
          
            @endif
        @if($jobapplication->currently_employed != 'Y')
            <td class="word-break other-tables-td-th-border">
                {{$jobapplication->current_comp_date_of_leaving}}
            </td>
            <td class="word-break other-tables-td-th-border">
                {{$jobapplication->current_comp_date_of_leaving_reason}}
            </td>
            @endif

        </tr>
</table>





<h5>Experience</h5>
<table>
    <tr>
        <th class="word-break other-tables-td-th-border">
        Total Experience
        </th>
        <td class="word-break other-tables-td-th-border">
        {{$jobapplication->total_experience}}
        </td>
        <th class="word-break other-tables-td-th-border">
        Academic Experience
        </th>
        <td class="word-break other-tables-td-th-border">
            {{$jobapplication->academic_experience}}
        </td>
    </tr>
    <tr>
        <th class="word-break other-tables-td-th-border">
        Industrial Experience
        </th>
        <td class="word-break other-tables-td-th-border">
        {{$jobapplication->industrial_experience}}
        </td>
        <th class="word-break other-tables-td-th-border">
        Current / Last Salary
        </th>
        <td class="word-break other-tables-td-th-border">
            {{$jobapplication->current_salary}}
        </td>
    </tr>

    <tr>
        <th class="word-break other-tables-td-th-border">
        Expected Salary
        </th>
        <td class="word-break other-tables-td-th-border">
        {{$jobapplication->expected_salary}}
        </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
       
</table>

<p style="text-align:justify;font-size:12px;"><span style="font-size:15px;font-weight:bold;">Note - </span> Non-teaching staff selection will be on Contractual basis for 11 Months. For teaching staff 10% of the salary and for Nursing teaching staff (UG Tutor-1000/-, PG Tutor-2000/-, AP-3000/-, Asso. Prof. -4000/-, Prof.-5000/- Rupees) will be deducted per month for 01 year as deposit security amount. After the completion of 01 year of service, total deposited security amount will be transferred in the bank account of the employee. In case he/she leaves the job before one year (due to any cause) total deposit security will be forfeited.)</p>
<p style="text-align:justify;font-size:12px;"><span style="font-size:15px;font-weight:bold;">DECLARATION: </span>I hereby declare that, I have read all the conditions (mentioned above) clearly and the details given above are true and correct to the best of my knowledge.</p>

</body>
</html>
