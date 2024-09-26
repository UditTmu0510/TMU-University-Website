<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('paramedical.about.us') }}" class="custom-menu-item {{ setActive('paramedical.about.us') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('paramedical.college.highlights') }}" class="custom-menu-item {{ setActive('paramedical.college.highlights') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('paramedical.principal') }}" class="custom-menu-item {{ setActive('paramedical.principal') }}">
                <p>Principal Desk</p>
            </a>
            <a href="{{ route('paramedical.college.advisory.board') }}" class="custom-menu-item {{ setActive('paramedical.college.advisory.board') }}">
                <p>College Advisory Board</p>
            </a>
            <a href="{{ route('paramedical.gallery') }}" class="custom-menu-item {{ setActive('paramedical.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('paramedical.syllabus') }}" class="custom-menu-item {{ setActive('paramedical.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('paramedical.academic.calendar') }}" class="custom-menu-item {{ setActive('paramedical.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('paramedical.timetable') }}" class="custom-menu-item {{ setActive('paramedical.timetable') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('paramedical.anti.ragging') }}" class="custom-menu-item {{ setActive('paramedical.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('paramedical.guest.lecture') }}" class="custom-menu-item {{ setActive('paramedical.guest.lecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('paramedical.contact.us') }}" class="custom-menu-item {{ setActive('paramedical.contact.us') }}">
                <p>Contact Us</p>
            </a>
        </div>
        <div class="account-section">
            <a href="{{ route('paramedical_iqac') }}" class="custom-menu-item {{ setActive('paramedical_iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
