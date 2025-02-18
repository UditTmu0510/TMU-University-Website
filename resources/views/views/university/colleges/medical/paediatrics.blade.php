@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Paediatrics </span></h1>
                    <p class="about-p mb-2">Department of Pediatrics, TMMC&RC is one of the finest clinical departments in the college. The department has both undergraduate & postgraduate teaching programs. The department runs several sub-specialty clinics like Pediatric Cardiology, Pediatric Endocrinology, Pediatric Neurology, Pediatric nephrology, Pediatrics Gastroenterology & Pediatric Asthma, High Risk & Well-baby clinics. The department runs OPD, including immunization clinic, on all working days from 9 AM to 4 PM, besides attending 24 hrs emergencies and deliveries of the newborns.</p>
                    <p class="about-p mb-2">Our mission is to improve the health status of the children & adolescents of this region by providing holistic health care through quality service and research.</p>
                    <p class="about-p mb-2">We have a well-equipped NICU with level III facilities like CPAP, Ventilators, Phototherapy Oxygen therapy, syringe pumps, infusion pumps & facilities for exchange transfusion.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/4.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">NICU caters to the need of all sick newborns born within and outside the hospital.</p>
                    <p class="about-p mb-2">PGs are exposed to a variety of clinical cases and procedures. Several procedures like cannulations, endotracheal intubation, umbilical artery and vein catheterization, lumbar puncture, ABG analysis, and exchange transfusions are carried out under the supervision of experts in a regular fashion. NICU has a dedicated collaboration team with ophthalmology for ROP screening. Many extremely premature, low birth weight babies and other severely sick newborns have been managed and discharged successfully from NICU.</p>
                    <p class="about-p mb-2">We have a well-equipped NICU with level III facilities like CPAP, Ventilators, Phototherapy Oxygen therapy, syringe pumps, infusion pumps & facilities for exchange transfusion.</p>
                    <p class="about-p mb-2">Our PICU is also well equipped with level III oxygen therapy facilities, mechanical ventilation, syringe pumps, defibrillators, etc. Peritoneal & hemodialysis is carried out under the supervision of experts in the dept. Many patients of diverse etiologies are admitted to PICU daily basis. This PICU is the only tertiary-level referral center for children in Moradabad. Besides NICU & PICU, there are 3 General Pediatric wards for sick children requiring hospitalization for various Pediatric ailments.</p>
                    <p class="about-p mb-2">The department has both undergraduate & postgraduate curricula for medical education. It is a need-based curriculum, a blend of idealism & realism & as per the guidelines of the MCI, India.</p>
                    <p class="about-p mb-2">The teaching of all students is done in the department. Undergraduate teaching includes both didactic lectures & ward teaching. Students are exposed to clinical cases and findings with a dedicated teaching schedule in place.</p>
                    <p class="about-p mb-2">E-learning is being used extensively as a teaching methodology in the forms of web tutorials and online webinars, especially in this covid-19 pandemic situation. Department has its own library with books suggested in the UG & PG Course curriculum and reference books for consultation.</p>
                    <p class="about-p mb-2">Seminars, Case presentations & Journal clubs are conducted at regular intervals to update postgraduate students. Conducting online academic activities, virtual webinars & teleconferences, and presenting papers by our young PGs & faculty continues even in this covid situation. PG students are also assessed periodically every quarterly for their all-around knowledge and skills. Research topics are allotted to postgraduate students for their theses dissertations under the supervision of guides & co- guides.</p>
                    <p class="about-p mb-2">Ultimately, the main aim of the Dept. of Pediatrics is to improve the knowledge & skills of our students and utilize them for the benefit of a large number of sick & needy children and help in their proper growth & development.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.paediatrics.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <div class="col-md-12">
                <h3 class="tmu-text-primary mb-1"><span>Department</span><span> Gallery</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/paediatrics/1.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/paediatrics/1.jpeg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/paediatrics/2.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/paediatrics/2.jpeg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/paediatrics/3.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/paediatrics/3.jpeg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/paediatrics/4.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/paediatrics/4.jpeg')}}" alt="Gallery Thumb 3"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection