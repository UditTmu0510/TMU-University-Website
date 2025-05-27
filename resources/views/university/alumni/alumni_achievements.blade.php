@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')
    <style>
        .section {
            background-color: #f4f4f4;
            padding: 60px 0;
        }

        .title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .alumni-name {
            font-weight: bold;
            font-size: 1.25rem;
            margin-bottom: 5px;
        }

        .alumni-title {
            color: #0d6efd;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .alumni-description {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .alumni-img {
            width: 100%;
            max-width: 350px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    <div class="main-content">

        <div class="container-fluid section">
            <div class="container">
                <div class="mb-5">
                    <h2 class="title text-uppercase">Notable Alumni</h2>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-md-7">
                        <p class="alumni-name">Krisha Kamal</p>
                        <p class="alumni-title">Legal Eagle</p>
                        <p class="alumni-description">
                            Krisha successfully completed her undergraduate and postgraduate studies at the Presidency
                            School of Law in 2020.
                        </p>
                        <p class="alumni-description">
                            She works as a <strong>Senior Legal Analyst WNS (Holdings) Limited, Bengaluru</strong>, where
                            her role includes managing global commercial and operational contracts and ensuring legal
                            compliance on an international scale. She expertise extends to data privacy, where she help
                            navigating business through complex legal frameworks and regulatory challenges. Krisha's
                            outstanding performances in her career have earned accolades like the 'CG Rising Star Award'.
                            She is also a published author, contributing research papers to international journals on
                            various topics, such as women's rights, human rights, democracy, etc.
                        </p>
                    </div>
                    <div class="col-md-5 text-center">
                        <img src="assets/images/krisha-kamal.jpg" alt="Krisha Kamal" class="alumni-img">
                    </div>
                </div>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-md-5 text-center">
                    <img src="assets/images/krisha-kamal.jpg" alt="Krisha Kamal" class="alumni-img">
                </div>
                <div class="col-md-7">
                    <p class="alumni-name">Krisha Kamal</p>
                    <p class="alumni-title">Legal Eagle</p>
                    <p class="alumni-description">
                        Krisha successfully completed her undergraduate and postgraduate studies at the Presidency
                        School of Law in 2020.
                    </p>
                    <p class="alumni-description">
                        She works as a <strong>Senior Legal Analyst WNS (Holdings) Limited, Bengaluru</strong>, where
                        her role includes managing global commercial and operational contracts and ensuring legal
                        compliance on an international scale. She expertise extends to data privacy, where she help
                        navigating business through complex legal frameworks and regulatory challenges. Krisha's
                        outstanding performances in her career have earned accolades like the 'CG Rising Star Award'.
                        She is also a published author, contributing research papers to international journals on
                        various topics, such as women's rights, human rights, democracy, etc.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    </div>
@endsection


