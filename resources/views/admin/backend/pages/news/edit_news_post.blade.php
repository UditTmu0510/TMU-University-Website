@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
  <h1>Add News</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">News</a></li>
      {{-- <li class="breadcrumb-item">Permission</li> --}}
      <li class="breadcrumb-item active">Add News</li>
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
          <form method="POST" action="{{route('update.news.post')}}" enctype="multipart/form-data">
            @csrf
            <div class="row" style="margin-top:30px;">
              <div class="col-md-6">
                <label for="event_title" class="form-label">Select College</label>
                <select class="form-select" name="cd_id" id="cd_id" aria-label="Default select example" required>
                  <option> Select College Name </option>
                  @foreach ($colleges as $college)
                  <option value="{{$college->cd_id}}" {{$news->cd_id == $college->cd_id ? 'selected' : ''}}>{{$college->cd_name}}</option>
                  @endforeach


                </select>
              </div>
              <div class="col-md-6">
                <label for="event_title" class="form-label">Event Title</label>
                <input type="text" name="event_title" id="event_title" class="form-control" value="{{$news->event_title}}" required />
                <input type="hidden" name="news_id" id="news_id" class="form-control" value="{{$news->id}}" required />
              </div>
            </div>
            <div class="row" style="margin-top:30px;">
              <div class="col-md-12">
                <label for="news_slug" class="form-label">News Slug</label>
                <input type="text" name="news_slug" id="news_slug" class="form-control" value="{{$news->n_slug}}" required />
              </div>
            </div>


            <div class="row mt-3">
              <div class="col-md-3">
                <label for="ti_path" class="col-form-label">Title Image</label>
                <div class="col-sm-10">

                  <input type="file" class="form-control dropify" name="ti_path" id="ti_path" data-default-file="{{ asset($news->ti_path) }}" />
                </div>
              </div>

              <div class="col-md-3">
                <label for="title_image_tag" class="col-form-label">Title Image Tag</label>
                <input type="text" name="title_image_tag" class="form-control" id="title_image_tag" value="{{$news->title_image_tag}}" required />
              </div>

              <div class="col-md-3">
                <label for="event_date" class="col-form-label">Event Date</label>
                <input type="date" name="event_date" id="event_date" class="form-control" value="{{$news->event_date}}" required />

              </div>

              <div class="col-md-3">
                <label for="category" class="form-label">Event Category</label>
                <select class="form-select" name="category" id="category" aria-label="Default select example" required>
                  <option>Select Event Category</option>
                  @foreach ($news_cat as $news_cat)
                  <option value="{{$news_cat->category_name}}" {{$news_cat->category_name == $news->category ? 'selected' : ''}}>{{$news_cat->category_name}}</option>
                  @endforeach
                </select>
              </div>


            </div>

            <div class="row mt-3">
              <div class="col-md-12">
                <label for="area" class="form-label">Full News</label>
                <textarea rows="4" cols="50" name="area" id="area">{{$news->event_full_description}}</textarea><span class="highlight"></span> <span class="bar"></span>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <label for="event_title" class="form-label">For Front Page ?</label>
                <select class="form-select" name="display_main" id="display_main" aria-label="Default select example" required>
                  <option selected>For Front Page ?</option>
                  <option value="Y" {{$news->display_main == 'Y' ? 'selected' : ''}}>Yes</option>
                  <option value="N" {{$news->display_main == 'N' ? 'selected' : ''}}>No</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="event_title" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" aria-label="Default select example" required>
                  <option> Select Status </option>
                  <option value="1" {{$news->status == '1' ? 'selected' : ''}}>Active</option>
                  <option value="0" {{$news->status == '0' ? 'selected' : ''}}>Deactive</option>
                </select>
              </div>

            </div>


            <div class="row mt-3">
              <div class="col-md-4">
                <label for="ei1_path" class="col-form-label">Event Image 1</label>
                <input class="form-control dropify" name="ei1_path" id="ei1_path" type="file" data-default-file="{{asset($news->ei1_path)}}" /><br />
                <input class="form-control" name="event_image1_tag" id="event_image1_tag" value="{{$news->event_image1_tag}}" type="text" required />
              </div>

              <div class="col-md-4">
                <label for="ei2_path" class="col-form-label">Event Image 2</label>

                @if (!empty($news->ei2_path))
                <input class="form-control dropify" name="ei2_path" id="ei2_path" type="file" data-default-file="{{ asset($news->ei2_path) }}" />
                @else
                <input class="form-control dropify" name="ei2_path" id="ei2_path" type="file" />
                @endif
                <br />

                @if(!empty($news->event_image2_tag))
                <input class="form-control" name="event_image2_tag" id="event_image2_tag" type="text" value="{{$news->event_image2_tag}}" />
                @else
                <input class="form-control" name="event_image2_tag" id="event_image2_tag" type="text" placeholder="Alt Tag" />
                @endif
              </div>

              <div class="col-md-4">
                <label for="ei3_full_path" class="col-form-label">Event Image 3</label>
                @if (!empty($news->ei2_path))
                <input class="form-control dropify" name="ei3_path" id="ei3_path" type="file" data-default-file="{{ asset($news->ei3_path) }}" />
                @else
                <input class="form-control dropify" name="ei3_path" id="ei3_path" type="file" />
                @endif
                <br />
                @if(!empty($news->event_image3_tag))
                <input class="form-control" name="event_image3_tag" id="event_image3_tag" type="text" value="{{$news->event_image3_tag}}" />
                @else
                <input class="form-control" name="event_image3_tag" id="event_image3_tag" type="text" placeholder="Alt Tag" />
                @endif

              </div>



            </div>


            <div class="row mt-3">
              <div class="col-md-4">
                <label for="ei1_full_path" class="col-form-label">Event Image 4</label>
                @if (!empty($news->ei2_path))
                <input class="form-control dropify" name="ei4_path" id="ei4_path" type="file" data-default-file="{{ asset($news->ei4_path) }}" />
                @else
                <input class="form-control dropify" name="ei4_path" id="ei4_path" type="file" />
                @endif

                <br />
                @if(!empty($news->event_image4_tag))
                <input class="form-control" name="event_image4_tag" id="event_image4_tag" type="text" value="{{$news->event_image4_tag}}" />
                @else
                <input class="form-control" name="event_image4_tag" id="event_image4_tag" type="text" placeholder="Alt Tag" />
                @endif
              </div>

              <div class="col-md-4">
                <label for="ei2_full_path" class="col-form-label">Event Image 5</label>
                @if (!empty($news->ei5_path))
                <input class="form-control dropify" name="ei5_path" id="ei5_path" type="file" data-default-file="{{ asset($news->ei5_path) }}" />
                @else
                <input class="form-control dropify" name="ei5_path" id="ei5_path" type="file" />
                @endif
                <br />
                @if(!empty($news->event_image5_tag))
                <input class="form-control" name="event_image5_tag" id="event_image5_tag" type="text" value="{{$news->event_image5_tag}}" />
                @else
                <input class="form-control" name="event_image5_tag" id="event_image5_tag" type="text" placeholder="Alt Tag" />
                @endif
              </div>

              <div class="col-md-4">
                <label for="ei3_full_path" class="col-form-label">Event Image 6</label>
                @if (!empty($news->ei6_path))
                <input class="form-control dropify" name="ei6_path" id="ei6_path" type="file" data-default-file="{{ asset($news->ei6_path) }}" />
                @else
                <input class="form-control dropify" name="ei6_path" id="ei6_path" type="file" />
                @endif
                <br />

                @if(!empty($news->event_image6_tag))
                <input class="form-control" name="event_image6_tag" id="event_image6_tag" type="text" value="{{$news->event_image6_tag}}" />
                @else
                <input class="form-control" name="event_image6_tag" id="event_image6_tag" type="text" placeholder="Alt Tag" />
                @endif
              </div>

            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <label for="ei1_full_path" class="col-form-label">Monaco Image</label>
                @if (!empty($news->monaco_image_path))
                <input class="form-control dropify" name="monaco_image_path" id="monaco_image_path" type="file" data-default-file="{{ asset($news->monaco_image_path) }}" />
                @else
                <input class="form-control dropify" name="monaco_image_path" id="monaco_image_path" type="file" />
                @endif

                <br />
                @if(!empty($news->monaco_image_alt_tag))
                <input class="form-control" name="monaco_image_alt_tag" id="monaco_image_alt_tag" type="text" value="{{$news->monaco_image_alt_tag}}" />
                @else
                <input class="form-control" name="monaco_image_alt_tag" id="monaco_image_alt_tag" type="text" placeholder="Alt Tag" />
                @endif
              </div>





            </div>



            <div class="text-center"><br />
              <input type="submit" class="btn btn-primary" value="Save" />

            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>
    </div>
  </div>
</section>


@endsection