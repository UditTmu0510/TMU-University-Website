<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('nursing.overview') }}" class="custom-menu-item {{ Request::routeIs('nursing.overview') ? 'active' : '' }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('nursing.college.highlight') }}" class="custom-menu-item {{ Request::routeIs('nursing.college.highlight') ? 'active' : '' }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('nursing.dean') }}" class="custom-menu-item {{ Request::routeIs('nursing.dean') ? 'active' : '' }}">
                <p>Dean's Desk</p>
            </a>
            <a href="{{ route('nursing.viceprincipal') }}" class="custom-menu-item {{ Request::routeIs('nursing.viceprincipal') ? 'active' : '' }}">
                <p>Vice Principal's Desk</p>
            </a>
            <a href="{{ route('nursing.college.advisory.board') }}" class="custom-menu-item {{ Request::routeIs('nursing.college.advisory.board') ? 'active' : '' }}">
                <p>College Advisory Board</p>
            </a>
            <a href="{{ route('nursing.gallery') }}" class="custom-menu-item {{ Request::routeIs('nursing.gallery') ? 'active' : '' }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('nursing.department') }}" class="custom-menu-item {{ Request::routeIs('nursing.department') ? 'active' : '' }}">
                <p>Department</p>
            </a>
            <a href="{{ route('nursing.syllabus') }}" class="custom-menu-item {{ Request::routeIs('nursing.syllabus') ? 'active' : '' }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('nursing.academic.calednar') }}" class="custom-menu-item {{ Request::routeIs('nursing.academic.calednar') ? 'active' : '' }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Placement Cell</h2>
        <div class="account-section">
            <a href="{{ route('nursing.tpc') }}" class="custom-menu-item {{ Request::routeIs('nursing.tpc') ? 'active' : '' }}">
                <p>Training Placement Cell</p>
            </a>
            <a href="{{ route('nursing.corporate.advisory.board') }}" class="custom-menu-item {{ Request::routeIs('nursing.corporate.advisory.board') ? 'active' : '' }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('nursing.placement.calendar') }}" class="custom-menu-item {{ Request::routeIs('nursing.placement.calendar') ? 'active' : '' }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('nursing.placement.news') }}" class="custom-menu-item {{ Request::routeIs('nursing.placement.news') ? 'active' : '' }}">
                <p>Placement News / Article</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('nursing.timetable') }}" class="custom-menu-item {{ Request::routeIs('nursing.timetable') ? 'active' : '' }}">
                <p>Time Table</p>
            </a>
            <a href="https://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('nursing.anti.ragging') }}" class="custom-menu-item {{ Request::routeIs('nursing.anti.ragging') ? 'active' : '' }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('nursing.guest.lecture') }}" class="custom-menu-item {{ Request::routeIs('nursing.guest.lecture') ? 'active' : '' }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('nursing.contact.us') }}" class="custom-menu-item {{ Request::routeIs('nursing.contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
        </div>
        <div class="account-section">
            <a href="{{ route('nursing.iqac') }}" class="custom-menu-item {{ Request::routeIs('nursing.iqac') ? 'active' : '' }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
    <div class="account-section">
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
