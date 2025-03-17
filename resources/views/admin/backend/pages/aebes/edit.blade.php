@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>Edit AEBES Attandance</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">AEBES Attendance</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Attandance/li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
@if(session('success'))
<div class="alert alert-success">
  {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{session('error')}}
</div>
@endif

    <div class="card">
    <div class="card-body">
      {{-- <h5 class="card-title">Group Name</h5> --}}

      <!-- Multi Columns Form -->
      <form method="POST" action="{{ route('aebes.update', $aebes->id) }}" enctype="multipart/form-data">

        @csrf
        



        

      
        <div class="row mt-3">

            <div class="col-md-4">
                <label for="date" class="col-form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" value= "{{$aebes->date}}" required  readonly/>
                
            </div>
            <div class="col-md-3">
                <label for="pdf_path" class="col-form-label">Attendance</label>
                <div class="col-sm-10">
                    @if(!empty($aebes->pdf_path))
                        <input type="file" class="form-control dropify" name="pdf_path" id="pdf_path" data-default-file="{{ asset($aebes->pdf_path) }}" />
                        <a href="{{ asset($aebes->pdf_path) }}" target="_blank" class="btn btn-sm btn-secondary mt-2">View Current PDF</a>
                    @else
                        <input type="file" class="form-control dropify" name="pdf_path" id="pdf_path" />
                    @endif
                </div>
            </div>


        </div>    
        
      
        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Save"/>
        </div>

      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>


@endsection

