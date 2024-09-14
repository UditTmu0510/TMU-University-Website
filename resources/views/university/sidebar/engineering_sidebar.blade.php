<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('engineering.about.us') }}" class="custom-menu-item {{ Route::is('engineering.about.us') ? 'active' : '' }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('engineering.highlights') }}" class="custom-menu-item {{ Route::is('engineering.highlights') ? 'active' : '' }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('engineering.principal') }}" class="custom-menu-item {{ Route::is('engineering.principal') ? 'active' : '' }}">
                <p>Principal Desk</p>
            </a>
            <a href="{{ route('engineering.gallery') }}" class="custom-menu-item {{ Route::is('engineering.gallery') ? 'active' : '' }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('engineering.syllabus') }}" class="custom-menu-item {{ Route::is('engineering.syllabus') ? 'active' : '' }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('engineering.academic.calednar') }}" class="custom-menu-item {{ Route::is('engineering.academic.calednar') ? 'active' : '' }}">
                <p>Academic Calendar</p>
            </a>
            <a href="{{ route('engineering.nba') }}" class="custom-menu-item {{ Route::is('engineering.nba') ? 'active' : '' }}">
                <p>NBA</p>
            </a>
        </div>
        <h2 class="fs-16">Training & Placements</h2>
        <div class="account-section">
            <a href="{{ route('engineering.corporate.advisory.board') }}" class="custom-menu-item {{ Route::is('engineering.corporate.advisory.board') ? 'active' : '' }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('engineering.placement.calendar') }}" class="custom-menu-item {{ Route::is('engineering.placement.calendar') ? 'active' : '' }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('engineering.placement.news') }}" class="custom-menu-item {{ Route::is('engineering.placement.news') ? 'active' : '' }}">
                <p>Placement News / Article</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('engineering.timetable') }}" class="custom-menu-item {{ Route::is('engineering.timetable') ? 'active' : '' }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('engineering.project.guidelines') }}" target="_blank" class="custom-menu-item {{ Route::is('engineering.project.guidelines') ? 'active' : '' }}">
                <p>Project Guidelines</p>
            </a>
            <a href="{{ route('engineering.anti.ragging') }}" class="custom-menu-item {{ Route::is('engineering.anti.ragging') ? 'active' : '' }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('engineering.financial.statement') }}" target="_blank" class="custom-menu-item {{ Route::is('engineering.financial.statement') ? 'active' : '' }}">
                <p>Audited Financial Statement</p>
            </a>
            <a href="{{ route('engineering.contact.us') }}" target="_blank" class="custom-menu-item {{ Route::is('engineering.contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('engineering.iqac') }}" target="_blank" class="custom-menu-item {{ Route::is('engineering.iqac') ? 'active' : '' }}">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
