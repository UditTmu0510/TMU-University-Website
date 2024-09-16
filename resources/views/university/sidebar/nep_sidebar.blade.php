<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2 class="fs-16">NEP 2020 Implementation</h2>
        <div class="account-section">
            <a href="{{route('nep.implementation.committee')}}" class="custom-menu-item {{ Route::is('nep.implementation.committee') ? 'active' : '' }}">
                <p>NEP Implementation Committee</p>
            </a>
            <a href="{{route('nep.2020.university.ordinance')}}" class="custom-menu-item {{ Route::is('nep.2020.university.ordinance') ? 'active' : '' }}">
                <p>NEP 2020 University Ordinance</p>
            </a>
            <a href="{{route('nep.2020.programmes.offered')}}" class="custom-menu-item {{ Route::is('nep.2020.programmes.offered') ? 'active' : '' }}">
                <p>Programmes Offered Under NEP 2020</p>
            </a>
            <a href="{{route('nep.multidisciplinary.specializations')}}" class="custom-menu-item {{ Route::is('nep.multidisciplinary.specializations') ? 'active' : '' }}">
                <p>Multidisciplinary Specializations</p>
            </a>
            <a href="{{route('nep.value.added.courses')}}" class="custom-menu-item {{ Route::is('nep.value.added.courses') ? 'active' : '' }}">
                <p>Value Added Courses</p>
            </a>
            <a href="{{route('nep.ability.enhancement')}}" class="custom-menu-item {{ Route::is('nep.ability.enhancement') ? 'active' : '' }}">
                <p>Ability Enhancement Courses</p>
            </a>
            <a href="{{route('nep.skill.enhancement')}}" class="custom-menu-item {{ Route::is('nep.skill.enhancement') ? 'active' : '' }}">
                <p>Skill Enhancement Courses</p>
            </a>
            <a href="{{route('nep.obe.implementation')}}" class="custom-menu-item {{ Route::is('nep.obe.implementation') ? 'active' : '' }}">
                <p>SOP for OBE Implementation</p>
            </a>
        </div>
    </div>
</div>

<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
