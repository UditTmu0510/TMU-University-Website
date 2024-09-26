<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Grievances Cell</h2>
        <div class="account-section">
            <a href="{{ route('greviances.about') }}" class="custom-menu-item {{ setActive('greviances.about') }}">
                <p>About Cell</p>
            </a>
            <a href="{{ route('greviance.submit.suggestion') }}" class="custom-menu-item {{ setActive('greviance.submit.suggestion') }}">
                <p>Submit Suggestion/Grievance</p>
            </a>
        </div>
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('disciplinary.rules') }}" class="custom-menu-item {{ setActive('disciplinary.rules') }}">
                <p>Disciplinary Rules</p>
            </a>
            <a href="{{asset('/assets/pdf/TMU_Admission_Policy_&_Refund_Policy_2024.pdf')}}" class="custom-menu-item">
                <p>Admission Refund Policy</p>
            </a>
            <a href="{{ route('university.anti.ragging.committee') }}" class="custom-menu-item {{ setActive('university.anti.ragging.committee') }}">
                <p>Anti Ragging Committee</p>
            </a>
            <a href="{{ route('university.academic.calendar') }}" class="custom-menu-item {{ setActive('university.academic.calendar') }}">
                <p>University Academic Calendar</p>
            </a>
            <a href="{{ route('nss.about') }}" class="custom-menu-item {{ setActive('nss.about') }}">
                <p>NSS Unit</p>
            </a>
            <a href="{{asset('/assets/pdf/anti_ragging_policy/anti-ragging-policy.pdf')}}" class="custom-menu-item">
                <p>Anti Ragging Policy</p>
            </a>
            <a href="{{ route('university.sports.calendar') }}" class="custom-menu-item {{ setActive('university.sports.calendar') }}">
                <p>University Sports Calendar</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle"><i class="fas fa-bars" style="transform: rotate(90deg);"></i></div>
