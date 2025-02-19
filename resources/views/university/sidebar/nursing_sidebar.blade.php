<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('nursing.home') }}" class="custom-menu-item {{ setActive('nursing.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('nursing.overview') }}" class="custom-menu-item {{ setActive('nursing.overview') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('nursing.college.highlight') }}" class="custom-menu-item {{ setActive('nursing.college.highlight') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('nursing.dean') }}" class="custom-menu-item {{ setActive('nursing.dean') }}">
                <p>Dean's Desk</p>
            </a>
            <a href="{{ route('nursing.viceprincipal') }}" class="custom-menu-item {{ setActive('nursing_viceprincipal') }}">
                <p>Principal's Desk</p>
            </a>
            <a href="{{ route('nursing.college.advisory.board') }}" class="custom-menu-item {{ setActive('nursing.college.advisory.board') }}">
                <p>College Advisory Board</p>
            </a>
            <a href="{{ route('nursing.gallery') }}" class="custom-menu-item {{ setActive('nursing.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('nursing.department') }}" class="custom-menu-item {{ setActive('nursing.department') }}">
                <p>Department</p>
            </a>
            <a href="{{ route('nursing.syllabus') }}" class="custom-menu-item {{ setActive('nursing.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('nursing.academic.calednar') }}" class="custom-menu-item {{ setActive('nursing.academic.calednar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Placement Cell</h2>
        <div class="account-section">
            <a href="{{ route('nursing.tpc') }}" class="custom-menu-item {{ setActive('nursing.tpc') }}">
                <p>Training Placement Cell</p>
            </a>
            <a href="{{ route('nursing.corporate.advisory.board') }}" class="custom-menu-item {{ setActive('nursing.corporate.advisory.board') }}">
                <p>Corporate Advisory Board</p>
            </a>
            <a href="{{ route('nursing.placement.calendar') }}" class="custom-menu-item {{ setActive('nursing.placement.calendar') }}">
                <p>Placement Calendar</p>
            </a>
            <a href="{{ route('nursing.placement.news') }}" class="custom-menu-item {{ setActive('nursing.placement.news') }}">
                <p>Placement News / Article</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('nursing.timetable') }}" class="custom-menu-item {{ setActive('nursing.timetable') }}">
                <p>Time Table</p>
            </a>

            <a href="{{ route('nursing.study.material') }}" class="custom-menu-item {{ setActive('nursing.study.material') }}">
                <p>Study Material</p>
            </a>

            <a href="https://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('nursing.anti.ragging') }}" class="custom-menu-item {{ setActive('nursing.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>IJIH Journal</h2>
        <div class="account-section">
            <a href="{{ route('ijih.aboutus') }}" class="custom-menu-item {{ request()->routeIs('ijih.aboutus') ? 'active' : '' }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('ijih.edi.board') }}" class="custom-menu-item {{ request()->routeIs('ijih.edi.board') ? 'active' : '' }}">
                <p>Editorial Board</p>
            </a>
            <a href="{{ route('ijih.guide.ethics') }}" class="custom-menu-item {{ request()->routeIs('ijih.guide.ethics') ? 'active' : '' }}">
                <p>Guidelines & Ethics</p>
            </a>
            <a href="{{ route('ijih.submission.process') }}" class="custom-menu-item {{ request()->routeIs('ijih.submission.process') ? 'active' : '' }}">
                <p>Submission Process</p>
            </a>
            <a href="{{ route('ijih.archives') }}" class="custom-menu-item {{ request()->routeIs('ijih.archives') ? 'active' : '' }}">
                <p>Archives</p>
            </a>
            <a href="{{ route('ijih.current_issue') }}" class="custom-menu-item {{ request()->routeIs('ijih.current_issue') ? 'active' : '' }}">
                <p>Current Issue</p>
            </a>
            <a href="{{ route('ijih.manuscript.submission') }}" class="custom-menu-item {{ request()->routeIs('ijih.manuscript.submission') ? 'active' : '' }}">
                <p>Manuscript Submission</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('nursing.guest.lecture') }}" class="custom-menu-item {{ setActive('nursing.guest.lecture') }}">
                <p>Guest Lecture</p>
            </a>
            <a href="{{ route('nursing.contact.us') }}" class="custom-menu-item {{ setActive('nursing.contact.us') }}">
                <p>Contact Us</p>
            </a>
        </div>
        <div class="account-section">
            <a href="{{ route('nursing.iqac') }}" class="custom-menu-item {{ setActive('nursing.iqac') }}">
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