<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About Department</h2>
        <div class="account-section">
                    <a href="{{ route('crc.home') }}" class="custom-menu-item {{ setActive('crc.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('crc.about.us') }}" class="custom-menu-item {{ setActive('crc.about.us') }}">
                <p>About CRC</p>
            </a>
            <a href="{{ route('aims.and.objectives.crc') }}" class="custom-menu-item {{ setActive('aims.and.objectives.crc') }}">
                <p>Aims & Objective</p>
            </a>
            <a href="{{ route('directors.desk.crc') }}" class="custom-menu-item {{ setActive('directors.desk.crc') }}">
                <p>Director's Desk</p>
            </a>
            <a href="{{ route('placement.rules') }}" class="custom-menu-item {{ setActive('placement.rules') }}">
                <p>Rules & Policies</p>
            </a>
            <a href="{{ route('crc.team') }}" class="custom-menu-item {{ setActive('crc.team') }}">
                <p>Our Team</p>
            </a>
        </div>
        <h2>Testimonials</h2>
        <div class="account-section">
            <a href="{{ route('crc.student.testi') }}" class="custom-menu-item {{ setActive('crc.student.testi') }}">
                <p>Student's Testimonial</p>
            </a>
            <a href="{{ route('crc.corporate.testi') }}" class="custom-menu-item {{ setActive('crc.corporate.testi') }}">
                <p>Corporate's Testimonial</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="#" class="custom-menu-item {{ setActive('contact.us') }}">
                <p>Contact Us</p>
            </a>
            <a href="{{ route('our.recruiters') }}" class="custom-menu-item {{ setActive('our.recruiters') }}">
                <p>Our Recruiters</p>
            </a>
            <a href="{{ route('crc.collaboration') }}" class="custom-menu-item {{ setActive('crc.collaboration') }}">
                <p>Industrial Collaboration</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
