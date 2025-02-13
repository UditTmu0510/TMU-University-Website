@extends('layouts.university.colleges.pharmacy_tjpbs_with_sidebar')
@section('content')

<style>

</style>

<div class="main-content">
    <div class="container">

        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Reviewer </span><span>Board</span></h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

                @foreach([
                    ['Dr. Keeren Rajoo', 'Head of Biodiversity Borneo Laboratory', 'Borneo Eco science Institute, University Putra Malaysia, Bintulu Sarawak Campus (UPMKB)', 'keeren.rajoo@upm.edu.my'],
                    ['Dr. Varun Soti', 'Director of Research, Assistant Professor of Pharmacology', 'Lake Erie College of Osteopathic Medicine, Elmira, New York, USA', 'vsoti@lecom.edu'],
                    ['Dr. S. Parasuraman', 'Senior Associate Professor & Unit Head', 'Unit of Pharmacology, Toxicology and Basic Health Sciences, AIMST University, Malaysia', 'parasuphd@gmail.com'],
                    ['Dr. Pradeep Singh', 'Associate Professor', 'Department of Pharmacy, College of Health Sciences, Debre Tabor University, Ethiopia', 'pradeep_2682@dtu.edu.et'],
                    ['Dr. Garima Mishra', 'Associate Professor', 'Department of Pharmacy, College of Health Sciences, Debre Tabor University, Ethiopia', 'gp_nmr2002@yahoo.co.in'],
                    ['Dr. Elphine A Prabahar', 'Professor', 'School of Pharmaceutical Sciences, Chettinad Academy of Research and Education, India', 'elphinetafhy26@gmail.com'],
                    ['Dr. Milind Sharad Pande', 'Professor', 'IIMT College of Medical Sciences, IIMT University, Meerut, India', 'dean_pharma@iimtindia.net'],
                    ['Dr. Prashant Kumar', 'Professor', 'SRM Modinagar College of Pharmacy, SRMIST, Delhi-NCR Campus, India', 'kumarprashant86@gmail.com'],
                    ['Dr. Syed Salman Ali', 'Associate Professor', 'Department of Pharmacology, Lloyd Institute of Management and Technology (Pharm.), India', 'salmanali.ali32@gmail.com'],
                    ['Dr. Neetu Sachan', 'Professor', 'Maharana Pratap College of Pharmacy, Kanpur, India', 'profneetusachan@gmail.com'],
                    ['Dr. Praveen Kumar Borra', 'Associate Professor', 'Dept. of Pharm. Chemistry, Sultan-ul-Uloom College Pharmacy, Hyderabad, India', 'praveenkumar.pharma@gmail.com'],
                    ['Dr. Nikita Saraswat', 'Associate Professor', 'Dr. DY Patil College of Pharmacy, Akurdi, Pune, India', 'nikita.saraswat07@gmail.com'],
                    ['Dr. Hina Chadha', 'Professor', 'Vishveshwarya Group of Institutions, G.B. Nagar, India', 'hodvims@gmail.com'],
                    ['Dr. Komal Sharma', 'Professor', 'Bhupal Nobles College of Pharmacy, Bhupal Nobles University, Udaipur, India', 'komalsharmagautam@yahoo.com'],
                    ['Dr. Sourav Ghosh', 'Associate Professor', 'Adamas University, Kolkata, India', 'souravcology@gmail.com'],
                    ['Dr. Manish G.', 'Professor', '', 'manish.g@adtu.in'],
                    ['Dr. Kamal Kishore Maheshwari', 'Professor', 'M.J.P. Rohilkhand University, Bareilly, India', 'kamalbareilly@yahoo.com']
                ] as $reviewer)
                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                    <div class="card card-animation admin-cards">
                        <img src="{{asset('/assets/img/journal/user.jpg')}}" class="card-img-top" alt="{{$reviewer[0]}}">
                        <div class="card-body text-center">
                            <h5 class="card-title tmu-text-primary fw-bold"><span>{{$reviewer[0]}}</span></h5>
                            <p class="card-text fs-14">{{$reviewer[1]}}</p>
                            <p class="card-text fs-14">{{$reviewer[2]}}</p>
                            <p class="card-text fs-14">{{$reviewer[3]}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>
</div>

@endsection
