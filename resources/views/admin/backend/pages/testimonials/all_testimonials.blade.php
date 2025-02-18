@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Testimonials</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Testimonials</a></li>
        <li class="breadcrumb-item active">All Testimonials</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Testimonials</h5>

             
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
              @if(Auth::user()->can('Add Testimonial'))
              <a href="{{route('add.testimonial')}}" target="_blank"  class="btn btn-primary">
               Add Testimonial
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Student Name</th>
                  <th>Testimonial Type</th>
                  <th>College Name</th>
                  <th>Programme Name</th>
                  <th>University Page Visibility</th>
                  <th>College Page Visibility</th>
                  <th>Programme Page Visibility</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($testimonials as $key=> $item)
@php
    $testimonial_format_type = $item->testimonial_format_type;
@endphp
            <tr>
                <td>{{$counter}}</td>
                <td>{{$item->student_name}}</td>
                <td>{{$item->story_type}}

                    @php
                    $formatTypes = [
                        'VI' => 'Video with Image',
                        'VIT' => 'Video with Image & Text',
                        'IT' => 'Image with Text',
                        'VT' => 'Video with Text'
                    ];
                @endphp
                
                ({{ $formatTypes[$testimonial_format_type] ?? 'Unknown Format' }})
                </td>
            
<td>
  @if (!empty($item['college_name']['cd_name'])) <!-- Check if colleges relationship is not null -->
  {{$item['college_name']['cd_name']}}
@endif
</td>

<td>
    @if (!empty($item['programme_name']['prog_name'])) <!-- Check if colleges relationship is not null -->
    {{$item['programme_name']['prog_name']}}
  @endif
  </td>
<td>
@php
if($item->display_university_main == 'Y') {
  echo "<span style='color:green'>Active</span>";
}else {
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>

<td>
    @php
    if($item->display_college_main == 'Y') {
      echo "<span style='color:green'>Active</span>";
    }else {
      echo "<span style='color:red'>IN Active</span>";
    }
    @endphp
    
    </td>

    <td>
        @php
        if($item->display_programme_page == 'Y') {
          echo "<span style='color:green'>Active</span>";
        }else {
          echo "<span style='color:red'>IN Active</span>";
        }
        @endphp
        
        </td>

<td>
@if(Auth::user()->can('Edit Testimonial'))
<a href="{{ route('testimonial.edit', ['id' => $item->story_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Testimonial'))
<a href="{{ route('delete.testimonial', ['id' => $item->story_id]) }}" class="btn btn-danger">Delete</a>
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