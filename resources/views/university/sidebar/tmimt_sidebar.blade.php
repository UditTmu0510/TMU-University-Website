<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('tmimt.home') }}" class="custom-menu-item {{ setActive('tmimt.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('mgmt.overview') }}" class="custom-menu-item {{ setActive('mgmt.overview') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('mgmt.highlight') }}" class="custom-menu-item {{ setActive('mgmt.highlight') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('mgmt.principal') }}" class="custom-menu-item {{ setActive('mgmt.principal') }}">
                <p>Principal's Desk</p>
            </a>
        </div>
        <h2>Academics</h2>
        
        <div class="account-section">
            <a href="{{ route('mgmt.syllabus') }}" class="custom-menu-item {{ Request::routeIs('mgmt.syllabus') ? 'active' : '' }}">
     <p>Syllabus</p>
 </a>
            <a href="{{ route('mgmt.academic.calendar') }}" class="custom-menu-item {{ setActive('mgmt.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2 style="font-size:18px!important;">Training & Placements</h2>
        <div class="account-section">
            <a href="{{ route('mgmt.tpc') }}" class="custom-menu-item {{ setActive('mgmt.tpc') }}">
                <p>Training Placement Cell</p>
            </a>
            <a href="{{ route('mgmt.ca.board') }}" class="custom-menu-item {{ setActive('mgmt.ca.board') }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('mgmt.placement.brochure') }}" class="custom-menu-item {{ setActive('mgmt.placement.brochure') }}">
                <p>Placement Brochure</p>
            </a>
            <a href="{{ route('mgmt.placement.calendar') }}" class="custom-menu-item {{ setActive('mgmt.placement.calendar') }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('mgmt.news') }}" class="custom-menu-item {{ setActive('mgmt.news') }}">
                <p>Placement News/Articles</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('mgmt.timetable') }}" class="custom-menu-item {{ setActive('mgmt.timetable') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('mgmt.anti.ragging') }}" class="custom-menu-item {{ setActive('mgmt.anti.ragging') }}">
                <p>Anti-Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('mgmt.magazine') }}" class="custom-menu-item {{ setActive('mgmt.magazine') }}">
                <p>Event-Magazine</p>
            </a>
            <a href="{{ route('mgmt.guestlecture') }}" class="custom-menu-item {{ setActive('mgmt.guestlecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('mgmt.scst.committee') }}" class="custom-menu-item {{ setActive('mgmt.scst.committee') }}">
                <p>SCST Committee</p>
            </a>
            <a href="{{ route('mgmt.icc.committee') }}" class="custom-menu-item {{ setActive('mgmt.icc.committee') }}">
                <p>ICC Committee</p>
            </a>
            <a href="{{ route('mgmt.contactus') }}" class="custom-menu-item {{ setActive('mgmt.contactus') }}">
                <p>Contact Us</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
