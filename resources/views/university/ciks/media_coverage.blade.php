@extends('layouts.university.departments.ciks_with_sidebar')
@section('content')

<style>
    .mc-card {
        border: 1px solid #ddd;
        border-radius: 0;
        box-shadow: none;
    }

    .mc-card img {
        object-fit: cover;
        height: auto;
        width: 100%;
    }

    .mc-card-body {
        padding: 15px;
    }

    .mc-card-title {
        font-size: 1rem;
        font-weight: 600;
        text-align: justify!important;
        font-family: 'poppins';
    }

    .mc-card-text {
        font-size: 0.9rem;
        color: #333;
    }


</style>

<div class="main-content">
    <div class="container mt-4">
        <h1 class="tmu-text-primary tmu-page-heading mb-3"><span> Media </span><span> Coverage</span></h1>
        <div class="row g-3">
        
            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/21-feb-1NC.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Indian knowledge an art of living: Prof. KK</p>
                        <p class="mc-card-text"><small class="text-muted">21, Feb 2025 | Moradabad</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/24-jan-rtdm-2.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">TMU brainstorms on new dimensions of IKS study</p>
                        <p class="mc-card-text"><small class="text-muted">24, Jan 2024 | Shah Times</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/28-nov-gg-1.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Make social media a helper, not a boss</p>
                        <p class="mc-card-text"><small class="text-muted">28, Nov 2024 | </small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/28-nov-gg-2.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Social media is a bad master but a good servant</p>
                        <p class="mc-card-text"><small class="text-muted">28, Nov 2024 | Uttar Kesari</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/28-nov-gg-3.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Institutions like family can survive only within the walls of strong values</p>
                        <p class="mc-card-text"><small class="text-muted">28, Nov 2024 | Shah Times</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/amar_ujala_mbd.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Vedas are the mirror of a healthy lifestyle: Prof. Mahavir</p>
                        <p class="mc-card-text"><small class="text-muted">02, May 2024 | Amar Ujala </small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/swadesh_lucknow.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Hindi, Sanskrit and Gurukul education are the triveni of Indian culture: Prof. VK Jain</p>
                        <p class="mc-card-text"><small class="text-muted">02, May 2024 | Swadesh Samwad </small></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/12-APR-AU.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Non-violence has the highest place in Indian tradition: Dr. Dharamchand</p>
                        <p class="mc-card-text"><small class="text-muted">12, April 2024 | Hindustan  </small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="mc-card p-3">
                    <img src="{{asset('/assets/img/ciks/media_coverage/20-march-ST.jpg')}}" class="mc-card-img-top" alt="News Image">
                    <div class="mc-card-body">
                        <p class="mc-card-title">Good conduct and moral values ​​are important in life</p>
                        <p class="mc-card-text"><small class="text-muted">20, March 2024 | Shah Times </small></p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>
</div>
@endsection