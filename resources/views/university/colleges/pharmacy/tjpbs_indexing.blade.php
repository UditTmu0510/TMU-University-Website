@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')
<style>
    .table {
        --bs-table-bg: transparent !important;
        /* Reset the default background */
        --bs-table-accent-bg: transparent !important;
        --bs-table-bg-type: transparent !important;
        --bs-table-bg-state: transparent !important;
        --bs-table-color: inherit !important;
        /* Keep text color normal */
        --bs-table-color-type: inherit !important;
        --bs-table-color-state: inherit !important;
        box-shadow: none !important;
        /* Remove the inset shadow effect */
        padding: 0!important;
    }


    .table {
        margin: 0 auto;
        border-collapse: collapse;
    }

    .table-row {
        display: flex;
        align-items: center;
        position: relative;
        border-bottom: 1px solid #ddd;
        background-color: transparent;
        /* Ensure the background is transparent */
        transition: background-color 0.3s ease;
        /* Smooth transition for hover */
        overflow: hidden;
        /* Ensures child elements don't overflow */
    }

    .table-row:hover {
        background-color: #f2f0ef;
        /* Highlight background on hover */
    }

    .highlightj524 {
        width: 3px;
        height: 100%;
        background-color: transparent;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        transform: scaleY(0);
        /* Initially hidden */
        transform-origin: top;
        /* Start animation from the top */
        transition: transform 0.5s ease, background-color 0.3s ease;
    }

    .table-row:hover .highlightj524 {
        background-color: #FF7900;
        transform: scaleY(1);
        /* Expand to full height */
    }

    .table-content {
        padding: 10px 20px;
        flex-grow: 1;
        padding-left: 5px;
        /* Ensures spacing from the highlightj524 */
        background-color: transparent;
        /* Optional: Makes inner content transparent */
    }

    .table-content p {
        margin: 0;
        font-size: 14px;
    }

    .table-content h4 {
        margin: 2px 0 0 0;
        font-size: 16px;
        font-weight: 600;
    }

    .card456 {
        border-radius: 0px;
        box-shadow: 0 0px 10px rgba(0, 0, 0, 0.4);
    }

    .table567{
        padding: .3rem!important;
    }

    a {
    color: #001055;
}

</style>
<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded d-flex justify-content-center mb-4" style="height: 16vh; background-color: #001055;">
            <div class="d-flex align-items-center">
                <h2 class="text-white m-0">TJPBS Index</h2>
            </div>
        </div>
        <!-- <h1 class="tmu-text-primary tmu-page-heading"><span> TJPBS </span><span> Index</span></h1> -->
        <div class="card card456 ">

            <div class="table ">
                <div class="table-row">
                    <div class="highlightj524"></div>
                    <div class="table-content ">
                        <p class="mb-0">
                            <i class="bi-calendar" aria-hidden="true"></i><span class="date">  Jun 27, 2018</span> | 
                            <!-- <span class="category">Category Title</span> | -->
                            <i class="bi-bookmark" aria-hidden="true"></i><span class="id">  ID: KW7Q3fxfAB</span> | 
                            <i class="bi-book" aria-hidden="true"></i><span class="edition">  Edition</span>
                        </p>
                        <h4>4 Ways You Can Grow Your Creativity Using Technology</h4>
                        <p><a href="#"> <i class="fa-solid fa-file-download" aria-hidden="true"></i>  Download</a> - <i class="fa-solid fa-users" aria-hidden="true"></i>  
                        Niteesh Jaiswal | Akash Girotra | Aakash Saini </p>
                    </div>
                </div>
                <div class="table-row">
                    <div class="highlightj524"></div>
                    <div class="table-content">
                        <p>
                            <i class="bi-calendar" aria-hidden="true"></i><span class="date">  Jun 27, 2018 </span> | 
                            <!-- <span class="category">Category Title</span> | -->
                            <i class="bi-bookmark" aria-hidden="true"></i><span class="id">  ID: KW7Q3fxfAB</span> | 
                            <i class="bi-book" aria-hidden="true"></i><span class="edition">  Edition</span>
                        </p>
                        <h4>4 Ways You Can Grow Your Creativity Using Technology</h4>
                        <p><a href="#"> <i class="fa-solid fa-file-download" aria-hidden="true"></i>  Download</a> - <i class="fa-solid fa-users" aria-hidden="true"></i>  
                        Niteesh Jaiswal | Akash Girotra | Aakash Saini </p>
                    </div>
                </div>
                <div class="table-row">
                    <div class="highlightj524"></div>
                    <div class="table-content">
                        <p>
                            <i class="bi-calendar" aria-hidden="true"></i><span class="date">  Jun 27, 2018 </span> | 
                            <!-- <span class="category">Category Title</span> | -->
                            <i class="bi-bookmark" aria-hidden="true"></i><span class="id">  ID: KW7Q3fxfAB</span> | 
                            <i class="bi-book" aria-hidden="true"></i><span class="edition">  Edition</span>
                        </p>
                        <h4>4 Ways You Can Grow Your Creativity Using Technology</h4>
                        <p><a href="#"> <i class="fa-solid fa-file-download" aria-hidden="true"></i>  Download</a> - <i class="fa-solid fa-users" aria-hidden="true"></i>  
                        Niteesh Jaiswal | Akash Girotra | Aakash Saini </p>
                    </div>
                </div>
                <div class="table-row">
                    <div class="highlightj524"></div>
                    <div class="table-content">
                        <p>
                            <i class="bi-calendar" aria-hidden="true"></i><span class="date">  Jun 27, 2018 </span> | 
                            <!-- <span class="category">Category Title</span> | -->
                            <i class="bi-bookmark" aria-hidden="true"></i><span class="id">  ID: KW7Q3fxfAB</span> | 
                            <i class="bi-book" aria-hidden="true"></i><span class="edition">  Edition</span>
                        </p>
                        <h4>4 Ways You Can Grow Your Creativity Using Technology</h4>
                        <p><a href="#"> <i class="fa-solid fa-file-download" aria-hidden="true"></i>  Download</a> - <i class="fa-solid fa-users" aria-hidden="true"></i>  
                        Niteesh Jaiswal | Akash Girotra | Aakash Saini </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection