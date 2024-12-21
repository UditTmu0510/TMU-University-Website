@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')



<div class="main-content">
  <div class="container">
    <!-- Write content for right side here  -->
    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span> TMU </span><span> Policies</span></h1>

    <div class="iqac-container">
      <div class="iqac-card">
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Financial Assistance Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/promotion_of_research.pdf')}}" target="_blank">View PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-1"
            href="{{asset('/assets/pdf/policy/Regulations_Financial_Assistance_2021_Ammended_2022.pdf')}}" target="_blank">View Amendment PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-1"
            href="{{asset('/assets/pdf/pdf/Annexure_01_Approved_National_Bodies.pdf')}}" target="_blank">View Annexure-I</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-1"
            href="{{asset('/assets/pdf/pdf/Annexure_02_Approved_Professional_Bodies.pdf')}}" target="_blank">View Annexure-II</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Incentive Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/tmu_incentive_policy.pdf')}}" target="_blank">View PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-2"
            href="{{asset('/assets/pdf/pdf/RAF_2021(Ammended-2022).pdf')}}" target="_blank">View Amendment PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Consultancy Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/consultancy_policy.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Seed Money Grant Scheme</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/seed_money_grant_scheme_2021.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">IPR Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/ipr-policy.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">VC'S Innovation Fund</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/Academic_Ordinance_2022.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">MDP and Consultancy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/mdp-and-consultancy.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Resource Mobilization Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/resource_mobilization_policy.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Maintainance Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/maintenance_policy.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">IT Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/tmu_it_policy.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Transport Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/transport_policy.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Green Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/tmu_green_policy.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Tour Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/tmu_tour_policy.pdf')}}" target="_blank">View PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Performance Appraisal Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/performance_appraisal_policy.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Service Rule</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-1"
            href="{{asset('/assets/pdf/policy/promotion_of_research.pdf')}}" target="_blank">View PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/ammendment_service_rule.pdf')}}" target="_blank">View Amendmend
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Faculty Recruitment Policy</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
            href="{{asset('/assets/pdf/policy/ammendment_service_rule.pdf')}}" target="_blank">View
            Amendmend PDF</a>
        </div>
      </div>
    </div>


    <h2 class="tmu-text-primary tmu-page-heading mt-md-5"><span>TMU </span><span> Sops </span></h2>
    <div class="iqac-container">
      <div class="iqac-card">
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Fire Sops</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/fire_sop.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Security Sops</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/security_sop.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Hostel Sops</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/hostel_sop.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Organizing Academic Events Sop</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-1-0.pdf')}}" target="_blank">View
            PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-2" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-1-1.pdf')}}" target="_blank">View
            Amendment PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Student Attendance Monitoring SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-2-0.pdf')}}" target="_blank">View
            PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-2" href="{{asset('/assets/pdf/policy/sops/TMU_SOP_2_01_Student_Attendance_Monitoring.pdf')}}" target="_blank">View
            Amendment PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Dress Code / ID-Cards-Faculty Members SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-3-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Organizing Educational Tours/Industrial Visits/Excursion-cum-Learning Tours SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-4-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Annual Targets at College/Faculty Level SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-5-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Organizing University Events: Cultural, Fresher, and Farewell Parties SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-6-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Evaluating MOOC Courses as 4-Credit Full Course in Undergraduate Programs SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-7-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Project-Based Learning (PBL) SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-8-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Internship/Dissertation Reports SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-9-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">To avail the Financial Assistance SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-10-0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">OBE Implementation SOP</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-11-0.pdf')}}" target="_blank">View
            PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-2" href="{{asset('/assets/pdf/policy/sops/TMU_SOP-11.1.pdf')}}" target="_blank">View
            Amendement PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Academic Review Visits in Colleges</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/Academic_Review.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Research Excellence Awards</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/SOP_16_for_Research_Excellence_Award.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Conduction of Pre-thesis Submission Presentation and Oral Defense Examination/Final Viva-Voce</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/SOP_17_CPTSP_ODE.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Financial Assistance to Students & Research Scholars for the Promotion of Research</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/SOP_018_FAS&RSPOR.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Organizing Inter-University/College Events for Students</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/SOP-19.0.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Process for approval of No Dues of Student</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/SOP-20.0.pdf')}}" target="_blank">View
            PDF</a>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mt-2" href="{{asset('/assets/pdf/policy/sops/SOP_20_01.pdf')}}" target="_blank">View
            Amendment PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Students participation in events conducted Outside University</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/SOP_21.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">TMU Student Clubs </p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/TMU_Student_Clubs.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Identification of Slow and Advanced Learners (Process and Outcome)</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/Identifying_Slow_and_Advanced_Learners.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">Mentor-Mentee System</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/Mentor-Mentee-System.pdf')}}" target="_blank">View
            PDF</a>
        </div>
        <div class="card-pdf">
          <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
          <p class="description">PMS for Faculty Members</p>
          <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/policy/sops/PMS_for_Faculty_Members.pdf')}}" target="_blank">View
            PDF</a>
        </div>

      </div>
    </div>
  </div>
</div>
</div>


@endsection