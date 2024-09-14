<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.about.us') }}" class="custom-menu-item {{ Route::is('ccsit.about.us') ? 'active' : '' }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('ccsit.highlights') }}" class="custom-menu-item {{ Route::is('ccsit.highlights') ? 'active' : '' }}">
                <p>College Highlight</p>
            </a>
            <a href="{{ route('ccsit.principal') }}" class="custom-menu-item {{ Route::is('ccsit.principal') ? 'active' : '' }}">
                <p>Principal</p>
            </a>
            <a href="{{ route('ccsit.gallery') }}" class="custom-menu-item {{ Route::is('ccsit.gallery') ? 'active' : '' }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.syllabus') }}" class="custom-menu-item {{ Route::is('ccsit.syllabus') ? 'active' : '' }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('ccsit.academic.calendar') }}" class="custom-menu-item {{ Route::is('ccsit.academic.calendar') ? 'active' : '' }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.timetable') }}" class="custom-menu-item {{ Route::is('ccsit.timetable') ? 'active' : '' }}">
                <p>Time-Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('ccsit.anti.ragging') }}" class="custom-menu-item {{ Route::is('ccsit.anti.ragging') ? 'active' : '' }}">
                <p>Anti-Ragging Committee</p>
            </a>
            <a href="{{ route('ccsit.project.guidelines') }}" class="custom-menu-item {{ Route::is('ccsit.project.guidelines') ? 'active' : '' }}">
                <p>Project Guidelines</p>
            </a>
            <a href="{{ route('ccsit.project.templates') }}" class="custom-menu-item {{ Route::is('ccsit.project.templates') ? 'active' : '' }}">
                <p>Project Templates</p>
            </a>
        </div>
        <h2 class="fs-16">Training & Placements Cell</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.corporate.advisory') }}" class="custom-menu-item {{ Route::is('ccsit.corporate.advisory') ? 'active' : '' }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('ccsit.placement.calendar') }}" class="custom-menu-item {{ Route::is('ccsit.placement.calendar') ? 'active' : '' }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('ccsit.placement.brochure') }}" class="custom-menu-item {{ Route::is('ccsit.placement.brochure') ? 'active' : '' }}">
                <p>Placement Brochure</p>
            </a>
            <a href="{{ route('ccsit.placement.news') }}" class="custom-menu-item {{ Route::is('ccsit.placement.news') ? 'active' : '' }}">
                <p>Placement News</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.guest.lecture') }}" class="custom-menu-item {{ Route::is('ccsit.guest.lecture') ? 'active' : '' }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('ccsit.contact.us') }}" class="custom-menu-item {{ Route::is('ccsit.contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('ccsit.karyashala') }}" class="custom-menu-item {{ Route::is('ccsit.karyashala') ? 'active' : '' }}">
                <p>Kaaryashala</p>
            </a>
            <a href="{{ route('ccsit.event.magazine') }}" class="custom-menu-item {{ Route::is('ccsit.event.magazine') ? 'active' : '' }}">
                <p>Event Magazine</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
