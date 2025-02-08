@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')

<div class="main-content">
    <div class="coontainer">

        <div class="row mx-0 mb-3">
            <h1 class="tmu-text-primary tmu-page-heading"><span> University Academic </span><span> Integrity Panel</span></h1>
            <object data="{{asset('/assets/pdf/research/uaip_caip.pdf')}}" type="application/pdf" width="100%" height="1150px">
                <p>Your web browser doesn't have a PDF plugin. Instead you can</p>
                <center><a type="button" class="btn btn-success btn-lg btn-rounded text-lg waves-effect waves-light" href="{{asset('/assets/pdf/research/uaip_caip.pdf')}}" download="" data-uw-pdf-br="2" data-uw-pdf-doc=""><i class="fa fa-download fa-2x pr-2" aria-hidden="true"></i>Click here to download PDF file.</a></center>
            </object>
        </div>
        <!-- container ends -->
    </div>
</div>
</div>





@endsection