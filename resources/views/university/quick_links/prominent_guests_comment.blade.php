@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')


<style>
body {
    background-color: #f8f9fa;
}

.hotel-card {
    border-radius: 15px;
    overflow: hidden;
    border: none;
    background: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
}

.hotel-card img {
    width: 150px;
    height: 130px;
    object-fit: cover;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
}

.card-body {
    padding: 15px;
    flex: 1;
}

.text-muted {
    font-size: 14px;
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

.rating i {
    color: #fbc02d;
    margin-right: 5px;
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

.btn-book:hover {
    background-color: #0056b3;
}

@media (max-width: 576px) {
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
}
</style>

<div class="main-content">
    <div class="container">
        <div>
            <div class="row mx-0">
                <h1 class="mb-2 tmu-text-primary tmu-page-heading"><span>Admission Rules & </span><span
                        class="d-block d-sm-inline">Regulations</span></h1>
                <div class="container">

                        <div class="hotel-card d-flex">
                            <img src="{{asset('/assets/img/37.jpg')}}" alt="Hotel Image">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="text-muted mb-1">Dr. Sonal Mansingh</p>
                                    <h5 class="card-title">Legendary Indian Classical Dancer & Member of Parliament,
                                        Rajya Sabha</h5>
                                    <p class="location"> Parampara</p>
                                    <div class="rating">
                                        <span>15.07.2022</span>
                                    </div>
                                </div>
                                <button class="btn-book mt-2">View</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS and dependencies -->
    </div>
</div>
</div>

@endsection