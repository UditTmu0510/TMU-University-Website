@extends('layouts.university.departments.ciks_with_sidebar')
@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/about_university.css') }}" />
    <style>
        .d-grid {
            --column: 1;
            display: grid;
            grid-template-columns: repeat(var(--column), 1fr);
            grid-gap: 30px;
        }

        @media (min-width: 991px) {
            .d-grid {
                --column: 3;
            }

            .d-grid .grid-w {
                grid-row: span 2 / auto;
            }
        }

        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            background-color: #f8f9fa;
            /* Light background */
            border-radius: 50%;
            transition: all 0.3s ease-in-out;
        }

        .icon-box a i {
            font-size: 24px;
            transition: color 0.3s ease-in-out;
        }

        .icon-box:hover {
            background-color: #007bff;
            /* Bootstrap primary color */
        }

        .icon-box:hover a i {
            color: #fff !important;
        }
    </style>

    <div class="main-content">
        <div class="container">
            <div class="row">
                <h1 class="tmu-text-primary tmu-page-heading mb-0 mt-md-3"><span>Centre for</span><span> Indian
                        Knowledge System</span></h1>
                <section class="about-section p-3">
                    <div class="container">
                        <div class="image-content text-center p-4 rounded-4" id="about">
                            <img src="{{ asset('/assets/img/112.jpg') }}" alt="Learning and Teaching">
                        </div>
                    </div>
                </section>
                <div class="col-lg-12">
                    <h4 class="sublime text-justify px-0 px-lg-5">
                        {{-- On May 24th, 2023, Teerthanker
                        Mahaveer University celebrated a significant milestone with the inauguration of the Center for
                        Indian Knowledge System (CIKS). Prominent figures from the academic and intellectual world graced
                        the occasion, including Prof. Kapil Kapoor, former Pro Vice-Chancellor, Jawaharlal Nehru University
                        and recipient of the coveted Padma Bhushan Award 2023, and Dr. Renu Jain, Vice-Chancellor, Devi
                        Ahilya Vishwavidyalaya, Indore, Madhya Pradesh. Prof. Anupam Jain was appointed as Professor chair
                        of IKS at the University. This noteworthy accomplishment demonstrates the University's steadfast
                        dedication to conserving, advancing, and honoring the rich legacy and knowledge of the Indian
                        knowledge system. --}}
                        The Center for Indian Knowledge System (CIKS) at Teerthanker Mahaveer University is a dedicated
                        initiative aimed at preserving, promoting, and advancing India's rich intellectual and cultural
                        heritage. Established on May 24th, 2023, the center serves as a hub for scholarly research,
                        interdisciplinary studies, and knowledge dissemination in the realm of Indian traditions,
                        philosophy, sciences, and indigenous wisdom.

                        The inauguration of CIKS was graced by esteemed academicians and thought leaders, including Padma
                        Bhushan awardee Prof. Kapil Kapoor, former Pro Vice-Chancellor of Jawaharlal Nehru University, and
                        Dr. Renu Jain, Vice-Chancellor of Devi Ahilya Vishwavidyalaya, Indore. Strengthening its academic
                        foundation, the university appointed Prof. Anupam Jain as the Professor Chair of IKS.

                        With a steadfast commitment to intellectual enrichment and cultural revival, CIKS aspires to bridge
                        the gap between ancient wisdom and contemporary knowledge, fostering research, innovation, and
                        holistic learning.
                    </h4>
                </div>
                <!-- <div class="container">
                                                                                    <div class="text-center snipcss0-0-0-1 snipcss-NtQkN">
                                                                                        <h4 class="snipcss0-1-1-3 style-Zk4yd fw-semibold" id="style-Zk4yd" style="color:#ff7900;">ॐ असतो मा सद्गमय। तमसो मा ज्योतिर्गमय। <br> मृत्योर्मा अमृतं गमय॥ ॐ शान्तिः शान्तिः शान्तिः॥</h4>
                                                                                    </div>
                                                                                </div> -->

                <!-- Home About Section Begin -->
                <section class="custom-bg mb-4 bg-light bg-gradient p-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 ps-4 pe-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <img src="{{ asset('assets/img/loan/Doctoral-programmes-4.jpg') }}"
                                            class="img-fluid" style="height: 100%; width: 100%;" alt="Property 1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 d-flex flex-column justify-content-center p-4 ps-4 pe-4">
                                <div class="">
                                    <h2 class="tmu-text-primary mb-1"><span>Our </span><span> Vision </span></h2>
                                    <p>Fostering a holistic and sustainable approach to development
                                        by incorporating the principles of Indian Knowledge Systems &
                                        the intellectuals empowered with Indian Knowledge Systems
                                        that may address technological challenges of the modern
                                        society.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-7 d-flex flex-column justify-content-center p-3 ps-4 pe-4">
                                <div class="">
                                    <h2 class="tmu-text-primary"><span>Our </span><span>Mission</span></h2>
                                    <p>To enable students, faculty and staff to engage in
                                        education and research on Indian Knowledge Systems
                                        for developing appropriate technologies, practices and
                                        products for sustainable growth.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 ps-4 pe-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <img src="{{ asset('assets/img/loan/Postgraduate-programmes-thumb-1.jpg') }}"
                                            class="img-fluid" style="height: 100%; width: 100%;" alt="Property 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- <div class="container">
                <h2 class="tmu-text-primary mb-2 mt-2"><span>CIKS </span><span> Objectives</span></h2>
                <div class="d-grid col-mb-50 mb-5">
                    <div class="grid-col shadow-sm bg-light rounded p-5">
                        <div class="feature-box flex-column fbox-sm fbox-plain">
                            <div class="fbox-icon mb-4 icon-box">
                                <a href="#"><i class="text-primary bi-eye"></i></a>
                            </div>
                            <div class="fbox-content px-0">
                                <p>To develop insights into the scientific and Philosophical aspects of IKS, including its historical development and contributions to various fields.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-col shadow-sm bg-light rounded p-5">
                        <div class="feature-box flex-column fbox-sm fbox-plain">
                            <div class="fbox-icon mb-4 icon-box">
                                <a href="#"><i class="text-primary bi-star"></i></a>
                            </div>
                            <div class="fbox-content px-0">
                                <p>To explore the intersections between traditional knowledge systems and modern systems of knowledge.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-col shadow-sm bg-light rounded p-5">
                        <div class="feature-box flex-column fbox-sm fbox-plain">
                            <div class="fbox-icon mb-4 icon-box">
                                <a href="#"><i class="text-primary uil uil-play"></i></a>
                            </div>
                            <div class="fbox-content px-0">
                                <p>To develop awareness about ancient Indian literature and introduce the Vedas as a treasure trove of real knowledge that leads to salvation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-col shadow-sm bg-light rounded p-5">
                        <div class="feature-box flex-column fbox-sm fbox-plain">
                            <div class="fbox-icon mb-4 icon-box">
                                <a href="#"><i class="text-primary bi-mouse"></i></a>
                            </div>
                            <div class="fbox-content px-0">
                                <p>To promote innovative teaching approaches that integrate IKS with contemporary scientific concepts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid-col shadow-sm bg-light rounded p-5">
                        <div class="feature-box flex-column fbox-sm fbox-plain">
                            <div class="fbox-icon mb-4 icon-box">
                                <a href="#"><i class="text-primary bi-check-circle-fill"></i></a>
                            </div>
                            <div class="fbox-content px-0">
                                <p>To develop a generation of the torch bearers who can extend the legacy of the rich cultural heritage of Bharatvarsha.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}





                <style>
                    .grid-col-ot235 {
                        background-color: #000f54;
                        color: white;
                        border-radius: 10px;
                        padding: 30px;
                        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
                        transition: all 0.3s ease-in-out;
                        display: flex;
                        align-items: center;
                        gap: 20px;
                        min-width: 280px;
                        /* Ensuring no elongation */
                    }

                    .icon-box-ot235 {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 80px;
                        height: 80px;
                        background-color: rgba(255, 255, 255, 0.2);
                        border-radius: 50%;
                        flex-shrink: 0;
                    }

                    .icon-box-ot235 i {
                        font-size: 32px;
                        color: white;
                        transition: color 0.3s ease-in-out;
                    }

                    .grid-col-ot235:hover .icon-box-ot235 i {
                        color: #ff7900;
                    }

                    /* 🛠 Force 2 columns up to 1200px */
                    @media (max-width: 1200px) {
                        .custom-col {
                            flex: 0 0 50%;
                            max-width: 50%;
                        }
                    }

                    /* 📱 Stack cards in 1 column for small screens */
                    @media (max-width: 768px) {
                        .custom-col {
                            flex: 0 0 100%;
                            max-width: 100%;
                        }

                        .grid-col-ot235 {
                            flex-direction: column;
                            /* Stack icon on top for small screens */
                            text-align: center;
                        }
                    }
                </style>

                <div class="container">
                    <h2 class="tmu-text-primary mb-2 mt-2"><span>CIKS </span><span> Objectives</span></h2>

                    <div class="row justify-content-center gy-4">
                        <div class="col-xl-4 custom-col d-flex">
                            <div class="grid-col-ot235 h-100">
                                <div class="icon-box-ot235"><i class="bi-eye-fill"></i></div>
                                <p>To develop insights into the scientific and philosophical aspects of IKS, including its
                                    historical development and contributions to various fields.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 custom-col d-flex">
                            <div class="grid-col-ot235 h-100">
                                <div class="icon-box-ot235"><i class="bi-star-fill"></i></div>
                                <p>To explore the intersections between traditional knowledge systems and modern systems of
                                    knowledge.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 custom-col d-flex">
                            <div class="grid-col-ot235 h-100">
                                <div class="icon-box-ot235"><i class="bi-book-fill"></i></div>
                                <p>To develop awareness about ancient Indian literature and introduce the Vedas as a
                                    treasure trove of real knowledge that leads to salvation.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 custom-col d-flex">
                            <div class="grid-col-ot235 h-100">
                                <div class="icon-box-ot235"><i class="bi-lightbulb-fill"></i></div>
                                <p>To promote innovative teaching approaches that integrate IKS with contemporary scientific
                                    concepts.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 custom-col d-flex">
                            <div class="grid-col-ot235 h-100">
                                <div class="icon-box-ot235"><i class="bi-award-fill"></i></div>
                                <p>To develop a generation of the torch bearers who can extend the legacy of the rich
                                    cultural heritage of Bharatvarsha.</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>
    </div>

    </div>
@endsection
