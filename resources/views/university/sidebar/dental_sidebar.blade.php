<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('dental.home') }}" class="custom-menu-item {{ setActive('dental.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('dental.overview') }}" class="custom-menu-item {{ setActive('dental.overview') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('dental.college.highlight') }}" class="custom-menu-item {{ setActive('dental.college.highlight') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('dental.principal') }}" class="custom-menu-item {{ setActive('dental.principal') }}">
                <p>Principal Desk</p>
            </a>
            <a href="{{ route('dental.gallery') }}" class="custom-menu-item {{ setActive('dental.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('dental.department') }}" class="custom-menu-item {{ setActive('dental.department') }}">
                <p>Departments</p>
            </a>
            <a href="{{ route('dental_syllabus') }}" class="custom-menu-item {{ setActive('dental_syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('dental.academic.calendar') }}" class="custom-menu-item {{ setActive('dental.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('dental.timetable') }}" class="custom-menu-item {{ setActive('dental.timetable') }}">
                <p>Time Table</p>
            </a>

            <a href="{{ route('dental.study.material') }}" class="custom-menu-item {{ setActive('dental.study.material') }}">
                <p>Study Material</p>
            </a>

            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('dental.anti.ragging') }}" class="custom-menu-item {{ setActive('dental.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="http://www.tmujdent.co.in/" target="_blank" class="custom-menu-item">
                <p>TMU Journals of Dentistry</p>
            </a>
            <a href="{{ route('dental.guest.lecture') }}" class="custom-menu-item {{ setActive('dental.guest.lecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('dental.contact.us') }}" class="custom-menu-item {{ setActive('dental.contact.us') }}">
                <p>Contact Us</p>
            </a>
        </div>
        <div class="account-section">
            <a href="{{ route('dental.iqac') }}" class="custom-menu-item {{ setActive('dental.iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
