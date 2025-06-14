<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
 <meta name="robots" content="noindex">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description"
        content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Pacifico&family=Sigmar&display=swap" rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <!-- <link rel="stylesheet" href="demos/landing/landing.css"> -->
    <!-- <link rel="stylesheet" href="demos/articles/articles.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{asset('demos/insurance/insurance.css')}}">

    <!-- managemt college css -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/managemnt.css')}}"> -->
    <!-- Document Title
	============================================= -->
    <title>TMU | New Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/0fb07c839c.js" crossorigin="anonymous"></script>

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{asset('demos/store/store.css')}}">

    <link href="https://db.onlinewebfonts.com/c/6e2da64b88f7e60cda1df63cb63cc8f2?family=Canela+Deck+Bold"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>



</head>

<body class="stretched is-expanded-menu" data-menu-breakpoint="1200">

    <div class="preloader">
        <div class="loader"></div>
    </div>


    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper">
        <section style="background-color: #001055;">
            <div class="container-fluid d-flex justify-content-start px-5 py-3 ps-4">
                <a href="{{route('tmuhome')}}"> <img src="{{asset('logo.png')}}" alt="" class="navbar-logo"></a>
            </div>
        </section>


        <nav class="social d-none d-sm-block">
            <ul>
                <li class="phone">
                    <a href="https://admissions.tmu.ac.in/"><img
                    src="{{ asset('monaco/assets/image/admission.png') }}" alt="TMU University Logo in SVG Format" aria-hidden="true" />Admissions Open</a>
                </li>
                <li class="view">
                    <a href="https://www.main.tmu.ac.in/virtual-tour"><img
                            src="{{ asset('monaco/assets/image/360.svg') }}" alt="TMU University Logo in SVG Format" aria-hidden="true" />360 View</a>
                </li>
                <li class="phone"><a href="https://api.whatsapp.com/send/?phone=919258112544&text=Hello%20TMU&type=phone_number&app_absent=0"><img
                    src="{{ asset('monaco/assets/image/whatsapp-icon.png') }}" alt="TMU University Logo in SVG Format" aria-hidden="true" />Whats App</a>
                </li>
            </ul>
        </nav>

        <!-- <div class="side-button-container">
            <a href="https://admissions.tmu.ac.in/">
                <div class="expandable-button d-none d-sm-block" id="button1">
                    <img class="new-arrow" id="new-menu-icon" src="{{asset('assets/img/icons/enquire-side-orange.svg')}}" width="25px"
                        alt="Menu Icon">
                    <span class="text">Enquire Now</span>
                </div>
            </a>
            <a href="tel:18002701490" target="blank">
                <div class="expandable-button d-none d-sm-block" id="button2">
                    <img class="new-arrow" id="new-menu-icon" src="assets/img/icons/call-side-orange.svg" width="25px"
                        alt="Icon 1">
                    <span class="text">Call</span>
                </div>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=919258112544&text&type=phone_number&app_absent=0" target="blank">
                <div class="expandable-button d-none d-sm-block" id="button3">
                    <img src="{{asset('assets/img/icons/whatsapp-side.svg')}}" width="25px" alt="Icon 1">
                    <span class="text">Whatsapp</span>
                </div>
            </a>
        </div> -->

        <div class="new-menu-container d-block d-sm-none">
            <div class="new-menu-btn" id="new-menu-btn" onclick="toggleNewMenu()" ontouchstart="handleTouchStart(event)"
                ontouchmove="handleTouchMove(event)" ontouchend="handleTouchEnd()">

                <img class="new-arrow" id="new-menu-icon" src="{{asset('assets/img/icons/arrowu.png')}}" width="25px"
                    alt="Menu Icon"> <!-- Replace arrow with your image -->
            </div>
            <div class="new-menu-row">
                <div class="new-menu-item"><span><a href="https://www.tmu.ac.in/"
                            style="color: #fff; text-decoration: none;">Enquir Now</a></span></div>
                <div class="new-vl"></div>
                <div class="new-menu-item"><span>TMU Online</span></div>
            </div>
            <div class="new-menu" id="new-menu">
                <div class="new-menu-row">
                    <div class="new-menu-item"><a
                            href="https://api.whatsapp.com/send/?phone=919258112544&text&type=phone_number&app_absent=0"
                            target="blank"><img src="{{asset('assets/img/icons/Whatsapp.png')}}" height="25px" width="auto"
                                alt="Icon 1"></a></div>
                    <div class="new-menu-item"><a href="https://www.tmu.ac.in/virtual-tour" target="blank"><img
                                src="{{asset('assets/img/icons/360.png')}}" height="25px" width="auto" alt="Icon 2"></a></div>
                    <div class="new-menu-item"><a href="tel:18002701490" target="blank"><img
                                src="{{asset('assets/img/icons/call.png')}}" height="25px" width="auto" alt="Icon 1"></a></div>
                </div>
            </div>
        </div>


        <!-- Header Code Section Begin -->
        <header>
            <nav id="main--menubar">


                <!-- Left Section of header -->
                <div class="left-section">
                    <div class="nav-logo-container mt-4">
                        <a href="{{route('tmuhome')}}"><img src="{{asset('logo.png')}}" alt="" class="main-nav-logo"></a>

                    </div>

                    <!-- Back button only activated in mobile view in under options -->
                    <div id="menubar-back-button" style="display: none;">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span id="back-button-text"></span>
                    </div>




                    <!-- First Menubar options -->


                    <ul class="university-nav sw-none"></ul>

                    <div class="container mobile-inner-nav d-block d-lg-none">
                        <div class="row p-0 m-0">
                             <div class="col-4 mb-3">
                                <a href="{{route('tmuhome')}}">Home</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="http://portal.tmu.ac.in/">ERP Login</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('iqac.about')}}">IQAC</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('all_blogs')}}">Blogs</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="">Allumni</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('crc.about.us')}}">Placement</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('tmu.careers')}}">Careers</a>
                            </div>
                            <div class="col-4 mb-3">
                                <a href="{{route('all_news')}}">News</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section Code -->
                <div class="right-section">
                    <div id="close-btn-container">
                        <!-- For all screens -->
                        <span onclick="closeMenubar()">Close
                            <i class="fa-regular fa-circle-xmark"></i>
                        </span>
                        <!-- For mobile screens -->
                        <span onclick="closeMenubar()">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </span>
                    </div>
                    
                    
                     <nav class="navbar navbar-expand-lg navbar-dark navbar-custom d-none d-lg-block">
                        <div class="container-fluid">

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('tmuhome')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://portal.tmu.ac.in/">ERP Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('iqac.about')}}">IQAC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('all_blogs')}}">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Allumni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('crc.about.us')}}">Placement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('tmu.careers')}}">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('all_news')}}">News</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>






                    <div id="menubar__content">
                        <div id="menubar--subcategories">
                            <!-- Menbar categories will be shown dynamically -->
                        </div>
                        <div id="menubar__submenu_content">
                            <!-- Menubar categories content will be displayed here  -->
                        </div>
                        <div id="menubar__submenu_courses">
                            <!-- Menubar courses will be displayed here  -->
                        </div>


                        <div id="nav-banner">
                            <!-- <img src="https://www.hindustantimes.com/ht-img/img/2023/08/08/550x309/Screenshot_2023-08-08_183058_1691499721701_1691499729400.png" class="w-100" alt=""> -->
                            <img src="{{asset('assets/image/navbar-banner.webp')}}" alt="" class="w-100">
                            <div class="blue-overlay"></div>
                        </div>

                        <!-- <img src="./assets/image/Asset 1@4x.png" alt="" style="width: 100%; margin:auto; "> -->
                    </div>
                </div>
            </nav>
        </header>

        <!-- Header Code Section Completed -->


        <!-- Menubar Open Button Code  -->
        <div id="menubar--open--button" onclick="showMenubar()" style="display: none;">
            <i class="fa-solid fa-bars"></i>
            <span class="d-none d-md-block"> Menu</span>
        </div>
        <!-- Menubar Open Button Completed -->

        
           <!-- Searchbar code starts here -->

           <div class="search-icon" id="searchIcon">
            <i class="uil uil-search" style="color:white;"></i>
        </div>

        <div class="modal-search" id="searchModal">
            <div class="modal-search-content">
                <span class="modal-search-close" id="closeModal">&times;</span>
                <input type="text" id="searchInput" placeholder="Search...">
                <div class="suggestions" id="suggestions">
                    <!-- Suggestions will be shown here -->
                </div>
            </div>
        </div>

        <!-- Searchbar code ends here -->