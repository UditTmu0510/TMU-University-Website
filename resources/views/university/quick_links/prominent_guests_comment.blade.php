@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')


<style>
    .hotel-card {
        border-radius: 10px;
        overflow: hidden;
        border: none;
        background: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
    }

    @media (max-width: 576px) {
        .hotel-card {
            display: flex;
        }
    }

    .hotel-card-img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 5%;
        margin: 10px;
    }

    /* Responsive styles for tablet (md) and mobile (sm) */
    @media (max-width: 991px) {

        /* Covers tablets and smaller screens */
        .hotel-card {
            flex-direction: column !important;
            /* Stack elements */
            align-items: center;
            /* Center content */
        }

        .hotel-card-img {
            width: 100%;
            height: auto;
            /* max-width: 300px; Optional: Prevents image from getting too large */
            margin: 0 auto;
            /* Centers the image */
            display: block;
        }

        .prominent-card-body {
            text-align: center;
            /* Centers text for a better layout */
        }
    }


    /* Responsive styles for smaller screens */
    @media (max-width: 768px) {
        .hotel-card-img {
            width: 100%;
            height: auto;
            /* max-width: 300px; Optional: Limit max size */
            margin: 0 auto;
            /* Center the image */
            display: block;
        }
    }

    .prominent-card-body {
        padding: 15px;
        flex: 1;
    }

    .prominent-text-muted {
        font-size: 18px;
        line-height: 26px;
    }

    .location {
        color: gray;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .location i {
        margin-right: 5px;
    }

    .rating {
        display: flex;
        align-items: center;
        font-size: 14px;
        font-weight: 500;
    }

    .card-title {
        text-align: left;
    }

    .rating i {
        color: #fbc02d;
        margin-right: 5px;
    }

    .prominent-view {
        text-align: right;
    }

    .btn-book {
        background-color: #007bff;
        color: white;
        padding: 6px 15px;
        font-size: 14px;
        border-radius: 8px;
        border: none;
        transition: 0.3s;
    }

    .prominent-align-left {
        text-align: left;
        font-size: 14px;
        margin: 10px 0;
    }

    .btn-book:hover {
        background-color: #0056b3;
    }

    /* @media (max-width: 576px) {
    .hotel-card {
        flex-direction: column;
        max-width: 100%;
    }

    .hotel-card img {
        width: 100%;
        height: 180px;
        border-bottom-left-radius: 0;
        border-top-right-radius: 15px;
    }
} */

    /* Make modal cover the entire screen */
    .custom-modal .modal-dialog {
        max-width: 100%;
        /* Responsive width */
        max-height: 100%;
        /* Responsive height */
        background: rgba(0, 0, 0, 0.8);
        /* Dark overlay */
        border: none;
        box-shadow: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0px;
    }


    /* Centering the image */
    .custom-modal .modal-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    /* Image styling */
    .custom-modal .modal-image {
        max-width: 80%;
        /* Keeps image responsive */
        max-height: 80vh;
        /* Prevents overflow */
        border-radius: 10px;
    }

    /* Close button at the top-right corner */
    .custom-modal .custom-close {
        position: absolute;
        top: 40px;
        left: 40px;
        background: white;
        border-radius: 50%;
        padding: 5px;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 1;
        box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5);
    }

    /* Close button hover effect */
    .custom-modal .custom-close:hover {
        background: #ddd;
    }

    /* Centered text below the image */
    .custom-modal .modal-title {
        color: white;
        text-align: center;
        margin-top: 10px;
    }
</style>

<div class="main-content">
    <div class="container">
        <div class="row mx-0">
            <h1 class="mt-md-4 tmu-text-primary tmu-page-heading"><span>Prominent</span><span> Guest Comment</span></h1>
            <div class="container">
                <div class="row">
                    <!-- Example Cards with different images -->
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/37.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Sonal Mansingh</p>
                                    <h5>Legendary Indian Classical Dancer & Member of Parliament, Rajya Sabha</h5>
                                    <p class="location">Parampara</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                15, July 2022</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/37.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/36.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Ms. Meenakshi Lekhi</p>
                                    <h5>Minister of State for External Affairs and Cultural, Government of India</h5>
                                    <p class="location">Chief Guest - Parampara</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                14, July 2022</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/36.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/35.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Nizami Bandhu</p>
                                    <h5>Indian Musical Group</h5>
                                    <p class="location">Parampara</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                14, July 2022</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/35.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/34.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Pt. Vishwa Mohan Bhatt</p>
                                    <h5>Legendary Hindustani Classical Music Instrumentalist</h5>
                                    <p class="location">Parampara</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                13, July 2022</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/34.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/32.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Dinesh Sharma</p>
                                    <h5>Hon'ble Deputy Chief Minister, Uttar Pradesh</h5>
                                    <p class="location">Chief Guest - Fifth Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                31, July 2021</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/32.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/33.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Bhupendra Singh Chaudhary</p>
                                    <h5>Hon’ble Cabinet Minister - Panchayati Raj (U.P.)</h5>
                                    <p class="location">Guest of Honour - Fifth Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                31, July 2021</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/33.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/25.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Hon'ble Shri Yogi Adityanath</p>
                                    <h5>Chief Minister, Uttar Pradesh</h5>
                                    <p class="location">Chief Guest - Prabudhjan Goshti</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                05, April 2019</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/25.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/22.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Prof. Kaptan Singh Solanki</p>
                                    <h5>Hon’ble Governor of Haryana</h5>
                                    <p class="location">Chief Guest - Second Special Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                22, April 2018</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/22.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/23.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Acharya Shri Sudhanshu Ji Maharaj</p>
                                    <h5>Saint, Preacher & Founder of Vishwa Jagriti Mission</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Second Special Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                22, April 2018</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/23.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/15.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Hon'ble Shri Ram Naik</p>
                                    <h5>Governor of Uttar Pradesh</h5>
                                    <p class="location">Chief Guest - Fourth Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                24, March 2018</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/15.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/26.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Sonu Nigam</p>
                                    <h5>Bollywood Playback Singer</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Fourth Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                24, March 2018</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/26.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/14.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Suresh Khanna</p>
                                    <h5>Minister of Urban Development and Parliamentary Affairs, Government of Uttar Pradesh</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Fourth Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                24, March 2018</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/14.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/20.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Vedprakash Mishra</p>
                                    <h5>Pro-Chancellor, Dutta Meghe Institute of Medical Sciences</h5>
                                    <p class="location">(Deemed to be University), Maharashtra</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                04, August 2016</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/20.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/19.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Lt. Gen. Zameer Uddin Shah</p>
                                    <h5>Vice Chancellor</h5>
                                    <p class="location">Aligarh Muslim University</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                10, October 2015</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/19.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/16.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Mohan Mahadeo Agashe</p>
                                    <h5>Psychiatrist & Indian Film Actor</h5>

                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                09, October 2015</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/16.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/12.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Hon’ble Justice K. G. Balakrishnan</p>
                                    <h5>Former Chairperson, National Human Rights Commission & Former Chief Justice of India</h5>
                                    <p class="location">Chief Guest - Third Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                18, April 2015</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/12.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/27.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri J. K. Jain</p>
                                    <h5>Former Member of Parliament, Rajya Sabha & Hon'ble Visitor</h5>
                                    <p class="location">Teerthanker Mahaveer University</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                18, April 2015</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/27.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/24.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Punam Suri</p>
                                    <h5>President, DAV College Managing Committee & Chancellor, DAV University, Jalandhar</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Third Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                18, April 2015</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/24.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/30.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Ms. Sharmishtha Mukherjee</p>
                                    <h5>Indian Kathak Dancer, Choreographer</h5>
                                    <p class="location">ISROPolitician of the Indian National Congress</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                07, September 2014</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/30.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/31.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. P. C. Jain</p>
                                    <h5>Principal, Shri Ram College of Commerce</h5>
                                    <p class="location">University of Delhi</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                17, May 2014</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/31.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/18.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">H.E. Mr. Rubuka Aloys</p>
                                    <h5>Ambassador</h5>
                                    <p class="location">Embassy of the Republic of Burundi</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                12, November 2013</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/18.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/7.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Akhilesh Yadav</p>
                                    <h5>Former Chief Minister of Uttar Pradesh</h5>
                                    <p class="location">Chief Guest - Second Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                20, Febuary 2013</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/7.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/8.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Mohd. Azam Khan</p>
                                    <h5>Former Minister of Parliamentary Affairs & Urban Development, Govt. of Uttar Pradesh</h5>
                                    <p class="location">Preside Over - Second Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                20, Febuary 2013</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/8.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/9.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Mulayam Singh Yadav</p>
                                    <h5>Former Chief Minister of Uttar Pradesh</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Second Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                20, Febuary 2013</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/9.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/10.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Narendra Kumar Pandey</p>
                                    <h5>Chairman & Managing Director, Asian Institute of Medical Sciences, Faridabad</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Second Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                20, Febuary 2013</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/10.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/12.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. A.P.J. Abdul Kalam</p>
                                    <h5>Former President of India</h5>
                                    <p class="location">ISRO</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                10, August 2005</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/12.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/11.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Prem Narayan Arora</p>
                                    <h5>Founder Trustee of Yashoda Foundation & Managing Director of Yashoda Hospital</h5>
                                    <p class="location">Honoris Causa Degree Recipient - Second Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                20, Febuary 2013</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/11.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/1.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Hon'ble A. P. J. Abdul Kalam</p>
                                    <h5>Former President of India</h5>
                                    <p class="location">Chief Guest - First Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                21, May 2012</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/1.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/2.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Ashok Seth</p>
                                    <h5>Chairman of Fortis Escorts Heart Institute & President, Cardiological Society of India</h5>
                                    <p class="location">Honoris Causa Degree Recipient - First Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                21, May 2012</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/2.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/3.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri. Arvind Dham</p>
                                    <h5>Chairman and Managing Director Amtek Group of Companies</h5>
                                    <p class="location">Honoris Causa Degree Recipient - First Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                21, May 2012</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/3.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/4.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Narinder Batra</p>
                                    <h5>Trustee of Batra Hospital</h5>
                                    <p class="location">Honoris Causa Degree Recipient - First Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                21, May 2012</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/4.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/5.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Rakesh Jhunjhunwala</p>
                                    <h5>Warren Buffet, Founder of RaRe Enterprises & Chairman, Aptech Ltd.</h5>
                                    <p class="location">Honoris Causa Degree Recipient - First Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                21, May 2012</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/5.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/6.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Ravindra Jain</p>
                                    <h5>Noted Music Composer, Singer & Lyricist</h5>
                                    <p class="location">Honoris Causa Degree Recipient - First Convocation</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                21, May 2012</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/6.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/29.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">DShri Raghunath Medge & Shri Gangaram Talekar</p>
                                    <h5>President & General Secretary</h5>
                                    <p class="location">Mumbai Dabbawalas Association</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                18, October 2011</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/29.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/28.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Shri Sukhdev Rajbhar</p>
                                    <h5>Indian Politician & Member of Legislative Assembly</h5>
                                    <p class="location">Government of Uttar Pradesh</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                28, March 2011</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/28.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/17.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Hon’ble Mr. Justice Ferdino Inacio Rebello</p>
                                    <h5>Chief Justice </h5>
                                    <p class="location">Allahabad High Court</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                27, March 2011</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/17.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="{{asset('/assets/img/guests/21.jpg')}}" class="hotel-card-img" alt="TMU Guest">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Mr. Shantanu Mukherjee (Shaan)</p>
                                    <h5>Indian Playback Singer</h5>
                                    <p class="location">Mumbai</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px">
                                                24, July 2010</span>
                                        </div>
                                        <div class="col-6">

                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="{{asset('/assets/img/guests/21.webp')}}">
                                                View <img src="{{asset('/assets/img/icons/arrow2.svg')}}" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade custom-modal" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <!-- Close button at the top-right corner -->
                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                <div class="modal-body text-center">
                    <img src="/assets/img/37.jpg" class="img-fluid modal-image" alt="Guest Image">
                    <!-- <h5 class="modal-title mt-3">Guest Image</h5> -->
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("imageModal");
        const modalImage = modal.querySelector(".modal-image");

        document.querySelectorAll(".prominent-view").forEach((link) => {
            link.addEventListener("click", function() {
                const imgSrc = this.getAttribute("data-image");
                modalImage.src = imgSrc; // Set the modal image dynamically
            });
        });

        // Fix for body scroll lock issue
        modal.addEventListener("hidden.bs.modal", function() {
            document.body.style.overflow = "auto"; // Restore scrolling when modal is closed
        });

        modal.addEventListener("shown.bs.modal", function() {
            document.body.style.overflow = "hidden"; // Prevent scrolling when modal is open
        });
    });
</script>


@endsection