@extends('layouts.university.departments.about_tmu_with_sidebar')
@section('content')


<style>
.carousel-item img {
    max-height: 80vh;
    object-fit: cover;
}
</style>


<div class="main-content">
    <div class="container">
        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Award & </span><span>Recognitions</span>
            </h1>


            <!-- Grid row -->
            <div class="row row-cols-1 row-cols-sm-6 align-items-sm-end gutter-10 mt-5 mx-1" data-lightbox="gallery">

                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a1.png')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/1.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a2.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/2.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a3.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/3.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a4.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/4.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a5.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/5.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a6.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/6.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a7.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/7.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a8.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/8.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a9.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/9.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a10.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/10.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a11.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/11.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a12.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/12.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a13.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/13.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a14.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/14.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a15.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/15.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a16.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/16.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a17.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/17.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a18.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/18.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a19.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/19.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a20.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/20.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a21.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/21.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a22.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/22.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a23.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/23.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a24.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/24.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a25.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/25.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a26.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/26.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a27.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/27.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a28.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/28.png')}}"
                            alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a29.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid mb-2 h-op-09 op-ts"
                            src="{{asset('/assets/img/awards/awards_section/29.png')}}" alt="Image">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{asset('/assets/img/awards/awards_original/a30.jpg')}}" data-lightbox="gallery-item">
                        <img class="img-fluid h-op-09 op-ts" src="{{asset('/assets/img/awards/awards_section/30.png')}}"
                            alt="Image">
                    </a>
                </div>
            </div>





        </div>
    </div>
</div>
</div>


@endsection