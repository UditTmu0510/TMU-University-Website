@extends('layouts.university.colleges.ccsit_with_sidebar')
@section('content')


<style>
.container {
    display: flex;
    align-items: stretch;
    /* Ensures both columns match in height */
}

.image-section img {
    height: 100%;
    /* Ensures the image matches text height */
    width: auto;
    /* Maintains aspect ratio */
    object-fit: cover;
    /* Ensures the image is cropped if necessary */
    border-radius: 10px;
}

.text-section {
    display: flex;
    flex-direction: column;
    padding: 15px;
    justify-content: center;
    /* Centers text vertically */
}

.highlight {
    color: #00c853;
}

.download-btn {
    background-color: #00c853;
    color: #fff;
    padding: 10px 20px; 
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
    width: fit-content;
}

.download-btn:hover {
    background-color: #009624;
}
</style>

<div class="main-content">
    <div class="container py-5">
        <div class="row align-items-stretch g-0" style="border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);">
            <!-- Image Section -->
            <div class="col-md-6 image-section d-flex">
                <img src="https://www.tmu.ac.in/uploads/college/ccsit_head.jpg"
                    alt="Human working" class="img-fluid">
            </div>
            <!-- Text Section -->
            <div class="col-md-6 text-section">
                <h1 class="mb-4">
                Wherever the art of medicine is loved, there is also a love of
                    <span class="highlight"> humanity.</span>
                </h1>
                <p class="mb-4 text-justify">
                    I am delighted to present the panorama of College of Computing Sciences
                    and Information Technology (CCSIT) in all its hues and colours. The college has been
                    taking forward the ethos of excellence in the field of computer education under the
                    meticulous guidance of its committed and experienced faculty and staff members. It
                    has been flushing out meritorious, qualified and genius students to build a career
                    in ever expanding IT industry for fifteen years. The college nurtures them with the
                    quality and etiquettes to face challenges in their future contribution and
                    endeavours to society and industry. CCSIT is dedicated to provide globally competent
                    IT Professionals to play instrumental role in the development of society.
                </p>
                <a href="#" class="download-btn">Read More</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection