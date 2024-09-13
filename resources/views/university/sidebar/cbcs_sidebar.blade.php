<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('cbcs.home') }}" class="custom-menu-item {{ Route::is('cbcs.home') ? 'active' : '' }}">
                <p>Overview</p>
            </a>
            <a href="{{ route('cbcs.circulars') }}" class="custom-menu-item {{ Route::is('cbcs.circulars') ? 'active' : '' }}">
                <p>CBCS Circular</p>
            </a>
            <a href="{{ route('cbcs.nursing') }}" class="custom-menu-item {{ Route::is('cbcs.nursing') ? 'active' : '' }}">
                <p>Nursing</p>
            </a>
            <a href="{{ route('cbcs.pharmacy') }}" class="custom-menu-item {{ Route::is('cbcs.pharmacy') ? 'active' : '' }}">
                <p>Pharmacy</p>
            </a>
            <a href="{{ route('cbcs.paramedical') }}" class="custom-menu-item {{ Route::is('cbcs.paramedical') ? 'active' : '' }}">
                <p>Paramedical</p>
            </a>
            <a href="{{ route('cbcs.physiotherapy') }}" class="custom-menu-item {{ Route::is('cbcs.physiotherapy') ? 'active' : '' }}">
                <p>Physiotherapy</p>
            </a>
            <a href="{{ route('cbcs.management') }}" class="custom-menu-item {{ Route::is('cbcs.management') ? 'active' : '' }}">
                <p>Management</p>
            </a>
            <a href="{{ route('cbcs.law') }}" class="custom-menu-item {{ Route::is('cbcs.law') ? 'active' : '' }}">
                <p>Law</p>
            </a>
            <a href="{{ route('cbcs.ccsit') }}" class="custom-menu-item {{ Route::is('cbcs.ccsit') ? 'active' : '' }}">
                <p>CCSIT</p>
            </a>
            <a href="{{ route('cbcs.foe') }}" class="custom-menu-item {{ Route::is('cbcs.foe') ? 'active' : '' }}">
                <p>Engineering</p>
            </a>
            <a href="{{ route('cbcs.polytechnic') }}" class="custom-menu-item {{ Route::is('cbcs.polytechnic') ? 'active' : '' }}">
                <p>Polytechnic</p>
            </a>
            <a href="{{ route('cbcs.education') }}" class="custom-menu-item {{ Route::is('cbcs.education') ? 'active' : '' }}">
                <p>Education</p>
            </a>
            <a href="{{ route('cbcs.agriculture') }}" class="custom-menu-item {{ Route::is('cbcs.agriculture') ? 'active' : '' }}">
                <p>Agriculture</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
