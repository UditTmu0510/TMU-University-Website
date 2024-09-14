<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About Department</h2>
        <div class="account-section">
            <a href="{{ route('crc.about.us') }}" class="custom-menu-item {{ Route::is('crc.about.us') ? 'active' : '' }}">
                <p>About CRC</p>
            </a>
            <a href="{{ route('aims.and.objectives.crc') }}" class="custom-menu-item {{ Route::is('aims.and.objectives.crc') ? 'active' : '' }}">
                <p>Aims & Objective</p>
            </a>
            <a href="{{ route('directors.desk.crc') }}" class="custom-menu-item {{ Route::is('directors.desk.crc') ? 'active' : '' }}">
                <p>Director's Desk</p>
            </a>
            <a href="{{ route('placement.rules') }}" class="custom-menu-item {{ Route::is('placement.rules') ? 'active' : '' }}">
                <p>Rules & Policies</p>
            </a>
            <a href="{{ route('crc.team') }}" class="custom-menu-item {{ Route::is('crc.team') ? 'active' : '' }}">
                <p>Our Team</p>
            </a>
        </div>
        <h2>Testimonials</h2>
        <div class="account-section">
            <a href="{{ route('crc.student.testi') }}" class="custom-menu-item {{ Route::is('crc.student.testi') ? 'active' : '' }}">
                <p>Student's Testimonial</p>
            </a>
            <a href="{{ route('crc.corporate.testi') }}" class="custom-menu-item {{ Route::is('crc.corporate.testi') ? 'active' : '' }}">
                <p>Corporate's Testimonial</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="#" class="custom-menu-item {{ Route::is('contact.us') ? 'active' : '' }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('our.recruiters') }}" class="custom-menu-item {{ Route::is('our.recruiters') ? 'active' : '' }}">
                <p>Our Recruiters</p>
            </a>
            <a href="{{ route('crc.collaboration') }}" class="custom-menu-item {{ Route::is('crc.collaboration') ? 'active' : '' }}">
                <p>Industrial Collaboration</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
