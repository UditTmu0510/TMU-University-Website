@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/demos/news/news.css')}}">


<div class="main-content">
    <div class="container">
    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Placement </span><span> News</span></h1>
        <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/4.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/4.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/5.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/5.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/6.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/6.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/7.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/7.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/8.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/8.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/9.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/9.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/10.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/10.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/11.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/11.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/news_1.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/news_1.jpeg')}}" alt="Gallery Thumb 1"></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/news_2.jpeg')}}" style="height:200px; object-fit:cover;" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/news_2.jpeg')}}" alt="Gallery Thumb 2" ></a>
            <a class="grid-item" href="{{asset('/assets/img/placement_news/nursing/news_3.jpeg')}}" style="height:200px; object-fit:cover;" data-lightbox="gallery-item"><img src="{{asset('/assets/img/placement_news/nursing/news_3.jpeg')}}" alt="Gallery Thumb 3"></a>
        </div>
    </div>
</div>
</div>

@endsection