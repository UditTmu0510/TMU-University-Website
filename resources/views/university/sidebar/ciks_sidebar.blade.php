<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About Ciks</h2>
        <div class="account-section">
            <a href="{{ route('ciks.aboutus') }}" class="custom-menu-item {{ setActive('ciks.aboutus') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('ciks.patrons') }}" class="custom-menu-item {{ setActive('ciks.patrons') }}">
                <p>Patrons & Advisors</p>
            </a>
            <a href="{{ route('ciks.team') }}" class="custom-menu-item {{ setActive('ciks.team') }}">
                <p>Team</p>
            </a>
            <a href="{{ route('ciks.execution') }}" class="custom-menu-item {{ setActive('ciks.execution') }}">
                <p>Execution of IKS</p>
            </a>
            <a href="{{ route('ciks.activities') }}" class="custom-menu-item {{ setActive('ciks.activities') }}">
                <p>Activities</p>
            </a>
            <a href="{{ route('ciks.events') }}" class="custom-menu-item {{ setActive('ciks.events') }}">
                <p>Events</p>
            </a>
            {{-- <a href="{{ route('ciks.media_coverage') }}" class="custom-menu-item {{ setActive('ciks.media_coverage') }}">
                <p>Media Coverage</p>
            </a> --}}
            <a href="{{ route('ciks.gallery') }}" class="custom-menu-item {{ setActive('ciks.gallery') }}">
                <p>Gallery</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>