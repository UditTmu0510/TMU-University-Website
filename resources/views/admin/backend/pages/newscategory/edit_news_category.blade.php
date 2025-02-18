@extends('layouts.adminlayout')
@section('content')
<div class="pagetitle">
    <h1>All News Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">News</a></li>
        <li class="breadcrumb-item">Category</li>
        <li class="breadcrumb-item active">All News Category</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All News Category</h5>
            
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
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
               Add News Category
              </button>
            @endif
            </div>


            <form  method="POST" action="{{route('update.news_category')}}" class="row g-3">
                @csrf
                <div class="row" style="margin-top:30px;">
                <div class="col-md-6">
                  <label for="category_name" class="form-label">Category Name</label>
                  <input type="text" name="category_name" class="form-control" id="category_name" value="{{$news_category->category_name}}" required />
                  <input type="hidden" name="id" id="id" class="form-control" value="{{$news_category->id}}" required />
                </div>
                <div class="col-md-6">
                    <label for="category_slug" class="form-label">Category Slug</label>
                    <input type="text" name="category_slug" class="form-control" id="category_slug" value="{{$news_category->category_slug}}" required/>
                  </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="col-md-6">
                    <label for="category_status" class="form-label">Category Status</label>
                <select  name="category_status" class="form-select" id="category_status" required>
                  <option>Category Status</option>
               <option value="Y" @if($news_category->category_status =='Y') selected @endif>Enable</option>
               <option value="N" @if($news_category->category_status =='N') selected @endif>Disable</option>
                </select>
              </div>
             
            </div>
     
            <div class="row" style="margin-top:30px;">
            <!-- Code Ends -->
          <input type="submit" class="btn btn-primary" value="Save Changes" />

            </div>

        </form>
          
          </div>
        </div>

      </div>
    </div>
  </section>

          
            <!-- Code Start -->
      
 
@endsection