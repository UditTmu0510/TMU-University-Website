@extends('layouts.university.departments.crc_with_sidebar')
@section('content')

<style>
    .table thead {
        background-color: #001055 !important;
        color: #ff7900 !important;
        font-weight: bold !important;
    }

    @media (max-width: 768px) {
        h3.fw-bold {
            font-size: 1.1rem;
            font-weight: 700;
        }

        p.text-justify {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        h3.fw-bold {
            font-size: 1rem;
            font-weight: 700;
        }

        p.text-justify {
            font-size: 0.85rem;
        }
    }
</style>

<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Industrial Visits at TMU:</span><span> Practical Learning</span></h1>

            <h3 class="fw-bold mb-2 mt-2"><u>Industrial Visits</u></h3>
            <p class="text-justify mb-1">Teerthanker Mahaveer University, Moradabad, arranges insightful industrial visits, enabling students to gain invaluable firsthand exposure to industry dynamics. These experiences offer participants a comprehensive understanding of complex processes, advanced technologies, and integrated systems across various sectors, bridging academic knowledge with real-world industry practices and enhancing their professional acumen.</p>
            <h3 class="fw-bold mb-2 mt-2"><u>Educational Enrichment:</u></h3>
            <p class="text-justify mb-1">At Teerthanker Mahaveer University, industrial visits are regularly organised to bridge the gap between theory and practical application. These visits empower participants to connect classroom learning with real-world industry practices, enriching their educational experience and professional insight.</p>
            <h3 class="fw-bold mb-2 mt-2"><u>Insight into Industry Practices:</u></h3>
            <p class="text-justify mb-1">At Teerthanker Mahaveer University, students gain valuable exposure to real-world industry operations, observing firsthand the functioning of machinery, production processes, quality control measures, and safety protocols. This experience enhances their understanding of industry standards and practices, preparing them for future professional environments.</p>
        </div>

        <div class="row mt-4">
            <div class="table-responsive ps-3 pe-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td class="text-center" style="background-color: #001055; color: #ff7900;"><strong>S.No.</strong></td>
                            <td class="text-center" style="background-color: #001055; color: #ff7900;"><strong>Date</strong></td>
                            <td class="text-center" style="background-color: #001055; color: #ff7900;"><strong>Organization</strong></td>
                            <td class="text-center" style="background-color: #001055; color: #ff7900;"><strong>Class/ Accompanying Faculty</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="fw-bold">1.</td>
                            <td>September 23rd, 2022</td>
                            <td>Bisleri</td>
                            <td>B.Sc. Agriculture</td>
                        </tr>
                        <tr class="text-center">
                            <td class="fw-bold">2.</td>
                            <td>September 28th, 2022</td>
                            <td>Yakult</td>
                            <td>B.Sc. Agriculture </td>
                        </tr>
                        <tr class="text-center">
                            <td class="fw-bold">3.</td>
                            <td>September 23rd, 2022</td>
                            <td>Akums Pharmaceuticals</td>
                            <td>B.Phram / M.pharm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div id="portfolio" class="portfolio row grid-container gutter-20 gutter-sm-50" data-layout="fitRows">

            <article class="portfolio-item col-12 pf-uielements pf-media">
                <div class="grid-inner row align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/akus/1.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/akus/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/akus/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/akus/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Akums</h3>
                        <span>Sec-8A, Haridwar</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best universities in India, organized an industrial visit to Akums Pharmaceuticals, a leading name in the healthcare industry.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-graphics pf-illustrations">
                <div class="grid-inner row flex-lg-row-reverse align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/auto_expo/1.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/auto_expo/5.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/auto_expo/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/auto_expo/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/auto_expo/4.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Auto Expo</h3>
                        <span>Noida</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best universities in India, organized an industrial visit to the Auto Expo in Noida, offering students a firsthand look at the latest in the automotive industry.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-uielements pf-media">
                <div class="grid-inner row align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/Coc/4.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/Coc/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/Coc/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/Coc/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Coca Cola</h3>
                        <span>Noida</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best universities in India, organized an industrial visit to Coca-Cola, providing students with insights into one of the world’s leading beverage companies.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-graphics pf-illustrations">
                <div class="grid-inner row flex-lg-row-reverse align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/bisleri/4.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/bisleri/3.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/bisleri/1.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/bisleri/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Bisleri</h3>
                        <span>Sahibabad, Ghaziabad</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best universities in India, organized an industrial visit to Bisleri, offering students a closer look at the operations of a top bottled water brand.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-uielements pf-media">
                <div class="grid-inner row align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/haier/1.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/haier/2.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/haier/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Haier</h3>
                        <span>Noida</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best universities in India, organized an industrial visit to Haier, immersing students in the workings of a leading global home appliances manufacturer.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-graphics pf-illustrations">
                <div class="grid-inner row flex-lg-row-reverse align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/yakult/4.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/yakult/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/yakult/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/yakult/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Yakult</h3>
                        <span>Sonipat, Harayna</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best universities in India, organized an industrial visit to Yakult, where students explored the world of probiotics with a renowned global brand.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-uielements pf-media">
                <div class="grid-inner row align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/ibm/1.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/ibm/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/ibm/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/ibm/3.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>IBM</h3>
                        <span>Sec-62, Noida</span>
                        <p class="mt-2 d-none d-xl-block">In an exciting move to enhance educational experiences and career prospects, Teerthanker Mahaveer University, one of the best Universities in India, organized an industrial visit to IBM Industry.</p>
                        <!-- <a href="" class="button button button-rounded"><span class="text-white">Readmore</span></a> -->
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-12 pf-graphics pf-illustrations">
                <div class="grid-inner row flex-lg-row-reverse align-items-center g-0">
                    <div class="col-lg-6">
                        <div class="portfolio-image">
                            <div class="grid-inner">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img src="{{asset('/assets/img/placement/inudustry_visit/rubico/1.jpg')}}" alt="Shake It"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay" data-lightbox="gallery">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/rubico/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="uil uil-images"></i></a>
                                        <a href="{{asset('/assets/img/placement/inudustry_visit/rubico/2.jpg')}}" class="d-none" data-lightbox="gallery-item"></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-desc col-lg-6 p-4 py-lg-0 px-lg-5">
                        <h3>Rubico Pvt. Ltd.</h3>
                        <span>Dehradun, Uttarakhand</span>
                        <p class="mt-2 d-none d-xl-block">The Industrial Visit to Rubico IT Pvt. Ltd. proved to be an invaluable experience for the students of B.Sc(H.) CS, providing them with a deep dive into the world of IT and the inner workings of a prominent tech company.</p>
                    </div>
                </div>
            </article>

        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener('hidden.bs.modal', function() {
        document.body.classList.remove('modal-open'); // Ensure scroll is enabled
        document.body.style.overflowY = "scroll"; // Restore scroll behavior
    });
</script>


@endsection