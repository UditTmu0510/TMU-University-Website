@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')


<style>
body {
    background-color: #f8f9fa;
}

.hotel-card {
    border-radius: 10px;
    overflow: hidden;
    border: none;
    background: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
}

.hotel-card-img {
    width: 170px;
    height: 140px;
    object-fit: cover;
    border-radius: 5%;
    margin: 10px;
}

.prominent-card-body {
    padding: 15px;
    flex: 1;
}

.prominent-text-muted {
    font-size: 22px;
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

.prominent-view{
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
    font-size: 16px;
    margin: 10px 0;
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
        <div class="row mx-0">
            <h1 class="mb-2 tmu-text-primary tmu-page-heading"><span>Admission Rules & </span><span
                    class="d-block d-sm-inline">Regulations</span></h1>
            <div class="container">

                <div class="hotel-card d-flex">
                    <img src="{{asset('/assets/img/37.jpg')}}" class="hotel-card-img" alt="Hotel Image">
                    <div class="prominent-card-body d-flex flex-column justify-content-between">
                        <div>
                            <p class="prominent-text-muted mb-1">Dr. Sonal Mansingh</p>
                            <h5 class="prominent-align-left">Legendary Indian Classical Dancer & Member of Parliament,
                                Rajya Sabha</h5>
                            <p class="location"> Parampara</p>
                            <div class="row rating">
                                <div class="col-6">
                            <span><img src="{{asset('/assets/img/icons/calendar.svg')}}" width="16px" height="16px"> 15, July 2022</span>
                            </div>
                            <div class="col-6">
                            <a class="prominent-view p-3">View <img src="{{asset('/assets/img/icons/arrow.svg')}}" width="16px" height="16px"></a>
                            </div>
                            </div>
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