@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>All Faqs</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Faqs</a></li>
        <li class="breadcrumb-item active">All Faqs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Faqs</h5>

             
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
              @if(Auth::user()->can('Add Faq'))
              <a href="{{route('add.faq')}}" target="_blank"  class="btn btn-primary">
               Add Faq
              </a>
            @endif
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>College Name</th>
                  <th>Programme Name</th>
                  <th>Question</th>
                  <th>University Page</th>
                  <th>College Page</th>
                  <th>Programme Page</th>
                  <th>Status</th>
                  <th>Action</th>      
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($faqs as $key=> $item)
            <tr>
                <td>{{$counter}}</td>
            
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

  <td>{{$item->faq_question}}</td>
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
            @php
            if($item->status == 'Y') {
              echo "<span style='color:green'>Active</span>";
            }else {
              echo "<span style='color:red'>IN Active</span>";
            }
            @endphp
            
            </td>

<td>
@if(Auth::user()->can('Edit Faq'))
<a href="{{ route('faq.edit', ['id' => $item->faq_id]) }}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete Faq'))
<a href="{{ route('delete.faq', ['id' => $item->faq_id]) }}" class="btn btn-danger">Delete</a>
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