@extends('layouts.master_programme')
@section('content')

<section id="content" class="prog-bm mb-5" style="margin-top: 22px;">
    <div class="content-wrap py-0">
        <!-- Code for the Desktop view -->
        <div class="container d-none d-sm-block">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 text-center">
                    <h2 class="tmu-text-primary my-4 mb-5"><span>PROGRAMMES</span> <span>OFFERED</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="list-group" id="list-tab" role="tablist">
                        @foreach ($colleges as $college)
                        <h4 class="mb-1">
                            <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm" 
                                id="{{$college->cd_code}}" 
                                data-collegeId="{{$college->cd_id}}" 
                                data-bs-toggle="list" 
                                href="#{{$college->cd_id}}" 
                                role="tab" 
                                aria-controls="{{$college->cd_id}}">
                                <img src="{{ asset($college->icon_path) }}" alt="Icon" class="float-start">
                                &nbsp;&nbsp;{{$college->short_name}}
                            </a>
                        </h4>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($colleges as $college)
<div class="tab-pane fade show programmes-data" id="{{$college->cd_id}}" role="tabpanel" aria-labelledby="{{$college->cd_code}}">
    <div class="row">
        

        @if (isset($groupedPrograms[$college->cd_id]) && count($groupedPrograms[$college->cd_id]) > 0)
            @foreach ($groupedPrograms[$college->cd_id] as $program)
            <div class="col-md-4">
                <div class="card card-sz shadow-sm">
                    <img src="{{ asset($program->programme_image_path) }}" class="card-img-top" alt="..." loading="lazy">
                    <div class="card-body">
                        <h5>{{ $program->prog_name }}</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <a href="{{ url('programme/' . $program->page_slug) }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <p class="text-muted">No programmes available for this college.</p>
        @endif
    </div>
</div>
@endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Code for the Mobile View -->
        <div class="container d-block d-sm-none">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 text-center">
                    <h2 class="tmu-text-primary my-3"><span>PROGRAMMES</span> <span>OFFERED</span></h2>
                </div>
            </div>

            @foreach ($colleges as $college)
            <button class="careers-accordion" data-collegeId="{{$college->cd_id}}">
                <span><i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{$college->cd_name}}</span> 
                <span class="icon">+</span>
            </button>
            <div class="panel">
                <ul class="progul" id="programme{{$college->cd_id}}">
    @if (isset($groupedPrograms[$college->cd_id]) && count($groupedPrograms[$college->cd_id]) > 0)
            @foreach ($groupedPrograms[$college->cd_id] as $program)
        <li class="progli">
            <div class="card shadow-sm progcard card-sz">
                <img src="{{ asset($program->programme_image_path) }}" class="card-img-top" alt="...">
                <div class="card-body progcardbody">
                    <h5 class="mb-2">{{ $program->prog_name }}</h5>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                    <a href="{{ url('programme/' . $program->page_slug) }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View More</a>
                </div>
            </div>
        </li>
        @endforeach
    @else
        <li class="text-muted">No programmes available.</li>
    @endif
</ul>

            </div>
            <hr class="horizontal-line">
            @endforeach
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.programme-fetch-button').click(function() {
            var collegeId = $(this).attr('data-collegeId');
            $('.programme-fetch-button').removeClass('active');
            $(this).addClass('active');
            $('.programmes-data').removeClass('active show');
            $('#' + collegeId).addClass('active show');
        });

        $('.programme-fetch-button:first').addClass('active');
        $('.programmes-data:first').addClass('active show');
    });
</script>

@endsection
