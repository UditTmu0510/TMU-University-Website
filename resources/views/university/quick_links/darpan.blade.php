@extends('layouts.university.main')
@section('content')
    <div class="crc-slider-container" style="max-height: 500px">
        <div class="crc-slider-content">
            <div class="crc-slider-slides">
                <div class="crc-slide">
                    <img src="{{ asset('assets/img/quick_links/newsletter/darpan1.jpg') }}" alt="Slide 1">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading mt-4 mb-3"><span> TMU</span> <span>DARPAN</span></h1>

        <p class="mt-0 mb-2 text-justify">
            Welcome to TMU Darpan — the university’s one-stop window into upcoming events, essential resources, and
            campus opportunities tailored to your academic journey. Each edition gathers deadlines, workshops, funding
            calls, and community stories designed to support your research, well-being, and professional growth. Whether
            you’re looking for the next seminar, mindfulness session, or grant tip, Darpan keeps everything in one
            convenient place and evolves with the priorities you set each term. Together, we’ll make virtual collaboration
            and graduate life more connected than ever.
        </p>


    </div>



    {{-- ----------  STYLE (once on the page) ---------- --}}
    <style>
        /* === Newsletter feature banner === */
        .newsletter-hero {
            position: relative;
            display: flex;
            /* right-hand & top/bottom gutter */
            min-height: 360px;
            /* matches screenshot height */
            overflow: hidden;
        }

        /* 70 % image slice */
        .nh-img {
            flex: 0 0 100%;
            position: relative;
        }

        .nh-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            filter: brightness(.7);
            /* subtle dark overlay */
            border-radius: 5px;
        }

        /* Caption ribbon at bottom of image */
        .nh-caption {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 80%;
            background: rgba(255, 255, 255, .7);
            /* deep navy */
            color: #000000;
            /* TMU orange */
            padding: .9rem 1.6rem;
            font-size: 0.8rem;
            font-weight: 500;
            border-radius: 5px;
        }

        /* Orange meta panel (30 %), vertically centred */
        .nh-meta {
            position: absolute;
            /* sit on top of black gutter */
            right: 20%;
            top: 50%;
            transform: translateY(-50%);
            width: 30%;
            max-width: 420px;
            background: #ff7900;
            text-align: center;
            padding: 2rem 1.6rem;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            color: #000;
            /* dark text */
            border-radius: 5px;
        }

        .nh-meta h4 {
            margin: 0;
            font-weight: 700;
            line-height: 1.45;
            color: white;
        }

        .nh-btn {
            display: inline-block;
            background: #001e64;
            color: #fff;
            font-weight: 600;
            padding: .55rem 1.9rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background .2s;
        }

        .nh-btn:hover {
            background: #ffffff;
        }

        /* ------------  Responsive (≤ 991 px) ------------ */
        @media (max-width:768.99px) {
            .newsletter-hero {
                flex-direction: column;
                min-height: 380px
            }

            .nh-img {
                flex: 0 0 100%;
                height: 80%;
                width: auto;
            }

            .nh-meta {
                position: absolute;
                right: 10%;
                top: 60%;
                width: 80%;
                max-width: none;
                transform: none;
                margin: 1rem 0 0;
                padding: 1rem 0.8rem;
            }

            .nh-meta h4 {
                font-size: 1rem;
            }

            .nh-caption {
                display: none;
            }
        }

        @media (max-width:600px) {
            .newsletter-hero {
                flex-direction: column;
                min-height: 360px
            }

            .nh-meta {
                right: 10%;
                top: 50%;
            }
        }

        @media (max-width:500px) {
            .newsletter-hero {
                flex-direction: column;
                min-height: 330px
            }

            .nh-meta {
                right: 10%;
                top: 40%;
            }
        }
    </style>


    <style>
        /* Optional for better spacing */
        [data-lightbox] img {
            transition: transform 0.2s ease;
            cursor: zoom-in;
        }

        [data-lightbox] img:hover {
            transform: scale(1.03);
        }

        .p-50 {
            padding: 0 10rem;
        }

        .p-70 {
            padding: 0 13rem;
        }
    </style>



    {{-- <div class="container my-5 p-50">
        <h2 class="tmu-text-primary tmu-page-heading mt-4 mb-2" style="font-size:1.8rem"><span>DARPAN</span> <span>Vol - I,
                Issue I</span></h2>
        <div class="row g-4 align-items-start">
            
            <div class="col-md-5">
                <a href="{{ asset('assets/img/quick_links/newsletter/cover.jpg') }}" data-lightbox="darpan-gallery"
                    data-title="TMU Darpan - Cover">
                    <img src="{{ asset('assets/img/quick_links/newsletter/cover.jpg') }}" alt="Cover Page"
                        class="img-fluid rounded shadow-sm">
                </a>
            </div>

            <div class="col-md-7 d-flex flex-column justify-content-between h-100">
                <div class="row h-100 gx-4 px-2">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-6 d-flex align-items-stretch">
                            <a href="{{ asset("assets/img/quick_links/newsletter/page-$i.jpg") }}"
                                data-lightbox="darpan-gallery" data-title="Inside Page {{ $i }}" class="w-100">
                                <img src="{{ asset("assets/img/quick_links/newsletter/page-$i.jpg") }}"
                                    alt="Page {{ $i }}"
                                    class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover ">
                            </a>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </div> --}}




    {{-- ----------  MARKUP  ---------- --}}
    <div class="newsletter-hero my-4  p-70">
        {{-- 70 % image --}}
        <div class="nh-img">
            <img src="{{ asset('assets/img/quick_links/newsletter/darpan-v1-i3.jpg') }}"
                alt="Dashlakshan Mahotsav – celebration procession">

            <div class="nh-caption">
                TMU Witnesses a Fusion of Romance, Patriotism and Humor at Poetry Recital
            </div>
        </div>

        {{-- 30 % orange info panel --}}
        <div class="nh-meta">
            <h4>TMU DARPAN | Volume 1 Issue 3<br>October – December, 2024</h4>

            <a href="{{ asset('assets/pdf/newsletter/darpan-v1-i3.pdf') }}" class="nh-btn" target="_blank"
                rel="noopener">VIEW PDF</a>
        </div>
    </div>


    {{-- ----------  MARKUP  ---------- --}}
    <div class="newsletter-hero my-4  p-70">
        {{-- 70 % image --}}
        <div class="nh-img">
            <img src="{{ asset('assets/img/quick_links/newsletter/darpan-v1-i2.jpg') }}"
                alt="Dashlakshan Mahotsav – celebration procession">

            <div class="nh-caption">
                Dashlakshan Mahotsav: A Celebration of Spirituality, Culture, and Harmony
            </div>
        </div>

        {{-- 30 % orange info panel --}}
        <div class="nh-meta">
            <h4>TMU DARPAN | Volume 1 Issue 2<br>July – September, 2024</h4>

            <a href="{{ asset('assets/pdf/newsletter/darpan-v1-i2.pdf') }}" class="nh-btn" target="_blank"
                rel="noopener">VIEW PDF</a>
        </div>
    </div>


    {{-- ----------  MARKUP  ---------- --}}
    <div class="newsletter-hero my-4  p-70">
        {{-- 70 % image --}}
        <div class="nh-img">
            <img src="{{ asset('assets/img/quick_links/newsletter/darpan-v1-i1.jpg') }}"
                alt="Dashlakshan Mahotsav – celebration procession">

            <div class="nh-caption">
                Veda Mantras rooted in Mathematics: AMEA 2024 Conference
            </div>
        </div>

        {{-- 30 % orange info panel --}}
        <div class="nh-meta">
            <h4>TMU DARPAN | Volume 1 Issue 1<br>April – June, 2024</h4>

            <a href="{{ asset('assets/pdf/newsletter/darpan-v1-i1.pdf') }}" class="nh-btn" target="_blank"
                rel="noopener">VIEW PDF</a>
        </div>
    </div>
@endsection