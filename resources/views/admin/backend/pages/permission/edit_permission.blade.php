@extends('layouts.adminlayout')
@section('content')

<div class="pagetitle">
    <h1>Edit Permission</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Permission</li>
        <li class="breadcrumb-item active">Edit Permission</li>
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
      <form id="myForm" method="POST" action="{{route('update.permission')}}" class="row g-3">
        @csrf
        <div class="col-md-12">
          <label for="permission_name" class="form-label">Permission Name</label>
          <input type="text" name="name" class="form-control" value="{{$permission->name}}" id="name">
          <input type="hidden" name="id" class="form-control" value="{{$permission->id}}" id="id">
        </div>'
        '
        <div class="col-md-12">
        <select id="group_name" name="group_name" class="form-select">
          <option>Select Group Name</option>
          <option value="CRC" @if($permission->group_name == 'CRC') selected @endif>CRC</option>
          <option value="Users" @if($permission->group_name == 'Users') selected @endif>Users</option>
          <option value="University" @if($permission->group_value == 'University') selected @endif>University</option>
<option value="Metas" @if($permission->group_value == 'Metas') selected @endif>Metas</option>
<option value="HR" @if($permission->group_value == 'HR') selected @endif>HR</option>
<option value="Programme" @if($permission->group_value == 'Programme') selected @endif>Programme</option>
          <option value="Events" @if($permission->group_value == 'Events') selected @endif>Events</option>
          <option value="Blog" @if($permission->group_value == 'Blog') selected @endif>Blog</option>
          <option value="Testimonial" @if($permission->group_value == 'Testimonial') selected @endif>Testimonial</option>
          <option value="Anti Ragging" @if($permission->group_value == 'Anti Ragging') selected @endif>Anti Ragging</option>
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