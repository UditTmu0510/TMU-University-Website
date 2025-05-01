<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About Department</h2>
        <div class="account-section">
                                <a href="{{ route('ctld.home') }}" class="custom-menu-item {{ setActive('ctld.home') }}">
                <p>Home</p>
            </a>

            <a href="{{ route('ctld.about') }}" class="custom-menu-item {{ setActive('ctld.about') }}">
                <p>About CTLD</p>
            </a>
            <a href="{{ route('ctld.aims.and.objectives') }}" class="custom-menu-item {{ setActive('ctld.aims.and.objectives') }}">
                <p>Aims & Objectives</p>
            </a>
            <a href="{{ route('ctld.benefits') }}" class="custom-menu-item {{ setActive('ctld.benefits') }}">
                <p>USPs </p>
            </a>
            <a href="{{ route('ctld.director.desk') }}" class="custom-menu-item {{ setActive('ctld.director.desk') }}">
                <p>Director's Desk</p>
            </a>
            <a href="{{ route('ctld.team') }}" class="custom-menu-item {{ setActive('ctld.team') }}">
                <p>Our Team</p>
            </a>
        </div>
        <h2>Testimonials</h2>
        <div class="account-section">
            <a href="{{ route('ctld.students.testimonials') }}" class="custom-menu-item {{ setActive('ctld.students.testimonials') }}">
                <p>Students' Testimonial</p>
            </a>
        </div>
        <h2>Happenings Hub</h2>
        <div class="account-section">
            <a href="{{ route('ctld.magazine') }}" class="custom-menu-item {{ setActive('ctld.magazine') }}">
                <p>Magazine</p>
            </a>
            <a href="{{asset('assets/pdf/CTLD_brochure/ctld-brochure.pdf')}}" class="custom-menu-item">
                <p>Brochure</p>
            </a>
            <a href="{{ route('ctld.events') }}" class="custom-menu-item {{ setActive('ctld.events') }}">
                <p>Events</p>
            </a>
        </div>
        <!-- <h2>Quick Links</h2>
        <div class="account-section">
            <a href="#" class="custom-menu-item {{ setActive('contact.us') }}">
                <p>Contact Us</p>
            </a>
        </div> -->
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
