@extends('layouts.adminlayout')
@section('content')

<div class="pagetitle">
    <h1>Add Permission</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Permission</li>
        <li class="breadcrumb-item active">Add Permission</li>
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
      <h5 class="card-title">Group Name</h5>

      <!-- Multi Columns Form -->
      <form id="myForm" method="POST" action="{{route('store.permission')}}" class="row g-3">
        @csrf
        <div class="col-md-12">
          <label for="permission_name" class="form-label">Permission Name</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>'
        '
        <div class="col-md-12">
        <select id="group_name" name="group_name" class="form-select">
          <option>Select Group Name</option>
          <option value="Users">Users</option>
          <option value="CRC">CRC</option>
          <option value="University">University</option>
          <option value="Metas">Metas</option>
          <option value="HR">HR</option>
          <option value="Programme">Programme</option>
          <option value="Events">Events</option>
          <option value="Blog">Blog</option>
          <option value="Testimonial">Testimonial</option>
          <option value="Anti Ragging">Anti Ragging</option>
           <option value="Recruiters">Recruiters</option>
           <option value="Syllabus">Syllabus</option>
           <option value="IQAC">IQAC</option>
        </select>
      </div>


 
       
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