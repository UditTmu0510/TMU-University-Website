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
                    
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="hotel-card d-flex">
        <img src="https://source.unsplash.com/150x130/?hotel,resort" alt="Hotel Image">
        <div class="card-body d-flex flex-column justify-content-between">
            <div>
                <p class="text-muted mb-1">Deluxe Room</p>
                <h5 class="card-title">Sao Pulo Hotel</h5>
                <p class="location"><i class="bi bi-geo-alt"></i> Ubud, Bali, Indonesia</p>
                <div class="rating">
                    <i class="bi bi-star-fill"></i> 
                    <span>4.9 (1,092 Reviews)</span>
                </div>
            </div>
            <button class="btn-book mt-2">Book Now</button>
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