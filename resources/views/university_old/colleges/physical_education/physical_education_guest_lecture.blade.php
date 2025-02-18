@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')

<div class="main-content">


    <h1 class="tmu-text-primary tmu-page-heading"><span>Guest </span><span>Lecture</span></h1>

    <div class="container">
        <div class="row">
            <div class="clear"></div>

            @foreach($guest_lectures as $guest_lecture)



            <div class="entry event col-lg-4 col-md-6 col-sm-6 ">
                <div class="grid-inner row g-0 p-4 bg-transparent shadow-sm h-shadow card border">
                    <div class="entry-image">
                        <a href="#">
                            <img src="{{asset($guest_lecture->ei1_path)}}"
                                alt="Event-1">
                        </a>
                    </div>
                    <div class="entry-meta mb-1">
                        <ul>
                            <li>
                                <span class="badge bg-warning text-dark py-1 px-2">
                                    <i class="uil-calendar-alt"></i>{{ $guest_lecture->formatted_date }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="entry-title title-sm">
                        <h3 class="tmu-text-primary fs-16">
                            <span>{{ $guest_lecture->event_title }}</span>
                        </h3>
                    </div>
                    <div class="entry-content mt-1" style="text-align: right;">
                        <a href="{{ url('news/' . $guest_lecture->n_slug) }}"
                            class="tmu-btn btn-1 m-0 py-1 px-2" style="font-size:12px">View More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection