<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2 class="fs-16">RDC At A Glance</h2>
        <div class="account-section">
            <a href="{{ route('research.development.center.about') }}" class="custom-menu-item {{ setActive('research.development.center.about') }}">
                <p>About RDC</p>
            </a>
            <a href="{{ route('rdc.faculty.profile') }}" class="custom-menu-item {{ setActive('rdc.faculty.profile') }}">
                <p>Faculty Profile</p>
            </a>
            <a href="{{ route('rdc.contact.us') }}" class="custom-menu-item {{ setActive('rdc.contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('rdc.infrastructure') }}" class="custom-menu-item {{ setActive('rdc.infrastructure') }}">
                <p>Infrastructure</p>
            </a>
        </div>
        <h2 class="fs-16">Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('greviances.about') }}" class="custom-menu-item {{ setActive('greviances.about') }}">
                <p>Greviance Portal</p>
            </a>
            <a href="{{ route('disciplinary.rules') }}" class="custom-menu-item {{ setActive('disciplinary.rules') }}">
                <p>Disciplinary Rules</p>
            </a>
            <a href="{{ asset('/assets/pdf/TMU_Admission_Policy_&_Refund_Policy_2024.pdf') }}" class="custom-menu-item">
                <p>Admission Refund Policy</p>
            </a>
            <a href="{{ route('university.anti.ragging.committee') }}" class="custom-menu-item {{ setActive('university.anti.ragging.committee') }}">
                <p>Anti Ragging Committee</p>
            </a>
            <a href="{{ route('university.academic.calendar') }}" class="custom-menu-item {{ setActive('university.academic.calendar') }}">
                <p>University Academic Calendar</p>
            </a>
            <a href="{{ route('nss.about') }}" class="custom-menu-item {{ setActive('nss.about') }}">
                <p>NSS Unit</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
