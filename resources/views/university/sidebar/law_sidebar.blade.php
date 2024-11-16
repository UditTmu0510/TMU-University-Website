<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('law.home') }}" class="custom-menu-item {{ setActive('law.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('law.overview') }}" class="custom-menu-item {{ setActive('law.overview') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('law.college.highlight') }}" class="custom-menu-item {{ setActive('law.college.highlight') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('law.dean') }}" class="custom-menu-item {{ setActive('law.dean') }}">
                <p>Dean</p>
            </a>
            <a href="{{ route('law.principal') }}" class="custom-menu-item {{ setActive('law.principal') }}">
                <p>Principal</p>
            </a>
            <a href="{{ route('law.gallery') }}" class="custom-menu-item {{ setActive('law.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('law.syllabus') }}" class="custom-menu-item {{ setActive('law.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('law.academic.calendar') }}" class="custom-menu-item {{ setActive('law.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('law.time.table') }}" class="custom-menu-item {{ setActive('law.time.table') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('law.anti.ragging') }}" class="custom-menu-item {{ setActive('law.anti.ragging') }}">
                <p>Anti-Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('law.contact.us') }}" class="custom-menu-item {{ setActive('law.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('law.iqac') }}" class="custom-menu-item {{ setActive('law.iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
<i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
