@extends('layouts.adminlayout')
@section('content')

<div class="pagetitle">
    <h1>Add Admin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Admin</li>
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
      <form id="myForm" method="POST" action="{{route('store.admin')}}" class="row g-3">
        @csrf
        <div class="row" style="margin-top:30px;">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">UserName</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
    </div>

      
<div class="row">
          <div class="col-md-6">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="designation">
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>

        </div>        
      
<div class="row">
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone">
          </div>


          
          <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address">
          </div>
 </div>
 <div class="row">
        <div class="col-md-6">
            <label for="company" class="form-label">Company</label>
            <input type="text" name="company" class="form-control" id="company">
          </div>

        <div class="col-md-6">
            <label for="role" class="form-label">Role</label>
        <select id="roles" name="role" class="form-select" id="role">
          <option>Select Role</option>
         @foreach ($roles as $key => $value)
             <option value="{{$value->name}}">{{$value->name}}</option>
         @endforeach
        </select>
      </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="admin_password">
          </div>
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