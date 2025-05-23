@extends('layouts.university.main')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/darpan.css')}}">
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