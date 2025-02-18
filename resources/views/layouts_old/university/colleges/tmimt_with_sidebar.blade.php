@include('university.header')
<div class="custom-flex-block">
@include('university.sidebar.tmimt_sidebar')
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/functions.bundle.js')}}"></script>
@include('university.footer_college')
