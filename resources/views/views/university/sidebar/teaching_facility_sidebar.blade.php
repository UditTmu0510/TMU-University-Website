<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
         <h2>Teaching Facilities</h2>
        <div class="account-section">
            <a href="{{route('teaching.facility')}}" class="custom-menu-item {{ setActive('teaching.facility') }}">
                <i class="bi bi-arrow-left-circle" style="color:tmu-color-blue; font-size:20px; padding-top:2px;"></i><p>Back to Teaching Facility</p>
            </a>
            <a href="{{route('central.instrument.facility')}}" class="custom-menu-item {{ setActive('central.instrument.facility') }}">
                <p>Central Instrument Facilities</p>
            </a>
            <a href="{{route('rdc.infrastructure')}}" class="custom-menu-item {{ setActive('rdc.infrastructure') }}">
                <p>Research & Development Centre</p>
            </a>
            <a href="{{route('eresources.studio.lab')}}" class="custom-menu-item {{ setActive('eresources.studio.lab') }}">
                <p>TMIMT eResources Studio Lab</p>
            </a>
            <a href="{{route('media.laboratory.studio')}}" class="custom-menu-item {{ setActive('media.laboratory.studio') }}">
                <p>Media Laboratories Studio</p>
            </a>
            <a href="{{route('skill.lab')}}" class="custom-menu-item {{ setActive('skill.lab') }}">
                <p>Skill Lab</p>
            </a>
            <a href="{{route('simulation.lab')}}" class="custom-menu-item {{ setActive('simulation.lab') }}">
                <p>Simulation Lab</p>
            </a>
            <a href="{{route('museum')}}" class="custom-menu-item {{ setActive('museum') }}">
                <p>Museum</p>
            </a>
            <a href="{{route('animal.house')}}" class="custom-menu-item {{ setActive('animal.house') }}">
                <p>Animal House</p>
            </a>
            <a href="{{route('business.lab')}}" class="custom-menu-item {{ setActive('business.lab') }}">
                <p>Business Lab</p>
            </a>
            <a href="{{route('tmimt.business.lab')}}" class="custom-menu-item {{ setActive('tmimt.business.lab') }}">
                <p>TMIMT Business Lab</p>
            </a>
            <a href="{{route('dst.nanotechnology.lab')}}" class="custom-menu-item {{ setActive('dst.nanotechnology.lab') }}">
                <p>DST Nanotechnology Lab</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>