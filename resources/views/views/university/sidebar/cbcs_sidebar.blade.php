<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{route('exam.overview')}}" class="custom-menu-item {{ setActive('iqac.about') }}">
                <i class="bi bi-arrow-left-circle" style="color:tmu-color-blue; font-size:20px; padding-top:2px;"></i>
                <p>Back to Examination Page</p>
            </a>
            <a href="{{ route('cbcs.home') }}" class="custom-menu-item {{ setActive('cbcs.home') }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('cbcs.circulars') }}" class="custom-menu-item {{ setActive('cbcs.circulars') }}">
                <p>CBCS Circular</p>
            </a>
            <a href="{{ route('cbcs.nursing') }}" class="custom-menu-item {{ setActive('cbcs.nursing') }}">
                <p>Nursing</p>
            </a>
            <a href="{{ route('cbcs.pharmacy') }}" class="custom-menu-item {{ setActive('cbcs.pharmacy') }}">
                <p>Pharmacy</p>
            </a>
            <a href="{{ route('cbcs.paramedical') }}" class="custom-menu-item {{ setActive('cbcs.paramedical') }}">
                <p>Paramedical</p>
            </a>
            <a href="{{ route('cbcs.physiotherapy') }}" class="custom-menu-item {{ setActive('cbcs.physiotherapy') }}">
                <p>Physiotherapy</p>
            </a>
            <a href="{{ route('cbcs.management') }}" class="custom-menu-item {{ setActive('cbcs.management') }}">
                <p>Management</p>
            </a>
            <a href="{{ route('cbcs.law') }}" class="custom-menu-item {{ setActive('cbcs.law') }}">
                <p>Law</p>
            </a>
            <a href="{{ route('cbcs.ccsit') }}" class="custom-menu-item {{ setActive('cbcs.ccsit') }}">
                <p>CCSIT</p>
            </a>
            <a href="{{ route('cbcs.foe') }}" class="custom-menu-item {{ setActive('cbcs.foe') }}">
                <p>Engineering</p>
            </a>
            <a href="{{ route('cbcs.polytechnic') }}" class="custom-menu-item {{ setActive('cbcs.polytechnic') }}">
                <p>Polytechnic</p>
            </a>
            <a href="{{ route('cbcs.education') }}" class="custom-menu-item {{ setActive('cbcs.education') }}">
                <p>Education</p>
            </a>
            <a href="{{ route('cbcs.agriculture') }}" class="custom-menu-item {{ setActive('cbcs.agriculture') }}">
                <p>Agriculture</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>