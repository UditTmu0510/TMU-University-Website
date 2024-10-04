@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">


<div class="main-content">
    <div class="container">
        <div class="box ">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Annual </span><span> Magazine</span></h1>
            <div class="container">
                <div class="row">
                <div class="bookshelf"></div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="assets/pdf/magazines/ENTHESES.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/magazines/physiotherapy/magazine.jpg')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                            <div class="left-side_ctld">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection