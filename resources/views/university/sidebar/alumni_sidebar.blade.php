<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Alumni</h2>
        <div class="account-section">
            <a href="{{ route('alumni.overview') }}" class="custom-menu-item {{ setActive('alumni.overview') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('alumni.president.message') }}" class="custom-menu-item {{ setActive('alumni.president.message') }}">
                <p>President's Message</p>
            </a>
            <a href="{{ route('alumni.association') }}" class="custom-menu-item {{ setActive('alumni.association') }}">
                <p>Alumni Association Certificate</p>
            </a>
            <a href="{{ route('alumni.coordination') }}" class="custom-menu-item {{ setActive('alumni.coordination') }}">
                <p>Coordination Cell</p>
            </a>
        </div>

        <h2 class="fs-16">Alumni Event Calendar</h2>
        <div class="account-section">
            <a href="{{ route('alumni.event.calendar') }}" class="custom-menu-item {{ setActive('alumni.event.calendar') }}">
                <p>Event Calendar</p>
            </a>
        </div>

        <h2>Alumni Donation</h2>
        <div class="account-section">
            <a href="{{ route('alumni.donation') }}" class="custom-menu-item {{ setActive('alumni.donation') }}">
                <p>Donations</p>
            </a>
        </div>

        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('alumni.faq') }}" class="custom-menu-item {{ setActive('alumni.faq') }}">
                <p>FAQs</p>
            </a>
            <a href="{{ route('alumni.contactus') }}" class="custom-menu-item {{ setActive('alumni.contactus') }}">
                <p>Contact Us</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>