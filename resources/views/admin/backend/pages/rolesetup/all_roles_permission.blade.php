@extends('layouts.adminlayout')
@section('content')
<div class="pagetitle">
    <h1>All Roles</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Roles</li>
        <li class="breadcrumb-item active">All Roles in Permission</li>
      </ol>
    </nav>
  </div>

  
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Roles in Permission</h5>
            
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
            
              <a href="{{route('add.roles.permission')}}" class="btn btn-primary" style="margin-right:10px;">Add Role in Permissions</a>

            
            </div>
          <div class="table-responsive">
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>S.</b>No.
                  </th>
                  <th>Roles Name</th>
                  <th>Permission</th>
             
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
@foreach($roles as $key=> $item)
                <tr>
<td>{{$key+1}}</td>
<td>{{$item->name}}</td>
<td>
@foreach($item->permissions as $perm)

<span class="badge bg-danger">{{$perm->name}}</span>
@endforeach
</td>
<td>
  @if(Auth::User()->can('Edit Roles & Permissions'))
  <a href="{{route('admin.edit.roles',$item->id)}}" class="btn btn-primary">Edit</a>
@endif

  @if(Auth::User()->can('Delete Roles & Permissions'))
  <a href="{{route('admin.roles.delete',$item->id)}}" class="btn btn-danger">Delete</a>
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
