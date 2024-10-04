@include('admin.header1');
@include('admin.sidebar')
<main id="main" class="main">
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
</main>
@include('admin.footer1')
