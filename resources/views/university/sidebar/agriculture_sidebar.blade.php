<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('agriculture_overview') }}" class="custom-menu-item {{ setActive('agriculture_overview') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('agriculture.college.highlight') }}" class="custom-menu-item {{ setActive('agriculture.college.highlight') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('agriculture.dean') }}" class="custom-menu-item {{ setActive('agriculture.dean') }}">
                <p>Dean's Desk</p>
            </a>
            <a href="{{ route('agriculture.gallery') }}" class="custom-menu-item {{ setActive('agriculture.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>

        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('agriculture.syllabus') }}" class="custom-menu-item {{ setActive('agriculture.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('agriculture.academic.calendar') }}" class="custom-menu-item {{ setActive('agriculture.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>

        <h2 style="font-size:20px;">Training & Placements</h2>
        <div class="account-section">
            <a href="{{ route('agriculture.tpc') }}" class="custom-menu-item {{ setActive('agriculture.tpc') }}">
                <p>Training Placement Cell</p>
            </a>
            <a href="{{ route('agriculture.cab') }}" class="custom-menu-item {{ setActive('agriculture.cab') }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('agriculture.placement.calendar') }}" class="custom-menu-item {{ setActive('agriculture.placement.calendar') }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('agriculture.placement.news') }}" class="custom-menu-item {{ setActive('agriculture.placement.news') }}">
                <p>Placement News/Articles</p>
            </a>
        </div>

        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('agriculture.timetable') }}" class="custom-menu-item {{ setActive('agriculture.timetable') }}">
                <p>Time-Table</p>
            </a>
            <a href="https://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('agriculture.anti.ragging') }}" class="custom-menu-item {{ setActive('agriculture.anti.ragging') }}">
                <p>Anti-Ragging Committee</p>
            </a>
        </div>

        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('agriculture.choupal') }}" class="custom-menu-item {{ setActive('agriculture.choupal') }}">
                <p>Agri Choupal Magazine</p>
            </a>
            <a href="{{ route('agriculture.guest.lecture') }}" class="custom-menu-item {{ setActive('agriculture.guest.lecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('agriculture.contact.us') }}" class="custom-menu-item {{ setActive('agriculture.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('agriculture.iqac') }}" class="custom-menu-item {{ setActive('agriculture.iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
