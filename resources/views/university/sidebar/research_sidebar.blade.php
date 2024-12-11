<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Research at a Glance</h2>
        <div class="account-section">
            <a href="{{ route('research.about') }}" class="custom-menu-item {{ setActive('research.about') }}">
                <p>About Research & Development Cell</p>
            </a>
            <a href="{{ route('research.policy') }}" class="custom-menu-item {{ setActive('research.policy') }}">
                <p>Research Policy</p>
            </a>
            <a href="{{ route('code.of.ethics') }}" class="custom-menu-item {{ setActive('code.of.ethics') }}">
                <p>Code of Ethics</p>
            </a>
            <a href="{{ route('conferences') }}" class="custom-menu-item {{ setActive('conferences') }}">
                <p>Conferences</p>
            </a>
            <a href="{{ route('research.publication') }}" class="custom-menu-item {{ setActive('research.publication') }}">
                <p>Research Publications</p>
            </a>
            <a href="{{ route('sponsored.project') }}" class="custom-menu-item {{ setActive('sponsored.project') }}">
                <p>Sponsored Project</p>
            </a>
            <a href="{{ route('patent') }}" class="custom-menu-item {{ setActive('patent') }}">
                <p>Patents</p>
            </a>
            <a href="{{ route('seed.money') }}" class="custom-menu-item {{ setActive('seed.money') }}">
                <p>Seed Money</p>
            </a>
            <a href="{{ route('research.innovation.awards') }}" class="custom-menu-item {{ setActive('research.innovation.awards') }}">
                <p>Institution/Teachers/<br>Students Award</p>
            </a>
            <a href="{{ route('fellowship.awards') }}" class="custom-menu-item {{ setActive('fellowship.awards') }}">
                <p>Fellowship / Recognition Award</p>
            </a>
        </div>
        <h2>PhD Programme</h2>
        <div class="account-section">
            <a href="{{ route('phd.overview') }}" class="custom-menu-item {{ setActive('phd.overview') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('phd.ordinance') }}" class="custom-menu-item {{ setActive('phd.ordinance') }}">
                <p>Ordinance</p>
            </a>
            <a href="{{ route('phd.intake') }}" class="custom-menu-item {{ setActive('phd.intake') }}">
                <p>Intake of Ph.D. Programmes</p>
            </a>
            <a href="{{ route('research.scholar') }}" class="custom-menu-item {{ setActive('research.scholar') }}">
                <p>Research Scholars</p>
            </a>
            <a href="{{ route('syllabus.course.work') }}" class="custom-menu-item {{ setActive('syllabus.course.work') }}">
                <p>Syllabus of Course Work</p>
            </a>
            <a href="{{ route('syllabi.for.discipline') }}" class="custom-menu-item {{ setActive('syllabi.for.discipline') }}">
                <p>Syllabus of Discipline Specific Course Work Applicable</p>
            </a>
            <a href="{{ route('phd.faq') }}" class="custom-menu-item {{ setActive('phd.faq') }}">
                <p>FAQs</p>
            </a>
        </div>
        <h2>How to apply</h2>
        <div class="account-section">
            <a href="{{ route('phd.admission.notice') }}" class="custom-menu-item {{ setActive('phd.admission.notice') }}">
                <p>Admission Notice</p>
            </a>
            <a href="{{ route('phd.how.to.apply') }}" class="custom-menu-item {{ setActive('phd.how.to.apply') }}">
                <p>Instructions For Apply</p>
            </a>
            <a href="{{ route('phd.process') }}" class="custom-menu-item {{ setActive('phd.process') }}">
                <p>Ph.D. Process</p>
            </a>
            <a href="{{ route('checklist') }}" class="custom-menu-item {{ setActive('checklist') }}">
                <p>Checklist of Documents</p>
            </a>
            <a href="{{ route('phd.application.form') }}" class="custom-menu-item {{ setActive('phd.application.form') }}">
                <p>Application Form</p>
            </a>
            <a href="{{ route('phd.fee.structure') }}" class="custom-menu-item {{ setActive('phd.fee.structure') }}">
                <p>Fee structure</p>
            </a>
        </div>
        <h2>Downloads</h2>
        <div class="account-section">
            <a href="{{ route('semester.progress.report') }}" target="_blank" class="custom-menu-item {{ setActive('semester.progress.report') }}">
                <p>Semester Progress Report</p>
            </a>
            <a href="{{ route('thesis.submission.form') }}" class="custom-menu-item {{ setActive('thesis.submission.form') }}">
                <p>Thesis Submission Form</p>
            </a>
            <a href="{{ route('phd.no.dues') }}" class="custom-menu-item {{ setActive('phd.no.dues') }}">
                <p>No Dues Form</p>
            </a>
            <a href="{{ route('phd.provisional.degree.proforma') }}" class="custom-menu-item {{ setActive('phd.provisional.degree.proforma') }}">
                <p>Provisional Degree Certificate Proforma</p>
            </a>
            <a href="{{ route('final.thesis.submission.form') }}" class="custom-menu-item {{ setActive('final.thesis.submission.form') }}">
                <p>Final Thesis Submission Form</p>
            </a>
            <a href="{{ route('phd.result') }}" class="custom-menu-item {{ setActive('phd.result') }}">
                <p>Results</p>
            </a>
        </div>
    </div>
    <div class="account-section">
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>