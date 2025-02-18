@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <div class="row mx-0 mb-3">

            <div class="container d-none d-sm-block">
                <div style="text-align:center">
                    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Ethics </span><span> Committee</span>
                    </h1>
                    <iframe src="{{asset('/assets/pdf/research/Research_Ethics_Committee_2023_002(R).pdf')}}"
                        frameborder="0" height="800px" width="100%"></iframe>
                </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
                <div style="text-align:center">
                    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Ethics </span><span> Committee</span>
                    </h1>
                    <a href="{{asset('/assets/pdf/research/Research_Ethics_Committee_2023_002(R).pdf')}}"
                        class="tmu-btn btn-4" download>Download PDF</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection