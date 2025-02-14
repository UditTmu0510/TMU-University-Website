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
            <h1 class="mb-2 text-primary">Prominent Guest Comment</h1>
            <div class="container">
                <div class="row">
                    <!-- Example Cards with different images -->
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="/assets/img/37.jpg" class="hotel-card-img" alt="Hotel Image">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Sonal Mansingh</p>
                                    <h5>Legendary Indian Classical Dancer & Member of Parliament, Rajya Sabha</h5>
                                    <p class="location">Parampara</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="/assets/img/icons/calendar.svg" width="16px" height="16px">
                                                15, July 2022</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="/assets/img/37.jpg">
                                                View <img src="/assets/img/icons/arrow.svg" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="/assets/img/37.jpg" class="hotel-card-img" alt="Hotel Image">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. A.P.J. Abdul Kalam</p>
                                    <h5>Former President of India</h5>
                                    <p class="location">ISRO</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="/assets/img/icons/calendar.svg" width="16px" height="16px">
                                                10, August 2005</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="/assets/img/job.jpg">
                                                View <img src="/assets/img/icons/arrow.svg" width="16px" height="16px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 my-3">
                        <div class="hotel-card d-flex flex-column flex-md-row">
                            <img src="/assets/img/37.jpg" class="hotel-card-img" alt="Hotel Image">
                            <div class="prominent-card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. A.P.J. Abdul Kalam</p>
                                    <h5>Former President of India</h5>
                                    <p class="location">ISRO</p>
                                    <div class="row rating">
                                        <div class="col-6">
                                            <span><img src="/assets/img/icons/calendar.svg" width="16px" height="16px">
                                                10, August 2005</span>
                                        </div>
                                        <div class="col-6">
                                            <a class="prominent-view p-3" data-bs-toggle="modal"
                                                data-bs-target="#imageModal" data-image="/assets/img/job.jpg">
                                                View <img src="/assets/img/icons/arrow.svg" width="16px" height="16px">
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
                <h5 class="modal-title mt-3">Guest Image</h5>
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
});
</script>

@endsection