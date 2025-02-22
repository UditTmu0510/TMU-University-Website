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
            <h5 class="card-title">All Permissions</h5>
            
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
              @if(Auth::user()->can('Add Permission'))
              <a href="{{route('add.permission')}}" class="btn btn-primary" style="margin-right:10px;">Add Permission</a>
            @endif
            </div>
      <div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>S.</b>No.
                  </th>
                  <th>Permission Name</th>
                  <th>Group Name</th>
                  <th>Crerated At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
@foreach($permissions as $key=> $item)
                <tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->group_name}}</td>
<td>{{$item->created_at}}</td>
<td>{{$item->updated_at}}</td>
<td>
  @if(Auth::user()->can('Edit Permission'))
  <a href="{{route('edit.permission',$item->id)}}" class="btn btn-primary">Edit</a>
@endif

  @if(Auth::user()->can('Delete Permission'))
<a href="{{route('delete.permission',$item->id)}}" class="btn btn-danger">Delete</a>
  @endif
</td>                                                                                                                                                                           
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