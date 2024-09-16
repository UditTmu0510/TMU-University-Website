<div class="main-sidebar" id="main-sidebar">
  <div class="logo">
      <span class="close-btn" id="closeSidebar">&times;</span>
  </div>
  <div class="custom-menu-section">
      <h2>Research at a Glance</h2>
      <div class="account-section">
          <a href="{{ route('research.about') }}" class="custom-menu-item {{ Request::routeIs('research.about') ? 'active' : '' }}">
              <p>About Research & Development Cell</p>
          </a>
          <a href="{{ route('research.policy') }}" class="custom-menu-item {{ Request::routeIs('research.policy') ? 'active' : '' }}">
              <p>Research Policy</p>
          </a>
          <a href="{{ route('code.of.ethics') }}" class="custom-menu-item {{ Request::routeIs('code.of.ethics') ? 'active' : '' }}">
              <p>Code of Ethics</p>
          </a>
          <a href="{{ route('conferences') }}" class="custom-menu-item {{ Request::routeIs('conferences') ? 'active' : '' }}">
              <p>Conferences</p>
          </a>
          <a href="{{ route('research.publication') }}" class="custom-menu-item {{ Request::routeIs('research.publication') ? 'active' : '' }}">
              <p>Research Publications</p>
          </a>
          <a href="{{ route('sponsored.project') }}" class="custom-menu-item {{ Request::routeIs('sponsored.project') ? 'active' : '' }}">
              <p>Sponsored Project</p>
          </a>
          <a href="{{ route('patent') }}" class="custom-menu-item {{ Request::routeIs('patent') ? 'active' : '' }}">
              <p>Patents</p>
          </a>
          <a href="{{ route('seed.money') }}" class="custom-menu-item {{ Request::routeIs('seed.money') ? 'active' : '' }}">
              <p>Seed Money</p>
          </a>
          <a href="{{ route('research.innovation.awards') }}" class="custom-menu-item {{ Request::routeIs('research.innovation.awards') ? 'active' : '' }}">
              <p>Institution/Teachers/<br>Students Award</p>
          </a>
          <a href="{{ route('fellowship.awards') }}" class="custom-menu-item {{ Request::routeIs('fellowship.awards') ? 'active' : '' }}">
              <p>Fellowship / Recognition Award</p>
          </a>
      </div>
      <h2>PhD Programme</h2>
      <div class="account-section">
          <a href="{{ route('phd.overview') }}" class="custom-menu-item {{ Request::routeIs('phd.overview') ? 'active' : '' }}">
              <p>Overview</p>
          </a>
          <a href="{{ route('phd.ordinance') }}" class="custom-menu-item {{ Request::routeIs('phd.ordinance') ? 'active' : '' }}">
              <p>Ordinance</p>
          </a>
          <a href="{{ route('phd.intake') }}" class="custom-menu-item {{ Request::routeIs('phd.intake') ? 'active' : '' }}">
              <p>Intake of Ph.D. Programmes</p>
          </a>
          <a href="{{ route('syllabus.course.work') }}" class="custom-menu-item {{ Request::routeIs('syllabus.course.work') ? 'active' : '' }}">
              <p>Syllabus of Course Work</p>
          </a>
          <a href="{{ route('phd.faq') }}" class="custom-menu-item {{ Request::routeIs('phd.faq') ? 'active' : '' }}">
              <p>FAQs</p>
          </a>
      </div>
      <h2>How to apply</h2>
      <div class="account-section">
          <a href="{{ route('phd.admission.notice') }}" class="custom-menu-item {{ Request::routeIs('phd.admission.notice') ? 'active' : '' }}">
              <p>Admission Notice</p>
          </a>
          <a href="{{ route('phd.how.to.apply') }}" class="custom-menu-item {{ Request::routeIs('phd.how.to.apply') ? 'active' : '' }}">
              <p>Instructions For Apply</p>
          </a>
          <a href="{{ route('phd.process') }}" class="custom-menu-item {{ Request::routeIs('phd.process') ? 'active' : '' }}">
              <p>Ph.D. Process</p>
          </a>
          <a href="{{ route('checklist') }}" class="custom-menu-item {{ Request::routeIs('checklist') ? 'active' : '' }}">
              <p>Checklist of Documents</p>
          </a>
          <a href="{{ route('phd.application.form') }}" class="custom-menu-item {{ Request::routeIs('phd.application.form') ? 'active' : '' }}">
              <p>Application Form</p>
          </a>
          <a href="{{ route('phd.fee.structure') }}" class="custom-menu-item {{ Request::routeIs('phd.fee.structure') ? 'active' : '' }}">
              <p>Fee structure</p>
          </a>
      </div>
      <h2>Downloads</h2>
      <div class="account-section">
          <a href="{{ route('semester.progress.report') }}" target="_blank" class="custom-menu-item {{ Request::routeIs('semester.progress.report') ? 'active' : '' }}">
              <p>Semester Progress Report</p>
          </a>
          <a href="{{ route('thesis.submission.form') }}" class="custom-menu-item {{ Request::routeIs('thesis.submission.form') ? 'active' : '' }}">
              <p>Thesis Submission Form</p>
          </a>
          <a href="{{ route('phd.no.dues') }}" class="custom-menu-item {{ Request::routeIs('phd.no.dues') ? 'active' : '' }}">
              <p>No Dues Form</p>
          </a>
          <a href="{{ route('phd.provisional.degree.proforma') }}" class="custom-menu-item {{ Request::routeIs('phd.provisional.degree.proforma') ? 'active' : '' }}">
              <p>Provisional Degree Certificate Proforma</p>
          </a>
          <a href="{{ route('final.thesis.submission.form') }}" class="custom-menu-item {{ Request::routeIs('final.thesis.submission.form') ? 'active' : '' }}">
              <p>Final Thesis Submission Form</p>
          </a>
          <a href="{{ route('phd.result') }}" class="custom-menu-item {{ Request::routeIs('phd.result') ? 'active' : '' }}">
              <p>Results</p>
          </a>
      </div>
  </div>
  <div class="account-section">

  </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
