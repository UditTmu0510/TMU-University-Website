<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('education.home') }}" class="custom-menu-item {{ setActive('education.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('education.college.highlight') }}" class="custom-menu-item {{ setActive('education.college.highlight') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('education.principal') }}" class="custom-menu-item {{ setActive('education.principal') }}">
                <p>Principal's Desk</p>
            </a>
            <a href="{{ route('education.gallery') }}" class="custom-menu-item {{ setActive('education.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('education.syllabus') }}" class="custom-menu-item {{ setActive('education.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('education.academic.calendar') }}" class="custom-menu-item {{ setActive('education.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('education.timetable') }}" class="custom-menu-item {{ setActive('education.timetable') }}">
                <p>Time Table</p>
            </a>

            <a href="{{ route('education.study.material') }}" class="custom-menu-item {{ setActive('education.study.material') }}">
                <p>Study Material</p>
            </a>

            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('education.anti.ragging') }}" class="custom-menu-item {{ setActive('education.anti.ragging') }}">
                <p>Anti-Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('education.guest.lecture') }}" class="custom-menu-item {{ setActive('education.guest.lecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('education.contact.us') }}" class="custom-menu-item {{ setActive('education.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('education.iqac') }}" class="custom-menu-item {{ setActive('education.iqac') }}">
                <p>College IQAC</p>
            </a>
            <a href="{{ route('computer.infra') }}" class="custom-menu-item {{ setActive('computer.infra') }}">
                <p>Computer Infrastructure</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
