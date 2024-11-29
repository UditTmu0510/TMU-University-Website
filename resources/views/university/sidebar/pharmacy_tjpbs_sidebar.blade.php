<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <a href="{{route('pharmacy.home')}}" class="custom-menu-item {{ setActive('pharmacy.home') }}">
            <i class="bi bi-arrow-left-circle" style="color:tmu-color-blue; font-size:20px; padding-top:2px;"></i>
            <p>Back to Pharmacy College</p>
        </a>
        
        <div class="account-section">
            <a href="{{ route('pharmacy.home') }}" class="custom-menu-item {{ setActive('pharmacy.home') }}">
                <p>Home</p>
            </a>
        
        
            <a href="{{ route('pharmacy.syllabus') }}" class="custom-menu-item {{ setActive('pharmacy.syllabus') }}">
                <p>Syllabus</p>
            </a>

        </div>

    </div>
    <div class="account-section">
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>