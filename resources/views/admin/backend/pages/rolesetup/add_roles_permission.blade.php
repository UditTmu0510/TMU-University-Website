@extends('layouts.adminlayout')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="pagetitle">
    <h1>Add Roles in Permission</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">User</a></li>
        <li class="breadcrumb-item">Roles in Permission</li>
        <li class="breadcrumb-item active">Add Roles in Permission</li>
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
      <h5 class="card-title">ROle Name</h5>

      <!-- Multi Columns Form -->
      <form id="myForm" method="POST" action="{{route('role.permission.store')}}" class="row g-3">
        @csrf
        {{-- <div class="col-md-12">
          <label for="permission_name" class="form-label">Permission Name</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>' --}}
        '<div class="row">
        <div class="col-md-12">
        <select id="role_id" name="role_id" class="form-select">
          <option>Select Roles Name</option>
          @foreach ($roles as $role)
          <option value="{{$role->id}}"> {{$role->name}}</option> 
          @endforeach
      
        </select>
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
      <div class="col-sm-12">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="PermissionAll">
          <label class="form-check-label" for="PermissionAll">All Permissions</label>
        </div>
      </div>
    </div>
<hr/>
@foreach ($permission_groups as $group)
  

<div class="row" style="margin-top:15px;">
  <div class="col-sm-3">
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
      <label class="form-check-label" for="flexSwitchCheckDefault">{{$group->group_name}}</label>
    </div>
  </div>

  <div class="col-sm-9">
    @php
      $permissions = App\Models\User::getPermissionByGroupName($group->group_name);
    @endphp
    @foreach($permissions as $permission)
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault{{$permission->id}}" value="{{$permission->id}}" name="permission[]">
      <label class="form-check-label" for="flexSwitchCheckDefault{{$permission->id}}">{{$permission->name}}</label>
    </div>
    @endforeach
  </div>
</div>
@endforeach
 
       
        <div class="text-center">
          <input type="submit" class="btn btn-primary" />
      
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>

<script type="text/javascript">
$('#PermissionAll').click(function(){
  if($(this).is(':checked'))
  {
$('input[type=checkbox]').prop('checked',true);
  }else{
    $('input[type=checkbox]').prop('checked',false);   
  }
})


</script>
@endsection