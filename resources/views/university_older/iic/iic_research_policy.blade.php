@extends('layouts.university.departments.iic_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"> <span>Research </span><span>Policy</span></h1>
            <div class="iqac-container">
                <div class="iqac-card">
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Consultancy & Research Project</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="{{asset('assets/pdf/research/consultancy_research_project_policy.pdf')}}">View PDF</a>
                    </div>
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Seed Money Grant <br>Scheme</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="{{asset('assets/pdf/research/seed_money_policy.pdf')}}">View PDF</a>
                    </div>
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Financial Assistance for Research</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="{{asset('assets/pdf/research/incentive_policy.pdf')}}">View PDF</a>
                    </div>
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Intellectual Property Right Policy</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('assets/pdf/research/ipr_policy.pdf')}}">View
                            PDF</a>
                    </div>
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Vice Chancellor's Innovation Fund</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="{{asset('assets/pdf/research/innovation_fund.pdf')}}">View PDF</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</div>


@endsection