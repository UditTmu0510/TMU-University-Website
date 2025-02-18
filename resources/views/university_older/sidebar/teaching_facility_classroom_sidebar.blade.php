<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Classrooms</h2>
        <div class="account-section">
            <a href="{{route('teaching.facility')}}" class="custom-menu-item {{ setActive('teaching.facility') }}">
                <i class="bi bi-arrow-left-circle" style="color:tmu-color-blue; font-size:20px; padding-top:2px;"></i>
                <p>Back to Teaching Facility</p>
            </a>
            <a href="{{route('class.room.medical')}}" class="custom-menu-item {{ setActive('class.room.medical') }}">
                <p>Medical Class Room</p>
            </a>
            <a href="{{route('class.room.nursing')}}" class="custom-menu-item {{ setActive('class.room.nursing') }}">
                <p>Nursing Class Room</p>
            </a>
            <a href="{{route('class.room.paramedical')}}" class="custom-menu-item {{ setActive('class.room.paramedical') }}">
                <p>Paramedical Class Room</p>
            </a>
            <a href="{{route('class.room.physicaleducation')}}" class="custom-menu-item {{ setActive('class.room.physicaleducation') }}">
                <p>Physical Education Class Room</p>
            </a>
            <a href="{{route('class.room.physiotherapy')}}" class="custom-menu-item {{ setActive('class.room.physiotherapy') }}">
                <p>Physiotherapy Class Room</p>
            </a>
            <a href="{{route('class.room.pharmacy')}}" class="custom-menu-item {{ setActive('class.room.pharmacy') }}">
                <p>Pharmacy Class Room</p>
            </a>
            <a href="{{route('class.room.education')}}" class="custom-menu-item {{ setActive('class.room.education') }}">
                <p>Education Class Room</p>
            </a>
            <a href="{{route('class.room.agriculture')}}" class="custom-menu-item {{ setActive('class.room.agriculture') }}">
                <p>Agriculture Class Room</p>
            </a>
            <a href="{{route('class.room.finearts')}}" class="custom-menu-item {{ setActive('class.room.finearts') }}">
                <p>Fine Arts Class Room</p>
            </a>
            <a href="{{route('class.room.management')}}" class="custom-menu-item {{ setActive('class.room.management') }}">
                <p>Management Class Room</p>
            </a>
            <a href="{{route('class.room.ccsit')}}" class="custom-menu-item {{ setActive('class.room.ccsit') }}">
                <p>CCSIT Class Room</p>
            </a>
            <a href="{{route('class.room.engineering')}}" class="custom-menu-item {{ setActive('class.room.engineering') }}">
                <p>Engineering Class Room</p>
            </a>
            <a href="{{route('class.room.dental')}}" class="custom-menu-item {{ setActive('class.room.dental') }}">
                <p>Dental Class Room</p>
            </a>
            <a href="{{route('class.room.law')}}" class="custom-menu-item {{ setActive('class.room.law') }}">
                <p>Law Class Room</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>