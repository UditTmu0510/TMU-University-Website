<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About Us</h2>
        <div class="account-section">
            <a href="{{ route('iic.home') }}" class="custom-menu-item {{ setActive('iic.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('iic.cell.about') }}" class="custom-menu-item {{ setActive('iic.cell.about') }}">
                <p>About Cell</p>
            </a>
            <a href="{{ route('iic.policy') }}" class="custom-menu-item {{ setActive('iic.policy') }}">
                <p>Innovation & Startup Policies</p>
            </a>
            <a href="{{ route('iic.research.policy') }}" class="custom-menu-item {{ setActive('iic.research.policy') }}">
                <p>Research Policy</p>
            </a>
            <a href="{{ route('iic.committee') }}" class="custom-menu-item {{ setActive('iic.committee') }}">
                <p>Committee</p>
            </a>
        </div>
        <div class="account-section">
            <h2>IIC</h2>
            <a href="{{ route('iic.activities.calendar') }}" class="custom-menu-item {{ setActive('iic.activities.calendar') }}">
                <p>IIC Activities Calendar</p>
            </a>
            <a href="{{ route('iic_establishment_certificate') }}" class="custom-menu-item {{ setActive('iic_establishment_certificate') }}">
                <p>IIC Establishment Certificate</p>
            </a>
            <a href="{{ route('iic.innovation.ambassador.training.series') }}" class="custom-menu-item {{ setActive('iic.innovation.ambassador.training.series') }}">
                <p>IIC Innovation Ambassador Training Series</p>
            </a>
            <a href="{{ route('iic.campaign.participation') }}" class="custom-menu-item {{ setActive('iic.campaign.participation') }}">
                <p>Innovation & Startup Campaign Participation</p>
            </a>
            <a href="{{ route('iic.achievements') }}" class="custom-menu-item {{ setActive('iic.achievements') }}">
                <p>Achievements</p>
            </a>
            <a href="{{ route('iic.activities') }}" class="custom-menu-item {{ setActive('iic.activities') }}">
                <p>Activities</p>
            </a>
        </div>
        <div class="account-section">
            <h2>Quick Links</h2>
            <a href="{{ route('iic.successful.startup.story') }}" class="custom-menu-item {{ setActive('iic.successful.startup.story') }}">
                <p>Successful Startup Story</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
