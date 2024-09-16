<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2 class="fs-16">NSS</h2>
        <div class="account-section">
            <a href="{{ route('nss.about') }}" class="custom-menu-item {{ Request::routeIs('nss.about') ? 'active' : '' }}">
                <p>About NSS</p>
            </a>
            <a href="{{ route('nss.aims') }}" class="custom-menu-item {{ Request::routeIs('nss.aims') ? 'active' : '' }}">
                <p>Aims & Objectives</p>
            </a>
            <a href="{{ route('nss.badge') }}" class="custom-menu-item {{ Request::routeIs('nss.badge') ? 'active' : '' }}">
                <p>Logo & Badge</p>
            </a>
            <a href="{{ route('nss.day.and.song') }}" class="custom-menu-item {{ Request::routeIs('nss.day.and.song') ? 'active' : '' }}">
                <p>NSS Day & Song</p>
            </a>
            <a href="{{ route('nss.activities') }}" class="custom-menu-item {{ Request::routeIs('nss.activities') ? 'active' : '' }}">
                <p>Regular Activities</p>
            </a>
            <a href="{{ route('nss.volunteers') }}" class="custom-menu-item {{ Request::routeIs('nss.volunteers') ? 'active' : '' }}">
                <p>NSS Volunteer</p>
            </a>
            <a href="{{ route('nss.internationalday') }}" class="custom-menu-item {{ Request::routeIs('nss.internationalday') ? 'active' : '' }}">
                <p>International Days</p>
            </a>
            <a href="{{ route('nss.events') }}" class="custom-menu-item {{ Request::routeIs('nss.events') ? 'active' : '' }}">
                <p>NSS Events</p>
            </a>
            <a href="{{ route('nss.contactus') }}" class="custom-menu-item {{ Request::routeIs('nss.contactus') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
