@extends('layouts.adminlayout')
@section('content')

<div class="pagetitle">
    <h1>Import Permission</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Permission</li>
        <li class="breadcrumb-item active">Import Permission</li>
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
    <a href="{{route('export.permission')}}" class="btn btn-warning">Download Xlsx</a>

      <!-- Multi Columns Form -->
      <form id="myForm" method="POST" action="{{route('permission.import')}}" class="row g-3" enctype="multipart/form-data" >
        @csrf
        <div class="col-md-12">
          <label for="import_file" class="form-label">Xlsx File Import</label>
          <input type="file" name="import_file" class="form-control" id="import_file">
        </div>'
    
 
       
        <div class="text-center">
          <input type="submit" class="btn btn-primary" value="Upload"/>
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>


@endsection