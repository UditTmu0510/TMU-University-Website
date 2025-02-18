<div class="main-sidebar" id="main-sidebar">
    <div class="logo">
        <span class="close-btn" id="closeSidebar">&times;</span>
    </div>
    <div class="custom-menu-section">
        <a href="{{route('pharmacy.about.us')}}" class="custom-menu-item {{ setActive('pharmacy.about.us') }}">
            <i class="bi bi-arrow-left-circle" style="color:tmu-color-blue; font-size:20px; padding-top:2px;"></i>
            <p>Back to Pharmacy College</p>
        </a>

        <h2>About Journal</h2>
        <div class="account-section">
            <a href="{{ route('about.tjpbs') }}" class="custom-menu-item {{ setActive('about.tjpbs') }} " >
                <p>About TJPBS</p>
            </a>
            <a href="{{ route('tjpbs.policies') }}" class="custom-menu-item {{ setActive('tjpbs.policies') }}" >
                <p>Policies</p>
            </a>
        </div>
        <h2>Boards & Guidelines</h2>
        <div class="account-section">
            <a href="{{ route('tjpbs.editorial.board') }}" class="custom-menu-item {{ setActive('tjpbs.editorial.board') }}">
                <p>Editorial Board</p>
            </a>
            <a href="{{ route('tjpbs.reviewer.board') }}" class="custom-menu-item {{ setActive('tjpbs.reviewer.board') }} ">
                <p>Reviewer Board</p>
            </a>
            <a href="{{ route('tjpbs.publication.ethics') }}" class="custom-menu-item {{ setActive('tjpbs.publication.ethics') }}">
                <p>Publication Ethics</p>
            </a>
            <a href="{{ route('tjpbs.authors.guidelines') }}" class="custom-menu-item {{ setActive('tjpbs.authors.guidelines') }}">
                <p>Author's Guidelines</p>
            </a>
        </div>
        <h2>Publication</h2>
        <div class="account-section">
            <a href="{{ route('tjpbs.indexing') }}" class="custom-menu-item {{ setActive('tjpbs.indexing') }}">
                <p>Indexing</p>
            </a>
            <a href="{{ route('tjpbs.current.issues') }}" class="custom-menu-item {{ setActive('tjpbs.current.issues') }}">
                <p>Current Isuues</p>
            </a>
            <a href="{{ route('tjpbs.archives') }}" class="custom-menu-item {{ setActive('tjpbs.archives') }}">
                <p>Archives</p>
            </a>
            <a href="{{ route('manuscript.form.tjpbs') }}" class="custom-menu-item {{ setActive('manuscript.form.tjpbs') }}">
                <p>Manuscript Submission</p>
            </a>
        </div>
        <h2>Quicklinks</h2>
        <div class="account-section">
            <a href="{{ route('tjpbs.contact.us') }}" class="custom-menu-item {{ setActive('tjpbs.contact.us') }}">
                <p>Contact-Us</p>
            </a>
        </div>

    </div>
    <div class="account-section">
    </div>
</div>
<div class="toggle-btn" style="color: #fff;" id="sidebarToggle">
    <i class="fas fa-bars" style="transform: rotate(90deg);"></i>
</div>