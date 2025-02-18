
@extends('layouts.adminlayout')
@section('content')
<div class="pagetitle">
    <h1>All Permissions</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Permission</li>
        <li class="breadcrumb-item active">All Permission</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Admins</h5>
            
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
            <!-- Table with stripped rows -->
            <div align="right">
              @if(Auth::user()->can('Add User'))
              <a href="{{route('add.admin')}}" class="btn btn-primary" style="margin-right:10px;">Add Admin</a>
            @endif
            </div>
          <div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>S.</b>No.
                  </th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>UserName</th>
                  <th>Designation</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Company</th>
                  <th>Role</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>

@php
    $slno=1;
@endphp
@foreach($alladmin as $key=> $item)
<tr>
<td>{{$slno}}</td>
<td><img src="{{(!empty($item->photo)) ? url($item->photo) : url('backend/assets/img/men.webp')}}" class="img-fluid" style="max-width:120px;" /></td>
<td>{{$item->name}}</td>
<td>{{$item->username}}</td>
<td>{{$item->designation}}</td>
<td>{{$item->email}}</td>

<td>{{$item->phone}}</td>
<td>{{$item->address}}</td>
<td>{{$item->company}}</td>
<td>
@foreach($item->roles as $role)
<span class="badge badge-pill bg-danger">
  {{$role->name}}
</span>
@endforeach
</td>
<td>
  @if(Auth::user()->can('Edit User'))
  <a href="{{route('edit.admin',$item->id)}}" class="btn btn-primary">Edit</a>
@endif
</td>
<td>
  @if(Auth::user()->can('Delete User'))
  <a href="{{route('delete.admin',$item->id)}}" class="btn btn-danger">Delete</a>
@endif
</td>

@php
    $slno++;
@endphp
@endforeach
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection