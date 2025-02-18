@extends('layouts.university.colleges.pharmacy_with_sidebar')
@section('content')


<style>
    .custom-bg {
        background-color: #f9f9f9;
        padding: 50px 0;
        border-radius: 5px;
        margin-top: 20px;
    }

    .custom-btn {
        background-color: #007bff;
        border: none;
        color: white;
    }

    .section-box {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        background-color: #fff;
        height: auto;
        transition: transform 0.3s;
    }

    .section-box:hover {
        transform: translateY(-5px);
    }

    .section-title {
        font-size: 1.5em;
        line-height: 1.9em;
        color: #ff7900;
    }
</style>


<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> Pharmacy </span><span> Infrastructure </span></h1>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('/assets/img/112.jpg')}}" alt="">
                </div>
                <div class="container p-3">

                    <h3 class="tmu-text-primary"><span>Machine</span><span> Room</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_2.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_3.jpg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_4.jpg')}}" alt="Gallery Thumb 5"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_5.jpg')}}" alt="Gallery Thumb 5"></a>
                    </div>
                    </br>
                    <h3 class="tmu-text-primary"><span>Central Instruments</span><span> Facilities</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_1.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_3.jpg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_4.jpg')}}" alt="Gallery Thumb 5"></a>
                        <!-- <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_2.jpg')}}" alt="Gallery Thumb 5"></a> -->
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_5.jpg')}}" alt="Gallery Thumb 5"></a>
                        <!-- <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_6.jpg')}}" alt="Gallery Thumb 5"></a> -->
                    </div>
                    </br>
                    <h3 class="tmu-text-primary"><span>Pharmacology</span><span> Lab</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_3.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_2.jpg')}}" alt="Gallery Thumb 3"></a>
                        
                    </div>
                    </br>
                    <h3 class="tmu-text-primary"><span>Pharmaceutics</span><span> Lab</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_3.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_2.jpg')}}" alt="Gallery Thumb 3"></a>
                        
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection