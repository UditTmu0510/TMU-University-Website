<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('physical.education.about.us') }}" class="custom-menu-item {{ Request::routeIs('physical.education.about.us') ? 'active' : '' }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('physical.education.college.highlight') }}" class="custom-menu-item {{ Request::routeIs('physical.education.college.highlight') ? 'active' : '' }}">
                <p>College Highlight</p>
            </a>
            <a href="{{ route('physical.education.principal') }}" class="custom-menu-item {{ Request::routeIs('physical.education.principal') ? 'active' : '' }}">
                <p>Principal</p>
            </a>
            <a href="{{ route('physical.education.gallery') }}" class="custom-menu-item {{ Request::routeIs('physical.education.gallery') ? 'active' : '' }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('physical.education.syllabus') }}" class="custom-menu-item {{ Request::routeIs('physical.education.syllabus') ? 'active' : '' }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('physical.education.academic.calendar') }}" class="custom-menu-item {{ Request::routeIs('physical.education.academic.calendar') ? 'active' : '' }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('physical.education.timetable') }}" class="custom-menu-item {{ Request::routeIs('physical.education.timetable') ? 'active' : '' }}">
                <p>Time-Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('physical.education.anti.ragging') }}" class="custom-menu-item {{ Request::routeIs('physical.education.anti.ragging') ? 'active' : '' }}">
                <p>Anti-Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('physical.education.guest.lecture') }}" class="custom-menu-item {{ Request::routeIs('physical.education.guest.lecture') ? 'active' : '' }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('physical.education.contact.us') }}" class="custom-menu-item {{ Request::routeIs('physical.education.contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('physical.education.iqac') }}" class="custom-menu-item {{ Request::routeIs('physical.education.iqac') ? 'active' : '' }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
