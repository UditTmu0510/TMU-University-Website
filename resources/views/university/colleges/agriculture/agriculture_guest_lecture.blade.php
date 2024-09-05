@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<style>
    .badge {
        background-color: #0010551E !important;
        color: #001055 !important
    }
</style>



<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> Guest </span><span> Lectures</span>
        </h1>
        <div class="container">
            <div class="row">
                <div class="clear"></div>
                <div class="entry event col-lg-4 col-md-6 col-sm-6 ">
                    <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow card border">
                        <div class="entry-image">
                            <a href="#">
                                <img src="{{asset('/assets/img/guest_lecturer/agriculture/1.jpg')}}"
                                    alt="Event-1">
                            </a>
                        </div>
                        <div class="entry-meta mb-1">
                            <ul>
                                <li><span class="badge bg-warning text-dark py-1 px-2"><i class="uil-calendar-alt"></i>Novemvber 02<sup>nd</sup>, 2019</span></li>
                            </ul>
                        </div>
                        <div class="entry-title title-sm ">
                            <h3 class="tmu-text-primary fs-16"><span>Guest Lecture on proportions for fertilizers to use</span></h3>
                        </div>
                        <div class="entry-content mt-1" style="text-align: right;">
                            <a href=""
                                class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
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