@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>AEBES Attendance</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">AEBES</a></li>
  
        <li class="breadcrumb-item active">All Attendance</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Aebes Attendance</h5>

             
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
              {{-- @if(Auth::user()->can('Add Blog')) --}}
              <a href="{{route('aebes.add')}}" class="btn btn-primary" >
               Add Attendance
              </a>
            {{-- @endif --}}
            </div>


            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>S.</b>No.</th>
                  <th>Date</th>
                  <th>Attendance</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @php
                $counter = 1;
            @endphp

            @foreach($aebes as $item) 
            <tr>
              <td>{{$counter++}}</td>
              <td>{{$item->date}}</td>
              <td >
                <a href="{{ asset($item->pdf_path) }}" class="d-flex justify-content-center align-items-center"><i class="fa-solid fa-file-pdf"></i></a>
              </td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->updated_at}}</td>
              <td>
                <a href="{{route('aebes.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{ route('aebes.delete', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this attendance?');">
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              
              </td>
            </tr>
            @endforeach

                                                                                                                                                                        
            </tr>



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