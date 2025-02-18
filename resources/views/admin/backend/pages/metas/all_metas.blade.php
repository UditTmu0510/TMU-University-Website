@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Metas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Metas</a></li>
        <li class="breadcrumb-item active">All Metas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Metas</h5>

             
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
              @if(Auth::user()->can('Add Meta'))
              <a href="{{route('add.meta')}}" target="_blank"  class="btn btn-primary">
               Add Meta
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Slug</th>
                  <th>Meta Title</th>
                  <th>Display Attribute 1</th>
                  <th>Display Attribute 2</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($metas as $key=> $item)
@php
    $final_slug = '';  // Initialize final_slug
    $baseUrl = url('/');

    // Assign slugs
    $slug1 = $item->slug1 ?? null;
    $slug2 = $item->slug2 ?? null;
    $slug3 = $item->slug3 ?? null;
    $slug4 = $item->slug4 ?? null;
    $slug5 = $item->slug5 ?? null;

    if(($slug1 == 'na') && (!empty($slug1)))
    {
        $final_slug = $baseUrl;
    }elseif ((empty($slug2) || $slug2 == 'na') && !empty($slug1) && $slug1 != 'na') {
        $final_slug = $baseUrl . '/' . $slug1;
    } elseif ((!empty($slug1) && $slug1 != 'na') && (!empty($slug2) && $slug2 != 'na') && (empty($slug3) || $slug3 == 'na')) {
        $final_slug = $baseUrl . '/' . $slug1 . '/' . $slug2;
    } elseif ((!empty($slug1) && $slug1 != 'na') && (!empty($slug2) && $slug2 != 'na') && (!empty($slug3) && $slug3 != 'na') && (empty($slug4) || $slug4 == 'na')) {
        $final_slug = $baseUrl . '/' . $slug1 . '/' . $slug2 . '/' . $slug3;
    } elseif ((!empty($slug1) && $slug1 != 'na') && (!empty($slug2) && $slug2 != 'na') && (!empty($slug3) && $slug3 != 'na') && (!empty($slug4) && $slug4 != 'na') && (empty($slug5) || $slug5 == 'na')) {
        $final_slug = $baseUrl . '/' . $slug1 . '/' . $slug2 . '/' . $slug3 . '/' . $slug4;
    } elseif ((!empty($slug1) && $slug1 != 'na') && (!empty($slug2) && $slug2 != 'na') && (!empty($slug3) && $slug3 != 'na') && (!empty($slug4) && $slug4 != 'na') && (!empty($slug5) && $slug5 != 'na')) {
        $final_slug = $baseUrl . '/' . $slug1 . '/' . $slug2 . '/' . $slug3 . '/' . $slug4 . '/' . $slug5;
    }
    
@endphp
            <tr>
                <td>{{$counter}}</td>
                <td>{{$final_slug}}</td>
                <td>{{$item->meta_title}}</td>
<td>{{$item->disp_attribute_1}}</td>
<td>{{$item->disp_attribute_2}}</td>
    <td>
        @php
        if($item->status== 'Y') {
          echo "<span style='color:green'>Active</span>";
        }else {
          echo "<span style='color:red'>IN Active</span>";
        }
        @endphp
        </td>
<td>
@if(Auth::user()->can('Edit Meta'))
<a href="{{ route('meta.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Meta'))
<a href="{{ route('delete.meta', ['id' => $item->id]) }}" class="btn btn-danger">Delete</a>
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