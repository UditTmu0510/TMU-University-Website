@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Syllabus</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">All Key Indicators</a></li>
  
        <li class="breadcrumb-item active">All Key Indicators</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Key Indicators</h5>

             
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
              @if(Auth::user()->can('Add NAAC KeyIndicator'))
              <a href="{{route('add.naac_keyindicator')}}" class="btn btn-primary" >
               Add NAAC Key Indicator
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Criterion Name</th>
                  <th>KeyIndicator Name</th>
                  <th>KeyIndicator Description</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($keyindicator as $key=> $item)
            <tr>
                <td>{{$counter}}</td>

                @if(isset($item['criterion_name']['criterion_name']))
<td>{{$item['criterion_name']['criterion_name']}}</td>
                @else
                <td>N/A</td>
                @endif
<td>{{$item->key_indicator_name}}</td>
<td>{{$item->key_indicator_description}}</td>
<td>
@php
if($item->key_indicator_status == 'Y') {
  echo "<span style='color:green'>Active</span>";
}else{
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>


<td>
@if(Auth::user()->can('Edit NAAC KeyIndicator'))
<a href="{{route('naac_keyindicator.edit',$item->key_indicator_id )}}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete NAAC KeyIndicator'))
<a href="{{route('delete.naac_keyindicator',$item->key_indicator_id)}}" class="btn btn-danger">Delete</a>
@endif
</td>                                                                                                                                                                           
            </tr>
@php
$counter++;
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
  </section>
  
@endsection