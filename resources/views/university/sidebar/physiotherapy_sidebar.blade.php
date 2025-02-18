<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.home') }}" class="custom-menu-item {{ setActive('physiotherapy.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('physiotherapy.about.us') }}" class="custom-menu-item {{ setActive('physiotherapy.about.us') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('physiotherapy.college.highlights') }}" class="custom-menu-item {{ setActive('physiotherapy.college.highlights') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('physiotherapy.hod') }}" class="custom-menu-item {{ setActive('physiotherapy.hod') }}">
                <p>HOD's Desk</p>
            </a>
            <!--<a href="/physiotherapy_college_advisory_board.php" class="custom-menu-item">-->
            <!--    <p>College Advisory Board</p>-->
            <!--</a>-->
            <a href="{{ route('physiotherapy.gallery') }}" class="custom-menu-item {{ setActive('physiotherapy.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.labs') }}" class="custom-menu-item {{ setActive('physiotherapy.labs') }}">
                <p>Labs</p>
            </a>
            <a href="{{ route('physiotherapy.intake') }}" class="custom-menu-item {{ setActive('physiotherapy.intake') }}">
                <p>Sanctioned Intake</p>
            </a>
            <a href="{{ route('physiotherapy.syllabus') }}" class="custom-menu-item {{ setActive('physiotherapy.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('physiotherapy.academic.calendar') }}" class="custom-menu-item {{ setActive('physiotherapy.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.timetable') }}" class="custom-menu-item {{ setActive('physiotherapy.timetable') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('physiotherapy.anti.ragging') }}" class="custom-menu-item {{ setActive('physiotherapy.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{ route('physiotherapy.magazine') }}" class="custom-menu-item {{ setActive('physiotherapy.magazine') }}">
                <p>Magazine</p>
            </a>
            <a href="{{ route('physiotherapy.contact.us') }}" class="custom-menu-item {{ setActive('physiotherapy.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('physiotherapy.iqac') }}" class="custom-menu-item {{ setActive('physiotherapy.iqac') }}">
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
