@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Metrics</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">All Metrics</a></li>
  
        <li class="breadcrumb-item active">All Metrics</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Metrics</h5>

             
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
              @if(Auth::user()->can('Add NAAC Metric'))
              <a href="{{route('add.naac_metric')}}" class="btn btn-primary" >
               Add Metric
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Criterion Name</th>
                  <th>KeyIndicator Name</th>
                  <th>Metric Name</th>
                  <th>Metric Description</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($metrics as $key=> $item)
            <tr>
                <td>{{$counter}}</td>

                @if(isset($item['criterion_name']['criterion_name']))
<td>{{$item['criterion_name']['criterion_name']}}</td>
                @else
                <td>N/A</td>
                @endif
@if(isset($item['key_indicator_name']['key_indicator_name']))

<td>{{$item['key_indicator_name']['key_indicator_name']}}</td>
@else
<td>N/A</td>
@endif
<td>{{$item->metric_name}}</td>
<td>{{$item->metric_description}}</td>
<td>
@php
if($item->metric_status == 'Y') {
  echo "<span style='color:green'>Active</span>";
}else{
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>


<td>
@if(Auth::user()->can('Edit NAAC Metric'))
<a href="{{route('naac_metric.edit',$item->metric_id )}}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete NAAC Metric'))
<a href="{{route('delete.naac_metric',$item->metric_id)}}" class="btn btn-danger">Delete</a>
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