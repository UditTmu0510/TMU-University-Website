<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Admissions</h2>
        <div class="account-section">
        
            <a href="{{ route('tmu.virtual_tour') }}" class="custom-menu-item {{ setActive('tmu.virtual_tour') }}">
                <p>Enquire Now</p>
            </a>
        </div>
        <h2>General Enquiry</h2>
        <div class="account-section">
            
            <a href="{{ route('university.organogram') }}" class="custom-menu-item {{ setActive('university.organogram') }}">
                <p>University</p>
            </a>
            <a href="{{ route('university.administration') }}" class="custom-menu-item {{ setActive('university.administration') }}">
                <p>Colleges</p>
            </a>
            <a href="{{ route('tmu.virtual_tour') }}" class="custom-menu-item {{ setActive('tmu.virtual_tour') }}">
                <p>Department</p>
            </a>
        </div>
        <h2>Hospital</h2>
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
