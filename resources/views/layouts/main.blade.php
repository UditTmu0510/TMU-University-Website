@include('university.header_home')
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
@include('university.footer')