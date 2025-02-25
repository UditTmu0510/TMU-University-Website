@extends('layouts.adminlayout_new')
@section('content')
<style>
  /* Responsive Pagination for Mobile */
  @media (max-width: 576px) {
      .pagination {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
      }

      .pagination li {
          margin: 0 5px;
      }

      .pagination-sm .page-link {
          font-size: 0.8rem;
          padding: 0.4rem 0.7rem;
      }
  }

  /* Ensure Previous & Next buttons are always visible on smaller screens */
  @media (max-width: 320px) {
      .pagination {
          display: flex;
          justify-content: center;
      }

      .pagination li {
          margin: 0 2px;
      }

      /* Hide middle page numbers and only show Previous and Next buttons */
      .pagination li:not(.disabled):not(:first-child):not(:last-child) {
          display: none;
      }

      .pagination li:first-child,
      .pagination li:last-child {
          display: inline-block;
      }
  }
</style>
<div class="pagetitle">
    <h1>All PDF'S</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">All Pdfs</a></li>
  
        <li class="breadcrumb-item active">All Pdfs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->




  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Pdfs</h5>

             
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
       
            <div class="d-flex justify-content-between mb-3 mt-3">

              <form action="{{ route('naac_pdfs.search') }}" method="GET" class="d-flex">
                  <input
                      type="text"
                      name="search"
                      class="form-control me-2"
                      placeholder="Description,Criterion,Metric,Key Indicator"
                      value="{{ request('search') }}">
                  <button type="submit" class="btn btn-outline-primary">Search</button>
              </form>
              <a href="{{route('export.naac-pdfs')}}" class="btn btn-primary" />Export PDF </a>
              @if(Auth::user()->can('Add NAAC PDF'))
              <a href="{{route('add.naac_pdf')}}" class="btn btn-primary" >
               Add Pdf
              </a>
            @endif

            </div>


            <div class="table-responsive">
              <table class="table table-striped table-borderless">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Criterion Name</th>
                  <th>KeyIndicator Name</th>
                  <th>Metric Name</th>
                  <th>PDF Description</th>
                  <th>PDF Path</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp
@foreach($pdfs as $key=> $item)
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
@if(isset($item['metric_name']['metric_name']))

<td>{{$item['metric_name']['metric_name']}}</td>
@else
<td>N/A</td>
@endif
<td>{{$item->pdf_description}}</td>
<td><a href="{{asset($item->file_path)}}" target="_blank">Link</a></td>
<td>
@php
if($item->pdf_status == 'Y') {
  echo "<span style='color:green'>Active</span>";
}else{
  echo "<span style='color:red'>IN Active</span>";
}
@endphp

</td>


<td>
@if(Auth::user()->can('Edit NAAC PDF'))
<a href="{{route('naac_pdf.edit',$item->pdf_id )}}" class="btn btn-primary">Edit</a>
@endif

@if(Auth::user()->can('Delete NAAC PDF'))
<a href="{{route('delete.naac_pdf',$item->pdf_id)}}" class="btn btn-danger">Delete</a>
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
          </div>
            <!-- End Table with stripped rows -->

   
            <nav aria-label="Page navigation">
              <ul class="pagination">
          
                  @if ($pdfs->onFirstPage())
                  <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  @else
                  <li class="page-item">
                      <a class="page-link" href="{{ $pdfs->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  @endif
          
                  @php
                      $start = max($pdfs->currentPage() - 5, 1);
                      $end = min($start + 9, $pdfs->lastPage());
          
                      // Adjust start if less than 10 pages are displayed
                      if ($end - $start < 9) {
                          $start = max($end - 9, 1);
                      }
                  @endphp
          
                  @foreach (range($start, $end) as $page)
                  <li class="page-item {{ $page == $pdfs->currentPage() ? 'active' : '' }}" 
                      {{ $page == $pdfs->currentPage() ? 'aria-current="page"' : '' }}>
                      <a class="page-link" href="{{ $pdfs->url($page) }}">{{ $page }}</a>
                  </li>
                  @endforeach
          
                  @if ($pdfs->hasMorePages())
                  <li class="page-item">
                      <a class="page-link" href="{{ $pdfs->nextPageUrl() }}">Next</a>
                  </li>
                  @else
                  <li class="page-item disabled">
                      <span class="page-link">Next</span>
                  </li>
                  @endif
          
              </ul>
          </nav>
          

     


          

          </div>
        </div>

      </div>
    </div>
  </section>
  
@endsection