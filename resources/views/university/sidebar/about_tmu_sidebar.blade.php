<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About TMU</h2>
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
                <p>Ratings/Awards/<br>Recognitions</p>
            </a>
            <a href="{{ route('tmu.why_tmu') }}" class="custom-menu-item {{ setActive('tmu.why_tmu') }}">
                <p>Why Choose TMU ?</p>
            </a>
            <a href="{{ route('university.governance') }}" class="custom-menu-item {{ setActive('university.governance') }}">
                <p>University Governance</p>
            </a>
            <a href="{{ route('university.organogram') }}" class="custom-menu-item {{ setActive('university.organogram') }}">
                <p>University Organogram</p>
            </a>
            <a href="{{ route('university.administration') }}" class="custom-menu-item {{ setActive('university.administration') }}">
                <p>University Administration</p>
            </a>
            <a href="#" class="custom-menu-item">
                <p>Campus Map & Location</p>
            </a>
        </div>
        <h2>Our Administration</h2>
        <div class="account-section">
            <a href="{{ route('chancellor.desk') }}" class="custom-menu-item {{ setActive('chancellor.desk') }}">
                <p>Chancellor</p>
            </a>
            <a href="{{ route('founder.vice.chancellor.desk') }}" class="custom-menu-item {{ setActive('founder.vice.chancellor.desk') }}">
                <p>Founder Vice Chancellor</p>
            </a>
            <a href="{{ route('vice.chancellor.desk') }}" class="custom-menu-item {{ setActive('vice.chancellor.desk') }}">
                <p>Vice Chancellor</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
