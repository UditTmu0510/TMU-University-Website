@extends('layouts.adminlayout')
@section('content')
<div class="pagetitle">
    <h1>All Roles</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Roles</li>
        <li class="breadcrumb-item active">All Roles</li>
      </ol>
    </nav>
  </div>

  
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Roles</h5>
            
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
              @if(Auth::user()->can('Add Role'))
              <a href="{{route('add.roles')}}" class="btn btn-primary" style="margin-right:10px;">Add Role</a>
              @endif
              
            </div>
          <div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>S.</b>No.
                  </th>
                  <th>Role Name</th>
                  <th>Crerated At</th>
                  <th>Updated At</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
@foreach($roles as $key=> $item)
                <tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->created_at}}</td>
<td>{{$item->updated_at}}</td>
<td>
  @if(Auth::user()->can('Edit Role'))
  <a href="{{route('edit.role',$item->id)}}" class="btn btn-primary">Edit</a>
@endif
  @if(Auth::user()->can('Delete Role'))
  <a href="{{route('delete.role',$item->id)}}" class="btn btn-danger">Delete</a></td>
  @endif
                </tr>

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
