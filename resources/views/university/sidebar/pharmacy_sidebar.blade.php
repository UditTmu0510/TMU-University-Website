<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>About College</h2>
        <div class="account-section">
            <a href="{{ route('pharmacy.home') }}" class="custom-menu-item {{ setActive('pharmacy.home') }}">
                <p>Home</p>
            </a>
            <a href="{{ route('pharmacy.about.us') }}" class="custom-menu-item {{ setActive('pharmacy.about.us') }}">
                <p>About Us</p>
            </a>
            <a href="{{ route('pharmacy.college.highlights') }}" class="custom-menu-item {{ setActive('pharmacy.college.highlights') }}">
                <p>College Highlights</p>
            </a>
            <a href="{{ route('pharmacy.principal') }}" class="custom-menu-item {{ setActive('pharmacy.principal') }}">
                <p>Principal Desk</p>
            </a>
            <a href="{{ route('pharmacy.college.advisory.board') }}" class="custom-menu-item {{ setActive('pharmacy.college.advisory.board') }}">
                <p>College Advisory Board</p>
            </a>
            <a href="{{ route('pharmacy.gallery') }}" class="custom-menu-item {{ setActive('pharmacy.gallery') }}">
                <p>Gallery</p>
            </a>
            <a href="{{ route('pharmacy.infrastructure') }}" class="custom-menu-item {{ setActive('pharmacy.infrastructure') }}">
                <p>Infrastructure</p>
            </a>
        </div>
        <h2>Academics</h2>
        <div class="account-section">
            <a href="{{ route('pharmacy.syllabus') }}" class="custom-menu-item {{ setActive('pharmacy.syllabus') }}">
                <p>Syllabus</p>
            </a>
            <a href="{{ route('pharmacy.academic.calendar') }}" class="custom-menu-item {{ setActive('pharmacy.academic.calendar') }}">
                <p>Academic Calendar</p>
            </a>
        </div>
        <h2>Student Corner</h2>
        <div class="account-section">
            <a href="{{ route('pharmacy.timetable') }}" class="custom-menu-item {{ setActive('pharmacy.timetable') }}">
                <p>Time Table</p>
            </a>
            <a href="http://library.tmu.ac.in/" class="custom-menu-item">
                <p>Old Exam Papers</p>
            </a>
            <a href="{{ route('pharmacy.anti.ragging') }}" class="custom-menu-item {{ setActive('pharmacy.anti.ragging') }}">
                <p>Anti Ragging Committee</p>
            </a>
            <a href="{{ route('about.tjpbs') }}" class="custom-menu-item {{ setActive('about.tjpbs') }}">
                <p>Journal</p>
            </a>
        </div>
        <h2>Quick Link</h2>
        <div class="account-section">
            <a href="{{route('tmu.publication')}}" class="custom-menu-item">
                <p>Pharmacoaerena</p>
            </a>
            <a href="{{ route('pharmacy.contact.us') }}" class="custom-menu-item {{ setActive('pharmacy.contact.us') }}">
                <p>Contact Us</p>
            </a>
        </div>
        <div class="account-section">
            <a href="{{ route('pharmacy.iqac') }}" class="custom-menu-item {{ setActive('pharmacy.iqac') }}">
                <p>College IQAC</p>
            </a>
            <a href="{{ asset('/assets/pdf/publications/reports/sif-report-2021.pdf') }}" class="custom-menu-item">
                <p>SIF Report</p>
            </a>
        </div>
    </div>
    <div class="account-section">
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
