@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')

<style>
    body {
        background-color: #f8f9fa; /* Light grey background */
    }
    .alumni-container {
        background-color: #ffffff; /* White background for the content */
        padding: 30px;
        border-radius: 8px;
    }
    .alumni-image {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .alumni-text {
        padding-left: 30px;
    }
</style>
    <div class="main-content">
        <div class="container">
            <div class="banner text-white text-center p-4 rounded d-flex justify-content-center"
                style="height: 16vh; background-color: #001055;">
                <div class="d-flex align-items-center">
                    <h2 class="text-white m-0">Alumni Cell Overview</h2>
                </div>
            </div>

            <section class="about-section mt-4">
                <div class="container">
                    <div class="text-content p-4">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU </span><span>Alumni
                                Association</span></h1>
                        <p class="about-p mb-4">Teerthanker Mahaveer University has registered Alumni Association with
                            Reference No: <b>579/2015-16/MBD-29913</b> as registered dated August 06, 2015. Alumni
                            Association aims to bring current and former students together to enhance the opportunities for
                            employability and entrepreneurship skills while conducting various events such as workshops,
                            webinars, lectures by alumni or alumni meet which brings good alumni relationships benefits to
                            both the institutions and the alumni.</p>
                    </div>
                    <div class="row">
                        <!-- Image Section -->
                        <div class="col-md-4">
                            <img src="path_to_image.jpg" alt="Alumni Image" class="alumni-image">
                        </div>
                        <!-- Text Section -->
                        <div class="col-md-8">
                            <div class="alumni-container">
                                <h3>Krisha</h3>
                                <p><strong>Legal Eagle</strong></p>
                                <p>Krisha successfully completed her undergraduate and postgraduate studies at the
                                    Presidency School of Law in 2020.</p>
                                <p>She works as a Senior Legal Analyst at WNS (Holdings) Limited, Bengaluru, where her role
                                    includes managing global commercial and operational contracts and ensuring legal
                                    compliance on an international scale. Her expertise extends to data privacy, where she
                                    helps navigate business through complex legal frameworks and regulatory challenges.</p>
                                <p>Krisha's outstanding performances in her career have earned accolades like the 'CG Rising
                                    Star Award'. She is also a published author, contributing research papers to
                                    international journals on various topics such as women's rights, human rights,
                                    democracy, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <!-- Second Alumni Section -->
                        <div class="col-md-4">
                            <img src="path_to_image2.jpg" alt="Alumni Image" class="alumni-image">
                        </div>
                        <div class="col-md-8">
                            <div class="alumni-container">
                                <h3>Harsh Kumar</h3>
                                <p><strong>The Strategist</strong></p>
                                <p>Harsh Kumar graduated from the School of Management at Presidency University with a BBA
                                    degree in 2023. He started his professional journey as the general manager of Karnataka
                                    North Carriers, a family-owned company. Over time, he evolved into an entrepreneur and
                                    founded two successful ventures, Harsh Logistics and Harsh Investments.</p>
                                <p>Currently, he is in the initial stage of consolidating all his family enterprises under
                                    the Binds Groups of Companies.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>

    </div>
    </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
@endsection
