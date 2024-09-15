<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.about.us') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.about.us') ? 'active' : '' }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('physiotherapy.college.highlights') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.college.highlights') ? 'active' : '' }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('physiotherapy.hod') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.hod') ? 'active' : '' }}">
                <p>HOD's Desk</p>
            </a>
            <!--<a href="/physiotherapy_college_advisory_board.php" class="custom-menu-item">-->
            <!--    <p>College Advisory Board</p>-->
            <!--</a>-->
            <a href="{{ route('physiotherapy.gallery') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.gallery') ? 'active' : '' }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.labs') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.labs') ? 'active' : '' }}">
                <p>Labs</p>
            </a>
            <a href="{{ route('physiotherapy.intake') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.intake') ? 'active' : '' }}">
                <p>Sanctioned Intake</p>
            </a>
            <a href="{{ route('physiotherapy.syllabus') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.syllabus') ? 'active' : '' }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('physiotherapy.academic.calendar') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.academic.calendar') ? 'active' : '' }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.timetable') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.timetable') ? 'active' : '' }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('physiotherapy.anti.ragging') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.anti.ragging') ? 'active' : '' }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.magazine') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.magazine') ? 'active' : '' }}">
                <p>Magazine</p>
            </a>
            <a href="{{ route('physiotherapy.contact.us') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('physiotherapy.iqac') }}" class="custom-menu-item {{ Request::routeIs('physiotherapy.iqac') ? 'active' : '' }}">
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
