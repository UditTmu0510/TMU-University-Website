@extends('layouts.university.colleges.ccsit_with_sidebar')
@section('content')


<div class="main-content">
    <!-- <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading"><span>Project</span><span> Guidlines</span></h1>

        <div class="container">
            <div class="row mb-4">
                <object data="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}"
                    type="application/pdf" width="100%" height="1120px">
                    <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                    <center><a type="button"
                            class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light"
                            href="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}"
                            download="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}"
                            data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2"
                                aria-hidden="true"></i>Click here to
                            download PDF file.</a></center>
                </object>
            </div>
        </div>
    </div> -->
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Project</span><span> Guidlines</span></h1>
            <iframe src="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
        <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Project</span><span> Guidlines</span></h1>
            <div class="iqac-container">
                <div class="iqac-card">
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description"><b>Project <br>Guidelines</b></p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection