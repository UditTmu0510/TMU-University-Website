<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.home') }}" class="custom-menu-item {{ setActive('ccsit.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('ccsit.about.us') }}" class="custom-menu-item {{ setActive('ccsit.about.us') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('ccsit.highlights') }}" class="custom-menu-item {{ setActive('ccsit.highlights') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('ccsit.principal') }}" class="custom-menu-item {{ setActive('ccsit.principal') }}">
                <p>Dean's Desk</p>
            </a>
            <a href="{{ route('ccsit.gallery') }}" class="custom-menu-item {{ setActive('ccsit.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.syllabus') }}" class="custom-menu-item {{ setActive('ccsit.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('ccsit.academic.calendar') }}" class="custom-menu-item {{ setActive('ccsit.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.timetable') }}" class="custom-menu-item {{ setActive('ccsit.timetable') }}">
                <p>Time Table</p>
            </a>

            <a href="{{ route('ccsit.study.material') }}" class="custom-menu-item {{ setActive('ccsit.study.material') }}">
                <p>Study Material</p>
            </a>

            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('ccsit.anti.ragging') }}" class="custom-menu-item {{ setActive('ccsit.anti.ragging') }}">
                <p>Anti-Ragging Committee</p>
            </a>
            <a href="{{ route('ccsit.project.guidelines') }}" class="custom-menu-item {{ setActive('ccsit.project.guidelines') }}">
                <p>Project Guidelines</p>
            </a>
            <a href="{{ route('ccsit.project.templates') }}" class="custom-menu-item {{ setActive('ccsit.project.templates') }}">
                <p>Project Templates</p>
            </a>
        </div>
        <h2 class="fs-16">Training & Placements Cell</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.corporate.advisory') }}" class="custom-menu-item {{ setActive('ccsit.corporate.advisory') }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('ccsit.placement.calendar') }}" class="custom-menu-item {{ setActive('ccsit.placement.calendar') }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('ccsit.placement.brochure') }}" class="custom-menu-item {{ setActive('ccsit.placement.brochure') }}">
                <p>Placement Brochure</p>
            </a>
            <a href="{{ route('ccsit.placement.news') }}" class="custom-menu-item {{ setActive('ccsit.placement.news') }}">
                <p>Placement News</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('ccsit.guest.lecture') }}" class="custom-menu-item {{ setActive('ccsit.guest.lecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('ccsit.contact.us') }}" class="custom-menu-item {{ setActive('ccsit.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('ccsit.karyashala') }}" class="custom-menu-item {{ setActive('ccsit.karyashala') }}">
                <p>Kaaryashala</p>
            </a>
            <a href="{{ route('ccsit.event.magazine') }}" class="custom-menu-item {{ setActive('ccsit.event.magazine') }}">
                <p>Event Magazine</p>
            </a>
            <a href="{{ route('ccsit.iqac') }}" target="_blank" class="custom-menu-item {{ setActive('ccsit.iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
