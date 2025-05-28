@include('university.header_programme_page')
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif

 <script src="{{ asset('js/modules/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/modules/stickfooteronsmall.js') }}" defer></script>
    <script src="https://widgets.nopaperforms.com/emwgts.js" async></script>
@include('university.footer')