<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <h2>Quick Links</h2>
        <div class="account-section">
            <a href="{{ route('greviances.about') }}" class="custom-menu-item {{ setActive('greviances.about') }}">
                <p>Greviance Portal</p>
            </a>
            <a href="{{ route('disciplinary.rules') }}" class="custom-menu-item {{ setActive('disciplinary.rules') }}">
                <p>Disciplinary Rules</p>
            </a>
            <a href="{{asset('/assets/pdf/TMU_Admission_Policy_&_Refund_Policy_2024.pdf')}}" target="_blank" class="custom-menu-item">
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
            <a href="{{asset('/assets/pdf/anti_ragging_policy/anti-ragging-policy.pdf')}}" target="_blank" class="custom-menu-item ">
                <p>Anti Ragging Policy</p>
            </a>
            <a href="{{ route('university.sports.calendar') }}" class="custom-menu-item {{ setActive('university.sports.calendar') }}">
                <p>University Sports Calendar</p>
            </a>
            <a href="{{route('tmu.publication')}}" class="custom-menu-item {{ setActive('tmu.publication') }}">
                <p>Publications</p>
            </a>
            <a href="{{route('tmu.faqs')}}" class="custom-menu-item {{ setActive('tmu.faqs') }}">
                <p>FAQ's</p>
            </a>
            <a href="{{route('tmu.convocation')}}" class="custom-menu-item {{ setActive('tmu.convocation') }}">
                <p>Convocation</p>
            </a>
            <a href="{{route('tmu.transport')}}" class="custom-menu-item {{ setActive('tmu.transport') }}">
                <p>Transportation</p>
            </a>
            <a href="{{route('tmu.media.cover')}}" class="custom-menu-item {{ setActive('tmu.media.cover') }}">
                <p>Media Coverage</p>
            </a>
            <a href="{{route('application.form')}}" class="custom-menu-item {{ setActive('application.form') }}">
                <p>Application Form</p>
            </a>
            <a href="{{route('how.to.apply')}}" class="custom-menu-item {{ setActive('how.to.apply') }}">
                <p>How To Apply</p>
            </a>
            <a href="{{route('tmu.loan')}}" class="custom-menu-item {{ setActive('tmu.loan') }}">
                <p>Education Loan</p>
            </a>
        </div>
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>
