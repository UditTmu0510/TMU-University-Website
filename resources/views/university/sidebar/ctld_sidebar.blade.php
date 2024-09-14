<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About Department</h2>
        <div class="account-section">
            <a href="{{ route('ctld.about') }}" class="custom-menu-item {{ Route::is('ctld.about') ? 'active' : '' }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('ctld.aims.and.objectives') }}" class="custom-menu-item {{ Route::is('ctld.aims.and.objectives') ? 'active' : '' }}">
                <p>Aims & Objective</p>
            </a>
            <a href="{{ route('ctld.director.desk') }}" class="custom-menu-item {{ Route::is('ctld.director.desk') ? 'active' : '' }}">
                <p>Director's Desk</p>
            </a>
            <a href="{{ route('ctld.team') }}" class="custom-menu-item {{ Route::is('ctld.team') ? 'active' : '' }}">
                <p>Our Team</p>
            </a>
        </div>
        <h2>Testimonials</h2>
        <div class="account-section">
            <a href="{{ route('ctld.students.testimonials') }}" class="custom-menu-item {{ Route::is('ctld.students.testimonials') ? 'active' : '' }}">
                <p>Student's Testimonial</p>
            </a>
        </div>
        <h2>Happenings Hub</h2>
        <div class="account-section">
            <a href="{{ route('ctld.magazine') }}" class="custom-menu-item {{ Route::is('ctld.magazine') ? 'active' : '' }}">
                <p>Magazine</p>
            </a>
            <a href="https://www.tmu.ac.in/pdf/CTLD_brochure/ctld-brochure.pdf" class="custom-menu-item">
                <p>Brochure</p>
            </a>
            <a href="{{ route('ctld.events') }}" class="custom-menu-item {{ Route::is('ctld.events') ? 'active' : '' }}">
                <p>Events</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="#" class="custom-menu-item {{ Route::is('contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
