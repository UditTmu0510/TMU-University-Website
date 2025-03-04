@extends('layouts.university.main')
@section('content')

<div class="container my-5">
  <!-- Row to contain cards -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    
    <!-- Card 1 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/cs_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Computer Applications</h5><hr>
          <a href="{{asset('pdf/research/cs_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/cs_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/cs_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/management_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Management</h5><hr>
          <a href="{{asset('pdf/research/management_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/management_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/management_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/education_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Education</h5><hr>
          <a href="{{asset('pdf/research/education_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/education_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/education_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/dentistry_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Dental Science</h5><hr>
          <a href="{{asset('pdf/research/ds_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/ds_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="#" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/allied_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Allied Health Sciences</h5><hr>
          <a href="{{asset('pdf/research/ahs_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="#" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/ahs_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/pharmacy_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Pharmacy</h5><hr>
          <a href="{{asset('pdf/research/pharmacy_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/pharmacy_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/pharmacy_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 7 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/engineering_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Engineering</h5><hr>
          <a href="{{asset('pdf/research/engineering_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/engineering_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/engineering_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 8 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/nursing_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Nursing</h5><hr>
          <a href="{{asset('pdf/research/nursing_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/nursing_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/nursing_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 9 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/law_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Law</h5><hr>
          <a href="{{asset('pdf/research/law_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/law_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/law_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 10 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/physical_education_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Physical Education</h5><hr>
          <a href="{{asset('pdf/research/pe_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/pe_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/pe_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>
    
    <!-- Card 11 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/fineart_research.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Fine Arts</h5><hr>
          <a href="#" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/fineart_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="#" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
      </div>
    </div>

    <!-- Card 11 -->
    <div class="col">
      <div class="card">
        <img src="https://www.tmu.ac.in/img/research/jain-ahimsa.jpg" class="card-img-top" alt="Course Image">
        <div class="card-body">
          <h5 class="card-title">Jain Studies</h5><hr>
          <a href="{{asset('pdf/research/js_trat_scheme.pdf')}}" class="text-decoration-none"><p class="card-text">Examination Scheme of TRAT</p></a>
          <a href="{{asset('pdf/research/js_trat_syllabus.pdf')}}" class="text-decoration-none"><p class="card-text">Syllabus of TRAT</p></a>
          <a href="{{asset('pdf/research/js_trat_model_question.pdf')}}" class="text-decoration-none"><p class="card-text">Sample/Model Question Paper</p></a>
        </div>
        </div>
    </div>

  </div>
</div>

@endsection