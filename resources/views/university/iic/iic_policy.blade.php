@extends('layouts.university.departments.iic_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Innovation & </span><span>Startup Policies</span>
            </h1>
            <div class="iqac-container">
                <div class="iqac-card">
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Innovation and Startup Policy 2019</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="https://www.tmu.ac.in/pdf/Innovation%20and%20Startup%20Policy%202019.pdf">View PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

@endsection