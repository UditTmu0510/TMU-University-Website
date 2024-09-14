<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('medical.about.us') }}" class="custom-menu-item {{ Route::is('medical.about.us') ? 'active' : '' }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('medical.college.info') }}" class="custom-menu-item {{ Route::is('medical.college.info') ? 'active' : '' }}">
                <p>College Information</p>
            </a>
            <a href="{{ route('medical_infra') }}" class="custom-menu-item {{ Route::is('medical_infra') ? 'active' : '' }}">
                <p>Infrastructure</p>
            </a>
            <a href="{{ route('medical.citizens') }}" class="custom-menu-item {{ Route::is('medical.citizens') ? 'active' : '' }}">
                <p>Citizen's Charter</p>
            </a>
            <a href="{{ route('medical.highlights') }}" class="custom-menu-item {{ Route::is('medical.highlights') ? 'active' : '' }}">
                <p>College Highlight</p>
            </a>
            <a href="{{ route('medical.principal') }}" class="custom-menu-item {{ Route::is('medical.principal') ? 'active' : '' }}">
                <p>Principal Desk</p>
            </a>
            <a href="{{ route('medical.supritendent') }}" class="custom-menu-item {{ Route::is('medical.supritendent') ? 'active' : '' }}">
                <p>Medical Supritendent's Desk</p>
            </a>
        </div>
        <h2>Approvals</h2>
        <div class="account-section">
            <a href="{{ route('medical.affliation') }}" class="custom-menu-item {{ Route::is('medical.affliation') ? 'active' : '' }}">
                <p>Affiliation</p>
            </a>
            <a href="{{ route('medical_approvals') }}" class="custom-menu-item {{ Route::is('medical_approvals') ? 'active' : '' }}">
                <p>Govt. Approvals</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('medical.sanctioned.intake') }}" class="custom-menu-item {{ Route::is('medical.sanctioned.intake') ? 'active' : '' }}">
                <p>Sanctioned Intake</p>
            </a>
            <a href="{{ route('medical.departements') }}" class="custom-menu-item {{ Route::is('medical.departements') ? 'active' : '' }}">
                <p>Departments</p>
            </a>
            <a href="{{ route('medical.learning') }}" class="custom-menu-item {{ Route::is('medical.learning') ? 'active' : '' }}">
                <p>Learning Objectives</p>
            </a>
            <a href="{{ route('medical.foundation') }}" class="custom-menu-item {{ Route::is('medical.foundation') ? 'active' : '' }}">
                <p>Foundation Course</p>
            </a>
            <a href="{{ route('medical.academic.calendar') }}" class="custom-menu-item {{ Route::is('medical.academic.calendar') ? 'active' : '' }}">
                <p>Academic Calendar</p>
            </a>
            <a href="{{ route('medical.stipend') }}" class="custom-menu-item {{ Route::is('medical.stipend') ? 'active' : '' }}">
                <p>Stipend</p>
            </a>
            <a href="{{ route('medical.aebas.attendance') }}" class="custom-menu-item {{ Route::is('medical.aebas.attendance') ? 'active' : '' }}">
                <p>Aebas Attendance</p>
            </a>
        </div>
        <h2>Student's Corner</h2>
        <div class="account-section">
            <a href="{{ route('medical.timetable') }}" class="custom-menu-item {{ Route::is('medical.timetable') ? 'active' : '' }}">
                <p>Time Table</p>
            </a>
            <a href="{{ route('medical.bestpractice') }}" class="custom-menu-item {{ Route::is('medical.bestpractice') ? 'active' : '' }}">
                <p>Best Practices</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('medical.anti.ragg') }}" class="custom-menu-item {{ Route::is('medical.anti.ragg') ? 'active' : '' }}">
                <p>Anti Ragging Committee</p>
            </a>
            <a href="{{ route('medical.ghc') }}" class="custom-menu-item {{ Route::is('medical.ghc') ? 'active' : '' }}">
                <p>Gender Harassment Committee</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="https://www.tmu.ac.in/pdf/medical/faculty_details/Faculty_details_July_24.pdf" class="custom-menu-item">
                <p>Faculty Details</p>
            </a>
            <a href="{{ route('medical.gallery') }}" class="custom-menu-item {{ Route::is('medical.gallery') ? 'active' : '' }}">
                <p>Gallery</p>
            </a>
            <a href="{{ route('medical.contactus') }}" class="custom-menu-item {{ Route::is('medical.contactus') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
        </div>
    </div>
    <div class="account-section"></div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
