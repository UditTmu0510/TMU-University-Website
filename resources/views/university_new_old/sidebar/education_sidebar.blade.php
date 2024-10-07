<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <!--<a href="/education_overview.php" class="custom-menu-item active">-->
            <!--    <p>Overview</p>-->
            <!--</a>-->
            <a href="{{route('education.college.highlight')}}" class="custom-menu-item">
                <p>College Highlights</p>
            </a>
            <a href="{{route('education.principal')}}" class="custom-menu-item">
                <p>Dean's Desk</p>
            </a>
            <a href="{{route('education.gallery')}}" class="custom-menu-item">
                <p>Gallery</p>
            </a>
        </div>
        <h2 >Academics</h2>
        <div class="account-section">
            <a href="{{route('education.syllabus')}}" class="custom-menu-item">
                <p>Syllabus</p>
            </a>
            <a href="{{route('education.academic.calendar')}}" class="custom-menu-item">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{route('education.timetable')}}" class="custom-menu-item">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{route('education.anti.ragging')}}" class="custom-menu-item">
                <p>Anti-Ragging Committee</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{route('education.guest.lecture')}}" class="custom-menu-item">
                <p>Guest Lecture</p>
            </a>
            <a href="{{route('education.contact.us')}}" class="custom-menu-item">
                <p>Contact Us</p>
            </a>
            <a href="{{route('education.iqac')}}" class="custom-menu-item">
                <p>College IQAC</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>