<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2 class="fs-16">RDC At A Glance</h2>
        <div class="account-section">
            <a href="{{ route('research.development.center.about') }}" class="custom-menu-item {{ Request::routeIs('research.development.center.about') ? 'active' : '' }}">
                <p>About RDC</p>
            </a>
            <a href="{{ route('rdc.faculty.profile') }}" class="custom-menu-item {{ Request::routeIs('rdc.faculty.profile') ? 'active' : '' }}">
                <p>Faculty Profile</p>
            </a>
            <a href="{{ route('rdc.contact.us') }}" class="custom-menu-item {{ Request::routeIs('rdc.contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('rdc.infrastructure') }}" class="custom-menu-item {{ Request::routeIs('rdc.infrastructure') ? 'active' : '' }}">
                <p>Infrastructure</p>
            </a>
        </div>
        <h2 class="fs-16">Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('greviances.about') }}" class="custom-menu-item {{ Request::routeIs('greviances.about') ? 'active' : '' }}">
                <p>Greviance Portal</p>
            </a>
            <a href="{{ route('disciplinary.rules') }}" class="custom-menu-item {{ Request::routeIs('disciplinary.rules') ? 'active' : '' }}">
                <p>Disciplinary Rules</p>
            </a>
            <a href="https://www.tmu.ac.in/pdf/TMU_Admission%20Policy%20&%20Refund%20Policy%20_2024.pdf" class="custom-menu-item {{ Request::is('https://www.tmu.ac.in/pdf/TMU_Admission%20Policy%20&%20Refund%20Policy%20_2024.pdf') ? 'active' : '' }}">
                <p>Admission Refund Policy</p>
            </a>
            <a href="{{ route('university.anti.ragging.committee') }}" class="custom-menu-item {{ Request::routeIs('university.anti.ragging.committee') ? 'active' : '' }}">
                <p>Anti Ragging Committee</p>
            </a>
            <a href="{{ route('university.academic.calendar') }}" class="custom-menu-item {{ Request::routeIs('university.academic.calendar') ? 'active' : '' }}">
                <p>University Academic Calendar</p>
            </a>
            <a href="{{ route('nss.about') }}" class="custom-menu-item {{ Request::routeIs('nss.about') ? 'active' : '' }}">
                <p>NSS Unit</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
