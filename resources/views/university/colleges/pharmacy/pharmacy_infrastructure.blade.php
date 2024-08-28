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
            <section class="custom-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="row g-3">
                                <div class="col-12">
                                    <img src="assets/img/112.jpg" class="img-fluid rounded" style="height: 250px; width: 100%;" alt="Property 1">
                                </div>
                                <div class="col-6">
                                    <img src="assets/img/112.jpg" class="img-fluid rounded" alt="Property 3">
                                </div>
                                <div class="col-6">
                                    <img src="assets/img/112.jpg" class="img-fluid rounded" alt="Property 4">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 d-flex flex-column justify-content-center p-5">
                            <div class="">
                            <h1 class="tmu-text-primary tmu-page-heading"><span>Infrastructure </span><span> </span></h1>
                            <p>The campus hosts 5+ state-of-the-art labs in various fields such as Central Instrument Lab, Machine Room, Pharmacology Lab, Pharmaceutics Lab.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container mt-3">
                <div class="row">
                            <h3 class="tmu-text-primary mb-2"><span>Machine</span><span> Room </span></h3>
                            <p>"The Vision of TMIMT College of Physical Education is to see a World where all individuals have the opportunity to live healthy lives in Body, Mind and Spirit"</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection