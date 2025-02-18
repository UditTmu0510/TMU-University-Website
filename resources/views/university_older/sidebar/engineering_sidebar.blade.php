<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('engineering.home') }}" class="custom-menu-item {{ setActive('engineering.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('engineering.about.us') }}" class="custom-menu-item {{ setActive('engineering.about.us') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('engineering.highlights') }}" class="custom-menu-item {{ setActive('engineering.highlights') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('engineering.dean') }}" class="custom-menu-item {{ setActive('engineering.dean') }}">
                <p>Dean's Desk</p>
            </a>
            <a href="{{ route('engineering.gallery') }}" class="custom-menu-item {{ setActive('engineering.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('engineering.syllabus') }}" class="custom-menu-item {{ setActive('engineering.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('engineering.academic.calednar') }}" class="custom-menu-item {{ setActive('engineering.academic.calednar') }}">
                <p>Academic Calendar</p>
            </a>
            <a href="{{ route('engineering.nba') }}" class="custom-menu-item {{ setActive('engineering.nba') }}">
                <p>NBA</p>
            </a>
        </div>
        <h2 class="fs-16">Training & Placements</h2>
        <div class="account-section">
            <a href="{{ route('engineering.corporate.advisory.board') }}" class="custom-menu-item {{ setActive('engineering.corporate.advisory.board') }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('engineering.placement.brochure') }}" class="custom-menu-item {{ setActive('engineering.placement.brochure') }}">
                <p>Placement Brochure</p>
            </a>
            <a href="{{ route('engineering.placement.calendar') }}" class="custom-menu-item {{ setActive('engineering.placement.calendar') }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('engineering.placement.news') }}" class="custom-menu-item {{ setActive('engineering.placement.news') }}">
                <p>Placement News / Article</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('engineering.timetable') }}" class="custom-menu-item {{ setActive('engineering.timetable') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('engineering.project.guidelines') }}" target="_blank" class="custom-menu-item {{ setActive('engineering.project.guidelines') }}">
                <p>Project Guidelines</p>
            </a>
            <a href="{{ route('engineering.anti.ragging') }}" class="custom-menu-item {{ setActive('engineering.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
            <a href="{{ route('engineering.e.content') }}" class="custom-menu-item {{ setActive('engineering.e.content') }}">
                <p>E-Content</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('engineering.financial.statement') }}" target="_blank" class="custom-menu-item {{ setActive('engineering.financial.statement') }}">
                <p>Audited Financial Statement</p>
            </a>
            <a href="{{ route('engineering.contact.us') }}" target="_blank" class="custom-menu-item {{ setActive('engineering.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('engineering.iqac') }}" target="_blank" class="custom-menu-item {{ setActive('engineering.iqac') }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
