@extends('layouts.adminlayout')
@section('content')
<div class="pagetitle">
    <h1>Edit Permission</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Role</li>
        <li class="breadcrumb-item active">Edit Role</li>
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
   

      <!-- Multi Columns Form -->
      <form id="myForm" method="POST" action="{{route('update.role')}}" class="row g-3">
        @csrf
        <div class="col-md-12">
          <label for="permission_name" class="form-label">Role Name</label>
          <input type="text" name="name" class="form-control" value="{{$role->name}}" id="name">
          <input type="hidden" name="id" class="form-control" value="{{$role->id}}" id="id">
        </div>'
        '
 

 
       
        <div class="text-center">
          <input type="submit" class="btn btn-primary" />
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

@endsection