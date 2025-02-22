<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2 class="fs-16">NSS</h2>
        <div class="account-section">
            <a href="{{ route('nss.about') }}" class="custom-menu-item {{ setActive('nss.about') }}">
                <p>About NSS</p>
            </a>
            <a href="{{ route('nss.coordinator') }}" class="custom-menu-item {{ setActive('nss.coordinator') }}">
                <p>Coordinator Desk</p>
            </a>
            <a href="{{ route('nss.aims') }}" class="custom-menu-item {{ setActive('nss.aims') }}">
                <p>Aims & Objectives</p>
            </a>
            <a href="{{ route('nss.badge') }}" class="custom-menu-item {{ setActive('nss.badge') }}">
                <p>Logo & Badge</p>
            </a>
            <a href="{{ route('nss.day.and.song') }}" class="custom-menu-item {{ setActive('nss.day.and.song') }}">
                <p>NSS Day & Song</p>
            </a>

            <a href="{{ route('adopted.village') }}" class="custom-menu-item {{ setActive('adopted.village') }}">
                <p>Adopted Village</p>
            </a>

            <a href="{{ route('nss.activities') }}" class="custom-menu-item {{ setActive('nss.activities') }}">
                <p>Activities Calendar</p>
            </a>
            <a href="{{ route('nss.volunteers') }}" class="custom-menu-item {{ setActive('nss.volunteers') }}">
                <p>NSS Volunteer</p>
            </a>
            <a href="{{ route('nss.internationalday') }}" class="custom-menu-item {{ setActive('nss.internationalday') }}">
                <p>International Days</p>
            </a>
            <a href="{{ route('nss.events') }}" class="custom-menu-item {{ setActive('nss.events') }}">
                <p>NSS Events</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
