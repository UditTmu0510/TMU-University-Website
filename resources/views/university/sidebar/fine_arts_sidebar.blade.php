<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('fine_arts.home') }}" class="custom-menu-item {{ setActive('fine_arts.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('fine.arts.overview') }}" class="custom-menu-item {{ setActive('fine.arts.overview') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('fine.arts.highlights') }}" class="custom-menu-item {{ setActive('fine.arts.highlights') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('fine.arts.hod') }}" class="custom-menu-item {{ setActive('fine.arts.hod') }}">
                <p>HOD's Desk</p>
            </a>
            <a href="{{ route('fine.arts.gallery') }}" class="custom-menu-item {{ setActive('fine.arts.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('fine.arts.syllabus') }}" class="custom-menu-item {{ setActive('fine.arts.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('fine.arts.academic.calendar') }}" class="custom-menu-item {{ setActive('fine.arts.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('fine.arts.timetable') }}" class="custom-menu-item {{ setActive('fine.arts.timetable') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('fine.arts.anti.ragging') }}" class="custom-menu-item {{ setActive('fine.arts.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('fine.arts.contact.us') }}" class="custom-menu-item {{ setActive('fine.arts.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('fine.arts.iqac') }}" class="custom-menu-item {{ setActive('fine.arts.iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
