<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Examination System</h2>
        <div class="account-section">
            <a href="{{ route('exam.overview') }}" class="custom-menu-item {{ setActive('exam.overview') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('exam.ordinance') }}" class="custom-menu-item {{ setActive('exam.ordinance') }}">
                <p>Examination Ordinance</p>
            </a>
            <a href="{{ route('cbcs.home') }}" class="custom-menu-item {{ setActive('cbcs.home') }}">
                <p>Choice Based Credit System</p>
            </a>
            <a href="http://portal2.tmu.ac.in/" class="custom-menu-item">
                <p>Online Examination Form</p>
            </a>
            <a href="{{ route('exam.syllabus') }}" class="custom-menu-item {{ setActive('exam.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <!--<a href="https://cvl.nad.co.in/NAD/home.action" class="custom-menu-item">-->
            <!--    <p>NAD</p>-->
            <!--</a>-->
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('about.us') }}" class="custom-menu-item {{ setActive('about.us') }}">
                <p>About University</p>
            </a>
            <a href="{{ route('vision.mission') }}" class="custom-menu-item {{ setActive('vision.mission') }}">
                <p>Vision & Mission</p>
            </a>
            <a href="{{ route('statutory.approvals') }}" class="custom-menu-item {{ setActive('statutory.approvals') }}">
                <p>Statutory Approvals</p>
            </a>
            <a href="{{ route('awards.and.recognition') }}" class="custom-menu-item {{ setActive('awards.and.recognition') }}">
                <p>Rating/Award/Recognition</p>
            </a>
            <a href="{{ route('university.governance') }}" class="custom-menu-item {{ setActive('university.governance') }}">
                <p>University Governance</p>
            </a>
            <a href="{{ route('university.administration') }}" class="custom-menu-item {{ setActive('university.administration') }}">
                <p>University Administration</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
