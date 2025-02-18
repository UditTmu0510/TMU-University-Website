@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
    <h1>Edit Blog</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Blogs</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Edit Blog</li>
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
      {{-- <h5 class="card-title">Group Name</h5> --}}

      <!-- Multi Columns Form -->
      <form  method="POST" action="{{route('update.blog')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
  
        <div class="col-md-4">
            <label for="post_title" class="form-label">Blog Title</label>
            <input type="text" name="post_title" id="post_title" value="{{$blog->post_title}}" class="form-control" required />
            <input type="hidden" name="post_id" id="post_id" value="{{$blog->id}}" class="form-control" required />
          </div>
          '
          
        <div class="col-md-4">
          <label for="post_description" class="form-label">Blog Description</label>
          <input type="text" name="post_description" id="post_description" value="{{$blog->post_description}}" class="form-control" required />
        </div>


        <div class="col-md-3">
          <label for="n_slug" class="form-label">Blog Slug</label>
          <input type="text" name="n_slug" id="n_slug" class="form-control" value="{{$blog->n_slug}}" required />
        </div>'


    </div>



    <div class="row mt-3">
        <div class="col-md-12">
          <label for="area" class="form-label">Full Post</label>
        <textarea rows="4" cols="50" name="area"  id="area" >{{$blog->full_post}}</textarea><span class="highlight"></span> <span class="bar"></span>
        </div>
      </div>

      
<div class="row mt-3">
          <div class="col-md-3">
            <label for="post_path" class="col-form-label">Title Image</label>
                  <div class="col-sm-10">
                    @if(!empty($blog->post_path))
                    <input type="file" class="form-control dropify" name="post_path" id="post_path" data-default-file="{{asset($blog->post_path)}}" />
                    @else
                    <input type="file" class="form-control dropify"  name="post_path" id="post_path"  />
                    @endif
                  </div>
          </div>

          <div class="col-md-3">
            <label for="alt_tag_main_image" class="col-form-label">Title Image Tag</label>
            <input type="text" name="alt_tag_main_image" class="form-control" id="alt_tag_main_image" value = "{{$blog->alt_tag_main_image}}" required />
          </div>

          <div class="col-md-3">
            <label for="post_thumb_path" class="col-form-label">Thumbnail Image</label>
                  <div class="col-sm-10">
                    @if(!empty($blog->post_thumb_path))
                    <input type="file" class="form-control dropify" name="post_thumb_path" id="post_thumb_path"  data-default-file="{{asset($blog->post_thumb_path)}}" />
                    @else
                    <input type="file" class="form-control dropify" name="post_thumb_path" id="post_thumb_path"  />
                    @endif
                </div>
          </div>

          
          <div class="col-md-3">
            <label for="thumbnail_alt_tag" class="col-form-label">Thumbnail Image Tag</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="thumbnail_alt_tag" id="thumbnail_alt_tag"  value = "{{$blog->thumbnail_alt_tag}}" required />
                  </div>
          </div>



        </div>    
        
        <div class="row mt-3">
          <div class="col-md-3">
            <label for="monaco_path" class="col-form-label">Monaco Image</label>
                  <div class="col-sm-10">
                    @if(!empty($blog->monaco_image_path))
                    <input type="file" class="form-control dropify" name="monaco_image_path" id="monaco_path"  data-default-file = "{{asset($blog->monaco_image_path)}}" />
                    @else
                    <input type="file" class="form-control dropify" name="monaco_image_path" id="monaco_path" />
                    @endif
                  </div>
          </div>

          <div class="col-md-3">
            <label for="alt_tag_monaco_image" class="col-form-label">Monaco Image Tag</label>
            <input type="text" name="monaco_image_alt_tag" class="form-control" id="alt_tag_monaco_image" value="{{$blog->monaco_image_alt_tag}}" required />
          </div>




        </div> 
        
        

        <div class="row mt-3">

          
          <div class="col-md-4">
            <label for="posted_at" class="col-form-label">Post Date</label>
          <input type="date" name="posted_at" id="posted_at" class="form-control" value= "{{$blog->posted_at}}" required/>
            
          </div>

          <div class="col-md-4">
            <label for="category" class="form-label">Blog Category</label>
            <select class="form-select" name="category_id" id ="category" aria-label="Default select example" required>
              <option>Select Category</option>
              @foreach ($blogs_category as $blog_cat)
              <option value="{{$blog_cat->category_id}}" {{$blog_cat->category_id == $blog->category_id ? 'selected' : ''}} >{{$blog_cat->category_name}}</option>
              @endforeach
            </select>
          </div>


          <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
              <option> Select Status </option>
              <option value="1" {{$blog->status == 1 ? 'selected' : ''}}>Active</option>
              <option value="0" {{$blog->status == 0 ? 'selected' : ''}} >Deactive</option>
            </select>
        </div>

        </div>
      
        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Save"/>
        </div>

      </form><!-- End Multi Columns Form -->

    </div>
  </div>
</div>
</div>
</section>


@endsection

