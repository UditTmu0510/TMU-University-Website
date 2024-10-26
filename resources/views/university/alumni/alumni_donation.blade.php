@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')
<link rel="stylesheet" href="assets/css/college_overview.css">


<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span> TMU Alumni </span><span> Donation </span></h1>
                    <p class="about-p mb-4">The Teerthanker Mahaveer University seeks substantial contributions from its alumni by raising resources urgently needed by the University. The alumni can contribute to the initiatives of the University listed below.</p>
                    <ul class="m-ol-list ps-5">
                        <li>Developing infrastructure such as construction of Classrooms, Laboratories, etc.</li>
                        <li>Construction of smart Class Rooms.</li>
                        <li>Providing substantial scholarships to deserving meritorious students.</li>
                        <li>Increasing the research activities and establishment of an innovation club.</li>
                        <li>Increase in the sports infrastructure.</li>
                        <li>Increase in the Library infrastructure.</li>
                    </ul>
                    <p class="about-p mb-4">If you intend making a contribution to the TMU Alumni fund, you can credit the amount directly to:</p>
                    <p class="about-p mb-4">
                        <span class="highlight">Name of Account :</span> M/S TMU ALUMNI ASSOCIATION
                        <br><span class="highlight">Name of the Bank : </span>Punjab National Bank, TMU Bagadpur, Moradabad
                        <br><span class="highlight">Account Number : </span>6010002100000941
                        <br><span class="highlight">IFSC Code : </span>PUNB0601000
                    </p>
                </div>
               
                <div class="container p-3">
                    <h3 class="tmu-text-primary"><span>Books & Medical Equipments </span><span> donated by Alumni</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/department/alumni/donation/2.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/department/alumni/donation/2.jpeg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/department/alumni/donation/1.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/department/alumni/donation/1.jpeg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/department/alumni/donation/4.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/department/alumni/donation/4.jpeg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/department/alumni/donation/5.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/department/alumni/donation/5.jpeg')}}" alt="Gallery Thumb 5"></a>
                        <a class="grid-item" href="{{asset('/assets/img/department/alumni/donation/6.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/department/alumni/donation/6.jpeg')}}" alt="Gallery Thumb 5"></a>
                        <a class="grid-item" href="{{asset('/assets/img/department/alumni/donation/7.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/department/alumni/donation/7.jpeg')}}" alt="Gallery Thumb 5"></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>

@endsection